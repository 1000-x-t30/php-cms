<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
        padding: 0;
        margin: 0;
    }
    </style>
</head>
<body>
    <p onclick="fileSave()">save</p>
    <p type="button" name="btn" onclick="downloadZip()"><a href="http://localhost:8888/html_dw/controllers/dwController.php">download</a></p>

    <script>
        window.onload = function(){
            sessionStorage.setItem('id', '1');
            sessionStorage.setItem('project', 'project');
            sessionStorage.setItem('fileName', 'index');
        }


        async function fileSave() {
            const postData = new FormData;
            postData.set('process', 'fileSave');
            postData.set('id', sessionStorage.getItem('id'));
            postData.set('project', sessionStorage.getItem('project'));
            const data = {
                method: 'POST',
                body: postData
            };

            await fetch('http://localhost:8888/html_dw/Controllers/saveController.php', data)
            .then((res) => {
                if (!res.ok) {
                    throw new Error(`${res.status} ${res.statusText}`);
                }
                console.log(res);
            })
            .catch((reason) => {
                console.log(reason);
            });
        }
    </script>
</body>
</html>