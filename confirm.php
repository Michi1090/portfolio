<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // //フォームのボタンが押されたら、送信されたデータをサニタイズして各変数に格納
  $name = htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8');
  $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
  $message = htmlspecialchars($_POST["message"], ENT_QUOTES, 'UTF-8');
} else {
  //フォームボタン以外からこのページにアクセスした場合（URL直接入力など）、トップページに戻る
  header(('location: index.php'));
  exit;
}

/* 以下、メール送信の処理
---------------------------------------------------------------------------------------------------------------- */
if (isset($_POST["submit"])) { // 送信ボタンが押されたら
  // メールの言語設定
  mb_language("ja");
  mb_internal_encoding("UTF-8");

  // 件名を変数subjectに格納
  $subject = "［自動送信］メッセージ内容の確認";

  // メール本文を変数bodyに格納
  $body = <<< EOM
  {$name}　様

  メッセージありがとうございます。
  以下の内容でメッセージを承りました。

  ===================================================
  < お名前 >
  {$name}

  < メールアドレス >
  {$email}

  < メッセージ >
  {$message}
  ===================================================

  ※当メールは送信専用となっております。
  　ご返信いただいても、お答えいたしかねますのでご了承ください。
  EOM;

  // 送信元のメールアドレスを変数fromEmailに格納(本番環境へのデプロイ時に正規のアドレスに変更すること！)
  $fromEmail = "hoge@yahoo.co.jp";

  // 送信元の名前を変数fromNameに格納
  $fromName = "Michi's Portfolio";

  // ヘッダ情報を変数headerに格納する
  $header = "From: " . mb_encode_mimeheader($fromName) . "<{$fromEmail}>";

  // 受信用のメールアドレスを変数myEmailに格納(本番環境へのデプロイ時に正規のアドレスに変更すること！)
  $myEmail = "hoge@gmail.com";

  // フォーム入力者へメールを送信する
  mb_send_mail($email, $subject, htmlspecialchars_decode($body, ENT_QUOTES), $header);

  // サイト管理者へメールを送信する
  mb_send_mail($myEmail, $subject, htmlspecialchars_decode($body, ENT_QUOTES), $header);

  //送信完了画面へ移動する
  header(('location: complete.php'));
  exit;
}
?>

<?php require_once 'head.php' ?>

<body>
  <main class="wrapper">
    <section id=contact class="confirm">
      <h2>Confirm</h2>
      <p class="confirm_text">下記の内容でメッセージを送信します。よろしければ「送信」ボタンを押してください。</p>
      <form action="confirm.php" method="post">
        <div class="contact_form">
          <label for="name">お名前</label>
          <input type="hidden" id="name" name="name" value="<?php echo $name; ?>">
          <p><?php echo $name; ?></p>
        </div>
        <div class="contact_form">
          <label for="email">メールアドレス</label>
          <input type="hidden" id="email" name="email" value="<?php echo $email; ?>">
          <p><?php echo $email; ?></p>
        </div>
        <div class="contact_form">
          <label for="message">メッセージ</label>
          <input type="hidden" id="message" name="message" value="<?php echo $message; ?>">
          <p><?php echo nl2br($message); ?></p>
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
