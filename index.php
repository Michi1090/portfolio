<?php require_once 'head.php' ?>

<body>
  <header id=home class="wrapper">
    <div class="logo">
      <a href="#home">
        <h1>Michi's Portfolio</h1>
        <p>- I'm learning code. I want to be an engineer. -</p>
      </a>
    </div><!-- /.logo -->

    <nav class="menu">
      <ul>
        <li class="about"><a class="link" href="#about">About</a></li>
        <li class="works"><a class="link" href="#works">Works</a></li>
        <li class="articles"><a class="link" href="#articles">Articles</a></li>
        <li class="contact"><a class="link" href="#contact">Contact</a></li>
      </ul>
    </nav><!-- /.menu -->
  </header><!-- /header -->

  <section id="main-visual">
    <ul class="slider">
      <li class="slider-item slider-item01"></li>
      <li class="slider-item slider-item02"></li>
      <li class="slider-item slider-item03"></li>
      <li class="slider-item slider-item04"></li>
    </ul>
  </section><!-- /#main-visual -->

  <nav id="sns-menu-side">
    <ul>
      <li><a class="sns-link" href="https://twitter.com/Michi_program" target="_blank"><i class="fab fa-twitter"></i></a></li>
      <li><a class="sns-link" href="https://www.facebook.com/michinobu.masayama" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
      <li><a class="sns-link" href="https://github.com/Michi1090" target="_blank"><i class="fab fa-github"></i></a></li>
      <li><a class="sns-link" href="https://www.linkedin.com/in/michinobu-masayama/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
    </ul>
  </nav><!-- /#sns-menu-side -->

  <main class="wrapper">
    <section id="about">
      <h2>About</h2>
      <article class="profile">
        <img src="images/profile.png">
        <div>
          <h3>昌山 道宣<br> (Michinobu MASAYAMA)</h3>
          <p>京都生まれ、兵庫育ちの生粋の関西人。大学卒業後、家電メーカー系列会社で勤務した後、英語学習のためカナダ・トロントへ留学。帰国後は大手完成車メーカーで勤務する。現在は地元・神戸に帰郷し、独学でプログラミングを勉強している。趣味は野球観戦と将棋。最近の夢は猫を飼うこと。</p>
        </div>
      </article><!-- /.profile -->

      <article class="biography">
        <h3>◆Biography</h3>
        <div class="bio-item">
          <p class="bio-date">2015.03</p>
          <p class="bio-info">関西学院大学 法学部 卒業</p>
        </div>
        <div class="bio-item">
          <p class="bio-date">2015.04 - 2018.08</p>
          <p class="bio-info">堺ディスプレイプロダクト株式会社にて勤務。液晶の生産管理に携わる。</p>
        </div>
        <div class="bio-item">
          <p class="bio-date">2018.09 - 2019.09</p>
          <p class="bio-info">カナダ・トロントへ留学。現地で働きながら学校へ通い、英語を習得する。</p>
        </div>
        <div class="bio-item">
          <p class="bio-date">2020.02 - 2021.09</p>
          <p class="bio-info">日産自動車株式会社にて勤務。パワートレインの生産管理に携わる。</p>
        </div>
        <div class="bio-item bio-bottom">
          <p class="bio-date">2021.12 - 現在</p>
          <p class="bio-info">プログラミングの学習を開始。独学でエンジニア転職を目指し邁進中。</p>
        </div>
      </article><!-- /.biography -->

      <article class="skills">
        <h3>◆Skills</h3>
        <div class="programming">
          <h4>プログラミング</h4>
          <p>HTML, CSS, Sass, JavaScript, jQuery, PHP, Laravel, MySQL, Linux, Git, VBA</p>
        </div>
        <div class="experience">
          <h4>前職までの経験</h4>
          <p>対人折衝能力、複数部門間の業務調整能力、企画・計画立案力、進捗管理能力、チームリーダー経験、新規プロジェクトへのアサイン経験</p>
        </div>
        <div class="others">
          <h4>その他</h4>
          <p>TOEIC L&R Test Score 900、 普通自動車免許</p>
        </div>
      </article><!-- /.skills -->
    </section><!-- /#about -->

    <section id="works">
      <h2>Works</h2>
      <article class="work1">
        <a class="link" href="#home" target="_blank">
          <h3>◆Michi's Portfolio(当サイト)</h3>
        </a>
        <div class="work-item">
          <div class="work-img">
            <a href="#home" target="_blank">
              <img class="img-link" src="images/work-1.jpg">
            </a>
          </div>
          <li class="work-info">
            <ul>
              <li>制作時期 : 2021年12月中旬～下旬</li>
              <li>使用技術 : <br>HTML/CSS/Sass/JavaScript/jQuery/PHP</li>
              <li>主な機能 : <br>自己紹介ページ、メインビジュアルのスライドショー、お問い合わせフォーム、レスポンシブデザイン対応</li>
              <li>
                ソースコード(GitHub) : <br><a class="link" href="https://github.com/Michi1090/portfolio">https://github.com/Michi1090/portfolio</a>
              </li>
            </ul>
        </div>
        </div>
        <div class="work-description">
          <p>筆者が人生で初めて製作したWebサイトです。シンプルで見やすいサイトを心がけながらも、要所でjQueryなどを使用し動きを付けました。お問い合わせフォームはフレームワークなどを使用せず、PHPとJavaScriptでメール送信機能とフォームのバリデーションを実装しています。</p>
        </div>
      </article><!-- /.work1 -->

      <article class="work2">
        <a class="link" href="#" target="_blank">
          <h3>◆自作アプリ①(準備中)</h3>
        </a>
        <div class="work-item">
          <div class="work-img">
            <a href="#" target="_blank">
              <img class="img-link" src="images/work.jpeg">
            </a>
          </div>
          <li class="work-info">
            <ul>
              <li>制作時期 : 2022年**月中旬～下旬</li>
              <li>使用技術 : <br>hoge/hoge/hoge/hoge/hoge/hoge</li>
              <li>主な機能 : <br>hogehoge、hogehoge、hogehoge、hogehoe</li>
              <li>
                ソースコード(GitHub) : <br><a class="link" href="https://github.com/Michi1090/app1">https://github.com/Michi1090/app1</a>
              </li>
            </ul>
        </div>
        </div>
        <div class="work-description">
          <p>現在制作中</p>
        </div>
      </article><!-- /.work2 -->

      <article class="work3">
        <a class="link" href="#" target="_blank">
          <h3>◆自作アプリ②(準備中)</h3>
        </a>
        <div class="work-item">
          <div class="work-img">
            <a href="#" target="_blank">
              <img class="img-link" src="images/work.jpeg">
            </a>
          </div>
          <li class="work-info">
            <ul>
              <li>制作時期 : 2022年**月中旬～下旬</li>
              <li>使用技術 : <br>hoge/hoge/hoge/hoge/hoge/hoge</li>
              <li>主な機能 : <br>hogehoge、hogehoge、hogehoge、hogehoe</li>
              <li>
                ソースコード(GitHub) : <br><a class="link" href="https://github.com/Michi1090/app2">https://github.com/Michi1090/app2</a>
              </li>
            </ul>
        </div>
        </div>
        <div class="work-description">
          <p>現在制作中</p>
        </div>
      </article><!-- /.work3 -->
    </section><!-- /#works -->

    <section id="articles">
      <article class="articles-title">
        <div>
          <h2>Articles</h2>
          <p>毎週日曜日にQiita記事を投稿しています。</p>
          <p>日々の学びで気づいた点をプログラミング初学者向けに分かりやすくアウトプットしているので、是非一度ご覧ください。</p>
        </div>
        <a href="https://qiita.com/Michi1090" target="_blank"><img class="img-link" src="images/qiita.jpg"></a>
      </article><!-- /.articles-title -->

      <article class="activities">
        <h3>◆Activities</h3>
        <div class="act-item">
          <p class="act-date">2022.01.23</p>
          <p class="act-info"><a class="link" href="#" target="_blank">「フレームワークを使わずにお問い合わせフォームを作成する①」</a> を投稿しました</p>
        </div>
        <div class="act-item">
          <p class="act-date">2022.01.16</p>
          <p class="act-info"><a class="link" href="#" target="_blank">「WSL2でLinux環境(Ubuntu)を構築する」</a> を投稿しました</p>
        </div>
        <div class="act-item act-bottom">
          <p class="act-date">2022.01.09</p>
          <p class="act-info"><a class="link" href="https://qiita.com/Michi1090/items/a4b69e40a45ac32a2ebb" target="_blank">「XAMPPでYahoo!メールからメールを送信する」</a> を投稿しました</p>
        </div>
      </article><!-- /.activities -->

      <article class="back-numbers">
        <h3>◆Back Numbers</h3>
        <p>過去の記事については <a class="link" href="https://qiita.com/Michi1090" target="_blank">こちら</a> からお読みいただけます。</p>
      </article><!-- /.back-number -->
    </section><!-- /#articles -->


    <section id="contact">
      <h2>Contact</h2>
      <p>Michi's Portfolioをご覧いただきありがとうございます。</p>
      <p>本サイトへのご感想、お仕事のご紹介、その他お問い合わせなどにつきましては、下記のフォームよりお願いいたします。</p>
      <form action="confirm.php" method="post" name="form" onsubmit="return validate()">
        <div class="contact_form">
          <label for="name">お名前</label>
          <input type="text" id="name" name="name">
        </div>
        <div class="contact_form">
          <label for="email">メールアドレス</label>
          <input type="email" id="email" name="email">
        </div>
        <div class="contact_form">
          <label for="message">メッセージ</label>
          <textarea id="message" name="message"></textarea>
        </div>
        <input class="btn" type="submit" value="確認">
      </form>
    </section><!-- /#contact -->
  </main><!-- /.wrapper -->

  <nav id="sns-menu-bottom">
    <ul>
      <li><a class="sns-link" href="https://twitter.com/Michi_program" target="_blank"><i class="fab fa-twitter"></i></a></li>
      <li><a class="sns-link" href="https://www.facebook.com/michinobu.masayama" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
      <li><a class="sns-link" href="https://github.com/Michi1090" target="_blank"><i class="fab fa-github"></i></a></li>
      <li><a class="sns-link" href="https://www.linkedin.com/in/michinobu-masayama/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
    </ul>
  </nav><!-- /.sns-menu-bottom -->

  <footer>
    <p>&copy; 2021 Michinobu MASAYAMA</p>
  </footer><!-- /footer -->

  <!-- JavaScript -->
  <script src="js/jquery-3.6.0.min.js"></script> <!-- jQuery -->
  <script src="js/slick.min.js"></script> <!-- slick -->
  <script src="js/script.js"></script>
</body>

</html>
