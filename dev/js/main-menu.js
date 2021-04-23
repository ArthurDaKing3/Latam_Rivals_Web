const nav = document.getElementById("nav");
const toggle = document.getElementById("toggle");

toggle.addEventListener('click', (e) => {
    if (e.target.id == 'toggle' || e.target.parentElement.id == 'toggle') {
        nav.classList.toggle('show');
        toggle.classList.toggle('show');
    }
})