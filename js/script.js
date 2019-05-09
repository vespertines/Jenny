jQuery(document).ready(function() {
    document.addEventListener("touchstart", function() {}, true);

    FastClick.attach(document.body);
    
    if ($("body").hasClass("home")) {
        var homeSwiper = new Swiper(".swiper-container", {
            speed: 500,
            loop: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false
            },
            touchRatio: 0,
            navigation: {
                prevEl: ".home-prev",
                nextEl: ".home-next"
            }
        });
    }

    $(".button").click(function() {
        if ($(this).hasClass("rotate")) {
            $(this).removeClass("rotate");
            $("nav ul").fadeTo(250, 0);
        } else {
            $(this).addClass("rotate");
            $("nav ul").fadeTo(250, 1);
        }
    });

    // $("nav ul li span").click(function () {
    //     $(".page-template-page-projects")[0] ? ($(this).hasClass("state") ? $(this).parent("li").find("ul").css({
    //         display: "none"
    //     }) : $(this).parent("li").find("ul").css({
    //         display: "inline-block"
    //     }), $(this).toggleClass("state")) : window.location.href = "/projects"
    // }), $("nav ul li ul li").click(function () {
    //     $(this).not(".state") && ($("nav ul li ul li").removeClass("state"), $(this).addClass("state"))
    // });

    $(".read").click(function() {
        $(this).toggleClass("state"),
            $(this).hasClass("state")
                ? ($(this).text("Images"),
                  $(".article--container").css({
                      opacity: 1,
                      zIndex: 1000
                  }))
                : ($(this).text("Read"),
                  $(".article--container").css({
                      opacity: 0,
                      zIndex: 0
                  }));
    });

    if ($(".swiper-container .swiper-slide").length > 1) {
        var projectSwiper = new Swiper(".swiper-container", {
            speed: 500,
            loop: false,
            navigation: {
                nextEl: ".next",
                prevEl: ".prev"
            },
            pagination: {
                el: ".pagination",
                type: "fraction",
                renderFraction: function(t, i) {
                    return (
                        '<span class="' +
                        t +
                        '"></span> / <span class="' +
                        i +
                        '"></span>'
                    );
                }
            }
        });

        projectSwiper.on("reachEnd", function() {
            $(".next").click(function() {
                // var nextProject = $(".next-project a").attr("href");
                // window.location.href = nextProject;
                window.location.href = "/projects";
            });
        });
    } else {
        $(".next, .prev").click(function() {
            window.location.href = "/projects";
        });
    }

    var projectNav = $(".project-name");

    $(window).mousemove(function(event) {
        if ($(".page-template-page-projects")) {
            if ($(document).width() / 2 > event.pageX) {
                projectNav.css({
                    top: event.pageY + "px",
                    left: event.pageX + 20 + "px"
                });
            } else {
                projectNav.css({
                    top: event.pageY + "px",
                    left: event.pageX - projectNav.outerWidth() - 20 + "px"
                });
            }
            $(".box")
                .mouseenter(function() {
                    var projectTitle = $(this).data("project");
                    projectNav
                        .css({
                            opacity: 1
                        })
                        .html(projectTitle);
                })
                .mouseleave(function() {
                    projectNav
                        .css({
                            opacity: 0
                        })
                        .html("");
                });
        }
    });

    var $container = $(".boxes");
    $container.imagesLoaded(function() {
        $container.masonry({
            itemSelector: ".box"
        });
    });
});
