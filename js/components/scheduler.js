function toggleDisplayByDate(className, startDate, endDate) {
  let currentDate = new Date();
  let elements = document.getElementsByClassName(className);
  let displayStyle =
    currentDate >= new Date(startDate) && currentDate < new Date(endDate)
      ? "block"
      : "none";

  for (let i = 0; i < elements.length; i++) {
    elements[i].style.display = displayStyle;
  }
}

document.addEventListener("DOMContentLoaded", function () {
  toggleDisplayByDate(
    "schedule1",
    "2023-11-17T00:00:00",
    "2023-12-16T23:59:59"
  );
  toggleDisplayByDate(
    "schedule2",
    "2023-＊＊-＊＊T00:00:00",
    "2023-＊＊-＊＊T23:59:59"
  );
});
