$(document).ready(function(){

    document.addEventListener("touchstart",function(){},!0);
    $(".fixed-single-content .items").theiaStickySidebar({
        additionalMarginTop: 30
    });
    $(window).resize(function(){
        if ($(window).width() < 992) {
            $("single-project").removeClass("fixed-single-content");
        }
    });

    $(window).load(function(){
        $(".masonry").isotope({
            itemSelector: ".section"
        });
        $(function() {
            var t = $(".masonry").isotope({
                itemSelector: ".item"
            });
            i = {
                numberGreaterThan50: function() {
                    var t = $(this).find(".number").text();
                    return parseInt(t, 10) > 50
                },
                ium: function() {
                    var t = $(this).find(".name").text();
                    return t.match(/ium$/)
                }
            };
            $("#filters").on("click", "li", function() {
                var n = $(this).attr("data-filter");
                n = i[n] || n, t.isotope({
                    filter: n
                })
            }), $(".filters").each(function(t, i) {
                var n = $(i);
                n.on("click", "li", function() {
                    n.find(".active").removeClass("active"), $(this).addClass("active")
                })
            })
        })
    })
    $("#owl-example2").owlCarousel({
        items : 6,
        autoPlay : true,
        navigation : false,
        pagination : false,
        paginationNumbers: false,
        responsive: true,
        responsiveRefreshRate : 200,
        responsiveBaseWidth: window,
        baseClass : "owl-carousel",
        theme : "owl-theme",
        lazyLoad : false,
        lazyFollow : true,
        lazyEffect : "fade"
    });

    $(window).load(function(){
        var $menu = $('header ul'),
            $menuTrigger = $('.menu-item-has-children > a');
        $menuTrigger.on("click",function(e) {
            e.stopPropagation();
            e.preventDefault();
            var $this = $(this);
            $this.toggleClass("active").next('ul').slideToggle("fast");
        });
    });

    $("#menu").slicknav();
});
