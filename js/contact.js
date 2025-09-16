// Hamburger Menu Toggle
const hamburger = document.getElementById("hamburger");
const navLinks = document.getElementById("nav-links");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("open");
  hamburger.classList.toggle("toggle");
});

// メニュー内リンクをクリックしたら閉じる処理
navLinks.querySelectorAll("a").forEach((link) => {
  link.addEventListener("click", () => {
    navLinks.classList.remove("open"); // メニューを閉じる
    hamburger.classList.remove("toggle"); // ハンバーガーアイコンを戻す
  });
});

// ページ内リンクでリンク先の要素にヘッダー（.navbar）が被らないようにするスクリプト
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault(); // 通常のリンク動作をキャンセル

    // ターゲットとなるIDを取得
    const targetId = this.getAttribute("href").substring(1); // #form から form を取得
    const targetElement = document.getElementById(targetId); // 対象の要素を取得

    if (targetElement) {
      const headerHeight = document.querySelector(".navbar") ? document.querySelector(".navbar").offsetHeight : 0; // ヘッダーの高さを取得（存在する場合）

      // スクロール位置を調整してスムーズにスクロール
      window.scrollTo({
        top: targetElement.offsetTop - headerHeight, // ヘッダー分だけオフセット
        behavior: "smooth", // スムーズスクロール
      });
    }
  });
});

// ページロード時に、もしURLにアンカーが含まれていればその位置にスクロール
window.addEventListener('load', () => {
  const hash = window.location.hash;  // 現在のURLのハッシュ（#form など）

  if (hash) {
    const targetElement = document.querySelector(hash);  // ハッシュに対応する要素を取得

    if (targetElement) {
      const headerHeight = document.querySelector(".navbar") ? document.querySelector(".navbar").offsetHeight : 0; // ヘッダーの高さを取得

      // スクロール位置を調整してスムーズにスクロール
      window.scrollTo({
        top: targetElement.offsetTop - headerHeight,  // ヘッダー分だけオフセット
        behavior: 'smooth'  // スムーズスクロール
      });
    }
  }
});

// # をクリックしたときにページトップにスクロールする
document.querySelectorAll('a[href="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault(); // 通常のリンク動作をキャンセル

    // ページトップにスクロール
    window.scrollTo({
      top: 0, // ページトップにスクロール
      behavior: "smooth", // スムーズスクロール
    });
  });
});

// ページロード時にフェードイン
window.addEventListener("load", () => {
  document.querySelector("main").classList.add("loaded");
});

  
  // Prefetch機能の維持
  document.querySelectorAll('a[href]').forEach((link) => {
    const href = link.getAttribute("href");
    if (href && !href.startsWith("#")) {
      const prefetchLink = document.createElement("link");
      prefetchLink.rel = "prefetch";
      prefetchLink.href = href;
      document.head.appendChild(prefetchLink);
    }
  });

  // お問い合わせページ用 文字数のカウントダウン
  document.addEventListener("DOMContentLoaded", () => {
    const textarea = document.getElementById("message");
    const charCount = document.getElementById("charCount");
    const maxLength = 1500; // 最大文字数

    // 初期化：残り文字数を表示
    charCount.textContent = `${maxLength - textarea.value.length}文字以内`;

    // 入力イベントで残り文字数を更新
    textarea.addEventListener("input", () => {
        const remaining = maxLength - textarea.value.length;

        charCount.textContent = `残り${remaining}文字`;

        // 残り文字数が少なくなったら警告色を適用
        if (remaining < 50) {
            charCount.classList.add("warning");
        } else {
            charCount.classList.remove("warning");
        }
    });
});
