(function($){
    'use strict';
   VK.init({
        apiId: 5579163,
        onlyWidgets: true
    });


    // var shareText = $('#_text_share').val().trim();
    /*window.__social__ = {};*/
    window.__social__.vk = {
        userId: 0,
        textShare: window.__social__.vk.textShare,
        attachments: 'photo-97408246_417822881'
    };

    $('#_vk_share').hide();
    $('#_vk_login').show();

    $('#_vk_login').click(function() {
        VK.Auth.getLoginStatus(function(response) {
            if (response.session) {
                if (response.error) {
                    return false;
                }
                window.__social__.vk.userId = +response.session.mid;
                $('#_vk_share').show();
                $('#_vk_login').hide();
            }
            else {
                VK.Auth.login(function(response) {
                    if (response.session) {
                        window.__social__.vk.userId = +response.session.mid;
                        $('#_vk_share').show();
                        $('#_vk_login').hide();
                    }
                });
            }
        });
    });


    $('#_vk_share').click(function() {
        if (typeof window.__social__.vk.userId === "undefined" || window.__social__.vk.userId == 0) {
            return false;
        }

        VK.Api.call('wall.post', {
            message: window.__social__.vk.textShare,
            owner_id: +window.__social__.vk.userId,
            attachments: window.__social__.vk.attachments
        }, function(r) {
            if (r.error) {
                console.log('Error while posting.');
                return false;
            }
            console.log('Posting completed.');
            $(".social-buttons").hide();
            $(".share-info").hide();
            $(".btn.download").show();
        });
    });

})(jQuery);




