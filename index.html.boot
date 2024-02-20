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
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:description" content="守成クラブあさの横浜会場！守成クラブは、中小企業の経営者による異業種商談会を運営している全国組織の会です。" />
  <meta name="twitter:title" content="守成クラブあさの横浜会場" />
  <meta name="twitter:url" content="https://asayoko-shusei.online" />
  <meta name="twitter:domain" content="asayoko-shusei.online" />
  <title>守成クラブ｜あさの横浜会場</title>
  <link rel="icon" href="./img/favicon32.png" sizes="32x32" />
  <link rel="icon" href="./img/favicon192.png" sizes="192x192" />
  <!-- CSS BootStrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

  <link rel="stylesheet" href="./css/my-bootstrap.css" />
  <link rel="stylesheet" href="./css/ress.css" />
  <link rel="stylesheet" href="./css/header.css" />
  <!-- <link rel="stylesheet" href="./css/footer.css" /> -->
  <link rel="stylesheet" href="./css/main2.css" />
  <link rel="stylesheet" href="./css/toPagetop.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
  <!-- ヘッダーここから -->
  <header class="header container-fluid fixed-top js-header">
    <div class="d-flex justify-content-between align-items-center px-3 px-lg-5">
      <h1 class="mobile-logo d-block d-lg-none">
        <a href="#"><img src="./img/mobile-logo.png" alt="守成クラブあさの横浜" /></a>
      </h1>
      <h1 class="pc-logo d-none d-lg-block">
        <a href="#"><img src="./img/pc-logo.png" alt="守成クラブあさの横浜" /></a>
      </h1>
      <h3><a href="./manager/">世話人紹介</a></h3>
    </div>
  </header>
  <!-- ヘッダーここまで -->

  <!-- TOPに戻るボタン -->
  <div class="container-fruid">
    <a href="#" id="page_top"></a>
  </div>

  <!-- ファーストビュー -->
  <section class="fv js-mv slider row container-fluid mb-5 slider">
    <div class="fv-wrap d-flex align-items-center">
      <div class="d-flex justify-content-center align-items-center flex-column col-12">
        <p class="fv-head mb-1">横浜の例会はあさから始まる！</p>
        <p class="fv-text">
          横浜では11会場目、関東では守成クラブ初となる「あさ」の会場です。
        </p>
      </div>
    </div>
  </section>

  <section class="application container mb-2 mb-lg-5">
    <div class="d-flex flex-column justify-content-center align-items-center">
      <h2 class="fw-bold mb-3 mb-lg-5">例会申し込みフォーム</h2>
      <div class="application-btn schedule1 mb-3 mb-lg-5">
        <a href="https://www.shuseiclub.jp/asanoyokohama/entry_form/index.php?e=6986">
          <button type="button" class="btn btn-outline-primary px-4">
            第24回 1月20日(土) 例会お申し込みフォーム
          </button>
        </a>
      </div>
      <div class="application-btn schedule2 mb-5">
        <a href="https://www.shuseiclub.jp/asanoyokohama/entry_form/index.php?e=7055">
          <button type="button" class="btn btn-outline-primary px-4">
            第25回 2月17日(土) 例会お申し込みフォーム
          </button>
        </a>
      </div>
    </div>
  </section>

  <!-- 守成ロゴ -->
  <section class="shusei-logo container mb-3 mb-lg-5">
    <div class="shusei-logo-wrap d-flex justify-content-center">
      <img class="col-6 col-lg-4" src="./img/slider_logo.png" alt="がんばれ" />
    </div>
  </section>

  <!-- CONTENTS -->
  <section class="about mb-5">
    <div class="delimiter row container-fluid">
      <div class="delimiter-wrap d-flex align-items-center">
        <div class="d-flex justify-content-center align-items-center col-12">
          <h2 class="contents">Contents</h2>
        </div>
      </div>
    </div>

    <!-- タブメニューを構成するブロック -->
    <div class="container-fluid row">
      <ul class="nav nav-tabs container-fluid bg-secondary bg-gradient" id="myTab" role="tablist">
        <div class="container d-flex justify-content-center  col-12">
          <li class="nav-item" role="presentation">
            <button class="nav-link bg-light me-2 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
              type="button" role="tab" aria-controls="home" aria-selected="true">
              例会情報
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link bg-light me-2" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
              type="button" role="tab" aria-controls="profile" aria-selected="false">
              代表あいさつ
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link bg-light me-2" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
              type="button" role="tab" aria-controls="contact" aria-selected="false">
              守成クラブとは
            </button>
          </li>
        </div>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center
            align-items-lg-start">
            <div class="me-lg-3 mt-3">
              <img class="col-12" src="./img/meeting.jpg" alt="例会時の写真" />
            </div>
            <div class="mt-3">
              <h2>例会情報</h2>
              <div class="schedule1">
                <h3>第24回例会</h3>
                <p>日時:2024年1月20日(土)</p>
              </div>
              <div class="schedule2">
                <h3>第25回例会</h3>
                <p>日時:2024年2月17日(土)</p>
              </div>
              <p>
                受付9:30～(ゲスト様は9:15までにお願い致します) <br />
                開始時間 : 10:00 <br />
                終了時間 : 12:30
              </p>
              <p>
                例会費用:5,000円(食事付き)<br /><br />
                場所: 〒220-0005 神奈川県横浜市西区南幸2-16-28 <br />
                　　　ホテル・ザ・ノットヨコハマ
              </p>
              <br /><br />
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center
        align-items-lg-start">
            <div class="me-lg-3 mt-3">
              <img class="col-12" src="./img/sasagawa1.jpg" alt="笹川代表">
            </div>
            <div class="me-lg-3 mt-3">
              <h2>代表あいさつ</h2>
              <h3>代表世話人　笹川 政吉</h3>
              <p>
                皆様こんにちは。2022 年 2 月 19 日に神奈川県で 11 会場目、<br>
                東日本では初となる朝会場<br>
                「あさの横浜会場」を立ち上げる運びとなりました。<br>
                2021 年はコロナ渦の中、例会は時短になり、<br>
                懇親会もなくなり、なかなかビジネスにつながらなかったことも多かったと思います。<br>
                新型コロナウイルスの感染拡大が収まり、世の中はまた新たな秩序を求めて動き出しコロナと共存する時代が長く続くと考えられます。<br>
                朝の横浜会場は、新しい時代に向けて、皆様のビジネスを拡大できるチャンスある会場の一つとして<br>
                皆様にご活用いただければと思います。</p>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center align-items-lg-start">
            <div class="me-lg-3 mt-3">
              <img class="col-12" src="./img/group-photo.jpg" alt="守成クラブ集合写真" />
            </div>
            <div class="me-lg-3 mt-3">
              <h2>守成クラブとは</h2>
              <h3>
                守成クラブは、中小企業経営者かそれに準ずる方によって構成される、会員制の商談会！
              </h3>
              <p>
                2002年4月、日本商工振興会を運営母体に、守成クラブ創設者
                伊藤小一他17名で、<br />
                札幌からスタートしました。<br />
                現在は全国に213を超える会場が存在、会員数は約20,000社を超えます。
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="application container mb-5">
    <div class="d-flex flex-column justify-content-center align-items-center">
      <h2 class="fw-bold mb-3 mb-lg-5">例会申し込みフォーム</h2>
      <div class="application-btn schedule1 mb-3 mb-lg-5">
        <a href="https://www.shuseiclub.jp/asanoyokohama/entry_form/index.php?e=6986">
          <button type="button" class="btn btn-outline-primary px-4">
            第24回 1月20日(土) 例会お申し込みフォーム
          </button>
        </a>
      </div>
      <div class="application-btn schedule2 mb-5">
        <a href="https://www.shuseiclub.jp/asanoyokohama/entry_form/index.php?e=7055">
          <button type="button" class="btn btn-outline-primary px-4">
            第25回 2月17日(土) 例会お申し込みフォーム
          </button>
        </a>
      </div>
    </div>
  </section>

  <!-- アクセス -->
  <section class="access mb-5">
    <div class="container-fluid mb-3">
      <div class="row">
        <div class="d-flex justify-content-center">
          <h2>会場情報</h2>
        </div>
        <p class="mb-0">ホテルザノット横浜<br>2階トリニティ</p>
      </div>
      <!-- <div class="d-flex justify-content-center">
        <img class="col-8" src="./img/access-img.png" alt="会場写真" />
      </div> -->
    </div>

    <!-- <div class="row">
      <h3 class="ms-5">Access</h3>
      <div class="access-desc-items d-flex flex-column flex-lg-row justify-content-center">
        <div class="col-10 col-lg-3 mb-3">
          <a href="./img/access-map.png" target="_blank">
            <img class="col-12" src="./img/access-map.png" alt="アクセスマップ" />
          </a>
        </div>
        <div class="access-desc-address d-flex justify-content-center flex-column col-lg-3 ms-3">
          <p>〒220-0005</p>
          <p>横浜市西区南幸 2-16-28</p>
          <p>TEL: 045-311-1311</p>
        </div>
          <div class="google-map">
            <a href="https://goo.gl/maps/6DiZgfsJ85zndZRY9">
              <button type="button" class="btn btn-secondary ">GoogleMap</button>
            </a>
          </div>
        </div>
      </div>
    </div>
    </div> -->
  </section>

  <!-- お問い合わせ -->
  <section class="contact container">
    <div class="contact-container">
      <div class="contact-headline">
        <h2>お問い合わせ</h2>
      </div>

      <form id="contact-form" action="confirm.php" method="post">
        <div class="form-group">
          <label for="memberType">会員区分:　<span class="any">任意</span></label>
          <select id="memberType" name="memberType">
            <option class="default" value="">--選択してください--</option>
            <option value="正会員【ゴールドバッチ】">
              正会員【ゴールドバッチ】
            </option>
            <option value="正会員【赤バッチ】">正会員【赤バッチ】</option>
            <option value="準会員【緑バッチ】">準会員【緑バッチ】</option>
            <option value="非会員">非会員</option>
          </select>
        </div>
        <div class="form-group">
          <label for="registrationLocation">登録会場:　<span class="any">任意</span></label>
          <input type="text" id="registrationLocation" name="registrationLocation" />
        </div>
        <div class="form-group">
          <label for="companyName">会社名:　<span class="any">任意</span></label>
          <input type="text" id="companyName" name="companyName" />
        </div>
        <div class="form-group">
          <label for="name">お名前:　<span class="required">必須</span></label>
          <input type="text" id="name" name="name" required />
          <label for="kana">ふりがな:　<span class="required">必須</span></label>
          <input type="text" id="kana" name="kana" required />
        </div>
        <div class="form-group"></div>
        <div class="form-group">
          <label for="email">Email:　<span class="required">必須</span></label>
          <input type="email" id="email" name="email" required />
        </div>
        <div class="form-group">
          <label for="phone">連絡先:　<span class="required">必須</span></label>
          <input type="text" id="phone" name="phone" required />
        </div>
        <div class="form-group">
          <label for="message">お問い合わせ内容:　<span class="required">必須</span></label>
          <textarea id="message" name="message" required></textarea>
        </div>
        <div class="submit-button">
          <div class="form-group">
            <input type="submit" value="確認画面へ" />
          </div>
        </div>
      </form>
      <div id="form-result"></div>
    </div>
  </section>

  <footer class="container-fluid">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <script src="./js/app.js"></script>
  <script src="https://kit.fontawesome.com/e7eaec89a2.js" crossorigin="anonymous"></script>
</body>

</html>