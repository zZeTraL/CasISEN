const nav = document.querySelector('.nav-container');

window.addEventListener('scroll', () => {
    if(window.scrollY > 1000) {
        nav.classList.add('scroll');
    } else {
        nav.classList.remove('scroll');
    }
});