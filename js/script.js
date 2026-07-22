$(document).ready(function () {
    initBannerVideo();
    initNavLink();
    initCounter();
    initThemeSwitch();
    initAnimationScroll();
    setupEventDelegation();
})
function setupEventDelegation() {
    // Page Load
$(function () {

    // First active FAQ show
    $(".faq-item.active .faq-answer").show();

    $(document).on("click", ".faq-question", function (e) {

        e.preventDefault();

        var item = $(this).closest(".faq-item");

        if(item.hasClass("active")){

            item.removeClass("active");
            item.find(".faq-answer").stop(true,true).slideUp(300);

            item.find("i")
                .removeClass("fa-xmark")
                .addClass("fa-plus");

        }else{

            $(".faq-item").removeClass("active");
            $(".faq-answer").stop(true,true).slideUp(300);

            $(".faq-item i")
                .removeClass("fa-xmark")
                .addClass("fa-plus");

            item.addClass("active");
            item.find(".faq-answer").stop(true,true).slideDown(300);

            item.find("i")
                .removeClass("fa-plus")
                .addClass("fa-xmark");

        }

    });

});
    // Sidebar events
    $(document).on('click', '.nav-btn', function () {
        $('.sidebar-overlay').addClass('active');
        setTimeout(() => {
            $('.sidebar').addClass('active');
        }, 200);
    });

    $(document).on('click', '.sidebar .close-btn', function () {
        $('.sidebar').removeClass('active');
        setTimeout(() => {
            $('.sidebar-overlay').removeClass('active');
        }, 200);
    });

    $(document).on('click', '.sidebar-overlay', function () {
        $('.sidebar').removeClass('active');
        setTimeout(() => {
            $('.sidebar-overlay').removeClass('active');
        }, 200);
    });

    // Info Sidebar events
    $(document).on('click', '.info-btn', function () {
        $('.info-sidebar-overlay').addClass('active');
        setTimeout(() => {
            $('.info-sidebar').addClass('active');
        }, 200);
    });

    $(document).on('click', '.info-sidebar .close-info-btn', function () {
        $('.info-sidebar').removeClass('active');
        setTimeout(() => {
            $('.info-sidebar-overlay').removeClass('active');
        }, 200);
    });

    $(document).on('click', '.info-sidebar-overlay', function () {
        $('.info-sidebar').removeClass('active');
        setTimeout(() => {
            $('.info-sidebar-overlay').removeClass('active');
        }, 200);
    });

    // Sidebar dropdown events
    $(document).on('click', '.sidebar-dropdown-btn', function () {
        const $dropdownMenu = $(this).parent().next(".sidebar-dropdown-menu");
        const isOpen = $dropdownMenu.hasClass("active");

        $(".sidebar-dropdown-menu").not($dropdownMenu).removeClass("active");
        $dropdownMenu.toggleClass("active", !isOpen);
    });

    // Theme switch event
    $(document).on('click', '#themeSwitch', function () {
        const currentMode = $('body').hasClass('lightmode');
        const newMode = !currentMode;

        if (newMode) {
            $('body').addClass('lightmode');
            localStorage.setItem('lightmode', 'active');
        } else {
            $('body').removeClass('lightmode');
            localStorage.setItem('lightmode', 'dark');
        }

        updateLogos(newMode);

        const iconClass = newMode ? 'fa-sun' : 'fa-moon';
        $('#themeIcon')
            .removeClass('fa-sun fa-moon')
            .addClass(iconClass);
    });
}

