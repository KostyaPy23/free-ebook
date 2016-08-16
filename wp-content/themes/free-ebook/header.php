<!DOCTYPE html>
<html lang="en">
<head>
    <title>Free Ebooks</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

<!--    <link rel="stylesheet" href="--><?php //bloginfo('template_url'); ?><!--/css/style.css">-->
<!--    <link rel="stylesheet" href="--><?php //bloginfo('template_url'); ?><!--/css/style_single.css">-->

    <?php wp_head() ?>
    
    <script>
      (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
    </script>
</head>
<body class="<?= ! empty( $_GET['theme_color'] ) ? esc_html( $_GET['theme_color'] ) : 'brown' ?>">