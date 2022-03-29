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
          <h4>IT・プログラミング</h4>
          <p>HTML Living Standard, CSS3, Sass(Scss), Bootstrap5, JavaScript(ES6), jQuery3.6, PHP7.4, Laravel6, VBA12, MySQL5.7/MariaDB10.3, Linux(Ubuntu), Git/GitHub, Docker</p>
        </div>
        <div class="experience">
          <h4>前職までの経験</h4>
          <p class="paragraph">前職・前々職では、一貫して製造業で生産管理業務に従事していました。生産管理とは生産・販売・在庫・物流を一手に管理するサプライチェーンの司令塔であり、工場の調整役でもあります。主な業務としては、</p>
          <ol class="paragraph">
            <li>お客様からの受注を基に生産計画を策定</li>
            <li>関係各部門に根回しをして計画に対してのコンセンサスを得る</li>
            <li>策定した計画に対し遅延がないよう日々管理する</li>
            <li>トラブルが発生した場合は速やかに対応策を検討し、対処する</li>
          </ol>
          <p>といったようなものがあります。企画立案力、管理能力だけでなく、対人折衝能力やステークホルダー間の調整能力も求められる仕事です。また、チームリーダーや新規プロジェクトの立ち上げ経験なども持ち合わせております。</p>
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
        <a class="link" href="https://michi-programming.com" target="_blank">
          <h3>◆Michi's Portfolio(当サイト)</h3>
        </a>
        <div class="work-item">
          <div class="work-img">
            <a href="https://michi-programming.com" target="_blank">
              <img class=" img-link" src="images/work-1.jpg">
            </a>
          </div>
          <li class="work-info">
            <ul>
              <li>制作時期 : 2021年12月中旬～下旬</li>
              <li>使用技術 : <br>HTML, CSS, Sass, JavaScript, jQuery, PHP</li>
              <li>主な機能 : <br>自己紹介ページ、メインビジュアルのスライドショー、お問い合わせフォーム、レスポンシブデザイン</li>
              <li>
                ソースコード(GitHub) : <br><a class="link" target="_blank" href="https://github.com/Michi1090/portfolio">https://github.com/Michi1090/portfolio</a>
              </li>
            </ul>
        </div>
        </div>
        <div class="work-description">
          <p>筆者が人生で初めて製作したWebサイトです。シンプルで見やすいサイトを心がけながらも、要所でjQueryを使用し動きを付けました。お問い合わせフォームはPHPで実装しており、実際に制作者へメールを送信いただけます。</p>
        </div>
      </article><!-- /.work1 -->

      <article class="work2">
        <a class="link" href="https://pure-garden-14346.herokuapp.com/" target="_blank">
          <h3>◆筋トレログアプリ 『My Workout』</h3>
        </a>
        <div class="work-item">
          <div class="work-img">
            <a href="https://pure-garden-14346.herokuapp.com/" target="_blank">
              <img class="img-link" src="images/work-2.jpg">
            </a>
          </div>
          <li class="work-info">
            <ul>
              <li>制作時期 : 2022年2月中旬～3月中旬</li>
              <li>使用技術 : <br>HTML, CSS, Bootstrap, PHP, MySQL/MariaDB</li>
              <li>主な機能 : <br>ユーザー認証、マイページ、トレーニングログ作成・編集・削除・検索、ページネーション</li>
              <li>
                ソースコード(GitHub) : <br><a class="link" target="_blank" href="https://github.com/Michi1090/workout">https://github.com/Michi1090/workout</a>
              </li>
            </ul>
        </div>
        </div>
        <div class="work-description">
          <p>毎日の筋トレの成果を記録できるアプリです。ジムで使用することを念頭に置いているため、UIはスマートホン用に特化しています。ネイティブPHPとSQLへの理解を深めるため、バックエンドの処理はあえてフレームワークを一切使用せずにフルスクラッチで開発しました。フルスクラッチ開発ながらも、セキュリティ面もしっかり対策しています。</p>
        </div>
      </article><!-- /.work2 -->

      <article class="work3">
        <a class="link" href="https://github.com/Michi1090/production_control" target="_blank">
          <h3>◆生産管理システム 『PCOS』(現在開発中)</h3>
        </a>
        <div class="work-item">
          <div class="work-img">
            <a href="https://github.com/Michi1090/production_control" target="_blank">
              <img class="img-link" src="images/work-3.jpg">
            </a>
          </div>
          <li class="work-info">
            <ul>
              <li>制作時期 : 2022年3月下旬～</li>
              <li>使用技術 : <br>HTML, CSS, Bootstrap, PHP(Laravel), MySQL, Docker, Gitflow</li>
              <li>主な機能 : <br>ユーザー認証（メールアドレス認証付き）、マイページ、生産・出荷登録、在庫照会、部品発注、製品マスタ照会</li>
              <li>
                ソースコード(GitHub) : <br><a class="link" target="_blank" href="https://github.com/Michi1090/production_control">https://github.com/Michi1090/production_control</a>
              </li>
            </ul>
        </div>
        </div>
        <div class="work-description">
          <p>前職までの経験 × ITスキルの掛け合わせというテーマで、製造業で使用する生産管理のERPシステムを開発しています。バックエンドのフレームワークにはLaravel, インフラはDockerでLAMP環境を構築、開発手法は個人開発ながら疑似的なGitflowを取り入れました。まだ開発中のため完成品はご覧いただけませんが、Docker環境があればGitHubからイメージをプルして、開発途中の作品を試していただくとことが可能です。</p>
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
          <p class="act-date">2022.03.27</p>
          <p class="act-info"><a class="link" href="https://qiita.com/Michi1090/items/66d32fb05ed85f9b58d5" target="_blank">PHP + MySQLフルスクラッチでユーザー認証機能を実装する【マイページ・パスワード変更機能編】</a> を投稿しました</p>
        </div>
        <div class="act-item">
          <p class="act-date">2022.03.20</p>
          <p class="act-info"><a class="link" href="https://qiita.com/Michi1090/items/efcc179103b1f452288b" target="_blank">PHP + MySQLフルスクラッチでユーザー認証機能を実装する【ユーザー登録編】</a> を投稿しました</p>
        </div>
        <div class="act-item">
          <p class="act-date">2022.03.13</p>
          <p class="act-info"><a class="link" href="https://qiita.com/Michi1090/items/67db6a38bb63752237e7" target="_blank">PHP + MySQLフルスクラッチでユーザー認証機能を実装する【ログイン・ログアウト編】</a> を投稿しました</p>
        </div>
        <div class="act-item">
          <p class="act-date">2022.03.06</p>
          <p class="act-info"><a class="link" href="https://qiita.com/Michi1090/items/ad7a0b62471824d62a0f" target="_blank">【加筆・修正版】PHPでお問い合わせフォームを作成する</a> を投稿しました</p>
        </div>
        <div class="act-item act-bottom">
          <p class="act-date">2022.02.27</p>
          <p class="act-info"><a class="link" href="https://qiita.com/Michi1090/items/fcd6ad529823c7024e55" target="_blank">「プログラミング初学者が学習前に知っておきたかったネットワーク専門用語5選」</a> を投稿しました</p>
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
        <div class="contact-form">
          <label for="name">お名前</label>
          <input type="text" id="name" name="name">
        </div>
        <div class="contact-form">
          <label for="email">メールアドレス</label>
          <input type="text" id="email" name="email">
        </div>
        <div class="contact-form">
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
    <nav id="page-top">
      <a class="sns-link" href="#home"><i class="fas fa-chevron-circle-up"></i></a>
    </nav><!-- /#page-top -->
    <p>&copy; 2021 Michinobu MASAYAMA</p>
  </footer><!-- /footer -->

  <!-- JavaScript -->
  <script src="js/jquery-3.6.0.min.js"></script> <!-- jQuery -->
  <script src="js/slick.min.js"></script> <!-- slick -->
  <script src="js/script.js"></script>
</body>

</html>
