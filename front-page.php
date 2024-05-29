<?php get_header(); ?>
<main class="l-main p-main">
    <section class="p-tophead">
        <div class="p-site-title">
            <h2 class="c-logo">
                Natsuko's portfolio
            </h2>
        </div> 
    </section>
    <section id="about" class="p-sec-contents p-sec-contents--about">
        <h2 class="c-sec-title">About</h2>
        <div class="p-card--about">
            <img class="c-author-img" src="<?php echo esc_url(get_template_directory_uri(). '/img/author.png'); ?>">
            <p>
                埼玉県出身<br>
                ２児の母<br>
                地方公務員として、16年間教育行政に携わる（2024年3月退職）。<br>
                定年後も続けたい仕事を探すため、オンラインスクールRaiseTechでWordPress副業コースを受講し、完走。<br>
                Webサイト制作とプログラミングの面白さに気づいて、フロントエンドエンジニアを目指して勉強中。
            </p>
        </div>
        <div class="p-skills">
            <p class="c-sec-title u-sec-title">Skills</p>
            <div class="p-skill-icon">
                <i class="fa-brands fa-sass"></i>
                <i class="fa-brands fa-github"></i>
                <i class="fa-brands fa-wordpress"></i>
            </div>
        </div>
    </section>
    <section id="works" class="p-sec-contents">
        <h2 class="c-sec-title">Works</h2>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">Slide 1</div>
              <div class="swiper-slide">Slide 2</div>
              <div class="swiper-slide">Slide 3</div>
              <div class="swiper-slide">Slide 4</div>
              <div class="swiper-slide">Slide 5</div>
              <div class="swiper-slide">Slide 6</div>
              <div class="swiper-slide">Slide 7</div>
              <div class="swiper-slide">Slide 8</div>
              <div class="swiper-slide">Slide 9</div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section id="contact" class="p-sec-contents">
        <h2 class="c-sec-title">Contact</h2>
        <div class="p-form--contact">
            <form action="#">
                <div class="c-form">
                    <label for="name">お名前</label>
                    <input type="text" id="name" name="your-name">
                </div>
                <div class="c-form">
                    <label for="e-mail">メールアドレス</label>
                    <input type="email" id="email" name="your-email">
                </div>
                <div class="c-form">
                    <label for="message">メッセージ</label>
                    <textarea id="message" name="your-message"></textarea>
                </div>
                <input type="submit" class="c-button" value="送信">
            </form>
        </div>
    </section>
    <section id="blog" class="p-sec-contents">
        <h2 class="c-sec-title">Blog</h2>
        <section class="p-card--blog">
            <article class="c-card--article">
                抜粋です。抜粋です。抜粋です。
            </article>
            <article class="c-card--article">
                抜粋です。抜粋です。抜粋です。
            </article>
            <article class="c-card--article">
                抜粋です。抜粋です。抜粋です。
            </article>
            <article class="c-card--article">
                抜粋です。抜粋です。抜粋です。
            </article>
            <article class="c-card--article">
                抜粋です。抜粋です。抜粋です。
            </article>
            <article class="c-card--article">
                抜粋です。抜粋です。抜粋です。
            </article>
            <article class="c-card--article">
                抜粋です。抜粋です。抜粋です。
            </article>
        </section>
    </section>
</main>
<?php get_footer(); ?>