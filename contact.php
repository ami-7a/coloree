<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colorful｜お問い合わせ</title>
    <link rel="stylesheet" href="css/ress.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/contact.css">
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
      

      <!--お問い合わせフォーム-->
      <form method="post" action="sent.php" id="form" class="topBefore">
        <input class="name" type="text" placeholder="お名前" name="name">
        <input class="name" type="text" placeholder="ふりがな" name="name2">
        <input class="age" type="age" placeholder="ご年齢" name="age">
        <input class="live" type="text" placeholder="お住まいの都道府県" name="live">
        <input class="email" type="email" placeholder="メール" name="email">
        <input class="tell" type="tel" placeholder="お電話番号" name="tell">

        <textarea id="message" type="text" placeholder="お問い合わせ"></textarea>
        
        <input id="submit" type="submit" value="送信">
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