/*-----------------------------------------------------------------------------------

    Theme Name: Builder - Construction and Architecture Template
    Description: Construction and Architecture Template
    Author: Chitrakoot Web
    Version: 1.0

    ---------------------------------- */

var logoInner = "{{ asset('img/logo-inner.png') }}";
var logo = "{{ asset('img/logo.png') }}";

!(function (o) {
    "use strict";
    var i = o(window);
    function a() {
        var e, a;
        (e = o(".full-screen")),
            (a = i.height()),
            e.css("height", a),
            (e = o("header").height()),
            (a = o(".screen-height")),
            (e = i.height() - e),
            a.css("height", e);
    }
    o("#preloader").fadeOut("normall", function () {
        o(this).remove();
    }),
        i.on("scroll", function () {
            var e = i.scrollTop(),
                a = o(".navbar-brand img"),
                t = o(".navbar-brand.logodefault img");
            e <= 50
                ? (o("header")
                      .removeClass("scrollHeader")
                      .addClass("fixedHeader"),
                  a.attr("src", "http://isokariari.test/img/logo-inner.png"))
                : (o("header")
                      .removeClass("fixedHeader")
                      .addClass("scrollHeader"),
                  a.attr("src", "http://isokariari.test/img/logo.png")),
                t.attr("src", "http://isokariari.test/img/logo.png");
        }),
        i.on("scroll", function () {
            500 < o(this).scrollTop()
                ? o(".scroll-to-top").fadeIn(400)
                : o(".scroll-to-top").fadeOut(400);
        }),
        o(".scroll-to-top").on("click", function (e) {
            e.preventDefault(), o("html, body").animate({ scrollTop: 0 }, 600);
        }),
        o(".parallax,.bg-img").each(function (e) {
            o(this).attr("data-background") &&
                o(this).css(
                    "background-image",
                    "url(" + o(this).data("background") + ")"
                );
        }),
        o(".story-video").magnificPopup({ delegate: ".video", type: "iframe" }),
        i.resize(function (e) {
            setTimeout(function () {
                a();
            }, 500),
                e.preventDefault();
        }),
        new WOW({
            boxClass: "wow",
            animateClass: "animated",
            offset: 0,
            mobile: !1,
            live: !0,
        }).init(),
        a(),
        o(document).ready(function () {
            o(".testimonial-carousel").owlCarousel({
                loop: !0,
                responsiveClass: !0,
                autoplay: !0,
                autoplayTimeout: 4e3,
                smartSpeed: 1500,
                nav: !1,
                dots: !0,
                navText: [
                    "<i class='ti-angle-left'></i>",
                    "<i class='ti-angle-right'></i>",
                ],
                center: !1,
                margin: 20,
                items: 1,
            }),
                o(".portfolio01-carousel").owlCarousel({
                    loop: !0,
                    responsiveClass: !0,
                    autoplay: !0,
                    autoplayTimeout: 5e3,
                    smartSpeed: 1500,
                    nav: !1,
                    navText: [
                        "<i class='ti-angle-left'></i>",
                        "<i class='ti-angle-right'></i>",
                    ],
                    autoWidth: !0,
                    center: !0,
                    dots: !0,
                    margin: 20,
                    responsive: {
                        0: { items: 1 },
                        576: { items: 2 },
                        992: { items: 4 },
                        1200: { items: 5 },
                    },
                }),
                o(".service-slider").owlCarousel({
                    center: !1,
                    items: 2,
                    loop: !0,
                    dots: !1,
                    nav: !0,
                    navText: [
                        "<i class='ti-arrow-left text-white'></i>",
                        "<i class='ti-arrow-right text-white'></i>",
                    ],
                    margin: 30,
                    autoplay: !0,
                    autoplayTimeout: 5e3,
                    smartSpeed: 1500,
                    responsive: {
                        0: { items: 1 },
                        768: { items: 2 },
                        992: { items: 3 },
                        1200: { items: 4 },
                        1400: { items: 4 },
                    },
                }),
                o("#clients").owlCarousel({
                    loop: !0,
                    nav: !1,
                    dots: !1,
                    autoplay: !0,
                    autoplayTimeout: 5e3,
                    smartSpeed: 1500,
                    responsiveClass: !0,
                    autoplayHoverPause: !1,
                    responsive: {
                        0: { items: 2, margin: 20 },
                        768: { items: 3, margin: 40 },
                        992: { items: 4, margin: 60 },
                        1200: { items: 5, margin: 80 },
                    },
                }),
                o(".slider-fade").owlCarousel({
                    items: 1,
                    loop: !0,
                    dots: !0,
                    margin: 0,
                    nav: !1,
                    autoplay: !0,
                    smartSpeed: 1500,
                    mouseDrag: !1,
                    animateIn: "fadeIn",
                    animateOut: "fadeOut",
                    responsive: {
                        0: { items: 1, dots: !0 },
                        576: { items: 1, dots: !0 },
                        768: { items: 1, dots: !0 },
                    },
                }),
                o(".owl-carousel").owlCarousel({
                    items: 1,
                    loop: !0,
                    dots: !1,
                    margin: 0,
                    autoplay: !0,
                    smartSpeed: 500,
                }),
                o(".slider-fade").on("changed.owl.carousel", function (e) {
                    e = e.item.index - 2;
                    o(".subheading").removeClass("animated fadeInUp"),
                        o("p").removeClass("animated fadeInUp"),
                        o("h1").removeClass("animated fadeInUp"),
                        o("a").removeClass("animated fadeInUp"),
                        o(".owl-item")
                            .not(".cloned")
                            .eq(e)
                            .find("h1")
                            .addClass("animated fadeInUp"),
                        o(".owl-item")
                            .not(".cloned")
                            .eq(e)
                            .find(".subheading")
                            .addClass("animated fadeInUp"),
                        o(".owl-item")
                            .not(".cloned")
                            .eq(e)
                            .find("p")
                            .addClass("animated fadeInUp"),
                        o(".owl-item")
                            .not(".cloned")
                            .eq(e)
                            .find("a")
                            .addClass("animated fadeInUp");
                }),
                o(".countup").counterUp({ delay: 25, time: 2e3 }),
                o(".countdown").countdown({
                    date: "01 Mar 2027 00:01:00",
                    format: "on",
                });
        }),
        i.on("load", function () {
            o(".current-year").text(new Date().getFullYear()),
                o(".portfolio-gallery").lightGallery(),
                o(".portfolio-link").on("click", (e) => {
                    e.stopPropagation();
                });
        });
})(jQuery);
