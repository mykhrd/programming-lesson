<header class="header__main">
    <div class="header__main__wrap">
        <div class="header__main__logo">
            <a href="/">
                <!-- 白いサロンロゴ -->
                <img class="header__main__logo-img" src="<?php echo get_template_directory_uri(); ?>/img/header-logo.png" alt="">
            </a>
        </div>
        <nav class="header__main__g-nav g-nav-sp for-pc">
            <ul class="header__main__g-nav__list">
                <li><a href="/about/">当院について</a></li>
                <li><a href="/treatment/">施術について</a></li>
                <li><a href="/menu/">メニュー</a></li>
                <li><a href="/access/">アクセス</a></li>
                <li><a href="/faq/">よくある質問</a></li>
                <li><a href="/contact/">お問い合わせ</a></li>
            </ul>
        </nav>
        <nav class="header__main__reservation">
            <!-- デスクトップのみ表示の右上メニューボタン -->
            <a href="">
                <div class="header__main__reservation-btn">
                    <span class="header__main__reservation-btn-text">ご予約</span>
                </div>
            </a>
            <!-- スマホのみ表示のハンバーガーメニュー -->
            <button class="sp__hamburger-menu">
                <span class="bar bar__top"></span>
                <span class="bar bar__mid"></span>
                <span class="bar bar__bottom"></span>
            </button>
        </nav>   
    </div>
</header>