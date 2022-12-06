<?php get_header(); ?>
<?php get_template_part('components/page-header-contact'); ?>
<main>
<section class="treatment__heading detail__heading"> 
    <div class= "treatment__heading__wrap detail__heading__wrap">
        <div class="treatment__heading__title detail__heading__title">
        <div class="treatment__heading__title-text detail__heading__title-text">
            <p>About treatment</p>
            <h3>施術について</h3>
        </div>
        </div>
        <div class="treatment__heading-image detail__heading-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/treatment-heading-img.png" alt="">
        </div>
    </div>
</section>

<section class="treatment__desc">
    <div class="treatment__desc__wrap">
        <div class="treatment__desc__for-guest">
            <h3 class="treatment__desc__for-guest__sp-title">初めての方へ</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/img/treatment-desc-img-01.png" alt="">
            <div class="treatment__desc__for-guest__content">
                <h3 class="treatment__desc__for-guest__content__dt-title">初めての方へ</h3>
                <p class="treatment__desc__for-guest__content-text">当院では初回に患者様の状態を把握するため、ゆっくり時間をかけてカウンセリングを行います。施術前にご記入いただくチェックシートも含めて、身体の状態を把握し、個別カルテを作成します。 当院では東洋医学での判断基準『四診』から患者様を観察し、症状が発生している根本原因を体全体のバランスからみていきます。</p>
                <p>初回のみ初診料が発生します。<br>約30分　初診料金：2000円 （税込）</p>
            </div>
        </div>
        <div class="treatment__desc__notes">
            <div class="treatment__desc__notes__content">
                <h3>その他、注意事項</h3>
                <p class="treatment__desc__notes__content-text">・妊活プランの方で基礎体温表をお持ちの方はご持参ください。<br>
                    ・妊娠期（つわり、逆子など）の鍼灸施術は可能ですが、安全優先のため主治医に鍼灸施術の承諾を得てお越しください。また予約日に出血や強いお腹の張りのある場合、鍼灸施術はお受けできません。<br>
                    ・首肩施術の際に髪の毛をターバンでまとめます。髪の毛が乱れる可能性がありますので、必要な方はヘヤーブラシや帽子などをご持参ください。<br>
                    ・うつぶせ姿勢での施術や症状によっては顔への刺鍼もございますので多少お化粧が取れる可能性があります。必要な方はお化粧道具をご持参ください。<br>
                    ・美容鍼灸プランは妊娠中の方はお控えください。
                </p>
                <p>
                    ●以下の方は期間をあけてご利用ください。<br>
                    ・２ヶ月以内にケミカルピーリングや皮膚剥離手術を受けた方<br>
                    ・３ヶ月以内にレーザー治療を受けた方<br>
                    ・６ヶ月以内にボトックスを受けた方
                </p>    
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/treatment-desc-img-02.png" alt="">
        </div>
        <div class="treatment__desc__cancel">
            <div class="treatment__desc__cancel__content">
                <h3>キャンセルについて</h3>
                <p class="treatment__desc__cancel__content-text">・妊活プランの方で基礎体温表をお持ちの方はご持参ください。<br>
                    当院では完全予約制のため前日、当日のキャンセルについては料金が発生します。予約システムからのご予約の方は２日前までご自身でのキャンセルが可能です。【予約確定メール】に添付されている《予約詳細》のアドレスをクリックください。<br>  
                    前日、当日のキャンセルはお電話・Eメール・問い合わせフォームでご連絡ください。<br>
                    施術中は電話に出ることが難しいため、留守電に「キャンセル日・電話番号・お名前」をお願いいたします。
                </p>
                <p>
                    ●以下の方は期間をあけてご利用ください。<br>
                    ・２ヶ月以内にケミカルピーリングや皮膚剥離手術を受けた方<br>
                    ・３ヶ月以内にレーザー治療を受けた方<br>
                    ・６ヶ月以内にボトックスを受けた方
                </p>    
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/treatment-desc-img-03.png" alt="">
        </div>
</section>
<section class="treatment__menu__heading">
    <div class="treatment__menu__heading__wrap">
        <div class="treatment__menu__heading-btn">
            <h3>当院の施術メニュー</h3>
            <!-- デスクトップのみ表示のボタン -->
            <a href="/menu/" class="btn__default">
                <img src="<?php echo get_template_directory_uri(); ?>/img/black-arrow.svg" alt="">
                <span>詳しくはこちら</span>
            </a>
        </div>
        <div class="treatment__menu__heading__example">  
            <div class="treatment__menu__heading__example__content">
                <ul>
                    <li>ベーシックプラン</li>
                    <li>ホルモンバランスを整える妊活プラン</li>
                    <li>電気を流す美容鍼プラン</li>
                    <li>プレミアムプラン</li>
                    <li>全身リラックス、リトリートプラン</li>
                </ul>
                <p>
                    ※初診の方は施術の前にカウンセリング（＋30分）を行なっておりますので、各メニューの料金に加え初診料(2000円)がかかります。
                </p>
            </div>
        </div>
         <!-- スマホのみ表示のボタン -->
        <a href="/menu/" class="treatment__menu__heading-btn-sp  btn__default">
                <img src="<?php echo get_template_directory_uri(); ?>/img/black-arrow.svg" alt="">
                <span>詳しくはこちら</span>
        </a>
    </div>
</section>
<section class="treatment__link  contact__link">
        <div class="treatment__link__wrap contact__link__wrap">
            <div class="contact__link-btn border">
                <h1>施術の流れ</h1>
                <a href="flow">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/black-arrow.svg" alt="">
                </a>
            </div>
            <div class="contact__link-btn">
                <h1>施術間隔の目安</h1>
                <a href="/contact/">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/black-arrow.svg" alt="">
                </a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>