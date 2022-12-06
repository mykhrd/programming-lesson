<?php get_header(); ?>
<?php get_template_part('components/page-header-main'); ?>
<main>
    <section class="top__main-visual test">
        <div class="top__main-visual__wrap">
            <div class="top__main-visual__hero">
                <div class="top__main-visual__hero-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/header-img.png" alt="">
                </div>
                <div class="top__main-visual__hero-catch">
                    <p>キャッチコピーが<br>入ります</p>
                </div>
            </div>
            <!-- 最新の投稿を１件表示 -->
            <?php
            $the_query = new WP_Query(array(
                'post_type' => 'post',
                'order' => 'DESC',
                'orderby' => 'date',
                'posts_per_page' => 1,
            ));
            ?>
            <?php if ($the_query->have_posts()): ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <a class="top__main-visual__news" href="<?php the_permalink(); ?>">
                        <span class="top__main-visual__news-category">
                            <?php
                            $categories = get_the_category();
                            $category_name = $categories[0]->name;
                            echo $category_name;
                            ?>
                        </span>
                        <span class="top__main-visual__news-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></span>
                        <span class="top__main-visual__news-title"><?php the_title(); ?></span>
                    </a>
                <?php endwhile; ?> 
            <?php endif;?>
        </div>
    </section>

    <section class="top__description">
        <div class="top__description__wrap">
            <div class="top__description-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/treatment-image-01.png" alt="">
            </div>
            <div class="top__description__contents">
                <h3 class="top__description__contents-title">女性に寄り添う鍼灸院</h3>
                <p class="top__description__contents-text">こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。</p>
                <a href="about" class="top__description__contents-btn btn__default">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/black-arrow.svg" alt="">
                    <span>当院について</span>
                </a>
            </div>
        </div>
    </section>

    <section class="top__strength">
        <div class="top__strength__wrap">
            <h3 class="top__strength-title">当院が選ばれる理由</h3>
            <p class="top__strength-subtitle">Our strength</p>
            <div class="top__strength__list">
                <div class="top__strength__list__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/reason-img-01.png" alt="">
                    <p class="top__strength__list__item-number">01</p>
                    <p class="top__strength__list__item-text">こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。</p>  
                </div>
                <div class="top__strength__list__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/reason-img-02.png" alt="">
                        <p class="top__strength__list__item-number">02</p>
                        <p class="top__strength__list__item-text">こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。</p>
                </div>
                <div class="top__strength__list__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/reason-img-03.png" alt="">
                    <p class="top__strength__list__item-number">03</p>
                    <p class="top__strength__list__item-text">こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。こちらには文章が入ります。</p>
                </div>
            </div>
            <a href="" class="top__strength-btn btn__default" >
                <img src="<?php echo get_template_directory_uri(); ?>/img/white-arrow.svg" alt="">
                <span>詳しくみる</span>
            </a>
        </div>
    </section> 

    <section class="top__problems"> 
        <div class="top__problems__wrap">
            <h3 class="top__problems-title__sp">このようなお悩みありませんか</h3>
            <div class="top__problems__list">
                
                <div class="top__problems__list__contents">
                    <h3 class="top__problems__list__contents-title">このようなお悩みありませんか</h3>
                    <ul>
                        <li>生理痛、生理不順などの女性疾患</li>
                        <li>慢性的なストレスや疲れ</li>
                        <li>頭痛・耳鳴り・めまい</li>
                        <li>顔のたるみ・しわ</li>
                        <li>妊活</li>
                        <li>肩こり・腰痛</li>
                        <li>冷え・むくみ</li>
                        <li>自律神経失調症</li>
                    </ul>
                </div>
                <div class="top__problems__list-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/treatment-image-02.png" alt="">
                </div>
            </div>

        </div>
    </section>

    <section class="top__voices">
        <div class="top__voices__wrap">
            <div class="top__voices__title">
                <div class="top__voices__title-text">
                    <h3>皆様の声</h3>
                    <p>patient's voice</p>
                </div>
            </div>
            <div class="top__voices__list">
                <div class="top__voices__list__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/person.png" alt="">
                    <p>福岡市在住　Kさん（３８歳）</p>
                </div>
                <div class="top__voices__list__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/person.png" alt="">
                    <p>福岡市在住　Kさん（３８歳）</p>
                </div>
                <div class="top__voices__list__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/person.png" alt="">
                    <p>福岡市在住　Kさん（３８歳）</p></div>
                <div class="top__voices__list__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/person.png" alt="">
                    <p>福岡市在住　Kさん（３８歳）</p>
                </div>
            </div>
        </div>
    </section>
    
    <?php get_template_part('feature'); ?>

    <section class="top__self-care">
        <div class="top__self-care__wrap">
            <div class="top__self-care-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/selfcare-img.png" alt="">
            </div>
            <div class="top__self-care__content">
                <h3 class="top__self-care__content-title">鍼灸をもっと身近に</h3>
                <div class="top__self-care__content-text">
                    当院ではお灸教室や施術後のアドバイスなどを通して<span>ご自宅で気軽にできるセルフケアのサポートを行なっております。</span>
                </div>  
                <div class="top__self-care__content__link">
                    <a href="" class="top__self-care__content__link-btn btn__default">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/white-arrow.svg" alt="">
                        <span>セルフケア</span>
                    </a>
                </div>
            </div>     

        </div>
    </section>

    <section div="top__news">
        <div class="top__news__wrap">
            <div class="top__news__heading">
                <div class="top__news__heading-text">
                    <h3>お知らせ</h3>
                    <p>news&blog</p>
                </div>
                <div class="top__news__heading__link-desktop">
                    <a href="/news/" class="top__news__heading__link-desktop-btn btn__default">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/black-arrow.svg" alt="">
                        <span>一覧を見る</span>
                    </a>
                </div>
            </div>
            <!-- 最新の投稿を３件表示 -->
            <div class="top__news__contents">
            <?php
            $args = array(
                'post_type' => 'post', 
                'posts_per_page' => 3, 
                'orderby' => 'date', 
                'order' => 'DESC' 
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()): ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <?php $categories = get_the_category(); 
                    if ( $categories ) {
                        foreach ( $categories as $category ) {
                        }
                    }
            ?>
                <div class="top__news__contents__item">
                    <p class="top__news__contents__item-date"> <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></span>
                    <p class="top__news__contents__item-category"><?php echo $category->name; ?></p>
                    <h5 class="top__news__contents__item-title"><?php the_title(); ?></h5>  
                </div>
            <?php endwhile; ?>
            <?php else: ?>
                <div class="top__news__contents__no-post">現在更新情報がありません</div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            </div>
            <!-- スマホ時のみ表示のリンクボタン -->
            <div class="top__news__link-sp">
                    <a href="/news/" class="top__news__link-sp-btn btn__default">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/black-arrow.svg" alt="">
                        <span>一覧を見る</span>
                    </a>
            </div>
        </div>
    </section>

    <section class="top__contact-link">
        <?php get_template_part('contact-link'); ?>
    </section>

    <section class="top__company">
        <div class="top__company__wrap">
            <div class="top__company__contents">
                <div class="top__company__contents__branch-salon">
                    <div class="top__company__contents__branch-salon-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/branch-salon-img.png" alt="">
                    </div>
                    <div class="top__company__contents__branch-salon__info">
                        <h3 class="top__company__contents__branch-salon__info-title">鍼灸しずいろ</h3>
                        <div class="top__company__contents__branch-salon__info-text">
                            <span>鍼灸タネノネ系列店が福岡県糸島市にございます。</span>
                            <span>森の中にある鍼灸院で、自然を感じながら施術していただけます。こちらもぜひご利用ください。</span>
                        </div>
                        <a href="" class="top__company__contents__branch-salon__info-btn  btn__default">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/black-arrow.svg" alt="">
                            <span>Webサイト</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>   
</main>
<?php get_footer(); ?>