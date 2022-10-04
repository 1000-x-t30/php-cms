
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/editor.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/framework.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.2/css/all.css" text="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./assets/js/index.js"></script>
    <script src="./assets/js/editor.js"></script>
    <style id="style">
    </style>
</head>
<body>
    <div class="fixed">
        <div class="header">
            <div class="header-menu">
                <a class="menu-link is-active" href="./index.php">マイページ</a>
                <a class="menu-link <!--notify-->" href="./projects.php">プロジェクト</a>
                <a class="menu-link" href="#">テンプレート</a>
                <a class="menu-link" href="#">お気に入り</a>
            </div>

            <div class="header-profile">
                <p id="name"><?php echo $user_name = 'hal' ?></p>
                <div class="dropdown-ac">
                    <button class="dropdown__btn" id="dropdown__btn">
                        <img class="profile-img" src="./assets/images/index/test.jpg" alt="">
                    </button>
                    <div class="dropdown__body">
                        <ul class="dropdown__list">
                            <li class="dropdown__item"><img src="./assets/images/index/user.png" alt=""><a href="" class="dropdown__item-link">プロフィール</a></li>
                            <li class="dropdown__item"><img src="./assets/images/index/question.png" alt=""><a href="" class="dropdown__item-link">ヘルプ</a></li>
                            <li class="dropdown__item"><img src="./assets/images/index/settings.png" alt=""><a href="" class="dropdown__item-link">設定</a></li>
                            <li class="dropdown__item"><img src="./assets/images/index/log-out.png" alt=""><a href="" class="dropdown__item-link">ログアウト</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--header-->

        <div class="header-editor">
            <ul class="editor-operation">
                <li class="editor-menu">
                    <div class="dropdown-ac">
                    <button class="dropdown__btn" id="dropdown__prj">追加されたテンプレート</button>
                    <div class="dropdown__body-prj">
                        <ul class="dropdown__list" id="project__list">

                        </ul>
                    </div>
                    </div>
                </li>
            </ul>
        </div>

