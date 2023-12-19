function changeMainImage(newSrc) {
  // mainImageのsrc属性を新しいsrcに変更
  document.getElementById("mainImage").src = newSrc;
}

// sasagawa1の画像をクリックしたときの処理
document.querySelector(".data-img1").addEventListener("click", function () {
  changeMainImage("../img/sasagawa1.jpg");
});

// sasagawa2の画像をクリックしたときの処理
document.querySelector(".data-img2").addEventListener("click", function () {
  changeMainImage("../img/sasagawa2.jpg");
});

// sasagawa3の画像をクリックしたときの処理
document.querySelector(".data-img3").addEventListener("click", function () {
  changeMainImage("../img/sasagawa3.jpg");
});

document.querySelectorAll(".thumb").forEach(function (thumbnail) {
  thumbnail.addEventListener("click", function () {
    const newSrc = this.getAttribute("src");
    changeMainImage(newSrc);
  });
});

// クリックされたサムネイルに関連するHTMLを取得
const newHTML = bios[newSrc];

// 表示を切り替える要素に新しいHTMLと代表世話人情報を設定
document.getElementById("mainBio").innerHTML = newHTML;
document.getElementById("repName").textContent = representatives[newSrc].repName;
document.getElementById("repTitle").textContent = representatives[newSrc].repTitle;


const bios = {
  "../img/sasagawa1.jpg": `
      <table class="table table-bordered my-5">
          <tr><td>会社名</td><td>株式会社A</td></tr>
          <tr><td>役職</td><td>役職名</td></tr>
          <tr><td>業種</td><td>業種名</td></tr>
          <tr><td>会社PR</td><td>PRポイント</td></tr>
      </table>
      <div class="row">
      <img class="data-img1 col-3" src="../img/sasagawa1.jpg" alt="笹川 政吉">
      <img class="data-img2 col-3" src="../img/sasagawa2.jpg" alt="笹川 政吉">
      <img class="data-img3 col-3" src="../img/sasagawa3.jpg" alt="笹川 政吉">
    </div>`,
  "../img/img2.jpg": `
  <table class="table table-bordered my-5">
  <tr><td>会社名</td><td>株式会社B</td></tr>
  <tr><td>役職</td><td>役職名</td></tr>
  <tr><td>業種</td><td>業種名</td></tr>
  <tr><td>会社PR</td><td>PRポイント</td></tr>
</table>`,
  "../img/img3.jpg": `
  <table class="table table-bordered my-5">
  <tr><td>会社名</td><td>株式会社C</td></tr>
  <tr><td>役職</td><td>役職名</td></tr>
  <tr><td>業種</td><td>業種名</td></tr>
  <tr><td>会社PR</td><td>PRポイント</td></tr>
</table>`,
  "../img/img4.jpg": `
  <table class="table table-bordered my-5">
  <tr><td>会社名</td><td>株式会社D</td></tr>
  <tr><td>役職</td><td>役職名</td></tr>
  <tr><td>業種</td><td>業種名</td></tr>
  <tr><td>会社PR</td><td>PRポイント</td></tr>
</table>`,
  "../img/img5.jpg": `
  <table class="table table-bordered my-5">
  <tr><td>会社名</td><td>株式会社E</td></tr>
  <tr><td>役職</td><td>役職名</td></tr>
  <tr><td>業種</td><td>業種名</td></tr>
  <tr><td>会社PR</td><td>PRポイント</td></tr>
</table>`,
  "../img/img6.jpg": `
  <table class="table table-bordered my-5">
  <tr><td>会社名</td><td>株式会社F</td></tr>
  <tr><td>役職</td><td>役職名</td></tr>
  <tr><td>業種</td><td>業種名</td></tr>
  <tr><td>会社PR</td><td>PRポイント</td></tr>
</table>`,
  "../img/img7.jpg": `
  <table class="table table-bordered my-5">
  <tr><td>会社名</td><td>株式会社G</td></tr>
  <tr><td>役職</td><td>役職名</td></tr>
  <tr><td>業種</td><td>業種名</td></tr>
  <tr><td>会社PR</td><td>PRポイント</td></tr>
</table>`,
  "../img/img8.jpg": `
  <table class="table table-bordered my-5">
  <tr><td>会社名</td><td>株式会社H</td></tr>
  <tr><td>役職</td><td>役職名</td></tr>
  <tr><td>業種</td><td>業種名</td></tr>
  <tr><td>会社PR</td><td>PRポイント</td></tr>
</table>`,
  "../img/img9.jpg": `
  <table class="table table-bordered my-5">
  <tr><td>会社名</td><td>株式会社I</td></tr>
  <tr><td>役職</td><td>役職名</td></tr>
  <tr><td>業種</td><td>業種名</td></tr>
  <tr><td>会社PR</td><td>PRポイント</td></tr>
</table>`,
  "../img/img10.jpg": `
  <table class="table table-bordered my-5">
  <tr><td>会社名</td><td>株式会社K</td></tr>
  <tr><td>役職</td><td>役職名</td></tr>
  <tr><td>業種</td><td>業種名</td></tr>
  <tr><td>会社PR</td><td>PRポイント</td></tr>
</table>`,
  // 他の画像と略歴も同様に設定
};

