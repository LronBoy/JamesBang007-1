function rem(){
  var html = document.documentElement;
  var hWidth = html.getBoundingClientRect().width;
  hWidth = hWidth>750 ? 750 : hWidth ;
  html.style.fontSize = hWidth/15 + "px";
}

(function(){
  rem();
})();

window.onresize = rem;