<!-- navigation -->
        <div class="navigation">
            <nav class="aa" :data-selected="3">
                <div class="i">
                    <div data-index="1" class="icon fas fa-heading" @click="addClass" v-bind:class='{initialised:aaa, moving:icon_flg1}'></div>
                    <div data-index="2" class="icon far fa-check-square" @click="addClass" v-bind:class='{initialised:bbb, moving:icon_flg2}'></div>
                    <div data-index="3" class="icon fab fa-facebook-f" @click="addClass" v-bind:class='{initialised:ccc, moving:icon_flg3}'></div>
                    <div data-index="4" class="icon fab far fa-address-card" @click="addClass" v-bind:class='{initialised:ddd, moving:icon_flg4}' onclick="fileSave()"></div>
                    <div data-index="5" class="icon fab far fa-address-card" @click="addClass" v-bind:class='{initialised:eee, moving:icon_flg5}' onclick="fileDownload()"><a href="http://localhost:8888/hew/api/zipAPI/zipController.php?id=1&project=project" style="text-decoration: none; position: absolute; width: 100%; height: 100%; transform: translateX(-45px)"></a></div>
                </div>
                <div class="b">
                    <div class="cap"></div>
                    <div class="middle">
                        <div class="side"></div>
                        <div class="side"></div>
                        <div class="circle"></div>
                        <div class="side"></div>
                        <div class="side"></div>
                    </div>
                    <div class="cap"></div>
                </div>
            </nav>
            <div class="template-lists">
                <div class="template-humburger" onclick="templateListsAction(this)">
                    <span class="template-humburger-bar middle"></span>
                </div>
                <ul class="template-lists-close" id="templateListsAction">
                    <li>
                        <p class="template-image" style="overflow: hidden;"><img src="./assets/template-images/<?php echo $tmp_name = 'template1' ?>.png" width="400px" alt=""></p>
                        <dl>
                            <dt><?php echo $tmp_name = 'template1' ?></dt>
                            <dd><button type="button" value="<?php echo $tmp_name = 'template1' ?>" onclick="comAdd(this)">選択する</button></dd>
                        </dl>
                    </li>
                    <li>
                        <p class="template-image" style="overflow: hidden;"><img src="./assets/template-images/<?php echo $tmp_name = 'template2' ?>.png" width="400px" alt=""></p>
                        <dl>
                            <dt><?php echo $tmp_name = 'template2' ?></dt>
                            <dd><button type="button" value="<?php echo $tmp_name = 'template2' ?>" onclick="comAdd(this)">選択する</button></dd>
                        </dl>
                    </li>
                    <li>
                        <p class="template-image" style="overflow: hidden;"><img src="./assets/template-images/<?php echo $tmp_name = 'template3' ?>.png" width="400px" alt=""></p>
                        <dl>
                            <dt><?php echo $tmp_name = 'template3' ?></dt>
                            <dd><button type="button" value="<?php echo $tmp_name = 'template3' ?>" onclick="comAdd(this)">選択する</button></dd>
                        </dl>
                    </li>
                    <li>
                        <p class="template-image" style="overflow: hidden;"><img src="./assets/template-images/<?php echo $tmp_name = 'header2' ?>.png" width="400px" alt=""></p>
                        <dl>
                            <dt><?php echo $tmp_name = 'header2' ?></dt>
                            <dd><button type="button" value="<?php echo $tmp_name = 'header2' ?>" onclick="comAdd(this)">選択する</button></dd>
                        </dl>
                    </li>
                    <li>
                        <p class="template-image" style="overflow: hidden;"><img src="./assets/template-images/<?php echo $tmp_name = 'form1' ?>.png" width="400px" alt=""></p>
                        <dl>
                            <dt><?php echo $tmp_name = 'form1' ?></dt>
                            <dd><button type="button" value="<?php echo $tmp_name = 'form1' ?>" onclick="comAdd(this)">選択する</button></dd>
                        </dl>
                    </li>

                    <li>
                        <p class="template-image" style="overflow: hidden;"><img src="./assets/template-images/<?php echo $tmp_name = 'header1' ?>.png" width="400px" alt=""></p>
                        <dl>
                            <dt><?php echo $tmp_name = 'header1' ?></dt>
                            <dd><button type="button" value="<?php echo $tmp_name = 'header1' ?>" onclick="comAdd(this)">選択する</button></dd>
                        </dl>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    
    <!-- <ul>
        <li onclick="comAdd(this)">template1</li>
        <li onclick="">about</li>
        <li onclick="">form</li>
        <li onclick="">footer</li>
    </ul> -->
<!-- / -->

<!-- html -->
    <article id="preview-pc" style="padding-top: 97px !important;">
    </article>
<!-- / -->



    <script>
        let previous = -1;
        $(".icon[data-index]").click(function () {
            $(this).addClass("initialised");
            let index = $(this).attr("data-index");
            let navaa = $(this).closest("nav.aa").addClass("moving").attr("data-selected", index);
            if (previous == -1) navaa.find('.icon[data-index="2"]').addClass("initialised");
                if (previous == 1 && index == 3 || previous == 3 && index == 1) {
                    navaa.find('.icon[data-index="2"]').removeClass("initialised");
                    setTimeout(function () {
                    navaa.find('.icon[data-index="2"]').addClass("initialised");
                    });
                }
            previous = index;
            setTimeout(function () {
                navaa.removeClass("moving").removeClass("hidemiddle");
            }, 750);
        });

        window.onload = function(){

            sessionStorage.setItem('id', '1');
            sessionStorage.setItem('project', 'project');
            sessionStorage.setItem('fileName', 'index');

            openCom(sessionStorage.getItem('fileName'));
            render(sessionStorage.getItem('fileName'));
        }

        
    </script>

</body>
</html>