function initBannerVideo() {
    var player;

    var $tag = $('<script>', { src: "https://www.youtube.com/iframe_api" });
    $('script').first().before($tag);

    window.onYouTubeIframeAPIReady = function () {
        player = new YT.Player('banner-video-background', {
            videoId: 'P68V3iH4TeE',
            playerVars: {
                'autoplay': 1,
                'controls': 0,
                'mute': 1,
                'loop': 1,
                'playlist': 'P68V3iH4TeE',
                'showinfo': 0,
                'rel': 0,
                'enablejsapi': 1,
                'disablekb': 1,
                'modestbranding': 1,
                'iv_load_policy': 3,
                'origin': window.location.origin
            },
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    };

    function onPlayerReady(event) {
        event.target.playVideo();
        setYoutubeSize();
        $(window).on('resize', setYoutubeSize);
    }

    function onPlayerStateChange(event) {
        if (event.data === YT.PlayerState.ENDED) {
            player.playVideo();
        }
    }

    function setYoutubeSize() {
        var $container = $('.banner-video-container');
        var containerWidth = $container.outerWidth();
        var containerHeight = $container.outerHeight();
        var aspectRatio = 16 / 9;
        var newWidth, newHeight;

        if (containerWidth / containerHeight > aspectRatio) {
            newWidth = containerWidth;
            newHeight = containerWidth / aspectRatio;
        } else {
            newWidth = containerHeight * aspectRatio;
            newHeight = containerHeight;
        }

        if (player && player.getIframe) {
            var $iframe = $(player.getIframe());
            $iframe.width(newWidth).height(newHeight);
        }
    }

    function handleYouTubeErrors() {
        window.addEventListener('message', function (event) {
            if (event.origin !== 'https://www.youtube.com/') return;

            try {
                var data = JSON.parse(event.data);

            } catch (e) {

            }
        });
    }
}

function initThemeSwitch() {

    // Force Light Theme on every page
    $('body').addClass('lightmode');

    localStorage.setItem('lightmode', 'active');

    updateLogos(true);

    $('#themeIcon')
        .removeClass('fa-moon')
        .addClass('fa-sun');
}

function updateLogos(lightMode) {
    const siteLogos = $('.site-logo');
    const partnerLogos = $('.partner-logo');

    if (lightMode) {
        siteLogos.attr('src', 'img/logo.png');

        partnerLogos.each(function () {
            const $img = $(this);
            const src = $img.attr('src');
            if (src && !src.includes('-dark')) {
                $img.attr('src', src.replace('.png', '-dark.html'));
            }
        });
    } else {
        siteLogos.attr('src', 'image/marko-logo.png');

        partnerLogos.each(function () {
            const $img = $(this);
            const src = $img.attr('src');
            if (src) {
                $img.attr('src', src.replace('-dark.html', '.png'));
            }
        });
    }
}

function initCounter() {
    var $counters = $(".counter");

    function updateCount($counter) {
        var target = +$counter.data("target");
        var count = +$counter.text().replace("+", "");
        var duration = 2000;
        var steps = 60;
        var increment = Math.max(1, Math.ceil(target / steps));
        var delay = Math.floor(duration / (target / increment));

        if (count < target) {
            var nextCount = Math.min(target, count + increment);
            $counter.text(nextCount);
            setTimeout(function () {
                updateCount($counter);
            }, delay);
        } else {
            $counter.text(target);
        }
    }

    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                var $counter = $(entry.target);
                updateCount($counter);
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.5
    });

    $counters.each(function () {
        observer.observe(this);
    });
}

function initNavLink() {
    const currentUrl = window.location.href;
    $(".navbar-nav .nav-link").each(function () {
        if (this.href === currentUrl) {
            $(this).addClass("active");
        }
    });
    $(".navbar-nav .dropdown-menu .dropdown-item").each(function () {
        if (this.href === currentUrl) {
            $(this).addClass("active");
            $(this).closest(".dropdown").find(".nav-link.dropdown-toggle").addClass("active");
        }
    });
}

function initAnimationScroll() {
    const elements = document.querySelectorAll('[data-animation]');

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;

            const el = entry.target;
            const animation = el.dataset.animation;

            const styles = getComputedStyle(el);

            const duration = el.dataset.duration
                || styles.getPropertyValue('--anim-duration').trim()
                || '1s';

            const delay = el.dataset.delay
                || styles.getPropertyValue('--anim-delay').trim()
                || '0s';

            el.style.animationName = animation;
            el.style.animationDuration = duration;
            el.style.animationDelay = delay;
            el.style.animationPlayState = 'running';
            el.classList.add('animated');

            observer.unobserve(el);
        });
    }, {
        threshold: 0.1
    });

    elements.forEach(el => {
        el.style.animationPlayState = 'paused';
        el.style.opacity = '0';
        observer.observe(el);
    });
}



