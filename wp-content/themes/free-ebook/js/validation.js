(function($,W,D){
    'use strict';
    var JQUERY4U = {};

    JQUERY4U.UTIL = {
        setupFormValidation: function() {
            $("#settings-form").validate({
                rules: {
                    id: {
                        required: true
                    },
                    ebook: {
                        required: true
                    },
                    design: "required"
                },
                messages: {
                    id: "Please enter ID",
                    ebook: "Please choose ebook",
                    design: "Please choose color theme"
                },
                submitHandler: function(form) {
                    // $(form).attr('action', $('#ebook').val());
                    // form.submit();

                    var url = $('#ebook').val() + '?affiliate_id=' + encodeURIComponent($('#affiliate-id').val() || '') + '&theme_color=' + encodeURIComponent($('#design').val());
                    var embedString = '<iframe src="'+ url+'" frameborder="0" style="overflow: hidden; height: 100%; width: 100%; position: absolute;" height="100%" width="100%"></iframe>';
                    
                    
                    //$(".section-result").show();
                    
                    setTimeout(function(){
                        $(".section-result").show();
            			anchorClick("#section-result");
            			
            		}, 0);
            		
            	
                    $('.section-form').css("height", "auto");
                    $('.btn-preview').attr('href', url);
                    $(".result-data").text(embedString);
                }
            });
        }
    }

    // Setup form validation after dom loaded
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });


    var anchorClick = function(selector) {
	    var target = $(selector);
	
    	if (target.length) {
            $('html,body').delay(0).animate({
              scrollTop: target.offset().top
    		}, 2000);
    	
    		return false;
    	}
    }


})(jQuery, window, document);