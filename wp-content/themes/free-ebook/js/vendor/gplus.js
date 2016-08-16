(function($){
   /* window.__social__ = {};*/
    window.__social__.gplus = {
        contenturl: window.__social__.gplus.contenturl,
        clientid: '63809738104-h8bgqi4rumhrqf4jfii0t85vr9t7pr6q.apps.googleusercontent.com',
        cookiepolicy: 'single_host_origin',
        prefilltext: window.__social__.gplus.prefilltext,
        calltoactionlabel: 'LEARN_MORE',
        calltoactionurl:window.__social__.gplus.contenturl,
        onshare: function(response) {
            if (typeof response.post_id !== "undefined" && response.action == 'shared' && response.status == 'completed') {

                console.log('Posting completed.');
                $(".social-buttons").hide();
                $(".share-info").hide();
                $(".btn.download").show();
                return false;
            }
            console.log('Error while posting.');
        }
    };
    gapi.interactivepost.render('_gp_share', window.__social__.gplus);

    
})(jQuery);


