"use strict";var nav=document.getElementById("nav"),toggle=document.getElementById("toggle");toggle.addEventListener("click",function(t){"toggle"!=t.target.id&&"toggle"!=t.target.parentElement.id||(nav.classList.toggle("show"),toggle.classList.toggle("show"))});