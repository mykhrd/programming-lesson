<?php get_header(); ?>
<?php get_template_part('components/page-header-contact'); ?>
<main>
    <section class="flow__heading detail__heading"> 
            <div class= "flow__heading__wrap detail__heading__wrap">
                <div class="flow__heading__title detail__heading__title">
                <div class="flow__heading__title-text detail__heading__title-text">
                    <p>Flow of treatment</p>
                    <h3>施術の流れ</h3>
                </div>
                </div>
                <div class="flow__heading-image detail__heading-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flow-heading-img.png" alt="">
                </div>
            </div>
    </section>

    <section class="flow">
        <div class="flow__wrap">
            <div class="flow-title">
                <h3>施術の流れ</h3>
                <p>鍼灸タネノネの施術の流れをご紹介します。</p>
            </div>
            <div class="flow__list">
                <div class="flow__list-first">
                    <p class="flow__list-first-number">01</p>
                    <h3 class="flow__list-first-title">ご予約</h3>
                    <p class="flow__list-first-text">当院ホームページからのWEB予約、またはお電話でご予約していただけます。施術中はお電話が取れない場合がございますので、24時間いつでも簡単にご予約していただけるWEB予約がおすすめです。</p>
                </div>
                <ul class="flow__list-main">
                    <p class="flow__list-main-number__sp">02</p>
                    <h3 class="flow__list-main-title__sp">ご来院</h3>
                    <li class="flow__list-main__item">
                        <div class="flow__list-main__item__content" >
                            <p class="flow__list-main__item__content-number">02</p>
                            <h3 class="flow__list-main__item__content-title">ご来院</h3>
                            <p class="flow__list-main__item__content-text">
                                当院は完全予約制となっております。<br>
                                次にご予約されている患者様にご迷惑がかかりますので、初診の方はご予約の10分前程度にご来店いただけると幸いです。
                            </p>
                        </div>
                        <div class="flow__list-main__item-img">
                            <div class="bg__color">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/flow-list-img-02.png" alt="">  
                            </div>
                        </div>  
                    </li>
                    <p class="flow__list-main-number__sp">03</p>
                    <h3 class="flow__list-main-title__sp">予診表に記入</h3>
                    <li class="flow__list-main__item">
                        <div class="flow__list-main__item__content" >
                            <p class="flow__list-main__item__content-number">03</p>
                            <h3 class="flow__list-main__item__content-title">予診表に記入</h3>
                            <p class="flow__list-main__item__content-text">
                                お悩みの症状や来院前までに取り組まれた治療内容などに加え、東洋医学に基づいたチェック表にご記入いただきます。
                            </p>
                        </div>
                        <div class="flow__list-main__item-img">
                            <div class="bg__color">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/flow-list-img-03.png" alt="">  
                            </div>
                        </div>  
                    </li>
                    <p class="flow__list-main-number__sp">04</p>
                    <h3 class="flow__list-main-title__sp">カウンセリング</h3>
                    <li class="flow__list-main__item">
                        <div class="flow__list-main__item__content" >
                            <p class="flow__list-main__item__content-number">04</p>
                            <h3 class="flow__list-main__item__content-title">カウンセリング</h3>
                            <p class="flow__list-main__item__content-text">
                                初診の方はご予約プランに、カウンセリング30分が加わります。予診表に基づいて、患者様のお体や心の不調などをお伺いし、患者様に合った施術方針を立てます。
                            </p>
                        </div>
                        <div class="flow__list-main__item-img">
                            <div class="bg__color">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/flow-list-img-04.png" alt="">  
                            </div>
                        </div> 
                    </li>
                    <p class="flow__list-main-number__sp">05</p>
                    <h3 class="flow__list-main-title__sp">お着替え</h3>
                    <li class="flow__list-main__item">
                        <div class="flow__list-main__item__content" >
                            <p class="flow__list-main__item__content-number">05</p>
                            <h3 class="flow__list-main__item__content-title">お着替え</h3>
                            <p class="flow__list-main__item__content-text">
                                施術着にお着替えしていただきます。施術着は当院で準備しておりますが、ご心配な方はご持参されても構いません。
                            </p>
                            <h5>施術着をご持参される方へのお願い</h5>
                            <p class="flow__list-main__item__content-request">膝下が出る短いズボンと首肩まわりや腕に施術しやすい服をご用意ください。背中に施術を行いますので前開きのボタン式上着を前後逆に着ていただき背中が開くような形ですと助かります。</p>
                        </div>
                        <div class="flow__list-main__item-img">
                            <div class="bg__color">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/flow-list-img-05.png" alt="">  
                            </div>
                        </div> 
                    </li>
                    <p class="flow__list-main-number__sp">06</p>
                    <h3 class="flow__list-main-title__sp">身体のバランスチェック</h3>
                    <li class="flow__list-main__item">
                        <div class="flow__list-main__item__content" >
                            <p class="flow__list-main__item__content-number">06</p>
                            <h3 class="flow__list-main__item__content-title">身体のバランスチェック</h3>
                            <p class="flow__list-main__item__content-text">
                                カウンセリングでお伺いしたお話と照らし合わせながら、患者様の体のバランスを東洋医学のアプローチからチェックしていきます。脈やお腹に触れたり、舌の様子を見たりしながら、心身のバランスを確認します。
                            </p>
                        </div>
                        <div class="flow__list-main__item-img">
                            <div class="bg__color">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/flow-list-img-06.png" alt="">  
                            </div>
                        </div> 
                    </li>
                    <p class="flow__list-main-number__sp">07</p>
                    <h3 class="flow__list-main-title__sp">施術</h3>
                    <li class="flow__list-main__item">
                        <div class="flow__list-main__item__content" >
                            <p class="flow__list-main__item__content-number">07</p>
                            <h3 class="flow__list-main__item__content-title">施術</h3>
                            <p class="flow__list-main__item__content-text">
                                鍼やお灸を使って経穴と呼ばれるツボを刺激し、身体の内側から患者様の自然治癒力を高めていきます。また患者様一人ひとりに合わせて鍼の太さや細さ、鍼をする方向や深さ、お灸の種類や回数など、使用するツボを決めていきます。
                            </p>
                        </div>
                        <div class="flow__list-main__item-img">
                            <div class="bg__color">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/flow-list-img-07.png" alt="">  
                            </div>
                        </div> 
                    </li>
                    <p class="flow__list-main-number__sp">08</p>
                    <h3 class="flow__list-main-title__sp">今後の施術方針のご提案</h3>
                    <li class="flow__list-main__item">
                        <div class="flow__list-main__item__content" >
                            <p class="flow__list-main__item__content-number">08</p>
                            <h3 class="flow__list-main__item__content-title">今後の施術方針のご提案</h3>
                            <p class="flow__list-main__item__content-text">
                                施術後、お着替えしていただいた後、お茶をお出ししております。お茶を飲んでいただきながら、当日の施術や患者様の体の状態、今後の施術方針などをお伝えさせていただきます。また、ご自宅でしていただけるセルフケアについてもお伝えできますので、ご要望ください。
                            </p>
                        </div>
                        <div class="flow__list-main__item-img">
                            <div class="bg__color">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/flow-list-img-08.png" alt="">  
                            </div>
                        </div> 
                    </li>
                    <p class="flow__list-main-number__sp">09</p>
                    <h3 class="flow__list-main-title__sp">お会計</h3>
                    <li class="flow__list-main__item">
                        <div class="flow__list-main__item__content" >
                            <p class="flow__list-main__item__content-number">09</p>
                            <h3 class="flow__list-main__item__content-title">お会計</h3>
                            <p class="flow__list-main__item__content-text">
                            当院では現金のみのお支払いとなっております。クレジットカード等はお使いになることができませんのでご了承ください。
                            </p>
                        </div>
                        <div class="flow__list-main__item-img">
                            <div class="bg__color">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/flow-list-img-09.png" alt="">  
                            </div>
                        </div> 
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
