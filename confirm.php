<?php

// セッション開始
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //フォームのボタンが押されたら、POSTされたデータを各変数に格納
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // トークンの生成（CSRF対策）
  $token = bin2hex(random_bytes(32));
  $_SESSION['token'] = $token;

  // HTML出力前のエスケープ処理
  function escape($str)
  {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
  }
} else {
  //フォームボタン以外からこのページにアクセスした場合（URL直接入力など）、トップページに戻る
  header(("location: wrong_access.php"));
  exit;
}
?>


<?php require_once 'head.php' ?>

<body>
  <main class="wrapper">
    <section id=contact class="confirm">
      <h2>Confirm</h2>
      <p class="confirm-text">下記の内容でメッセージを送信します。よろしければ「送信」ボタンを押してください。</p>
      <form action="complete.php" method="post">
        <input type="hidden" name="token" value="<?php echo $token; ?>">
        <div class="contact-form">
          <label for="name">お名前</label>
          <input type="hidden" id="name" name="name" value="<?php echo $name; ?>">
          <p><?php echo escape($name); ?></p>
        </div>
        <div class="contact-form">
          <label for="email">メールアドレス</label>
          <input type="hidden" id="email" name="email" value="<?php echo $email; ?>">
          <p><?php echo escape($email); ?></p>
        </div>
        <div class="contact-form">
          <label for="message">メッセージ</label>
          <input type="hidden" id="message" name="message" value="<?php echo $message; ?>">
          <p><?php echo nl2br(escape($message)); ?></p>
        </div>
        <input class="btn" type="button" value="修正" onclick="history.back(-1)">
        <input class="btn" type="submit" value="送信" name="submit"></input>
      </form>
    </section><!-- /#contact .confirm-->
  </main><!-- /.wrapper -->

  <footer>
    <p>&copy; 2021 Michinobu MASAYAMA</p>
  </footer><!-- /footer -->
</body>

</html>
