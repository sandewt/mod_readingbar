window.addEventListener('scroll', readingBarScroll);

function readingBarScroll() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height    = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled  = (winScroll / height) * 100;
  document.getElementById("readingbar").style.width = scrolled + "%";
}
