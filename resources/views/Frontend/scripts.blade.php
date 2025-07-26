<!-- Script for header toggle -->
<script>

    const nav = document.getElementById('mobile-nav');
    const openNavBtn = document.getElementById('nav__toggle-open');
    const closeNavBtn = document.getElementById('nav__toggle-close');

    openNavBtn.addEventListener('click', () => {
        nav.classList.remove('hidden');
        openNavBtn.classList.add('hidden');
        closeNavBtn.classList.remove('hidden');
    });

    closeNavBtn.addEventListener('click', () => {
        nav.classList.add('hidden');
        openNavBtn.classList.remove('hidden');
        closeNavBtn.classList.add('hidden');
    });
</script>

<script>
    var swiper = new Swiper(".default-carousel", {
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>