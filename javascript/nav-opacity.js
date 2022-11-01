const navbar = document.querySelector('.site__header');
window.onscroll = () => {
    if (window.pageYOffset > 0) {
        navbar.classList.add('nav-active');
    } else {
        navbar.classList.remove('nav-active');
    }
};