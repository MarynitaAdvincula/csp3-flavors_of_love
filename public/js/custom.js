function readMore(p_dots,p_more,p_id) {
  var dots = document.getElementById(p_dots);
  var moreText = document.getElementById(p_more);
  var btnText = document.getElementById(p_id);

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}