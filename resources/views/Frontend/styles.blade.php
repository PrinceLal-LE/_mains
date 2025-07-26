<style>
    .hero-slide {
        transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .slide-content {
        transition: all 0.6s ease 0.3s;
    }

    .fade-in {
        animation: fadeIn 1s ease-in;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .swiper-wrapper {
        width: 100%;
        height: max-content !important;
        padding-bottom: 64px !important;
        -webkit-transition-timing-function: linear !important;
        transition-timing-function: linear !important;
        position: relative;
    }

    .swiper-pagination-bullet {
        background: #4f46e5;
    }

    #mobile-nav {
        z-index: 100;
    }

    .swiper-button-next::after {
        content: '' ;
        /* Relative path from your compiled CSS file to the public directory */
        /* Assuming your compiled CSS is in public/css/app.css and SVG is in public/images/... */
        background-image: url('/images/svg_icon/right-arrow-next-svgrepo-com.svg') !important;
        background-size: contain !important;
        width: 20px;
        height: 20px;
    }
    /* Ensure the parent buttons don't have their own default background image */
.swiper-button-next,
.swiper-button-prev {
    background-image: none !important; /* Already added, keep this */
    
    /* NEW: Hide the blue circle */
    background-color: transparent !important; /* Make the background invisible */
    border: none !important; /* Remove any border */
    outline: none !important; /* Remove focus outline if any */

    /* Also, ensure the default arrow icon content is gone and its color isn't showing */
    color: transparent !important; 
    text-shadow: none !important;
}

.swiper-button-next::after,
.swiper-button-prev::after {
    content: ''; /* THIS IS CRUCIAL: Remove the default Swiper icon/character */
    background-image: url('/images/svg_icon/right-arrow-next-svgrepo-com.svg') !important;
    background-size: contain;
    background-repeat: no-repeat; /* Ensure the SVG doesn't repeat */
    background-position: center; /* Center the SVG within the pseudo-element */
    width: 20px; /* Adjust custom icon size */
    height: 20px; /* Adjust custom icon size */
    
    /* Ensure no text content or color shows through */
    color: transparent;
    text-shadow: none;
}

/* For the previous button, you'll likely want to rotate the same arrow */
.swiper-button-prev::after {
    transform: rotate(180deg); /* Rotate the right arrow to make it a left arrow */
}

.heroSectionText {
    color: #003347;
}

.desktopPorjectMenu{
    z-index: 1000;
}
</style>