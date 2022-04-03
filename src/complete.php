<?php

require_once 'email.php';
session_start();

/* 以下、メール送信の処理
---------------------------------------------------------------------------------------------------------------- */
// 送信ボタンが押されたら
if (!empty($_SESSION['token']) && $_POST['token'] === $_SESSION['token']) {
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
  {$name} 様

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

  // 送信元の名前を変数fromNameに格納
  $fromName = "Michi's Portfolio";

  // ヘッダ情報を変数headerに格納する
  $header = "From: " . mb_encode_mimeheader($fromName) . "<{$fromEmail}>";

  // フォーム入力者へメールを送信する
  mb_send_mail($email, $subject, $body, $header);

  // サイト管理者へメールを送信する
  mb_send_mail($toEmail, $subject, $body, $header);
} else {
  // トークンが一致しない場合、不正アクセス画面へ移動する
  header(("location: alert.php"));
  exit;
}
?>

<?php require_once 'head.php' ?>

<body>
  <main class="wrapper">
    <section id=contact class="complete">
      <h2>送信完了</h2>
      <p>メッセージありがとうございます。</p>
      <p>ご入力いただいたメールアドレス宛に、確認メールを送信しましたのでご確認ください。</p>
      <p>尚、確認メールが届かない場合は、メールアドレスが誤っているか、迷惑メールフォルダなどに振り分けられている可能性がございますので、ご確認をお願いいたします。</p>
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
