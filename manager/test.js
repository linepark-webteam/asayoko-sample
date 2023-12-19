document.addEventListener('DOMContentLoaded', function () {
  const contentContainers = document.querySelectorAll('.content');
  const thumbnailContents = document.querySelectorAll('.thumbnail-content');

  // すべてのコンテンツを非表示にする
  contentContainers.forEach(function (container) {
    container.style.display = 'none';
  });

  thumbnailContents.forEach(function (thumbnail, index) {
    thumbnail.addEventListener('click', function () {
      // すべてのコンテンツを非表示にする
      contentContainers.forEach(function (container) {
        container.style.display = 'none';
      });

      // クリックされたサムネイルに対応するコンテンツを表示
      const contentId = `content${index + 1}`;
      const contentToShow = document.getElementById(contentId);
      if (contentToShow) {
        contentToShow.style.display = 'block';
      }
    });
  });
});
