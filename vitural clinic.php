!(function (F) {
    F(window).on("load", function () {
        !(function () {
            var s = F("#map");
            if (0 < s.length) {
                var e,
                    t = s.attr("data-api-key");
                (e = t ? "https://maps.google.com/maps/api/js?key=" + t + " &sensor=false" : "https://maps.google.com/maps/api/js?sensor=false"),
                    F.getScript(e, function (e, t, o) {
                        s.each(function () {
                            var e = F(this),
                                t = (new google.maps.LatLng(e.attr("data-longitude"), e.attr("data-latitude")), e.attr("data-marker")),
                                o = {
                                    zoom: 13,
                                    center: { lat: 38.747444, lng: -9.211978 },
                                    disableDefaultUI: !0,
                                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                                    mapTypeControl: !1,
                                    scrollwheel: !1,
                                    draggable: !0,
                                    panControl: !1,
                                    zoomControl: !1,
                                    disableDefaultUI: !0,
                                    styles: [
                                        { featureType: "administrative", elementType: "labels.text.fill", stylers: [{ color: "#212326" }] },
                                        { featureType: "administrative.locality", elementType: "labels.text.fill", stylers: [{ color: "#0D73FC" }] },
                                        { featureType: "landscape", elementType: "all", stylers: [{ color: "#F8F8F9" }] },
                                        { featureType: "poi", elementType: "all", stylers: [{ visibility: "off" }] },
                                        { featureType: "road", elementType: "all", stylers: [{ saturation: -100 }, { lightness: 45 }] },
                                        { featureType: "road", elementType: "labels", stylers: [{ visibility: "off" }] },
                                        { featureType: "road", elementType: "labels.icon", stylers: [{ visibility: "off" }] },
                                        { featureType: "transit", elementType: "all", stylers: [{ visibility: "off" }] },
                                        { featureType: "road.highway", elementType: "all", stylers: [{ visibility: "off" }] },
                                        { featureType: "road.arterial", elementType: "labels.icon", stylers: [{ visibility: "off" }] },
                                        { featureType: "transit", elementType: "all", stylers: [{ visibility: "off" }] },
                                        { featureType: "water", elementType: "all", stylers: [{ color: "#0D73FC" }, { visibility: "on" }] },
                                    ],
                                },
                                s = new google.maps.Map(e[0], o),
                                i = new google.maps.Marker({
                                    map: s,
                                    icon: { size: new google.maps.Size(59, 69), origin: new google.maps.Point(0, 0), anchor: new google.maps.Point(0, 69), url: t },
                                    position: { lat: 38.737749, lng: -9.141827 },
                                }),
                                a = '<h3 class="map-placeholder">Here</h3>',
                                l = new google.maps.InfoWindow({ content: a });
                            (a = '<img src="img/placeholder-icon.png" class="map-placeholder">'), (l = new google.maps.InfoWindow({ content: a }));
                            google.maps.event.addListener(i, "click", function () {
                                l.open(s, i);
                            }),
                                l.open(s, i),
                                google.maps.event.addDomListener(window, "resize", function () {
                                    var e = s.getCenter();
                                    google.maps.event.trigger(s, "resize"), s.setCenter(e);
                                });
                        });
                    });
            }
        })();
    }),
        jQuery(document).ready(function () {
            var e, t, o, s, i, a, l, n, r, d, c, g, p, h, b, f, u, m, v, T;
            objectFitImages(),
                F(".hamburger").on("click", function () {
                    F(this).toggleClass("is-active"), F(".mobile-nav").toggleClass("is-active"), F("header").toggleClass("menu-opened");
                }),
                F(".intro-mobile-menu li a").on("click", function () {
                    F(".hamburger").removeClass("is-active"), F(".mobile-nav").removeClass("is-active"), F("header").removeClass("menu-opened");
                }),
                F(".mobile-menu li.menu-item--has-child").on("click", function () {
                    F(this).toggleClass("sub-menu-opened").children(".sub-menu").stop().slideToggle(300);
                }),
                F(".mobile-menu li.menu-item--has-subchild").on("click", function () {
                    F(this).toggleClass("sup-sub-menu-opened").children(".sup-sub-menu").stop().slideToggle(300);
                }),
                
                (function () {
                const newLocal = ".promo-slider";
                    var e = F(newLocal);
                    if (e.length) {
                        var a = F(".paging-info");
                        e.on("init afterChange", function (e, t, o, s) {
                            var i = (o || 0) + 1;
                            a.text(i + "/" + t.slideCount);
                        }),
                            // e.slick({ fade: !0, adaptiveHeight: !0, infinite: !0, speed: 500, cssEase: "ease-in-out", arrows: true, dots: !0, appendDots: ".promo-dots" });
                            e.slick({ 
                                fade: !0, 
                                adaptiveHeight: !0, 
                                infinite: !0, 
                                speed: 500, 
                                cssEase: "ease-in-out", 
                                arrows: true, 
                                dots: !0, 
                                appendDots: ".promo-dots",
                                responsive: [{ 
                                    settings: { 
                                        arrows: true,
                                    } }, 
                                    { 
                                        breakpoint: 1200, 
                                        settings: { 
                                            arrows: true,
                                        } 
                                    }, 
                                    { 
                                        breakpoint: 992, 
                                        settings: { 
                                            arrows: true,
                                        } 
                                    }, 
                                    { 
                                        breakpoint: 576, 
                                        settings: { 
                                            arrows: true,
                                        } 
                                    }],
                            });
                    }
                })(),
                (e = F(".cooperation-slider")).length &&
                    e.slick({
                        arrows: !1,
                        slidesToShow: 4.5,
                        adaptiveHeight: !0,
                        autoplay: !0,
                        autoplaySpeed: 3e3,
                        responsive: [{ settings: { slidesToShow: 3.5 } }, { breakpoint: 1200, settings: { slidesToShow: 3 } }, { breakpoint: 992, settings: { slidesToShow: 2 } }, { breakpoint: 576, settings: { slidesToShow: 1 } }],
                    }),
                (e = F(".cooperation-slider2.new")).length &&
                    e.slick({
                        arrows: true,
                        slidesToShow: 4.5,
                        adaptiveHeight: !0,
                        autoplay: !0,
                        autoplaySpeed: 3e3,
                        responsive: [{ settings: { slidesToShow: 3.5 } }, { breakpoint: 1200, settings: { slidesToShow: 3 } }, { breakpoint: 992, settings: { slidesToShow: 2 } }, { breakpoint: 576, settings: { slidesToShow: 1 } }],
                        prevArrow: '<span class="prev-arrow"><i class="fa fa-angle-left"></span>',
                        nextArrow: '<span class="next-arrow"><i class="fa fa-angle-right"></span>',
                    }),
                (t = F(".testimonials-primary-slider")).length && t.slick({ arrows: !1, dots: !0, appendDots: ".testimonials--primary .testimonials-dots", adaptiveHeight: !0 }),
                (o = F(".brands-slider")).length &&
                    o.slick({
                        slidesToShow: 4,
                        arrows: !1,
                        dots: !0,
                        appendDots: ".brands-dots",
                        adaptiveHeight: !0,
                        responsive: [
                            { breakpoint: 1200, settings: { slidesToShow: 4, slidesToScroll: 2 } },
                            { breakpoint: 992, settings: { slidesToShow: 3, slidesToScroll: 2 } },
                            { breakpoint: 768, settings: { slidesToShow: 2, slidesToScroll: 2 } },
                        ],
                    }),
                (s = F(".project-gallery")).length &&
                    s.slick({
                        slidesToShow: 6,
                        slidesToScroll: 2,
                        arrows: !1,
                        infinite: !1,
                        dots: !0,
                        appendDots: ".project-gallery-dots",
                        responsive: [
                            { breakpoint: 1600, settings: { slidesToShow: 5, slidesToScroll: 2 } },
                            { breakpoint: 1366, settings: { slidesToShow: 4, slidesToScroll: 2 } },
                            { breakpoint: 992, settings: { slidesToShow: 3, slidesToScroll: 2 } },
                            { breakpoint: 768, settings: { slidesToShow: 2, slidesToScroll: 2 } },
                            { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } },
                        ],
                    }),
                (i = F(".instagram-slider")).length &&
                    i.slick({
                        slidesToShow: 6,
                        slidesToScroll: 2,
                        arrows: !1,
                        infinite: !1,
                        dots: !0,
                        appendDots: ".instagram-dots",
                        responsive: [
                            { breakpoint: 1600, settings: { slidesToShow: 5, slidesToScroll: 2 } },
                            { breakpoint: 1366, settings: { slidesToShow: 4, slidesToScroll: 2 } },
                            { breakpoint: 992, settings: { slidesToShow: 3, slidesToScroll: 2 } },
                            { breakpoint: 768, settings: { slidesToShow: 2, slidesToScroll: 2 } },
                            { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } },
                        ],
                    }),
                (a = F(".products-slider")).length &&
                    a.slick({
                        arrows: !1,
                        dots: !0,
                        slidesToShow: 4,
                        slidesToScroll: 2,
                        appendDots: ".products-slider-dots",
                        responsive: [
                            { breakpoint: 992, settings: { slidesToShow: 3, slidesToScroll: 2 } },
                            { breakpoint: 768, settings: { slidesToShow: 2, slidesToScroll: 2 } },
                            { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } },
                        ],
                    }),
                (l = F(".additional-slider")).length &&
                    l.slick({
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        arrows: !1,
                        dots: !0,
                        appendDots: ".additional-dots",
                        responsive: [
                            { breakpoint: 1200, settings: { slidesToShow: 3 } },
                            { breakpoint: 768, settings: { slidesToShow: 2 } },
                            { breakpoint: 576, settings: { slidesToShow: 1 } },
                        ],
                    }),
                (n = F(".product-slider")).length &&
                    (n.slick({ slidesToShow: 1, slidesToScroll: 1, arrows: !1, asNavFor: ".nav-slider", fade: !0 }),
                    F(".nav-slider").slick({ slidesToShow: 4, slidesToScroll: 1, asNavFor: ".product-slider", focusOnSelect: !0, arrows: !1 })),
                (r = F(".testimonials-img-left-slider")).length && r.slick({ arrows: !1, dots: !0, appendDots: ".testimonials--img-left .testimonials-dots", adaptiveHeight: !0 }),
                (d = F(".testimonials-img-right-slider")).length && d.slick({ arrows: !1, dots: !0, appendDots: ".testimonials--img-right .testimonials-dots", adaptiveHeight: !0 }),
                (c = F(".cases-slider")).length &&
                    c.slick({
                        slidesToShow: 2.5,
                        speed: 500,
                        arrows: !1,
                        dots: !0,
                        appendDots: ".cases-dots",
                        responsive: [
                            { breakpoint: 1366, settings: { slidesToShow: 2 } },
                            { breakpoint: 768, settings: { slidesToShow: 1 } },
                        ],
                    }),
                (g = F(".logos-slider")).length &&
                    g.slick({
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        appendDots: ".logos-dots",
                        arrows: !1,
                        dots: !0,
                        responsive: [
                            { breakpoint: 992, settings: { slidesToShow: 3, slidesToScroll: 3 } },
                            { breakpoint: 576, settings: { slidesToShow: 2, slidesToScroll: 2 } },
                        ],
                    }),
                (p = F(".pages-slider")).length &&
                    p.slick({
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        arrows: !1,
                        dots: !0,
                        appendDots: ".pages-slider-dots",
                        responsive: [
                            { breakpoint: 768, settings: { appendDots: ".lower-pages-slider-dots" } },
                            { breakpoint: 576, settings: { slidesToShow: 1, slidesToScroll: 1, appendDots: ".lower-pages-slider-dots" } },
                        ],
                    }),
                (h = F(".items-slider")).length &&
                    h.slick({
                        slidesToShow: 3,
                        arrows: !1,
                        dots: !0,
                        responsive: [
                            { breakpoint: 1200, settings: { slidesToShow: 2 } },
                            { breakpoint: 768, settings: { slidesToShow: 1 } },
                        ],
                    }),
                F(".details-tabs").length &&
                    (F(".details-tabs .tabs-content__item").not(":first").hide(),
                    F(".details-tabs .tabs-header__title")
                        .on("click", function () {
                            F(".details-tabs .tabs-header__title").removeClass("active").eq(F(this).index()).addClass("active"), F(".details-tabs .tabs-content__item").hide().eq(F(this).index()).fadeIn(500);
                        })
                        .eq(0)
                        .addClass("active")),
                F(".product-tabs").length &&
                    (F(".product-tabs .tabs-content__item").not(":first").hide(),
                    F(".product-tabs .tabs-header__title")
                        .on("click", function () {
                            F(".product-tabs .tabs-header__title").removeClass("active").eq(F(this).index()).addClass("active"), F(".product-tabs .tabs-content__item").hide().eq(F(this).index()).fadeIn(500);
                        })
                        .eq(0)
                        .addClass("active")),
                F(".catalog-tabs").length &&
                    (F(".catalog-tabs .tabs-content__item").not(":nth-of-type(2)").hide(),
                    F(".catalog-tabs .tabs-header__title")
                        .on("click", function () {
                            F(".catalog-tabs .tabs-header__title").removeClass("active").eq(F(this).index()).addClass("active"), F(".catalog-tabs .tabs-content__item").hide().eq(F(this).index()).fadeIn(500);
                        })
                        .eq(1)
                        .addClass("active")),
                F(".product-info-tabs").length &&
                    (F(".product-info-tabs .tabs-content__item").not(":first").hide(),
                    F(".product-info-tabs .tabs-header__title")
                        .on("click", function () {
                            F(".product-info-tabs .tabs-header__title").removeClass("active").eq(F(this).index()).addClass("active"), F(".product-info-tabs .tabs-content__item").hide().eq(F(this).index()).fadeIn(500);
                        })
                        .eq(0)
                        .addClass("active"),
                    F(".product-info-tabs .tabs-header__title.reviews").on("click", function () {
                        F("body").find(".downloads-block").hide();
                    }),
                    F(".product-info-tabs .tabs-header__title:not(.reviews)").on("click", function () {
                        F("body").find(".downloads-block").fadeIn(500);
                    })),
                (b = F("#responsive-tabs")),
                (c = F("#responsive-tabs1")),
                (d = F("#responsive-tabs2")),
                (e = F("#responsive-tabs3")),
                (f = F(".horizontal--tabs, .horizontal--tabs2")),
                (u = F(".vertical--tabs")),
                b.length && (f.responsiveTabs({ startCollapsed: "false" }), u.responsiveTabs({ startCollapsed: "false" })),
                c.length && (f.responsiveTabs({ startCollapsed: "false" }), u.responsiveTabs({ startCollapsed: "false" })),
                d.length && (f.responsiveTabs({ startCollapsed: "false" }), u.responsiveTabs({ startCollapsed: "false" })),
                e.length && (f.responsiveTabs({ startCollapsed: "false" }), u.responsiveTabs({ startCollapsed: "false" })),
                1200 < F(window).width() && F(".jarallax").jarallax({ speed: 0.3 }),
                (m = F(".filter-trigger")).length &&
                    (m.on("click", function () {
                        F("body").find(".filter-backdrop").addClass("is-active"), F("body").find(".aside-holder").addClass("is-active");
                    }),
                    F(".close-aside").on("click", function () {
                        F("body").find(".filter-backdrop").removeClass("is-active"), F("body").find(".aside-holder").removeClass("is-active");
                    }),
                    F(".aside-holder, .filter-backdrop").swipe({
                        swipeLeft: function () {
                            F(".aside-holder").removeClass("is-active"), F(".filter-backdrop").removeClass("is-active");
                        },
                        threshold: 50,
                    })),
                F(document).on("click", function (e) {
                    F(e.target).closest(".filter-trigger, .aside-holder").length || (F(".filter-backdrop").removeClass("is-active"), F(".aside-holder").removeClass("is-active"), e.stopPropagation());
                }),
                (v = F(".password-trigger")).length &&
                    v.on("click", function () {
                        F(this).toggleClass("active");
                        var e = F(F(this).attr("toggle"));
                        "password" == e.attr("type") ? e.attr("type", "text") : e.attr("type", "password");
                    }),
                (T = F(".fancy-video")).length && T.fancybox();
            var w,
                y,
                k,
                S,
                C,
                _,
                x,
                D,
                I,
                q,
                j = F(".info-box");
            j.length &&
                (j.find(".info-box__hidden").slideUp("0"),
                F(".info-box").hover(
                    function () {
                        F(this).find(".info-box__hidden").stop().slideDown("70");
                    },
                    function () {
                        F(this).find(".info-box__hidden").stop().slideUp("70").removeAttr("style");
                    }
                )),
                (w = F(".form-field")).length &&
                    w.on("change", function () {
                        var e = F(this);
                        e.find("input");
                        "" !== e.val() ? e.addClass("field--filled") : e.removeClass("field--filled");
                    }),
                (function () {
                    var e = F(".gallery"),
                        t = F(".filter-header .header__title");
                    if (e.length) {
                        e.isotope({ itemSelector: ".gallery-item" });
                        var o = F(".gallery").isotope({ itemSelector: ".gallery-item" });
                        t.on("click", function () {
                            var e = F(this).attr("data-filter");
                            o.isotope({ filter: e });
                        }),
                            t.on("click", function () {
                                t.removeClass("active"), F(this).addClass("active");
                            });
                    }
                })(),
                (y = F(".blog-masonry")).length && y.isotope({ itemSelector: ".masonry-item", percentPosition: !0 }),
                (k = F(".counter")).length && k.counterUp({ delay: 10, time: 1500 }),
                F(".accordion-item").length &&
                    F(".accordion-item .title-block").on("click", function () {
                        F(this).children(".icon").toggleClass("active"), F(this).parent().children(".content-block").stop().slideToggle(300);
                    }),
                (function () {
                    var e = F(".range-slider");
                    if (e.length) {
                        var t = F(".range-value.min"),
                            o = F(".range-value.max");
                        e.ionRangeSlider({
                            type: "double",
                            min: 0,
                            max: 13e3,
                            from: 0,
                            to: 10350,
                            skin: "round",
                            step: 10,
                            onChange: function (e) {
                                t.val(e.from), o.val(e.to);
                            },
                        });
                    }
                })(),
                (S = F(".catalog-aside .toggler")).length &&
                    S.on("click", function () {
                        F(this).toggleClass("active").next(".toggle-item").stop().slideToggle(300);
                    }),
                (C = F(".count-block")),
                (_ = F(".minus")),
                (x = F(".plus")),
                C.length &&
                    (_.on("click", function () {
                        var e = F(this).parent().find("input"),
                            t = parseInt(e.val()) - 1;
                        return (t = t < 1 ? 1 : t), e.val(t), e.change(), !1;
                    }),
                    x.on("click", function () {
                        var e = F(this).parent().find("input");
                        return e.val(parseInt(e.val()) + 1), e.change(), !1;
                    })),
                (D = F(".alert")),
                (I = F(".alert .close")),
                D.length &&
                    I.on("click", function () {
                        F(this).parent(".alert").fadeOut(300);
                    }),
                F("tag"),
                F(".tag .close").on("click", function () {
                    F(this).parent(".tag").hide();
                }),
                F('[data-toggle="tooltip"]').tooltip("show"),
                F('a.anchor[href^="#"]').length &&
                    F('a.anchor[href^="#"]').bind("click", function (e) {
                        var t = F(this);
                        F("html, body")
                            .stop()
                            .animate({ scrollTop: F(t.attr("href")).offset().top }, 600),
                            e.preventDefault();
                    }),
                (q = F(".intro-header")).length &&
                    992 < F(window).width() &&
                    F(window).on("scroll", function () {
                        0 < F(window).scrollTop() ? q.addClass("fixed-header") : q.removeClass("fixed-header");
                    }),
                (function () {
                    if (F("#bar-chart").length) {
                        var e = document.getElementById("bar-chart").getContext("2d");
                        new Chart(e, {
                            type: "bar",
                            data: {
                                labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                                datasets: [
                                    {
                                        label: "# of Votes",
                                        data: [12, 19, 3, 5, 2, 3],
                                        backgroundColor: ["rgba(255, 99, 132, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(255, 206, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(255, 159, 64, 0.2)"],
                                        borderColor: ["rgba(255, 99, 132, 1)", "rgba(54, 162, 235, 1)", "rgba(255, 206, 86, 1)", "rgba(75, 192, 192, 1)", "rgba(153, 102, 255, 1)", "rgba(255, 159, 64, 1)"],
                                        borderWidth: 1,
                                    },
                                ],
                            },
                            options: { scales: { yAxes: [{ ticks: { beginAtZero: !0 } }] } },
                        });
                    }
                })(),
                (function () {
                    if (F("#line-chart").length) {
                        var e = document.getElementById("line-chart").getContext("2d");
                        new Chart(e, {
                            type: "line",
                            data: {
                                labels: ["January", "February", "March", "April", "May", "June", "July"],
                                datasets: [
                                    { label: "Red", data: [330, 250, 480, 120, 220, 130, 255], backgroundColor: "rgba(255, 99, 132, 0.2)", borderColor: "rgba(255, 99, 132, 1)", borderWidth: 1 },
                                    { label: "Blue", data: [230, 350, 120, 240, 360, 180, 295], backgroundColor: "rgba(105, 195, 255, 0.2)", borderColor: "rgba(105, 195, 255, 1)", borderWidth: 1 },
                                    { label: "Yellow", data: [450, 290, 123, 332, 439, 222, 340], backgroundColor: "rgba(255, 209, 94, 0.2)", borderColor: "rgba(255, 209, 94, 1)", borderWidth: 1 },
                                    { label: "Green", data: [400, 450, 380, 250, 450, 320, 210], backgroundColor: "rgba(155, 220, 220, 0.2)", borderColor: "rgba(155, 220, 220, 1)", borderWidth: 1 },
                                    { label: "Purple", data: [500, 220, 110, 50, 430, 310, 410], backgroundColor: "rgba(154, 104, 255, 0.2)", borderColor: "rgba(154, 104, 255, 1)", borderWidth: 1 },
                                    { label: "Orange", data: [0, 100, 200, 300, 400, 320, 222], backgroundColor: "rgba(255, 159, 64, 0.2)", borderColor: "rgba(255, 159, 64, 1)", borderWidth: 1 },
                                ],
                            },
                        });
                    }
                })(),
                (function () {
                    if (F("#radar-chart").length) {
                        var e = document.getElementById("radar-chart").getContext("2d");
                        new Chart(e, {
                            type: "radar",
                            data: {
                                labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
                                datasets: [
                                    { label: "First", data: [100, 44, 55, 90, 55, 80, 100], backgroundColor: "rgba(154, 104, 255, 0.2)", borderColor: "rgba(154, 104, 255, 1)", borderWidth: 1 },
                                    { label: "Second", data: [30, 80, 60, 20, 40, 100, 50], backgroundColor: "rgba(255, 99, 132, 0.2)", borderColor: "rgba(255, 99, 132, 1)", borderWidth: 1 },
                                ],
                            },
                        });
                    }
                })(),
                (function () {
                    if (F("#doughnut-chart").length) {
                        var e = document.getElementById("doughnut-chart").getContext("2d");
                        new Chart(e, { type: "doughnut", data: { labels: ["Red", "Blue", "Yellow"], datasets: [{ data: [70, 20, 10], backgroundColor: ["rgba(255, 99, 132, 1)", "rgba(105, 195, 255, 1)", "rgba(255, 209, 94, 1)"] }] } });
                    }
                })();
            // var W = F(".js-contact-form");
            // 0 < !W.length ||
            //     W.each(function (e, t) {
            //         F(t).on("submit", function () {
            //             var t = F(this),
            //                 e = t.serialize(),
            //                 o = t.find(".form__note");
            //             return (
            //                 F.ajax({
            //                     type: "POST",
            //                     url: "send_mail/contact_process.php",
            //                     data: e,
            //                     success: function (e) {
            //                         o.html('<span style="color: green"><br/>Your message has been sent. Thank you!</span>'),
            //                             t.get(0).reset(),
            //                             setTimeout(function () {
            //                                 o.html("");
            //                             }, 3e3);
            //                     },
            //                     error: function (e) {
            //                         var t = '<span style="color: red"><br/>Your message not sent! Error: "' + e.responseJSON.message + '"</span>';
            //                         o.html(t);
            //                     },
            //                     complete: function () {},
            //                 }),
            //                 !1
            //             );
            //         });
            //     });
        });
})(jQuery);
