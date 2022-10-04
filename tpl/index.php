<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hello world</title>
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>

    <body>
        <div class="app">
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

        
            <div class="wrapper">
                <div class="left-side">
                    <div class="side-wrapper">
                        <div class="side-title">新規作成</div>
                        <div class="side-menu">
                            <a href="#">
                                <svg viewBox="0 0 512 512">
                                <g xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                    <path d="M0 0h128v128H0zm0 0M192 0h128v128H192zm0 0M384 0h128v128H384zm0 0M0 192h128v128H0zm0 0" data-original="#bfc9d1" />
                                </g>
                                <path xmlns="http://www.w3.org/2000/svg" d="M192 192h128v128H192zm0 0" fill="currentColor" data-original="#82b1ff" />
                                <path xmlns="http://www.w3.org/2000/svg" d="M384 192h128v128H384zm0 0M0 384h128v128H0zm0 0M192 384h128v128H192zm0 0M384 384h128v128H384zm0 0" fill="currentColor" data-original="#bfc9d1" />
                                </svg>
                                テンプレートから作る
                            </a>
                            <a href="./editor.php">
                                <svg viewBox="0 0 488.932 488.932" fill="currentColor">
                                    <path d="M243.158 61.361v-57.6c0-3.2 4-4.9 6.7-2.9l118.4 87c2 1.5 2 4.4 0 5.9l-118.4 87c-2.7 2-6.7.2-6.7-2.9v-57.5c-87.8 1.4-158.1 76-152.1 165.4 5.1 76.8 67.7 139.1 144.5 144 81.4 5.2 150.6-53 163-129.9 2.3-14.3 14.7-24.7 29.2-24.7 17.9 0 31.8 15.9 29 33.5-17.4 109.7-118.5 192-235.7 178.9-98-11-176.7-89.4-187.8-187.4-14.7-128.2 84.9-237.4 209.9-238.8z" />
                                </svg>
                                Project作成
                            </a>
                            <a href="./editor.php">
                                <svg viewBox="0 0 488.932 488.932" fill="currentColor">
                                    <path d="M243.158 61.361v-57.6c0-3.2 4-4.9 6.7-2.9l118.4 87c2 1.5 2 4.4 0 5.9l-118.4 87c-2.7 2-6.7.2-6.7-2.9v-57.5c-87.8 1.4-158.1 76-152.1 165.4 5.1 76.8 67.7 139.1 144.5 144 81.4 5.2 150.6-53 163-129.9 2.3-14.3 14.7-24.7 29.2-24.7 17.9 0 31.8 15.9 29 33.5-17.4 109.7-118.5 192-235.7 178.9-98-11-176.7-89.4-187.8-187.4-14.7-128.2 84.9-237.4 209.9-238.8z" />
                                </svg>
                                HTML作成
                            </a>
                            <a href="#">
                                <svg viewBox="0 0 488.932 488.932" fill="currentColor">
                                    <path d="M243.158 61.361v-57.6c0-3.2 4-4.9 6.7-2.9l118.4 87c2 1.5 2 4.4 0 5.9l-118.4 87c-2.7 2-6.7.2-6.7-2.9v-57.5c-87.8 1.4-158.1 76-152.1 165.4 5.1 76.8 67.7 139.1 144.5 144 81.4 5.2 150.6-53 163-129.9 2.3-14.3 14.7-24.7 29.2-24.7 17.9 0 31.8 15.9 29 33.5-17.4 109.7-118.5 192-235.7 178.9-98-11-176.7-89.4-187.8-187.4-14.7-128.2 84.9-237.4 209.9-238.8z" />
                                </svg>
                                続きから作る
                            </a>
                        </div>
                    </div><!--side-wrapper-->

                    <div class="side-wrapper">
                        <div class="side-title">テンプレート</div>
                        <div class="side-menu">
                            <a href="#">
                                <svg viewBox="0 0 488.455 488.455" fill="currentColor">
                                    <path d="M287.396 216.317c23.845 23.845 23.845 62.505 0 86.35s-62.505 23.845-86.35 0-23.845-62.505 0-86.35 62.505-23.845 86.35 0" />
                                    <path d="M427.397 91.581H385.21l-30.544-61.059H133.76l-30.515 61.089-42.127.075C27.533 91.746.193 119.115.164 152.715L0 396.86c0 33.675 27.384 61.074 61.059 61.074h366.338c33.675 0 61.059-27.384 61.059-61.059V152.639c-.001-33.674-27.385-61.058-61.059-61.058zM244.22 381.61c-67.335 0-122.118-54.783-122.118-122.118s54.783-122.118 122.118-122.118 122.118 54.783 122.118 122.118S311.555 381.61 244.22 381.61z" />
                                </svg>
                                ヘッダー
                            </a>
                            <a href="#">
                                <svg viewBox="0 0 512 512" fill="currentColor">
                                    <circle cx="295.099" cy="327.254" r="110.96" transform="rotate(-45 295.062 327.332)" />
                                    <path d="M471.854 338.281V163.146H296.72v41.169a123.1 123.1 0 01121.339 122.939c0 3.717-.176 7.393-.5 11.027zM172.14 327.254a123.16 123.16 0 01100.59-120.915L195.082 73.786 40.146 338.281H172.64c-.325-3.634-.5-7.31-.5-11.027z" />
                                </svg>
                                フォーム（ログイン）
                            </a>
                            <a href="#">
                                <svg viewBox="0 0 58 58" fill="currentColor">
                                    <path d="M57 6H1a1 1 0 00-1 1v44a1 1 0 001 1h56a1 1 0 001-1V7a1 1 0 00-1-1zM10 50H2v-9h8v9zm0-11H2v-9h8v9zm0-11H2v-9h8v9zm0-11H2V8h8v9zm26.537 12.844l-11 7a1.007 1.007 0 01-1.018.033A1.001 1.001 0 0124 36V22a1.001 1.001 0 011.538-.844l11 7a1.003 1.003 0 01-.001 1.688zM56 50h-8v-9h8v9zm0-11h-8v-9h8v9zm0-11h-8v-9h8v9zm0-11h-8V8h8v9z" />
                                </svg>
                                フォーム（データ登録）
                            </a>
                            <a href="#">
                                <svg viewBox="0 0 512 512" fill="currentColor">
                                    <path d="M499.377 46.402c-8.014-8.006-18.662-12.485-29.985-12.613a41.13 41.13 0 00-.496-.003c-11.142 0-21.698 4.229-29.771 11.945L198.872 275.458c25.716 6.555 47.683 23.057 62.044 47.196a113.544 113.544 0 0110.453 23.179L500.06 106.661C507.759 98.604 512 88.031 512 76.89c0-11.507-4.478-22.33-12.623-30.488zM176.588 302.344a86.035 86.035 0 00-3.626-.076c-20.273 0-40.381 7.05-56.784 18.851-19.772 14.225-27.656 34.656-42.174 53.27C55.8 397.728 27.795 409.14 0 416.923c16.187 42.781 76.32 60.297 115.752 61.24 1.416.034 2.839.051 4.273.051 44.646 0 97.233-16.594 118.755-60.522 23.628-48.224-5.496-112.975-62.192-115.348z" />
                                </svg>
                                ラッパー
                            </a>
                            <a href="#">
                                <svg viewBox="0 0 512 512" fill="currentColor">
                                    <path d="M497 151H316c-8.401 0-15 6.599-15 15v300c0 8.401 6.599 15 15 15h181c8.401 0 15-6.599 15-15V166c0-8.401-6.599-15-15-15zm-76 270h-30c-8.401 0-15-6.599-15-15s6.599-15 15-15h30c8.401 0 15 6.599 15 15s-6.599 15-15 15zm0-180h-30c-8.401 0-15-6.599-15-15s6.599-15 15-15h30c8.401 0 15 6.599 15 15s-6.599 15-15 15z" />
                                    <path d="M15 331h196v60h-75c-8.291 0-15 6.709-15 15s6.709 15 15 15h135v-30h-30v-60h30V166c0-24.814 20.186-45 45-45h135V46c0-8.284-6.716-15-15-15H15C6.716 31 0 37.716 0 46v270c0 8.284 6.716 15 15 15z" />
                                </svg>
                                アサイド
                            </a>
                            <a href="#">
                                <svg viewBox="0 0 512 512" fill="currentColor">
                                    <path d="M0 331v112.295a14.996 14.996 0 007.559 13.023L106 512V391L0 331zM136 391v121l105-60V331zM271 331v121l105 60V391zM406 391v121l98.441-55.682A14.995 14.995 0 00512 443.296V331l-106 60zM391 241l-115.754 57.876L391 365.026l116.754-66.15zM262.709 1.583a15.006 15.006 0 00-13.418 0L140.246 57.876 256 124.026l115.754-66.151L262.709 1.583zM136 90v124.955l105 52.5V150zM121 241L4.246 298.876 121 365.026l115.754-66.15zM271 150v117.455l105-52.5V90z" />
                                </svg>
                                フッター
                            </a>
                        </div><!--side-menu-->
                    </div><!--side-wrapper-->

                    <div class="side-wrapper">
                        <div class="side-title">管理</div>
                        <div class="side-menu">
                            <a href="#">
                                <svg viewBox="0 0 488.455 488.455" fill="currentColor">
                                    <path d="M287.396 216.317c23.845 23.845 23.845 62.505 0 86.35s-62.505 23.845-86.35 0-23.845-62.505 0-86.35 62.505-23.845 86.35 0" />
                                    <path d="M427.397 91.581H385.21l-30.544-61.059H133.76l-30.515 61.089-42.127.075C27.533 91.746.193 119.115.164 152.715L0 396.86c0 33.675 27.384 61.074 61.059 61.074h366.338c33.675 0 61.059-27.384 61.059-61.059V152.639c-.001-33.674-27.385-61.058-61.059-61.058zM244.22 381.61c-67.335 0-122.118-54.783-122.118-122.118s54.783-122.118 122.118-122.118 122.118 54.783 122.118 122.118S311.555 381.61 244.22 381.61z" />
                                </svg>
                                マイワーク
                            </a>
                            <a href="#">
                                <svg viewBox="0 0 512 512" fill="currentColor">
                                    <circle cx="295.099" cy="327.254" r="110.96" transform="rotate(-45 295.062 327.332)" />
                                    <path d="M471.854 338.281V163.146H296.72v41.169a123.1 123.1 0 01121.339 122.939c0 3.717-.176 7.393-.5 11.027zM172.14 327.254a123.16 123.16 0 01100.59-120.915L195.082 73.786 40.146 338.281H172.64c-.325-3.634-.5-7.31-.5-11.027z" />
                                </svg>
                                画像
                            </a>
                        </div><!--side-menu-->
                    </div><!--side-wrapper-->
                </div><!--left-side-->



                <div class="main-container">
                    <div class="main-header">
                        <a class="menu-link-main" href="#">マイページ</a>
                    </div><!--main-header-->

                    <div class="content-wrapper">
                        <div class="content-wrapper-header">
                            <div class="content-wrapper-context">
                                <!--必須-->
                            </div>
                            <img class="content-wrapper-img" src="./assets/images/index/glass.png" alt="">
                        </div>


                        <div class="content-section">
                            <div class="content-section-title">人気テンプレート</div>
                            <div class="apps-card">
                                <div class="app-card">
                                    <span>
                                        <img src="./assets/images/index/sample1.png" alt="">
                                    </span>
                                    <div class="app-card__subtext">アニメーション豊富なログイン画面です。</div>
                                    <div class="app-card-buttons">
                                        <button class="content-button status-button">選択</button>
                                    </div>
                                </div>

                                <div class="app-card">
                                    <span>
                                        <img src="./assets/images/index/sample2.png" alt="">
                                    </span>
                                    <div class="app-card__subtext">アニメーションを採用したカッコイイ画面です。</div>
                                    <div class="app-card-buttons">
                                        <button class="content-button status-button">選択</button>
                                    </div>
                                </div>

                                <div class="app-card">
                                    <span>
                                        <img src="./assets/images/index/sample3.png" alt="">
                                    </span>
                                    <div class="app-card__subtext">３Dで使い奥行を連想させるサイトです。</div>
                                    <div class="app-card-buttons">
                                        <button class="content-button status-button">選択</button>
                                    </div>
                                </div>
                            </div><!--apps-card-->
                        </div><!--content-section-->


                        <div class="content-section">
                            <div class="content-section-title">マイワーク（履歴）</div>
                            <div class="apps-card">
                                <div class="app-card">
                                    <span>
                                        <img src="./assets/images/index/sample4.png" alt="">
                                    </span>
                                    <div class="app-card__subtext">課題１</div>
                                    <div class="app-card-buttons">
                                        <button class="content-button status-button">選択</button>
                                    </div>
                                </div>

                                <div class="app-card">
                                    <span>
                                        <img src="./assets/images/index/sample5.png" alt="">
                                    </span>
                                    <div class="app-card__subtext">課題２</div>
                                    <div class="app-card-buttons">
                                        <button class="content-button status-button">選択</button>
                                    </div>
                                </div>

                                <div class="app-card">
                                    <span>
                                        <img src="./assets/images/index/sample6.png" alt="">
                                    </span>
                                    <div class="app-card__subtext">課題３</div>
                                    <div class="app-card-buttons">
                                        <button class="content-button status-button">選択</button>
                                    </div>
                                </div>
                            </div><!--apps-card-->
                        </div><!--content-section-->


                        <div class="br"></div>

                        <div class="content-section">
                            <div class="apps-card">
                                <div class="app-card">
                                    <span>
                                        <img src="./assets/images/index/sample7.png" alt="">
                                    </span>
                                    <div class="app-card__subtext">課題４</div>
                                    <div class="app-card-buttons">
                                        <button class="content-button status-button">選択</button>
                                    </div>
                                </div>

                                <div class="app-card">
                                    <span>
                                        <img src="./assets/images/index/sample8.png" alt="">
                                    </span>
                                    <div class="app-card__subtext">課題５</div>
                                    <div class="app-card-buttons">
                                        <button class="content-button status-button">選択</button>
                                    </div>
                                </div>

                                <div class="app-card">
                                    <span>
                                        <img src="./assets/images/index/sample9.png" alt="">
                                    </span>
                                    <div class="app-card__subtext">課題６</div>
                                    <div class="app-card-buttons">
                                        <button class="content-button status-button">選択</button>
                                    </div>
                                </div>
                            </div><!--apps-card-->
                        </div><!--content-section-->

                    </div><!--content-wrapper-->
                </div><!--main-container-->
            </div><!--wrapper-->
        </div><!--app-->


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="./assets/js/index.js"></script>


    </body>
</html>