window.fbAsyncInit = function() {
    FB.init({
        appId: '164679387290275',
        xfbml: true,
        version: 'v2.7',
        status     : true, // check login status
        cookie     : true, // enable cookies to allow the server to access the session
        oauth      : true, // enable OAuth 2.0
    });
};
(function($){
    $('#_fb_share').click(function() {
        FB.ui({
                method: 'share',
                href: window.__social__.FB.href,
                quote: window.__social__.FB.quote,
                // title: window.__social__.FB.title,
                // description: "(d) The asymptotics of E|In, when ao(log n+wn Vlog n) < k < a.2 (log n– wn Vlog n): k n  (p-P + q ^) E|Ink] = G3 (p. logp/q p'n) v/275 (D): 1 1 ( o(T: , T:)). with p, .'",
                picture: window.__social__.FB.picture
            },
            // callback
            function(response) {
                if (response && !response.error_message) {
                    console.log('Posting completed.');
                    $(".social-buttons").hide();
                    $(".share-info").hide();
                    $(".btn.download").show();
                }
                else {
                    console.log('Error while posting.');
                }
            }
        );
    });

})(jQuery);
