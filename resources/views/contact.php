<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Контакти</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="/assets/images/logo/favicon.png" type="image/x-icon">

    <? include_asset('inc.head') ?>

    <!-- Google tag (gtag.js) -->

</head>

<body class="body-dark-mode">


    <? include_asset('inc.header') ?>

    <main class="over-hiddenn">

      <section class="about-area background_main over-hidden">
    <div class="about-content-wrapper mt-130 mb-50 position-relative">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                    <div class="text-box__section-hero pb-30 text-centered">
                        <h6 class="intro-subheading__page-template intro-subheading__section-hero">
                            <?= __('contact_title') ?>
                        </h6>
                        <h1 class="heading-1__section-hero">
                            <?= __('contact_heading') ?><span class="accent-color"></span>
                        </h1>
                        <div class="divider width-30"></div>
                        <hr>
                        <h5 class="body-text__section-hero">
                            <?= __('contact_subheading') ?>
                        </h5>
                        <ul class="intro-list__section-hero">
                            <li><i aria-hidden="true" class="fas fa-check"></i>
                                <?= __('contact_list_shop') ?>
                            </li>
                            <li><i aria-hidden="true" class="fas fa-check"></i>
                                <?= __('contact_list_webapp') ?>
                            </li>
                            <li><i aria-hidden="true" class="fas fa-check"></i>
                                <?= __('contact_list_payment') ?>
                            </li>
                        </ul>
                    </div>
                </div><!-- /col -->

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="shadow-hover transition3 primary-bg border-radius12 p-4">
                        <div class="page-contents__section-hero">
                            <h4 class="text-white text-center">
                                <?= __('contact_free_consultation_question') ?>
                            </h4>
                            <hr>
                            <ul class="list__page-contents list--divider__page-contents">
                                <li>
                                    <i aria-hidden="true" class="fa-solid fa-circle-check"></i>
                                    <?= __('contact_discuss_goals') ?>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fa-solid fa-circle-check"></i>
                                    <?= __('contact_explain_process') ?>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fa-solid fa-circle-check"></i>
                                    <?= __('contact_guidance') ?>
                                </li>
                            </ul>
                            <div class="header-btn mt-20 text-center">
                                <a href="tel:++359894938614" class="text-uppercase d-inline-block">
                                    <?= __('contact_call_now') ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- /col -->

            </div><!-- /row -->
        </div><!-- /container -->
    </div><!-- /about-wrapper -->
</section>


    </main>


    <? include_asset('inc.footer') ?>


</body>

</html>