

export default function() {
    const scrollBtn = document.getElementById('scrollToTop');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            scrollBtn.classList.remove('opacity-0', 'invisible');
            scrollBtn.classList.add('opacity-100', 'visible');
        } else {
            scrollBtn.classList.remove('opacity-100', 'visible');
            scrollBtn.classList.add('opacity-0', 'invisible');
        }
    });

    scrollBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}