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
    if ((window.scrollY) > 180) {
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

const options = {
    root: null,
    threshold: 0,
    rootMargin: "-10%"
    
}

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        }
    });
}, options);

const hiddenElements = document.querySelectorAll('.hiddenleft');
hiddenElements.forEach((el) => observer.observe(el));

if (history.scrollRestoration) {
    history.scrollRestoration = 'manual';
} else {
    window.onbeforeunload = function () {
        window.scrollTo(0, 0);
    }
}

let button = document.querySelectorAll('.menu button');
let content_inside = document.querySelectorAll('.content_inside');

Array.from(button).forEach(function(buttonArray, i) {
buttonArray.addEventListener('click', function() {

    Array.from(button).forEach(buttonAll => buttonAll.classList.remove('button_active'));
    
    Array.from(content_inside).forEach(content_insideAll => content_insideAll.classList.remove('content_inside_active'));
    
    button[i].classList.add('button_active'); 
    
    content_inside[i].classList.add('content_inside_active');  
  });
});

