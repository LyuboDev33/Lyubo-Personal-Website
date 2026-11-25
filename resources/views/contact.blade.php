@extends('layouts.app')


@section('SEO')

    <!-- Primary Meta Tags -->
    <title>Контакти | Любомир Стоянов – Уеб Разработчик</title>

    <meta
        name="description"
        content="Свържете се с Любомир Стоянов за изработка на уебсайт, онлайн магазин, уеб приложение или custom софтуерно решение. Изпратете запитване и обсъдете вашия проект."
    >

    <meta
        name="keywords"
        content="контакти уеб разработчик, Любомир Стоянов, изработка на сайт, фрийланс програмист, уеб разработчик, онлайн магазин, уеб приложение, custom софтуер, запитване за сайт"
    >

    <!-- Canonical -->
    <link
        rel="canonical"
        href="https://lubodev.com/contact"
    >

    <!-- Open Graph / Facebook -->
    <meta
        property="og:type"
        content="website"
    >

    <meta
        property="og:title"
        content="Контакти | Любомир Стоянов – Уеб Разработчик"
    >

    <meta
        property="og:description"
        content="Имате идея за уебсайт, онлайн магазин или уеб приложение? Свържете се с мен, за да обсъдим вашия проект и подходящото решение за вашия бизнес."
    >

    <meta
        property="og:url"
        content="https://lubodev.com/contact"
    >

    <meta
        property="og:image"
        content="https://lubodev.com/assets/images/seo-test.png"
    >

    <meta
        property="og:site_name"
        content="Любомир Стоянов – Уеб Разработчик"
    >

    <meta
        property="og:locale"
        content="bg_BG"
    >

    <!-- Twitter / X -->
    <meta
        name="twitter:card"
        content="summary_large_image"
    >

    <meta
        name="twitter:title"
        content="Контакти | Любомир Стоянов – Уеб Разработчик"
    >

    <meta
        name="twitter:description"
        content="Свържете се с мен за изработка на уебсайт, онлайн магазин, уеб приложение или индивидуално софтуерно решение."
    >

    <meta
        name="twitter:image"
        content="https://lubodev.com/assets/images/seo-test.png"
    >

@endsection


@section('content')

    <section class="about-area background_main over-hidden">

        <div class="about-content-wrapper mt-130 mb-50 position-relative">

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                        <div class="text-box__section-hero pb-30 text-centered">

                            <h6 class="intro-subheading__page-template intro-subheading__section-hero">
                                {{ __('contact_title') }}
                            </h6>

                            <h1 class="heading-1__section-hero">
                                {{ __('contact_heading') }}<span class="accent-color"></span>
                            </h1>

                            <div class="divider width-30"></div>

                            <hr>

                            <h5 class="body-text__section-hero">
                                {{ __('contact_subheading') }}
                            </h5>

                            <ul class="intro-list__section-hero">

                                <li>
                                    <i
                                        aria-hidden="true"
                                        class="fas fa-check"
                                    ></i>

                                    {{ __('contact_list_shop') }}
                                </li>

                                <li>
                                    <i
                                        aria-hidden="true"
                                        class="fas fa-check"
                                    ></i>

                                    {{ __('contact_list_webapp') }}
                                </li>

                                <li>
                                    <i
                                        aria-hidden="true"
                                        class="fas fa-check"
                                    ></i>

                                    {{ __('contact_list_payment') }}
                                </li>

                            </ul>

                        </div>

                    </div><!-- /col -->


                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                        <div class="shadow-hover transition3 primary-bg border-radius12 p-4">

                            <div class="page-contents__section-hero">

                                <h4 class="text-white text-center">
                                    {{ __('contact_free_consultation_question') }}
                                </h4>

                                <hr>

                                <ul class="list__page-contents list--divider__page-contents">

                                    <li>
                                        <i
                                            aria-hidden="true"
                                            class="fa-solid fa-circle-check"
                                        ></i>

                                        {{ __('contact_discuss_goals') }}
                                    </li>

                                    <li>
                                        <i
                                            aria-hidden="true"
                                            class="fa-solid fa-circle-check"
                                        ></i>

                                        {{ __('contact_explain_process') }}
                                    </li>

                                    <li>
                                        <i
                                            aria-hidden="true"
                                            class="fa-solid fa-circle-check"
                                        ></i>

                                        {{ __('contact_guidance') }}
                                    </li>

                                </ul>


                                <div class="header-btn mt-20 text-center">

                                    <a
                                        href="tel:+359894938614"
                                        class="text-uppercase d-inline-block"
                                    >
                                        {{ __('contact_call_now') }}
                                    </a>

                                </div>

                            </div>

                        </div>

                    </div><!-- /col -->

                </div><!-- /row -->

            </div><!-- /container -->

        </div><!-- /about-wrapper -->

    </section>

@endsection