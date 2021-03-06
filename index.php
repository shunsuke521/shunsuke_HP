<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>hosha's</title>
</head>
<body>
    <header id="header" class="js-header">
        <div class="c-header">
            <div class="c-header-left">
                <span class="c-header-icon">hosha's</span>
            </div>
            <div class="c-header-right js-header-right">
                <ul class="c-header-right-list">
                    <li><a class="js-link js-top-link">Top</a></li>
                    <li><a class="js-link js-about-link">About</a></li>
                    <li><a class="js-link js-blog-link">Blog</a></li>
                    <li><a class="js-link js-portfolio-link">Portfolio</a></li>
                    <li><a class="js-link js-skill-link">Skill</a></li>
                    <li><a class="js-link js-contact-link">Contact</a></li>
                </ul>
            </div>
            <div class="hamburger-menu">
                <a class="hamburger js-hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </div>
    </header>
    <main id="main">
        <section class="container c-hero js-top-link">
            <div class="black-surface"></div>
            <img class="js-size-change" src="img/hero1.webp" alt="">
            <img class="js-size-change" src="img/hero2.webp" alt="">
            <img class="js-size-change" src="img/hero3.jpg" alt="">
            <img class="js-size-change" src="img/hero4.jpg" alt="">
            <img class="js-size-change" src="img/hero5.webp" alt="">
            <h1 class="c-hero-phrase">hosha's<span>&nbsp</span><br>room</h1>
        </section>
        <section class="dummy"></section>
        <section class="container c-message">
            <p class="c-message-body js-message">What is not started today is<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;never finished tomorrow.</p>
            <p class="c-message-person js-person">-Johann Wolfgang von Goethe-</p>
        </section>
        <section class="container c-contents">
            <div class="flex"><a class="js-link js-blog-link">BLOG</a></div>
            <div class="flex"><a class="js-link js-portfolio-link">PORTFOLIO</a></div>
            <div class="flex"><a class="js-link js-skill-link">SKILL</a></div>
            <div class="flex"><a class="js-link js-contact-link">CONTACT</a></div>
        </section>
        <section class="container c-intro js-intro js-about-link">
            <div class="c-intro-body js-intro-body">
                <div class="c-intro-body-icon">
                    <img src="img/prof.jpg">
                </div>
                <div class="c-intro-body-detail">
                    <p class="name">hosha<span class="space">&nbsp;&nbsp;&nbsp;</span><br><span class="age_home">26歳<span class="space">&nbsp;&nbsp;</span>&nbsp;&nbsp;静岡県生まれ愛知県育ち</span></p>
                    <p class="career">2018年に関東の大学を卒業<br>地元愛知のメーカーに<br class="br">事務系総合職として就職<br>入社2年目の夏に<br class="br">エンジニア転職を志し一念発起<br>翌年2020年1月1日から<br class="br">本格的にプログラミング学習を開始</p>
                </div>
                <div class="c-intro-body-sns">
                    <a href="https://twitter.com/hoshaaa13"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.facebook.com/shunsuke.hosokawa.54/"><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </section>
        <section class="container c-blog js-blog-height js-blog-link" id="blog">
            <h2 class="c-title js-blog">BLOG</h2>
            <div class="c-blog-body js-blog">
                <ul class="articles">
                    <li class="article"><a href=""><span class="article-date">2020.5.24</span>サンプルサンプルサンプル</a></li>
                    <li class="article"><a href=""><span class="article-date">2020.5.24</span>サンプルサンプルサンプル</a></li>
                    <li class="article"><a href=""><span class="article-date">2020.5.24</span>サンプルサンプルサンプル</a></li>
                    <li class="article"><a href=""><span class="article-date">2020.5.24</span>サンプルサンプルサンプル</a></li>
                    <li class="article"><a href=""><span class="article-date">2020.5.24</span>サンプルサンプルサンプル</a></li>
                </ul>
            </div>
        </section>
        <section class="container c-portfolio js-portfolio-height js-portfolio-link" id="portfolio">
            <h2 class="c-title js-portfolio">PORTFOLIO</h2>
            <div class="c-container-body js-portfolio">
                <i class="fas fa-caret-left i-arrow left-arrow js-left-button"></i>
                <i class="fas fa-caret-right i-arrow right-arrow js-right-button"></i>
                <div class="c-portfolio-flame">
                    <div class="all-portfolio js-slides">
                        <div class="c-portfolio-item js-slide">
                            <a href="https://schooltimetable94521.herokuapp.com" class="c-portfolio-img">
                                <img src="img/portfolio6.png">
                            </a>
                            <p class="c-portfolio-detail">【時間割作成アプリ】<br>LaravelとVue.jsを使用 自動で時間割が作成できるよう、今後さらに機能を追加していく予定</p>
                        </div>
                        <div class="c-portfolio-item js-slide">
                            <a href="https://pikachu-adventure521.herokuapp.com/" class="c-portfolio-img">
                                <img src="img/portfolio5.png">
                            </a>
                            <p class="c-portfolio-detail">【ピカチュウの大冒険】<br>PHPのオブジェクト指向のアウトプットとしてポケモン対戦風のゲームを作成　jQueryを用いてゲージや文字など画面上の動きにもこだわりました</p>
                        </div>
                        <div class="c-portfolio-item js-slide">
                            <a href="https://photo-share-web521.herokuapp.com/top.php" class="c-portfolio-img">
                                <img src="img/portfolio4.png">
                            </a>
                            <p class="c-portfolio-detail">【Photo Share Web】<br>生のPHPを使用し写真投稿の擬似SNSサイトを一から作成　DBへの接続等、苦戦した部分も多かったがおよそ1ヶ月かけて完成</p>
                        </div>
                        <div class="c-portfolio-item js-slide">
                            <a href="http://localhost:8888/output/login.php" class="c-portfolio-img">
                                <img src="img/portfolio3.png">
                            </a>
                            <p class="c-portfolio-detail">【Today's Fortune】<br>学習初期に作成したPHPとjavascriptの初歩的な技術を利用して会員登録、ログイン、ログアウト、ログイン時のバリデーション機能などを実装したサイトを作成</p>
                        </div>
                        <div class="c-portfolio-item js-slide">
                            <a class="c-portfolio-img">
                                <img src="img/portfolio2.png">
                            </a>
                            <p class="c-portfolio-detail">【サイト模写】<br>HTMLとCSSのみを用いて初のページ模写に挑戦　架空の歯科医院のサイトを参考にしました　<br>※リンクは飛びません</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container c-skill js-skill-height js-skill-link" id="skill">
            <h2 class="c-title js-skill">SKILL</h2>
            <div class="c-container-body js-skill">
                <div class="c-skill-flame">
                    <div class="c-skill-item">
                        <div class="c-skill-item-left">
                            <i class="fab fa-html5"></i>
                            <p>HTML5</p>
                        </div>
                        <div class="c-skill-item-right">
                            <div class="skill-meter-flame"><div class="skill-meter js-skill-meter html"></div></div>
                        </div>
                    </div>
                    <div class="c-skill-item">
                        <div class="c-skill-item-left">
                            <i class="fab fa-css3-alt"></i>
                            <p>CSS3</p>
                        </div>
                        <div class="c-skill-item-right">
                            <div class="skill-meter-flame"><div class="skill-meter js-skill-meter css"></div></div>
                        </div>
                    </div>
                    <div class="c-skill-item">
                        <div class="c-skill-item-left">
                            <i class="fab fa-js-square"></i>
                            <p>JavaScript</p>
                        </div>
                        <div class="c-skill-item-right">
                            <div class="skill-meter-flame"><div class="skill-meter js-skill-meter js"></div></div>
                        </div>
                    </div>
                    <div class="c-skill-item">
                        <div class="c-skill-item-left">
                            <i class="fab fa-php"></i>
                            <p>PHP</p>
                        </div>
                        <div class="c-skill-item-right">
                            <div class="skill-meter-flame"><div class="skill-meter js-skill-meter php"></div></div>
                        </div>
                    </div>
                    <div class="c-skill-item">
                        <div class="c-skill-item-left">
                            <i class="fas fa-skating i-skate"></i>
                            <p>Skate</p>
                        </div>
                        <div class="c-skill-item-right">
                            <div class="skill-meter-flame"><div class="skill-meter js-skill-meter skate"></div></div>
                        </div>
                    </div>
                    <div class="c-skill-item">
                        <div class="c-skill-item-left">
                            <i class="fas fa-baseball-ball i-baseball"></i>
                            <p>Baseball</p>
                        </div>
                        <div class="c-skill-item-right">
                            <div class="skill-meter-flame"><div class="skill-meter js-skill-meter baseball"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container c-contact js-contact-height js-contact-link">
            <h2 class="c-title js-contact" id="contact">CONTACT</h2>
            <div class="c-contact-body js-contact">
                <p class="">お問い合わせの際は<br>下記メールアドレスまでご連絡ください</p>
                <div class="address">
                    <i class="far fa-envelope"><span>&nbsp;&nbsp;shunsuke459@gmail.com</span></i>
                </div>
            </div>
        </section>
        <footer id="footer">
            Copyright © hosha. All Rights Reserved
        </footer>
    </main>
    <script src="./bundle/script.js"></script>
</body>
</html>