const representatives = {
  "../img/sasagawa1.jpg": { repName: "代表世話人", repTitle: "笹川 政吉" },
  "../img/img2.jpg": { repName: "世話人2", repTitle: "氏名2" },
  "../img/img3.jpg": { repName: "世話人3", repTitle: "氏名3" },
  "../img/img4.jpg": { repName: "世話人4", repTitle: "氏名4" },
  "../img/img5.jpg": { repName: "世話人5", repTitle: "氏名5" },
  "../img/img6.jpg": { repName: "世話人6", repTitle: "氏名6" },
  "../img/img7.jpg": { repName: "世話人7", repTitle: "氏名7" },
  "../img/img8.jpg": { repName: "世話人8", repTitle: "氏名8" },
  "../img/img9.jpg": { repName: "世話人9", repTitle: "氏名9" },
  "../img/img10.jpg": { repName: "世話人10", repTitle: "氏名10" },
  // 他の画像に対応する代表世話人のデータ
};

document.querySelectorAll(".thumb").forEach((item) => {
  item.addEventListener("click", function () {
    const repData = representatives[this.getAttribute("src")];
    
    // クリックされたサムネイルに関連するHTMLを取得
    const newHTML = bios[this.getAttribute("src")];

    // 表示を切り替える要素（例: mainBio）に新しいHTMLと代表世話人情報を設定
    document.getElementById("mainBio").innerHTML = newHTML;
    document.getElementById("repName").textContent = repData.repName;
    document.getElementById("repTitle").textContent = repData.repTitle;

    // 画像を更新
    document.getElementById("mainImage").src = this.getAttribute("src");
    document.getElementsByClassName("data-img1").src = this.getAttribute("src");
    document.getElementsByClassName("data-img2").src = this.getAttribute("src");
    document.getElementsByClassName("data-img3").src = this.getAttribute("src");
  });
});


// thumbクラスを持つすべてのイメージ要素を取得
const thumbImages = document.querySelectorAll(".thumb");

// mainImageContainer要素を取得
const mainImageContainer = document.querySelector("#mainImageContainer");

// thumbImagesの各要素にクリックイベントリスナーを設定
thumbImages.forEach(function (image) {
  image.addEventListener("click", function () {
    // クリックされたイメージのalt属性を取得
    const altText = image.getAttribute("alt");

    // クリックされたイメージのsrc属性を取得
    const src = image.getAttribute("src");

    // mainImageのsrc属性をクリックされたイメージのsrcに設定
    document.getElementById("mainImage").src = src;

    // mainImageのalt属性をクリックされたイメージのaltに設定
    document.getElementById("mainImage").alt = altText;

    // mainImageContainer内の要素を全て削除
    while (mainImageContainer.firstChild) {
      mainImageContainer.removeChild(mainImageContainer.firstChild);
    }

    // 新しい要素を追加
    const newImage = document.createElement("img");
    newImage.src = src;
    newImage.alt = altText;
    mainImageContainer.appendChild(newImage);

    // 他の要素（例: テーブル）も追加できます
    const newTable = document.createElement("table");
    // テーブルの設定を行うことができます
    // 例: newTable.classList.add('table', 'table-bordered');
    // 例: newTable.innerHTML = '<tr><td>...</td></tr>'; // テーブルの内容を設定
    mainImageContainer.appendChild(newTable);

    // 他の画像も追加できます
    const newImage2 = document.createElement("img");
    newImage2.src = "path_to_another_image.jpg";
    newImage2.alt = "Alt Text";
    mainImageContainer.appendChild(newImage2);

    // 他の要素を追加する場合も同様の方法を使用してください
  });
});
