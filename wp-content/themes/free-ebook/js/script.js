"use strict";

(function ($) {

    $(".btn-popup").click(function(e) {
        e.preventDefault();
        $(".popup-window").addClass("is-visible");
        $("body").css("overflow", "hidden");
    });

    $(".icon-close").click(function(){
        $('.popup-window').removeClass('is-visible');
        $("body").css("overflow", "visible");
    });

    $(document).keyup(function(event){
        if(event.which=='27'){
            $('.popup-window').removeClass('is-visible');
            $("body").css("overflow", "visible");
        }
    });
    
    
    $(".btn.download").on("click", function () {
        var file = "book";
        
        $(this).attr("href", window.__social__.book).attr("download", "file-" + file + ".pdf");
    });


    var setEqualHeight = function (columns) {
        var tallestcolumn = 0;
        columns.each(function () {
            $(this).css('height', 'auto');
            var currentHeight = jQuery(this).height();
            if (currentHeight > tallestcolumn) {
                tallestcolumn = currentHeight;
            }
        });
        columns.height(tallestcolumn);
    };

    var sectionAutoHeight = function() {
        var windowHeight = $(window).height();
        var headerHeight = $('.header').innerHeight();
        var sectionForm = $('.section-form');
        var sectionFormNewHeight = windowHeight - headerHeight;
        if (windowHeight > 700) {
            sectionForm.css('height', sectionFormNewHeight);
        }
    };

    $(window).load(function () {
        setEqualHeight($(".section-articles .section-articles_item"));
        sectionAutoHeight();
    });

    $(window).resize(function () {
        setEqualHeight($(".section-articles .section-articles_item"));
        sectionAutoHeight();
    });
})(jQuery);


// (function() {
//     [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
//         new SelectFx(el);
//     } );
// })();