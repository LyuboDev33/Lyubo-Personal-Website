<!doctype html>
<html class="no-js" lang="bg">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Primary Meta Tags -->
    <title>Изработка на Уебсайтове | Любомир Стоянов – Софтуерен Разработчик</title>
    <meta name="description" content="Професионална изработка на уебсайтове, онлайн магазини, уеб приложения и custom софтуерни решения от фрийланс разработчик. Работя индивидуално с всеки клиент, с фокус върху качество, скорост, стабилност и реални бизнес резултати.">
    <meta name="keywords" content="изработка на сайт, програмист, фрийланс програмист, изработка на уебсайт, фирмен сайт, онлайн магазин, уеб приложения, custom софтуер, Любомир Стоянов, уеб разработчик, услуги уеб дизайн, уеб разработка">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="/assets/images/logo/favicon.png" type="image/x-icon">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Изработка на Уебсайтове | Любомир Стоянов – Софтуерен Разработчик">
    <meta property="og:description" content="Имате нужда от фрийлансър, който да поеме изработката на вашия сайт, онлайн магазин или уеб приложение? Създавам модерни, бързи и професионални уеб решения.">
    <meta property="og:url" content="https://lubodev.com">
    <meta property="og:image" content="https://lubodev.com/assets/images/seo-test.png?v=<?php echo time(); ?>">

    <!-- Twitter -->
    <meta name="twitter:title" content="Изработка на Уебсайтове | Любомир Стоянов – Софтуерен Разработчик">
    <meta name="twitter:description" content="Създавам фирмени сайтове, онлайн магазини и уеб приложения, съобразени с нуждите на вашия бизнес. Индивидуален подход, чист код и фокус върху резултатите.">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="https://lubodev.com/assets/images/seo.png?v<?php echo time(); ?>">

    <? include_asset('inc.head') ?>
</head>

