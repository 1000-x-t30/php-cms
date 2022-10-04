$(function () {
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('dropdown__prj');
        if(btn) {
        btn.addEventListener('click', function(){
            this.classList.toggle('is-open');
        });
        }
    });
}());
function templateListsAction(e) {
    const btn = document.getElementById('templateListsAction');
    if(btn.classList.contains('template-lists-close')){
        btn.setAttribute("class","template-lists-open");
        console.log('open');
    }else{
        btn.setAttribute("class","template-lists-close");
        console.log('close');
    }
}

//コンポーネントリスト取得
async function openCom(fileName) {
    // var fileName = document.getElementById('');
    const postData = new FormData; // フォーム方式で送る場合
    postData.set('process', 'openCom');
    postData.set('fileName', fileName); // set()で格納する
    postData.set('id', sessionStorage.getItem('id'));
    postData.set('project', sessionStorage.getItem('project'));

    const data = {
        method: 'POST',
        body: postData
    };

    //ファイル出力
    await fetch('http://localhost:8888/hew/api/route.php', data)
    .then((res) => {
        if (!res.ok) {
            throw new Error(`${res.status} ${res.statusText}`);
        }
        return res.json();
    })
    .then((jsonData) => {
        // document.getElementById('inputFileName').remove();
        // var ojson = JSON.stringify(json);
        // console.log(jsonData);
        // var pjson = JSON.parse(ojson || "null");
        // console.log(pjson);
        var tag = document.getElementById('project__list');
        jsonData.forEach((key) => {
            let stringAry = key.split('/');
            tag.insertAdjacentHTML('beforeend', '<li class="dropdown__item">' + stringAry[stringAry.length - 1] + '<button type="submit" name="deleteFile" value="' + stringAry[stringAry.length - 1] + '" onclick="comDalete(this)">削除</button></li>');
            // console.log(key);
        });
    })
    .catch((reason) => {
        console.log(reason);
    });
}

//コンポーネント追加
async function comAdd(e) {
    var comName = e.value;
    // console.log(comName);
    const postData = new FormData; // フォーム方式で送る場合
    postData.set('process', 'comAdd');
    postData.set('fileName', sessionStorage.getItem('fileName'));
    postData.set('comName', comName); // set()で格納する
    postData.set('id', sessionStorage.getItem('id'));
    postData.set('project', sessionStorage.getItem('project'));
    const data = {
        method: 'POST',
        body: postData
    };

    //素材追加
    await fetch('http://localhost:8888/hew/api/route.php', data)
    .then((res) => {
        if (!res.ok) {
            throw new Error(`${res.status} ${res.statusText}`);
        }
        return res.json();
    })
    .then((jsonData) => {
        console.log(jsonData);
        document.getElementById("preview-pc").innerHTML= '';
        (async () => {
            for await(let key of jsonData){
                prev('./users/' + sessionStorage.getItem('id') + '/' + sessionStorage.getItem('project') + '/components/' + key.slice(0, -1) + '.html', 'preview-pc', 'body');
                // console.log('./users/' + sessionStorage.getItem('id') + '/' + sessionStorage.getItem('project') + '/components/' + key.slice(0, -1) + '.html');
            }
        })();

        document.getElementById("style").innerHTML= '';
        (async () => {
            for await(let key of jsonData){
                prev('./users/' + sessionStorage.getItem('id') + '/' + sessionStorage.getItem('project') + '/components/' + key.slice(0, -1) + '.html', 'style', 'style');
                // console.log('./users/' + sessionStorage.getItem('id') + '/' + sessionStorage.getItem('project') + '/components/' + key.slice(0, -1) + '.html');
            }
        })();

        document.getElementById('project__list').innerHTML = '';
        openCom(sessionStorage.getItem('fileName'));
    })
    .catch((reason) => {
        console.log(reason);
    });

}


async function comDalete(e) {
    var comName = e.value;
    const postData = new FormData;
    postData.set('process', 'comDalete');
    postData.set('id', sessionStorage.getItem('id'));
    postData.set('comName', comName);
    postData.set('project', sessionStorage.getItem('project'));
    postData.set('fileName', sessionStorage.getItem('fileName'));
    const data = {
        method: 'POST',
        body: postData
    };

    await fetch('http://localhost:8888/hew/api/route.php', data)
    .then((res) => {
        if (!res.ok) {
            throw new Error(`${res.status} ${res.statusText}`);
        }
        console.log(res);
        return res;
    })
    .then((res) => {
        console.log('file delete.');
    })
    .catch((reason) => {
        console.log(reason);
    });
}


