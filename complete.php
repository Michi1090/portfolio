<?php

session_start();

/* 以下、メール送信の処理
---------------------------------------------------------------------------------------------------------------- */
// 送信ボタンが押されたら
if (isset($_SESSION['token']) && $_POST['token'] === $_SESSION['token']) {
  // //フォームのボタンが押されたら、POSTされたデータを各変数に格納
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

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
  // 本番用
  // $fromEmail = "@yahoo.co.jp";

  // 送信元の名前を変数fromNameに格納
  $fromName = "Michi's Portfolio";

  // ヘッダ情報を変数headerに格納する
  $header = "From: " . mb_encode_mimeheader($fromName) . "<{$fromEmail}>";

  // 受信用のメールアドレスを変数myEmailに格納(本番環境へのデプロイ時に正規のアドレスに変更すること！)
  $myEmail = "hoge@gmail.com";
  // 本番用
  // $myEmail = "@gmail.com";

  // フォーム入力者へメールを送信する
  mb_send_mail($email, $subject, $body, $header);

  // サイト管理者へメールを送信する
  mb_send_mail($myEmail, $subject, $body, $header);
} else {
  //送信完了画面へ移動する
  header(("location:  wrong_access.php"));
  exit;
}
?>

<?php require_once 'head.php' ?>

<body>
  <main class="wrapper">
    <section id=contact class="complete">
      <h2>送信完了</h2>
      <p>メッセージありがとうございました。入力したメールアドレス宛に確認メールを送信しましたので、ご確認ください。</p>
      <p>尚、数分経過してもメールが届かない場合はメッセージが送信できていない可能性がございます。お手数ですが、トップページよりもう一度メッセージの送信をお願いいたします。</p>
      <a href="index.php">
        <button class="btn" type="button">トップページに戻る</button>
      </a>
    </section><!-- /#contact .send-->
  </main><!-- /.wrapper -->

  <footer>
    <p>&copy; 2021 Michinobu MASAYAMA</p>
  </footer><!-- /footer -->

  <!-- JavaScript -->
  <script src="js/forbid_back.js"></script><!-- ブラウザバックの禁止 -->
</body>

</html>
