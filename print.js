var page = document.getElementById('page');
var coupon = document.getElementById('number')

coupon.innerHTML=Math.floor(Math.random()*10000000);

page.addEventListener("click", function() {
  var originalContent = document.body.innerHTML;
  page.className = "hide";
  window.print();
  document.body.innerHTML = originalContent;
});
