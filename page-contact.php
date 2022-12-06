<?php get_header(); ?>
<?php get_template_part('components/page-header-contact'); ?>
<main>
    <section class="contact__heading detail__heading"> 
        <div class= "contact__heading__wrap detail__heading__wrap">
            <div class="contact__heading__title detail__heading__title">
            <div class="contact__heading__title-text detail__heading__title-text">
                <p>Contact</p>
                <h3>お問合せ</h3>
            </div>
            </div>
            <div class="contact__heading-image detail__heading-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact-form-img.png" alt="">
            </div>
        </div>

    </section>

    <section class="contact__form">
        <div class="contact__form__wrap">
            <div class="contact__form-title">
                <p>お問合せ</p>
            </div>
            <div class="contact__form__content">
            <?php echo do_shortcode('[contact-form-7 id="9" title="お問い合わせ"]'); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>


