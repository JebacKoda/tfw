/*!
* Start Bootstrap - One Page Wonder v6.0.6 (https://startbootstrap.com/theme/one-page-wonder)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-one-page-wonder/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project
var scrollSpy = new bootstrap.ScrollSpy(document.body, {
    target: '.navbar'
  })
  window.onscroll = function(ev) {
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        var image = document.getElementById("indicator");
        var opacity = 0;
        image.style.opacity = opacity;
    }else{
        var image = document.getElementById("indicator");
        var opacity = 1;
        image.style.opacity = opacity;
    }
};
document.getElementById("topw").style.fontWeight = "900";
document.getElementById("topw").style.textDecorationLine = "underline";