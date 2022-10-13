function ReadMore() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
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

function readMore(produk) {
  let readmore = document.querySelector(`.content[content-name="${produk}"] .readmore`);
  let moreText = document.querySelector(`.content[content-name="${produk}"] .more`);
  let btnText = document.querySelector(`.content[content-name="${produk}"] .btn`);

  if (readmore.style.display === "none") {
      readmore.style.display = "inline";
      btnText.textContent = "Read more";
      moreText.style.display = "none";
  } else {
      readmore.style.display = "none";
      btnText.textContent = "Read less";
      moreText.style.display = "inline";
  }
}
  

var video = document.getElementById("myVideo");
