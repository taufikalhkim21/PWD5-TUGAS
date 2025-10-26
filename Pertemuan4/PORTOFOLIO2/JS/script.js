const scrollBtn = document.querySelector('.btn-scroll')

window.addEventListener('scroll', () => {
    if (document.documentElement.scrollTop > 500) {
        scrollBtn.style.display = 'block';
    } else {
        scrollBtn.style.display = 'none';
    }
});

scrollBtn.addEventListener('click' ,  () => {
    window.scroll({
        top: 0,
        behavior: "smooth"
    })
});
