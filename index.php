<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="守成クラブあさの横浜会場！守成クラブは、中小企業の経営者による異業種商談会を運営している全国組織の会です。" />
  <meta property="og:site_name" content="守成クラブあさの横浜会場" />
  <meta property="og:url" content="https://asayoko-shusei.online/" />
  <meta property="og:title" content="守成クラブあさの横浜会場" />
  <meta property="og:description" content="守成クラブあさの横浜会場！守成クラブは、中小企業の経営者による異業種商談会を運営している全国組織の会です。" />
  <meta property="og:type" content="website" />
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:description" content="守成クラブあさの横浜会場！守成クラブは、中小企業の経営者による異業種商談会を運営している全国組織の会です。">
  <meta name="twitter:title" content="守成クラブあさの横浜会場">
  <meta name="twitter:url" content="https://asayoko-shusei.online">
  <meta name="twitter:domain" content="asayoko-shusei.online">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon32.png" sizes="32x32" />
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon192.png" sizes="192x192" />
  <!-- CSS BootStrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/my-bootstrap.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ress.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css?v_02">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/toPagetop.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>守成クラブ｜あさの横浜会場</title>
  <?php wp_head(); ?>
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-87FXVWYFXK"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-87FXVWYFXK');
</script>

<body>
  <header class="header container-fluid fixed-top js-header">
    <div class="d-flex justify-content-between align-items-center px-3 px-lg-5">
      <h1 class="mobile-logo d-block d-lg-none">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/mobile-logo.png" alt="守成クラブあさの横浜" /></a>
      </h1>
      <h1 class="pc-logo d-none d-lg-block">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/pc-logo.png" alt="守成クラブあさの横浜" /></a>
      </h1>
    </div>
  </header>


  <!-- ファーストビュー -->
  <main>
    <section class="fv js-mv slider">
      <div class="img-wrap">
        <p class="fv-headline">横浜の例会はあさから始まる！</p>
        <p class="fv-text">横浜では11会場目、関東では守成クラブ初となる「あさ」の会場です。</p>
      </div>
    </section>

    <section class="application">
      <h2>例会申し込みフォーム</h2>
      <div class="application-btn schedule1">
        <a href="https://www.shuseiclub.jp/asanoyokohama/entry_form/index.php?e=7189">
          <span class="label">第26回 3月16日(土) 例会お申し込みフォーム</span>
        </a>
      </div>
      <div class="application-btn schedule2">
        <a href="https://www.shuseiclub.jp/asanoyokohama/entry_form/index.php?e=7232">
          <span class="label">第27回 4月20日(土) 例会お申し込みフォーム</span>
        </a>
      </div>
      <div class="application-btn schedule3">
        <a href="https://www.shuseiclub.jp/asanoyokohama/entry_form/index.php?e=7357">
          <span class="label">第28回 5月18日(土) 例会お申し込みフォーム</span>
        </a>
      </div>
    </section>

    <!-- 守成ロゴ -->
    <section class="shusei-logo">
      <!-- <h2>例会スケジュール</h2> -->
      <div class="shusei-logo-wrap">
        <!-- <div class="shusei-logo-description">
        <a href="#">
          <span class="label">第18回例会　7月15日</span>
        </a>
      </div> -->
        <div class="shusei-logo-img">
          <img src="./img/slider_logo.png" alt="がんばれ">
        </div>
      </div>

    </section>

    <!-- CONTENTS -->
    <section class="about">
      <div class="about-wrap">
        <div class="delimiter">
          <div class="section-title">
            <h2>Contents</h2>
          </div>
          <!-- タブメニューを構成するブロック -->
          <div class="about-list">
            <a class="about-list-item is-btn-active">例会情報</a>
            <a class="about-list-item">代表あいさつ</a>
            <a class="about-list-item">守成クラブとは</a>
          </div>
        </div>
      </div>

      <!-- コンテンツを構成するブロック -->
      <div class="about-contents-wrap">
        <div class="about-contents is-contents-active">
          <div class="about-img">
            <img src="./img/meeting.jpg" alt="例会時の写真">
          </div>
          <div class="about-text">
            <h2>例会情報</h2>
            <div class="schedule1">
              <h3>第26回例会</h3>
              <p>日時:2024年3月16日(土)</p>
            </div>
            <div class="schedule2">
              <h3>第27回例会</h3>
              <p>日時:2024年4月20日(土)</p>
            </div>
            <div class="schedule3">
              <h3>第28回例会</h3>
              <p>日時:2024年5月18日(土)</p>
            </div>
            <p>
              受付9:30～(ゲスト様は9:15までにお願い致します) <br>
              開始時間 : 10:00 <br>
              終了時間 : 12:30</p>
            <p>例会費用:5,000円(食事付き)<br><br>
              場所: 〒220-0005 神奈川県横浜市西区南幸2-16-28 <br>
              　　　ホテル・ザ・ノットヨコハマ</p>
            <br><br>
          </div>
        </div>
        <div class="about-contents">
          <div class="about-img">
            <img src="./img/ookado.jpg" alt="大門代表">
          </div>
          <div class="about-text">
            <h2>代表あいさつ</h2>
            <h3>代表世話人　大門さおり</h3>
            <p>
              皆様こんにちは。<br>
              2022 年 2 月 19 日に神奈川県で 11 会場目、本州では初の朝会場「あさの横浜」が立ち上がりました。
            </p>
            <br>
            <p>
              感染症などの影響で世の中は大きく動き、皆さまの生活にも変化があったことと思います。<br>
              懇親会も解散時間が早まり、おうち時間が増えました。
            </p>
            <br>
            <p>
              健康への意識もさらに高まり、新たな秩序を求めて動き出しています。
            </p>
            <br>
            <p>
              あさの横浜会場は、時代の最先端となる会場を実現すべく、ビジネスマッチングに重きを置いております。<br>
              参加される皆さまのビジネス拡大のチャンスがある会場の一つとしてご活用いただければと思います。
            </p>
          </div>

        </div>
        <div class="about-contents">
          <div class="about-img">
            <img src="./img/group-photo.webp" alt="守成クラブ集合写真">
          </div>
          <div class="about-text">
            <h2>守成クラブとは</h2>
            <h3>守成クラブは、中小企業経営者かそれに準ずる方によって構成される、会員制の商談会！</h3>
            <p>2002年4月、日本商工振興会を運営母体に、守成クラブ創設者 伊藤小一他17名で、<br>
              札幌からスタートしました。<br>
              現在は全国に213を超える会場が存在、会員数は約20,000社を超えます。</p>
          </div>
        </div>
      </div>
      </div>
    </section>

    <!-- 例会申し込みボタン -->
    <div class="application">
      <div class="application-btn schedule1">
        <a href="https://www.shuseiclub.jp/asanoyokohama/entry_form/index.php?e=7189">
          <span class="label">第26回 3月16日(土) 例会お申し込みフォーム</span>
        </a>
      </div>
      <div class="application-btn schedule2">
        <a href="https://www.shuseiclub.jp/asanoyokohama/entry_form/index.php?e=7232">
          <span class="label">第27回 4月20日(土) 例会お申し込みフォーム</span>
        </a>
      </div>
      <div class="application-btn schedule3">
        <a href="https://www.shuseiclub.jp/asanoyokohama/entry_form/index.php?e=7357">
          <span class="label">第28回 5月18日(土) 例会お申し込みフォーム</span>
        </a>
      </div>
    </div>

    <!-- アクセス -->
    <section class="access">
      <div class="access-container">
        <div class="access-headline">
          <h2>会場情報</h2>
        </div>
        <div class="access-head">
          <div class="access-img-name">
            <p>ホテルザノット横浜</p>
            <p>2階トリニティ</p>
          </div>
          <div class="access-img">
            <img src="./img/access-img.png" alt="会場写真">
          </div>
        </div>
        <div class="access-desc">
          <h3>Access</h3>
          <div class="access-desc-items">
            <div class="access-desc-map">
              <a href="./img/access-map.png" target="_blank">
                <img src="./img/access-map.png" alt="アクセスマップ">
              </a>
            </div>
            <div class="access-desc-address">
              <p>〒220-0005 横浜市西区南幸 2-16-28</p>
              <p>TEL: 045-311-1311</p>
            </div>
            <div class="google-map-box">
              <div class="google-map">
                <a href="https://goo.gl/maps/6DiZgfsJ85zndZRY9">
                  <div style="width: 100%">
                    GoogleMap
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- お問い合わせ -->
    <section class="contact">
      <div class="contact-container">
        <div class="contact-headline">
          <h2>お問い合わせ</h2>
        </div>

        <form id="contact-form" action="confirm.php" method="post">
          <div class="form-group">
            <label for="memberType">会員区分:　<span class="any">任意</span></label>
            <select id="memberType" name="memberType">
              <option class="default" value="">--選択してください--</option>
              <option value="正会員【ゴールドバッチ】">正会員【ゴールドバッチ】</option>
              <option value="正会員【赤バッチ】">正会員【赤バッチ】</option>
              <option value="準会員【緑バッチ】">準会員【緑バッチ】</option>
              <option value="非会員">非会員</option>
            </select>
          </div>
          <div class="form-group">
            <label for="registrationLocation">登録会場:　<span class="any">任意</span></label></label>
            <input type="text" id="registrationLocation" name="registrationLocation">
          </div>
          <div class="form-group">
            <label for="companyName">会社名:　<span class="any">任意</span></label></label>
            <input type="text" id="companyName" name="companyName">
          </div>
          <div class="form-group">
            <label for="name">お名前:　<span class="required">必須</span></label>
            <input type="text" id="name" name="name" required>
            <label for="kana">ふりがな:　<span class="required">必須</span></label>
            <input type="text" id="kana" name="kana" required>
          </div>
          <div class="form-group">
          </div>
          <div class="form-group">
            <label for="email">Email:　<span class="required">必須</span></label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="phone">連絡先:　<span class="required">必須</span></label>
            <input type="text" id="phone" name="phone" required>
          </div>
          <div class="form-group">
            <label for="message">お問い合わせ内容:　<span class="required">必須</span></label>
            <textarea id="message" name="message" required></textarea>
          </div>
          <div class="submit-button">
            <div class="form-group">
              <input type="submit" value="確認画面へ">
            </div>
          </div>
        </form>
        <div id="form-result"></div>
      </div>

    </section>
  </main>

  <!-- TOPに戻るボタン -->
  <a href="#" id="page_top"></a>
  <footer>
    <div class="footer-items">
      <div class="footer-item">
        <a href="#"><img class="mobile-logo" src="./img/mobile-logo.png" alt="守成クラブあさの横浜" /></a>
        <a href="#"><img class="pc-logo" src="./img/pc-logo.png" alt="守成クラブあさの横浜" /></a>
      </div>
    </div>
    <div class="copyright">
      <p>Copyright © 2022守成クラブあさの横浜会場</p>
    </div>
  </footer>
  <script src="./js/app.js"></script>
  <script src="https://kit.fontawesome.com/e7eaec89a2.js" crossorigin="anonymous"></script>
  <?php wp_footer(); ?>
</body>

</html>