// 画像データと関連情報を一元管理する配列
const imageData = [
  {
    src: "../img/sasagawa1.jpg",
    repName: "代表世話人",
    repTitle: "笹川 政吉",
  },
  {
    src: "../img/img2.jpg",
    repName: "世話人2",
    repTitle: "氏名2",
  },
  {
    src: "../img/img3.jpg",
    repName: "世話人3",
    repTitle: "氏名3",
  },
  // 他の画像と関連情報も同様に追加
];

// クリックされたサムネイルの情報を更新する関数
function updateImageData(clickedImageSrc) {
  const repData = imageData.find((data) => data.src === clickedImageSrc);

  // クリックされたサムネイルに関連するHTMLを取得
  const newHTML = bios[clickedImageSrc];

  // 表示を切り替える要素に新しいHTMLと代表世話人情報を設定
  document.getElementById("mainBio").innerHTML = newHTML;
  document.getElementById("repName").textContent = repData.repName;
  document.getElementById("repTitle").textContent = repData.repTitle;

  // 画像を更新
  document.getElementById("mainImage").src = clickedImageSrc;

  // each-img1、each-img2、each-img3 の各要素の src を更新
  const eachImages = document.querySelectorAll(".each-img1, .each-img2, .each-img3");
  eachImages.forEach((element, index) => {
    const newSrc = imageeach[index].src;
    element.src = newSrc;
  });
}

// 各イメージをクリックしたときの共通処理
function handleImageClick(newSrc) {
  // mainImageのsrc属性を新しいsrcに変更
  document.getElementById("mainImage").src = newSrc;

  // 画像データと関連情報の更新処理を呼び出す
  updateImageData(newSrc);
}

// 各イメージをクリックしたときのイベントリスナーを設定
document.querySelectorAll(".each-img1, .each-img2, .each-img3").forEach((element, index) => {
  element.addEventListener("click", function () {
    handleImageClick(`../img/sasagawa${index + 1}.jpg`);
  });
});

// 他のコードはそのまま

// thumbクラスを持つすべてのイメージ要素を取得
const thumbImages = document.querySelectorAll(".thumb");

// mainImageContainer要素を取得
const mainImageContainer = document.querySelector("#mainImageContainer");

// thumbImagesの各要素にクリックイベントリスナーを設定
thumbImages.forEach(function (image) {
  image.addEventListener("click", function () {
    // クリックされたイメージのsrc属性を取得
    const clickedImageSrc = image.getAttribute("src");

    // クリックされたイメージに関連する情報を取得
    const repData = imageData.find((data) => data.src === clickedImageSrc);

    // 画像を更新
    document.getElementById("mainImage").src = clickedImageSrc;
    document.getElementById("mainImage").alt = repData.repName; // 代表者名をalt属性に設定

    // mainImageContainer内の要素を全て削除
    while (mainImageContainer.firstChild) {
      mainImageContainer.removeChild(mainImageContainer.firstChild);
    }

    // 新しい要素を追加
    const newImage = document.createElement("img");
    newImage.src = clickedImageSrc;
    newImage.alt = repData.repName; // 代表者名をalt属性に設定
    mainImageContainer.appendChild(newImage);

    // 画像データと関連情報の更新処理を呼び出す
    updateImageData(clickedImageSrc);
  });
});