<body class="body-dark-mode">

    <? include_asset('inc.header') ?>

    <main class="over-hiddenn">

        <!-- ====== slider-area-start ====== -->
        <div id="home" class="slider-area slider-bg-color over-hidden">

            <section class="background_main single-slider slider-height over-hidden position-relative xxl-device-width bg-cover no-repeat">

                <div id="scene" class="parallax position-absolute w-100 h-100 z-index1">
                    <img data-depth="0.20" class="hero-shape hero-shape1 position-absolute d-none d-lg-inline-block" src="/assets/images/shape/shape1.png" alt="#">
                    <img data-depth="0.15" class="hero-shape hero-shape2 position-absolute d-none d-lg-inline-block" src="/assets/images/shape/shape2.png" alt="#">
                    <img data-depth="0.30" class="hero-shape hero-shape3 position-absolute d-none d-lg-inline-block" src="/assets/images/shape/thirdShape.png" alt="#">
                    <img data-depth="0.10" class="hero-shape hero-shape4 position-absolute d-none d-lg-inline-block" src="/assets/images/shape/shape4.png" alt="#">
                </div>

                <div class="container slider-height d-flex align-items-end">
                    <div class="row justify-content-center align-items-center h-100">

                        <div class="col-xl-5 col-lg-6 col-md-12 col-sm-11 col-12 d-flex align-items-center justify-content-center">
                            <div class="slider-wrapper h-100">
                                <div class="slider-content text-center mt--45 text-lg-left position-relative z-index11" data-aos="fade-right" data-aos-duration="2200">
                                    <h1 class="mb-15 pt-15 white-text">
                                        <span class="sub-heading d-block text-uppercase theme-color mb-0">
                                            <?= __('hello1') ?>
                                        </span>
                                        <?= __('full_name') ?>
                                    </h1>

                                    <h2 class="text-capitalize white-text mb-25">
                                        <span class="d-text d-block d-sm-inline-block">
                                            <span class="typer theme-color d-inline-block pl-2" id="main"
                                                data-words="<?= __('job_titles') ?>"
                                                data-delay="250" data-colors="#ffffff"></span><span
                                                class="cursor theme-color d-inline-block" data-owner="main"></span>
                                        </span>
                                    </h2>

                                    <a href="/services" class="btn text-white position-relative over-hidden theme-bg text-uppercase transition5">
                                        <?= __('to_services') ?>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-7 col-lg-6 col-md-7 col-sm-10 col-12 d-flex justify-content-center align-items-end h-100">
                            <div class="slider-img pl-120 position-relative z-index1">
                                <img loading="lazy" src="/assets/images/about/lyubomir-stoyanov.png" alt="<?= __('full_name') ?>">
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- ====== sales-intro-area-start ====== -->
            <section class="intro-feature-area background_main section-bg over-hidden position-relative pt-70 pb-40">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-xl-9 col-lg-10 col-md-11 col-12">
                            <div class="title">
                                <span class="theme-color text-uppercase d-block mb-6"><?= __('home_sales_label') ?></span>
                                <h2 class="mb-25"><?= __('home_sales_title') ?></h2>

                                <p class="mb-30">
                                    <?= __('home_sales_text') ?>
                                </p>

                                <a href="/contact" class="btn text-white position-relative over-hidden theme-bg text-uppercase transition5">
                                    <?= __('home_sales_button') ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ====== sales-intro-area-end ====== -->

            <!-- service-area-start -->
            <section class="service-area section-bg over-hidden pt-30 pb-80">
                <div class="container">
                    <div class="title text-center pt-30 pb-30">
                        <span class="theme-color text-uppercase d-block mb-6"><?= __('home_services_label') ?></span>
                        <h3 class="text-center m-0-auto"><?= __('home_services_title') ?></h3>
                        <p class="mt-20">
                            <?= __('home_services_text') ?>
                        </p>
                    </div>
                </div>

                <? include_asset('components.component-services') ?>
            </section>
            <!-- service-area-end -->

            <!-- ====== Work process ====== -->
            <section class="intro-feature-area background_main section-bg over-hidden position-relative">

                <div class="container">

                    <div class="title text-center pt-30 pb-30">
                        <span class="theme-color text-uppercase d-block mb-6"><?= __('work_start') ?></span>
                        <h3 class="text-center m-0-auto"><?= __('work_process_title') ?></h3>
                        <p class="mt-20">
                            <?= __('home_work_process_text') ?>
                        </p>
                    </div>

                    <div class="row justify-content-center pt-20 pb-70">

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-9 col-11">
                            <div class="single-intro-feature-content primary-bg border-radius10 transition5 mb-30" data-tilt="" data-tilt-max="10">
                                <div class="intro-ft-icon d-inline-block mb-30 transition5">
                                    <img src="/assets/images/icon/intro-ft-icon3.png" alt="icon1">
                                </div>
                                <div class="intro-feature-text">
                                    <h4 class="mb-22"><?= __('feature1_title') ?></h4>
                                    <p><?= __('feature1_text') ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-9 col-11">
                            <div class="single-intro-feature-content primary-bg border-radius10 transition5 mb-30 intro-feature-margin mt-60" data-tilt="" data-tilt-max="10">
                                <div class="intro-ft-icon d-inline-block mb-30 transition5">
                                    <img src="/assets/images/icon/intro-ft-icon2.png" alt="icon1">
                                </div>
                                <div class="intro-feature-text">
                                    <h4 class="mb-22"><?= __('feature2_title') ?></h4>
                                    <p><?= __('feature2_text') ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-9 col-11">
                            <div class="single-intro-feature-content primary-bg border-radius10 transition5 mb-30" data-tilt="" data-tilt-max="10">
                                <div class="intro-ft-icon d-inline-block mb-30 transition5">
                                    <img src="/assets/images/icon/intro-ft-icon1.png" alt="icon1">
                                </div>
                                <div class="intro-feature-text">
                                    <h4 class="mb-22"><?= __('feature3_title') ?></h4>
                                    <p><?= __('feature3_text') ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-9 col-11">
                            <div class="single-intro-feature-content primary-bg border-radius10 transition5 mb-30 intro-feature-margin mt-60" data-tilt="" data-tilt-max="10">
                                <div class="intro-ft-icon d-inline-block mb-30 transition5">
                                    <img src="/assets/images/icon/intro-ft-icon4.png" alt="icon1">
                                </div>
                                <div class="intro-feature-text">
                                    <h4 class="mb-22"><?= __('feature4_title') ?></h4>
                                    <p><?= __('feature4_text') ?></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="intro-feature-text-style position-absolute d-none d-md-inline-block">
                    <span class="d-inline-block"><?= __('feature_text_style') ?></span>
                </div>

                <div class="intro-feature-icon position-absolute d-none d-md-inline-block zoom-animation">
                    <img src="/assets/images/shape/shape2.png" alt="intro shape 1">
                </div>
            </section>
            <!-- ====== Work process end ====== -->

            <!-- ====== about-area-start ====== -->
            <section class="about-area over-hidden">

                <div class="about-content-wrapper about-margin mt-170 pb-20 position-relative">
                    <div class="container">
                        <div class="row justify-content-center">

                            <div class="col-xl-6 col-lg-6 col-md-8 offset-md-0 col-sm-10 col-10">
                                <div class="about-img-wrapper position-relative mb-90">
                                    <div class="about-img position-relative z-index11" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="100">
                                        <div class="about-img-over pl-50 transition5 d-inline-block position-relative">
                                            <div class="position-relative z-index11" data-tilt data-tilt-max="10">
                                                <img class="border-radius13 position-relative z-index11"
                                                    src="/assets/images/about/lyubomir-second.png" alt="<?= __('full_name') ?>">
                                            </div>

                                            <div class="about-shape1 position-absolute" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="800"></div>
                                            <div class="about-shape2 position-absolute z-index11" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="800"></div>

                                            <div class="about-download-wrapper position-absolute z-index11">
                                                <img class="download-bg rotate-animation d-inline-block" src="/assets/images/icon/inkpx-curved-text.png" alt="code icon background">
                                                <a href="#" class="cv-download-link transition5">
                                                    <img class="d-icon d-inline-block position-absolute" src="/assets/images/icon/code.svg" alt="code icon">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="about-content position-relative mb-50">
                                    <div class="position-relative">
                                        <div class="title">
                                            <span class="theme-color text-uppercase d-block mb-1 mt--5"><?= __('info') ?></span>
                                            <h2 class="mb-30"><?= __('about_me') ?></h2>
                                        </div>
                                    </div>

                                    <p class="mb-25">
                                        <span style="margin-bottom: 15px; display: block;">
                                            <?= __('home_about_new_text1') ?>
                                        </span>

                                        <span style="margin-bottom: 15px; display: block;">
                                            <?= __('home_about_new_text2') ?>
                                        </span>

                                        <span style="margin-bottom: 15px; display: block;">
                                            <?= __('home_about_new_text3') ?>
                                        </span>
                                    </p>

                                    <div class="about-info-wrapper pt-25 pb-20 mt-25">
                                        <div class="row">
                                            <div class="col-xl-8 col-lg-12 col-md-6 col-sm-12 col-12">
                                                <ul class="about-info">
                                                    <li class="d-inline-block pr-20">
                                                        <p class="jostMedium-font-family mb-6"><?= __('phone') ?></p>
                                                        <p class="jostMedium-font-family mb-6"><?= __('email') ?></p>
                                                    </li>
                                                    <li class="d-inline-block">
                                                        <p class="mb-6">
                                                            <a style="color: #b0aac0 !important;" href="tel:+359894938614">0894 938 614</a>
                                                        </p>
                                                        <p class="mb-6">contact@lubodev.com</p>
                                                    </li>
                                                </ul>

                                                <div class="header-btn mt-20">
                                                    <a href="/contact" class="text-uppercase d-inline-block"><?= __('contact_button') ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="about-footer-content d-sm-flex align-items-center mt-lg-2 mt-sm-4 mt-3">
                                        <div class="signature pt-12 pr-45">
                                            <img src="/assets/images/about/signature.png" alt="<?= __('about_signature_alt') ?>">
                                        </div>
                                        <div class="about-footer-content-right mt-20 text-left">
                                            <h6 class="d-xl-inline-block text-uppercase pr5 mb-0"><?= __('signature_name') ?></h6>
                                            <span class="openS-font-family meta-text-color"><?= __('signature_role') ?></span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="about-text-style position-absolute d-none d-md-inline-block">
                        <span class="d-inline-block section-text-color">STOYANOV</span>
                    </div>

                    <div class="about-icon position-absolute d-none d-md-inline-block z-index1 zoom-animation">
                        <img src="/assets/images/shape/content-shape2.png" alt="about shape 2">
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <? include_asset('components.portfolio') ?>

            <? include_asset('components.review') ?>

            <!-- ====== final-cta-area-start ====== -->
            <section class="intro-feature-area background_main section-bg over-hidden position-relative pt-70 pb-80">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-xl-9 col-lg-10 col-md-11 col-12">
                            <div class="title">
                                <span class="theme-color text-uppercase d-block mb-6"><?= __('home_final_cta_label') ?></span>
                                <h3 class="mb-25"><?= __('home_final_cta_title') ?></h3>
                                <p class="mb-30">
                                    <?= __('home_final_cta_text') ?>
                                </p>
                                <a href="/contact" class="btn text-white position-relative over-hidden theme-bg text-uppercase transition5">
                                    <?= __('home_final_cta_button') ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ====== final-cta-area-end ====== -->

        </div>
    </main>

    <? include_asset('inc.footer') ?>

</body>

</html>