async function render(fileName){
    // var jsonData = './users/' + sessionStorage.getItem('id') + '/' + sessionStorage.getItem('project') + '/' + fileName + '.csv';
    const postData = new FormData; // フォーム方式で送る場合
    postData.set('process', 'render');
    postData.set('fileName', fileName); // set()で格納する
    postData.set('id', sessionStorage.getItem('id'));
    postData.set('project', sessionStorage.getItem('project'));
    const data = {
        method: 'POST',
        body: postData
    };

    await fetch('http://localhost:8888/hew/api/route.php', data)
    .then((res) => {
        if (!res.ok) {
            throw new Error(`${res.status} ${res.statusText}`);
        }
        return res.json();
    })
    .then((jsonData) => {
        //html rendering
        document.getElementById("preview-pc").innerHTML= '';
        (async () => {
            for await(let key of jsonData){
                prev('./users/' + sessionStorage.getItem('id') + '/' + sessionStorage.getItem('project') + '/components/' + key.slice(0, -1) + '.html', 'preview-pc', 'body');
                // console.log('./users/' + sessionStorage.getItem('id') + '/' + sessionStorage.getItem('project') + '/components/' + key.slice(0, -1) + '.html');
            }
        })();
        //css rendering
        document.getElementById("style").innerHTML= '';
        (async () => {
            for await(let key of jsonData){
                prev('./users/' + sessionStorage.getItem('id') + '/' + sessionStorage.getItem('project') + '/components/' + key.slice(0, -1) + '.html', 'style', 'style');
                // console.log('./users/' + sessionStorage.getItem('id') + '/' + sessionStorage.getItem('project') + '/components/' + key.slice(0, -1) + '.html');
            }
        })();
    })
    .catch((reason) => {
        console.log(reason);
    });
}


//画面にhtml,css出力
function prev(path, style, tag){//ファイルパス, 書き出しタグ, 読み込みタグ
    var xhr = new XMLHttpRequest(),
    method = "GET",
    url = path;//読み込まれるHTMLを指定 選択されたcomponents(sessionからひろう)
    var box = document.getElementById(style);//読み込みたい位置を指定

    xhr.responseType = "document";//XMLとして扱いたいので一応記述
    xhr.open(method, url, true);
    xhr.onreadystatechange = function () {
        if(xhr.readyState === 4 && xhr.status === 200) {
            var restxt = xhr.responseXML;//重要
            var int = restxt.getElementsByTagName(tag)[0];//読み込まれるセレクタを指定
            box.insertAdjacentHTML('beforeend', int.outerHTML);//完了
        }
    };
    xhr.send();
}

async function fileDownload() {
    const postData = new FormData;
    postData.set('process', 'download');
    postData.set('id', sessionStorage.getItem('id'));
    postData.set('project', sessionStorage.getItem('project'));
    postData.set('fileName', sessionStorage.getItem('fileName'));
    const data = {
        method: 'POST',
        body: postData
    };

    await fetch('http://localhost:8888/hew/api/zipAPI/zipController.php', data)
    .then((res) => {
        if (!res.ok) {
            throw new Error(`${res.status} ${res.statusText}`);
        }
        console.log(res);
        return res;
    })
    .then((res) => {
        console.log('download.');
    })
    .catch((reason) => {
        console.log(reason);
    });
}



async function fileSave() {
    const postData = new FormData;
    postData.set('process', 'fileSave');
    postData.set('id', sessionStorage.getItem('id'));
    postData.set('project', sessionStorage.getItem('project'));
    postData.set('fileName', sessionStorage.getItem('fileName'));
    const data = {
        method: 'POST',
        body: postData
    };

    await fetch('http://localhost:8888/hew/api/route.php', data)
    .then((res) => {
        if (!res.ok) {
            throw new Error(`${res.status} ${res.statusText}`);
        }
        console.log(res);
        return res;
    })
    .then((res) => {
        console.log('file save.');
        alert('index.htmlが保存されました');
    })
    .catch((reason) => {
        console.log(reason);
    });
}