<?php
mb_language("Japanese");
mb_internal_encoding("UTF-8");

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    // POSTでのアクセスでない場合
    $name = '';
    $email = '';
    $subject = '';
    $message = '';
    $err_msg = '';
    $complete_msg = '';

} else {
    // フォームがサブミットされた場合（POST処理）
    // 入力された値を取得する
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // エラーメッセージ・完了メッセージの用意
    $err_msg = '';
    $complete_msg = '';

    // 空チェック
    if ($name == '' || $email == '' || $subject == '' || $message == '') {
        $err_msg = '全ての項目を入力してください。';
    }
    
    // エラーなし（全ての項目が入力されている）
    if ($err_msg == '') {
        $to = "colorful6668@gmail.com"; // 管理者のメールアドレスなど送信先
        // Yudaiより下記を追加
        $from = "Amy <" . $email . ">";

        // Yudaiより下記の1行変更
        // $headers = "From: " . $email . "\r\n"
        // Yudaiより下記を追加
        // 下記コメントアウトはコードの説明
            // Content-Type – メール形式
            // Return-Path – 送信先メールアドレスが受け取り不可の場合に、エラー通知のいくメールアドレス
            // From – 送信者の名前（または組織名）とメールアドレス
            // Sender – 送信者の名前（または組織名）とメールアドレス
            // Reply-To – 受け取った人に表示される返信の宛先
            // Organization – 送信者名（または組織名）
            // X-Sender – 送信者のメールアドレス
            // X-Priority – メールの重要度を表す
        $headers = '';
        $header .= "Content-Type: text/plain \r\n";
        $header .= "Return-Path: " . $to . " \r\n";
        $header .= "From: " . $from ." \r\n";
        $header .= "Sender: " . $from ." \r\n";
        $header .= "Reply-To: " . $email . " \r\n";
        $header .= "Organization: " . $name . " \r\n";
        $header .= "X-Sender: " . $email . " \r\n";
        $header .= "X-Priority: 3 \r\n";


        // 本文の最後に名前を追加
        $message .= "\r\n\r\n" . $name;

        // メール送信
        mb_send_mail($to, $subject, $message, $headers);

        // 完了メッセージ
        $complete_msg = '送信されました！
        <br>お問い合わせありがとうございます。<br>３日以内にメールにてご連絡いたします。<br>今しばらくお待ちください。';

        // 全てクリア
        $name = '';
        $email = '';
        $subject = '';
        $message = '';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-207322767-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-207322767-2');
    </script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colorful｜お問い合わせ</title>
    <link rel="stylesheet" href="css/ress.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    <meta name="description" content="素敵な出会いのお手伝いを。福岡の結婚相談所、カラフルです。オンライン婚活、各種イベント、カウンセラー相談により、安心、楽しい婚活を！お気軽にご相談ください">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hina+Mincho&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=WindSong&display=swap" rel="stylesheet">
    


    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/931c5e739a.js" crossorigin="anonymous"></script>

    <!--ハンバーガーメニュー-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
      $(function() {
      $('.three_line_btn').on("click", function(){
    
        $(this).toggleClass('open');
        $('#g_nav').toggleClass('open');
      });
    
    });
    
    // メニューをクリックされたら、非表示にする
    $(function() {
      $('.g_nav-menu li a').on("click", function(){
        $('#g_nav').removeClass('open');
      });
    });
    </script>

  </head>
  <body>

    <header class="header">
      <!-- ヘッダー左（ロゴ、会社名） -->
      <section class="header-left">
        <div class="site-logo"><img src="img/colorful-logo1.png" alt="ロゴ"></div>
      </section>

      <!-- ヘッダー右（グロナビ） -->
      <section class="header-right">
        <nav id="nav">
            <li>
              <a href="index.html"><span>TOP</span></a>
            </li>

            <li>
              <a href="first.html" target="_blank" rel="noopener"><span>初めての方へ</span></a>
            </li>

            <li>
              <a href="why.html" target="_blank" rel="noopener"><span>選ばれる理由</span></a>
            </li>

            <li>
              <a href="plan.html" target="_blank" rel="noopener"><span>プラン料金</span></a>
            </li>

            <li>
              <a href="counselor.html" target="_blank" rel="noopener"><span>カウンセラー</span></a>
            </li>

            <li>
              <a href="faq.html" target="_blank" rel="noopener"><span>FAQ</span></a>
            </li>

            <li>
              <a href="contact.php" target="_blank" rel="noopener"><span class="under-line">お問い合わせ</span></a>
            </li>


        </nav>
      </section>

      <!--共通ハンバーガーメニュー-->
      <div id="hamburger">
      <p class="three_line_btn">
        <span></span>
        <span></span>
        <span></span>
      </p>

      <!--ハンバーガー内のグロナビ-->
      <nav id="g_nav">
        <div class="g_nav-menu">

          <div class="g_nav-img"><img src="img/colorful-white-logo.png" alt=""></div>

          <ul>
            <li><a href="index.html"><span>トップページ</span></a></li>

            <li><a href="first.html" target="_blank" rel="noopener"><span>初めての方へ</span></a></li>

            <li><a href="why.html" target="_blank" rel="noopener"><span>選ばれる理由</span></a></li>

            <li><a href="plan.html" target="_blank" rel="noopener"><span>プラン料金</span></a></li>

            <li><a href="counselor.html" target="_blank" rel="noopener"><span>カウンセラー</span></a></li>

            <li><a href="faq.html" target="_blank" rel="noopener"><span>よくある質問</span></a></li>

          </ul>

          <!--無料相談はこちらボタン-->
          <div class="contactbtn">
            <a href="contact.php" target="_blank" rel="noopener">
              <span>＞ 無料相談はこちら</span>
            </a>
          </div>
        </div>

        <!--ハンバーガー内SNSセクション-->
        <div class="sns-icons">
          <ul>
            <li>
              <a href="tel:092-753-6668" target="_blank" rel="noopener"><i class="fas fa-phone fa-lg"></i></a>
            </li>

            <!--インスタグラム-->
            <li>
              <a href="https://www.instagram.com/colorful0122/" target="_blank" rel="noopener"><i class="fab fa-instagram fa-lg"></i></a>
            </li>

            <!--LINE-->
            <li>
              <a href="https://lin.ee/oYkXzqj" target="_blank" rel="noopener"><i class="fab fa-line fa-lg"></i></a>
            </li>
          </ul>
        </div>
      </nav>
      </div>



    </header>

    <main class="main">
      <!--共通セクションタイトル-->
      <section class="top-title">
        <h1 class="section-title">Contact Us</h1>
        <p class="small-title">-お問い合わせ-</p>
      </section>

      <!--共通メインイメージ-->
      <section class="main-img">
        <img src="img/mail-flower.png" alt="">
      </section>

      <!--共通 h2 class="pink-txt"-->
      <h2 class="pink-txt">無料相談フォーム<i class="far fa-envelope"></i></h2>
      

      <?php if ($err_msg != ''): ?>
        <div class="alert alert-danger">
      <?php echo $err_msg; ?>
          </div>
      <?php endif; ?>

      <?php if ($complete_msg != ''): ?>
          <div class="alert alert-success">
              <?php echo $complete_msg; ?>
          </div>
      <?php endif; ?>
            
      <form class="form" method="post">

        <li class="form-center">
          
            <!-- お名前 -->
          <div class="txt-area">
            <p>お名前</p>
            <input type="text"  name="name"  value="<?php echo $name; ?>">
          </div>
          

          <!-- メールアドレス -->
          <div class="txt-area">
            <p>メールアドレス</p>
            <input type="text"  name="email"  value="<?php echo $email; ?>">
          </div>
          

          <!-- 件名 -->
          <div class="txt-area">
            <p>件名</p>
            <input type="text"  name="subject" value="<?php echo $subject; ?>">
          </div>
          

          <!-- 本文 -->
          <div class="txt-area">
            <p>お問い合わせ内容</p>
          <textarea  name="message" rows="4" ><?php echo $subject; ?></textarea>
          </div>
          

          <div class="sent-btn">
            <button type="submit">送信</button>
          </div>

        </li>

      </form>


    </main>

    <footer>
      <section class="footer">
        
        <div class="footer-left">
          <li>
            <img src="img/colorful-white-logo.png" alt="サイトロゴ">
          </li>
        </div>

        <div class="footer-right">
          <li>
            <p>カラフル福岡結婚相談所</p>
            <p>810-0024<br>福岡県福岡市中央区桜坂<br>
              </p>
            <p><a href="tel:092-753-6668" target="_blank" rel="noopener noreferrer" >tel:092-753-6668</a></p>
          </li>
        </div>
      </section>

      <section class="copy-right">
        <p>©︎ 2021, Colorful inc, All Rights Reserved. 
        </p>
      </section>

    </footer>

  </body>
</html>