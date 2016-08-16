<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style_single.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fontello.css">

<header class="header">
    <div class="container">
        <h1 class="page-title"><?php the_title() ?></h1>
        <span class="subtitle"><?= get_field( 'tagline' ) ?></span>
    </div>
</header>

<div class="content">
    <article class="main-article">
        <div class="container">
            <div class="col-1-2">
                <figure class="article-img">
                    <?php if ( $img_src = get_field( 'main_image' ) ) : ?>
                        <img src="<?= $img_src ?>" alt="">
                    <?php endif ?>
                </figure>
            </div>
            <div class="col-1-2">
                <div class="article-content">
                    <?= get_field('ebook_keypoints') ?>
                    <div class="dwd-block pc">
                        <button class="btn btn-popup">Download Free</button>
                        <span class="dwd-block_description">Скачай книгу за лайк</span>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <div class="dwd-block tablet center">
        <button class="btn btn-popup">Download Free</button>
        <span class="dwd-block_description">Скачай книгу за лайк</span>
    </div>
    <section class="section">
        <div class="container">
            <h2 class="section-title"><?= get_field('benefits_title') ?></h2>
            <ol class="section-articles">
                <li class="section-articles_item">
                    <h5 class="title"><?= get_field('benefits_item_title_1') ?></h5>
                    <div class="item-content">
                        <?= get_field('benefits_content_1') ?>
                    </div>
                </li>
                <li class="section-articles_item">
                    <h5 class="title"><?= get_field('benefits_item_title_2') ?></h5>
                    <div class="item-content">
                        <?= get_field('benefits_content_2') ?>
                    </div>
                </li>
                <li class="section-articles_item">
                    <h5 class="title"><?= get_field('benefits_item_title_3') ?></h5>
                    <div class="item-content">
                        <?= get_field('benefits_content_3') ?>
                    </div>
                </li>
            </ol>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <blockquote class="quote">
                <div class="quote-body">
                    <div class="quote-user-img">
                        <?php if ( $quote = get_field( 'quote_image' ) ) : ?>
                            <img src="<?= $quote ?>" class="quote-img" alt="">
                        <?php endif ?>
                    </div>
                    <?= get_field('quote_text') ?>
                    <div class="quote-user-name"> <?= get_field('quote_author') ?></div>
                </div>
            </blockquote>
            <div class="dwd-block center">
                <button class="btn btn-popup">Download Free</button>
                <span class="dwd-block_description">Скачай книгу за лайк</span>
            </div>
        </div>
    </section>

    <div class="popup-window">
        <div class="table">
            <div class="table-cell popup-content">

                <div class="popup-logo">
                    <img src="<?php bloginfo('template_url'); ?>/images/popup-logo.png" alt="">
                </div>
                <div class="popup-text">
                    Download
                    <strong>“<?php the_title() ?>”</strong>
                    Free Now!
                    <span class="share-info">by just Sharing it:</span>

                    <i class="icon-close"></i>
                </div>
                <div class="social-buttons">
                    <li class="facebook" id="_fb_share"></li>
                    <li class="google-plus" id="_gp_share"></li>
                    <li class="vk">
                        <button id="_vk_login" title="Authorize"></button>
                        <button id="_vk_share" title="Share"></button>
                    </li>
                    
                    
                    <script>
                    
                        (function($){
                            window.__social__ = {};
                            window.__social__.book = "<?php echo get_field('ebook') ?>";
                               
                            var affilId = "?aff=" + "<?= esc_html( $_GET['affiliate_id']) ?>";
                           
                            window.__social__.FB = {
                                href:  "<?= get_field('facebook_link') ?>" + affilId,
                                quote: "<?= get_field('facebook_text') ?>",
                                title: "<?= the_title() ?>",
                                picture: "<?= get_field('main_image')?>",
                            };  
                            
                            window.__social__.gplus = {
                                contenturl: "<?= get_field('google_plus_link') ?>" + affilId,
                                prefilltext: "<?= get_field('google_plus_text') ?>" + "\n" + "<?= get_field('google_plus_text_link') ?>" + affilId + "\n" + "<?= get_field('google_plus_text_2') ?>"
                            };
                               
                            window.__social__.vk = {
                                textShare: "<?= get_field('vk_text') ?>" + document.URL + "\n" + "<?= get_field('vk_text_2') ?>" + "\n" + "<?= get_field('templatemonster_link') ?>" + affilId
                            };  
                        })(jQuery);
                        
                    </script>
                </div>
                <a class="btn download" style="display: none; margin-top: 15px;">Download Free</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
