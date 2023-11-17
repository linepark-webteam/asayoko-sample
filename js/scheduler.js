document.addEventListener('DOMContentLoaded', function () {
  let displayStartDate1 = new Date('2023-11-17T00:00:00'); // 表示開始する日時
  // let displayStartDate1 = new Date('2023-11-17T00:00:00'); // 表示開始テストコード
  let displayEndDate1 = new Date('2023-11-18T23:59:59');   // 表示終了する日時
  // let displayEndDate1 = new Date('2023-11-18T13:32:30');   // 表示終了テストコード
  let currentDate1 = new Date();
  let elements1 = document.getElementsByClassName('schedule1'); // 'schedule1'クラスを持つ要素をすべて選択

  for (let i = 0; i < elements1.length; i++) {
      if (currentDate1 >= displayStartDate1 && currentDate1 < displayEndDate1) {
          elements1[i].style.display = 'block'; // 要素を表示
      } else {
          elements1[i].style.display = 'none'; // 要素を非表示
      }
  }
  let displayStartDate2 = new Date('2023-11-17T00:00:00'); // 表示開始する日時
  // let displayStartDate2 = new Date('2023-11-17T13:34:40'); // 表示開始テストコード
  let displayEndDate2 = new Date('2023-12-16T23:59:59');   // 表示終了する日時
  // let displayEndDate2 = new Date('2023-12-16T23:59:59');   // 表示終了テストコード
  let currentDate2 = new Date();
  let elements2 = document.getElementsByClassName('schedule2'); // 'schedule2'クラスを持つ要素をすべて選択

  for (let i = 0; i < elements2.length; i++) {
      if (currentDate2 >= displayStartDate2 && currentDate2 < displayEndDate2) {
          elements2[i].style.display = 'block'; // 要素を表示
      } else {
          elements2[i].style.display = 'none'; // 要素を非表示
      }
  }
});