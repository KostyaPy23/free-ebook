<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="#">
                    <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="">
                </a>
            </div>
            <div class="logo-mobile">
                <a href="#">
                    <img src="<?php bloginfo('template_url'); ?>/images/logo-mobile.png" alt="">
                </a>
            </div>
            <div class="product">
                Affiliate <span>Tools</span>
            </div>
        </div>
    </header>
    <div class="content">
        <section class="section-form">
            <div class="container">
                <div class="tool-form">
                    <h1 class="title">Free Ebooks</h1>

                    <form action="" method="get" id="settings-form" novalidate="novalidate">
                        <p>
                            <input type="text" placeholder="Your Affiliate ID" name="id" id="affiliate-id">
                        </p>
                        <p>
                            <select class="cs-select cs-skin-elastic" name="ebook" id="ebook">
                                <option value="" disabled selected>Choose Ebook</option>
                                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                    <option value="<?= get_permalink( $post->ID ) ?>"><?= apply_filters( 'the_title', $post->post_title ) ?></option>
                                <?php endwhile; endif; ?>
                            </select>

                        </p>
                        <p>
                            <select class="cs-select cs-skin-elastic" name="design" id="design">
                                <option value="" disabled selected>Choose Design</option>
                                <option value="blue">Blue</option>
                                <option value="gray">Gray</option>
                                <option value="brown">Brown</option>
                            </select>
                        </p>
                        <button type="submit" class="btn btn-submit" id="generate-code-btn">GENERATE CODE</button>
                    </form>
                </div>
            </div>
        </section>

        <section class="section-result" id="section-result" style="display: none;">
            <div class="container">
                <div class="result-content">
                    <form class="variants">
                        <p>
                            <label for="landing">Landing Page</label>
                            <input type="checkbox" name="landing" id="landing" checked/>    
                        </p>
                        <p>
                            <label for="button">Button</label>
                            <input type="checkbox" name="button" id="button"/>
                        </p>
                        
                    </form>
                    
                    <div class="landing-code">
                        <h3 class="result-title">Landing</h3>

                        <div class="result-data"></div>
                        <div class="result-controls">
                            <a href="#" class="btn btn-result btn-preview" target="_blank">Preview</a>
                        </div>
                    </div>
                    
                    <div class="button-code code code">
                        <h3 class="result-title">Button</h3>

                        <div class="result-data"></div>
                        <div class="result-controls">
                            <a href="#" class="btn btn-result btn-preview" target="_blank">Preview</a>
                        </div>
                    </div>
                    
                    
                </div>

            </div>
        </section>
    </div>
    <?php get_footer(); ?>
