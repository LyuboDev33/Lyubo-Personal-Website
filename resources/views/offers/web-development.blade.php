@extends('layouts.app')

@section('SEO')
    <title>Фирмен Уебсайт за 750 € | Цялостен Пакет – Любомир Стоянов</title>
    <meta name="description"
        content="Професионален фирмен уебсайт за 750 € с до 10 страници, блог, хостинг, домейн, Google Analytics, контактна форма и мобилна версия. Плащане на 2 части по 325 €.">
    <meta name="keywords"
        content="изработка на фирмен уебсайт, фирмен сайт, уебсайт за бизнес, изработка на сайт цена, професионален уебсайт, сайт за фирма">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="https://lubodev.com/offers/company-website">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Фирмен Уебсайт – Цялостен Пакет за 750 €">
    <meta property="og:description"
        content="До 10 страници, блог, хостинг, домейн, Google Analytics, контактна форма и цялостна разработка – включени в пакетната цена от 750 €.">
    <meta property="og:url" content="https://lubodev.com/offers/company-website">
    <meta property="og:image" content="https://lubodev.com/assets/images/seo-test.png">
    <meta property="og:site_name" content="Любомир Стоянов – Уеб Разработчик">
    <meta property="og:locale" content="bg_BG">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Фирмен Уебсайт – Цялостен Пакет за 750 €">
    <meta name="twitter:description"
        content="Всичко необходимо за професионалното онлайн присъствие на вашия бизнес – в един пакет.">
    <meta name="twitter:image" content="https://lubodev.com/assets/images/seo-test.png">
@endsection

@section('content')
    <section class="about-area background_main over-hidden pt-150 pb-80">

        <div class="container">

            <div class="row justify-content-center align-items-center">



                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 align-self-start">

                    <div class="title mb-30">

                        <span class="theme-color text-uppercase d-block mb-6">{{ __('company_offer_hero_label') }}</span>

                        <h1 class="text-white mb-25">{{ __('company_offer_hero_title') }}</h1>

                        <p>{{ __('company_offer_hero_description') }}</p>

                    </div>



                    <ul class="intro-list__section-hero">

                        <li><i aria-hidden="true" class="fas fa-check"></i> {{ __('company_offer_hero_feature_pages') }}
                        </li>

                        <li><i aria-hidden="true" class="fas fa-check"></i> {{ __('company_offer_hero_feature_blog') }}</li>

                        <li><i aria-hidden="true" class="fas fa-check"></i> {{ __('company_offer_hero_feature_domain') }}
                        </li>

                        <li><i aria-hidden="true" class="fas fa-check"></i> {{ __('company_offer_hero_feature_analytics') }}
                        </li>

                        <li><i aria-hidden="true" class="fas fa-check"></i> {{ __('company_offer_hero_feature_contact') }}
                        </li>

                        <li><i aria-hidden="true" class="fas fa-check"></i>
                            {{ __('company_offer_hero_feature_responsive') }}</li>

                    </ul>

                </div>



                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">

                    <div class="shadow-hover transition3 primary-bg border-radius12 p-4">



                        <div class="text-center">

                            <span
                                class="theme-color text-uppercase d-block mb-10">{{ __('company_offer_pricing_label') }}</span>



                            <p class="mb-0">{{ __('company_offer_pricing_value_label') }}</p>



                            <h4 class="mt-10">

                                <del style="opacity: .55;">1 270 €+</del>

                            </h4>



                            <p>{{ __('company_offer_pricing_final_label') }}</p>



                            <h2 class="theme-color mb-10" style="font-size: 64px;">750 €</h2>



                            <p class="mb-20">

                                {{ __('company_offer_pricing_once') }}

                            </p>


                            <hr>

                        </div>



                        <ul class="list__page-contents list--divider__page-contents">

                            <li><i class="fa-solid fa-circle-check"></i> {{ __('company_offer_pricing_item_website') }}
                            </li>

                            <li><i class="fa-solid fa-circle-check"></i> {{ __('company_offer_pricing_item_pages') }}</li>

                            <li><i class="fa-solid fa-circle-check"></i> {{ __('company_offer_pricing_item_blog') }}</li>

                            <li><i class="fa-solid fa-circle-check"></i> {{ __('company_offer_hosting') }}</li>

                            <li><i class="fa-solid fa-circle-check"></i> {{ __('company_offer_domain') }}</li>

                            <li><i class="fa-solid fa-circle-check"></i> Google Analytics</li>

                            <li><i class="fa-solid fa-circle-check"></i> {{ __('company_offer_inquiry_form') }}</li>

                        </ul>



                        <div class="header-btn mt-30 text-center">

                            <a href="/contact"
                                class="text-uppercase d-inline-block">{{ __('company_offer_pricing_cta') }}</a>

                        </div>



                    </div>

                </div>



            </div>

        </div>

    </section>

    <!-- ====== Offer Hero End ====== -->





    <!-- ====== Main Website Start ====== -->

    <section class="secondary-bg pt-80 pb-80">

        <div class="container">



            <div class="row justify-content-center">

                <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 col-12">

                    <div class="title text-center mb-50">

                        <span
                            class="theme-color text-uppercase d-block mb-6">{{ __('company_offer_features_label') }}</span>

                        <h2 class="text-dark">{{ __('company_offer_features_title') }}</h2>

                        <p class="mt-20">{{ __('company_offer_features_description') }}</p>

                    </div>

                </div>

            </div>



            <div class="row">



                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-25">

                    <div class="shadow-hover transition3 primary-bg border-radius12 p-4 h-100">

                        <h4 class="mb-20"><i class="fa-solid fa-palette theme-color"></i>
                            {{ __('company_offer_design_title') }}</h4>

                        <p class="mb-0">{{ __('company_offer_design_description') }}</p>

                    </div>

                </div>



                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-25">

                    <div class="shadow-hover transition3 primary-bg border-radius12 p-4 h-100">

                        <h4 class="mb-20"><i class="fa-solid fa-mobile-screen-button theme-color"></i>
                            {{ __('company_offer_responsive_title') }}</h4>

                        <p class="mb-0">{{ __('company_offer_responsive_description') }}</p>

                    </div>

                </div>



                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-25">

                    <div class="shadow-hover transition3 primary-bg border-radius12 p-4 h-100">

                        <h4 class="mb-20"><i class="fa-solid fa-layer-group theme-color"></i>
                            {{ __('company_offer_pages_title') }}</h4>

                        <p class="mb-15">{{ __('company_offer_pages_description') }}<strong
                                class="text-white">{{ __('company_offer_pages_count') }}</strong>.</p>



                        <ul class="list__page-contents">

                            <li><i class="fa-solid fa-circle-check"></i> {{ __('company_offer_page_home') }}</li>

                            <li><i class="fa-solid fa-circle-check"></i> {{ __('company_offer_page_about') }}</li>

                            <li><i class="fa-solid fa-circle-check"></i> {{ __('company_offer_page_services') }}</li>

                            <li><i class="fa-solid fa-circle-check"></i> {{ __('company_offer_page_service_details') }}
                            </li>

                            <li><i class="fa-solid fa-circle-check"></i> {{ __('company_offer_page_contact') }}</li>

                            <li><i class="fa-solid fa-circle-check"></i> {{ __('company_offer_page_other') }}</li>

                        </ul>

                    </div>

                </div>



                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-25">

                    <div class="shadow-hover transition3 primary-bg border-radius12 p-4 h-100">

                        <h4 class="mb-20"><i class="fa-solid fa-magnifying-glass theme-color"></i>
                            {{ __('company_offer_seo_title') }}</h4>

                        <p class="mb-0">{{ __('company_offer_seo_description') }}</p>

                    </div>

                </div>



            </div>

        </div>

    </section>

    <!-- ====== Main Website End ====== -->





    <!-- ====== Bonuses Start ====== -->

    <section class="background_main pt-80 pb-80">

        <div class="container">



            <div class="row justify-content-center">

                <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 col-12">

                    <div class="title text-center mb-50">

                        <span
                            class="theme-color text-uppercase d-block mb-6">{{ __('company_offer_bonuses_label') }}</span>

                        <h2 class="text-white">{{ __('company_offer_bonuses_title') }}</h2>

                        <p class="mt-20">{{ __('company_offer_bonuses_description') }}</p>

                    </div>

                </div>

            </div>



            <div class="row">



                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-25">

                    <div class="shadow-hover transition3 primary-bg border-radius12 p-4 h-100">



                        <span class="theme-color text-uppercase d-block mb-10">{{ __('company_offer_bonus_1') }}</span>



                        <h4 class="mb-15">

                            <i class="fa-solid fa-server theme-color"></i>

                            {{ __('company_offer_hosting') }}

                        </h4>



                        <p>{{ __('company_offer_hosting_description') }}</p>



                        <hr>



                        <p class="mb-5">{{ __('company_offer_regular_price') }}</p>

                        <h5 class="mb-10"><del style="opacity: .55;">{{ __('company_offer_hosting_price') }}</del></h5>

                        <h4 class="theme-color mb-0">{{ __('company_offer_included_free') }}</h4>



                    </div>

                </div>



                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-25">

                    <div class="shadow-hover transition3 primary-bg border-radius12 p-4 h-100">



                        <span class="theme-color text-uppercase d-block mb-10">{{ __('company_offer_bonus_2') }}</span>



                        <h4 class="mb-15">

                            <i class="fa-solid fa-globe theme-color"></i>

                            {{ __('company_offer_domain') }}

                        </h4>



                        <p>{{ __('company_offer_domain_description') }} <strong
                                class="text-white">vashatafirma.bg</strong> {{ __('company_offer_or') }} <strong
                                class="text-white">vashatafirma.com</strong>.</p>



                        <hr>



                        <p class="mb-5">{{ __('company_offer_additional_charge') }}</p>

                        <h5 class="mb-10"><del style="opacity: .55;">{{ __('company_offer_domain_price') }}</del></h5>

                        <h4 class="theme-color mb-0">{{ __('company_offer_included_offer') }}</h4>



                    </div>

                </div>



                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-25">

                    <div class="shadow-hover transition3 primary-bg border-radius12 p-4 h-100">



                        <span class="theme-color text-uppercase d-block mb-10">{{ __('company_offer_bonus_3') }}</span>



                        <h4 class="mb-15">

                            <i class="fa-solid fa-chart-line theme-color"></i>

                            Google Analytics

                        </h4>



                        <p>{{ __('company_offer_analytics_description') }}</p>



                        <hr>



                        <p class="mb-5">{{ __('company_offer_integration_price') }}</p>

                        <h5 class="mb-10"><del style="opacity: .55;">100 €</del></h5>

                        <h4 class="theme-color mb-0">{{ __('company_offer_analytics_free') }}</h4>



                    </div>

                </div>



                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-25">

                    <div class="shadow-hover transition3 primary-bg border-radius12 p-4 h-100">



                        <span class="theme-color text-uppercase d-block mb-10">{{ __('company_offer_bonus_4') }}</span>



                        <h4 class="mb-15">

                            <i class="fa-solid fa-bell theme-color"></i>

                            {{ __('company_offer_inquiry_form') }}

                        </h4>



                        <p>{{ __('company_offer_inquiry_description') }}</p>



                        <hr>



                        <ul class="list__page-contents">

                            <li><i class="fa-solid fa-circle-check"></i> {{ __('company_offer_inquiry_item_direct') }}
                            </li>

                            <li><i class="fa-solid fa-circle-check"></i> {{ __('company_offer_inquiry_item_customer') }}
                            </li>

                            <li><i class="fa-solid fa-circle-check"></i>
                                {{ __('company_offer_inquiry_item_notifications') }}</li>

                            <li><i class="fa-solid fa-circle-check"></i> {{ __('company_offer_inquiry_item_mobile') }}
                            </li>

                        </ul>



                    </div>

                </div>



            </div>

        </div>

    </section>

    <!-- ====== Bonuses End ====== -->





    <!-- ====== Blog Bonus Start ====== -->

    <section class="secondary-bg pt-80 pb-80">

        <div class="container">



            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">



                    <div class="shadow-hover transition3 primary-bg border-radius12 p-4">



                        <div class="row align-items-center">



                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">

                                <span
                                    class="theme-color text-uppercase d-block mb-10">{{ __('company_offer_blog_bonus_label') }}</span>



                                <h2 class="text-white mb-20">

                                    {{ __('company_offer_blog_bonus_title') }}

                                </h2>



                                <p>{{ __('company_offer_blog_bonus_description') }}</p>



                                <ul class="list__page-contents mt-20">

                                    <li><i class="fa-solid fa-circle-check"></i>
                                        {{ __('company_offer_blog_item_section') }}</li>

                                    <li><i class="fa-solid fa-circle-check"></i> {{ __('company_offer_blog_item_posts') }}
                                    </li>

                                    <li><i class="fa-solid fa-circle-check"></i>
                                        {{ __('company_offer_blog_item_content') }}</li>

                                    <li><i class="fa-solid fa-circle-check"></i> {{ __('company_offer_blog_item_seo') }}
                                    </li>

                                </ul>

                            </div>



                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 text-center">

                                <p class="mb-5">{{ __('company_offer_regular_price') }}</p>



                                <h3 class="mb-10">

                                    <del style="opacity: .55;">300 €</del>

                                </h3>



                                <span class="theme-color text-uppercase d-block mb-10">

                                    {{ __('company_offer_blog_bonus_value') }}

                                </span>



                                <h2 class="theme-color">

                                    0 €

                                </h2>

                            </div>



                        </div>



                    </div>



                </div>

            </div>



        </div>

    </section>

    <!-- ====== Blog Bonus End ====== -->





    <!-- ====== Value Breakdown Start ====== -->

    <section class="background_main pt-80 pb-80">

        <div class="container">



            <div class="row justify-content-center">

                <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 col-12">



                    <div class="title text-center mb-50">

                        <span class="theme-color text-uppercase d-block mb-6">{{ __('company_offer_value_label') }}</span>

                        <h2 class="text-white">{{ __('company_offer_value_title') }}</h2>

                    </div>



                    <div class="shadow-hover transition3 primary-bg border-radius12 p-4">



                        <ul class="list__page-contents list--divider__page-contents">

                            <li>

                                <i class="fa-solid fa-circle-check"></i>

                                <strong class="text-white">{{ __('company_offer_value_website') }}</strong>

                                <span class="float-right"><del style="opacity: .55;">800 €</del></span>

                            </li>



                            <li>

                                <i class="fa-solid fa-circle-check"></i>

                                <strong class="text-white">{{ __('company_offer_value_blog') }}</strong>

                                <span class="float-right"><del style="opacity: .55;">300 €</del></span>

                            </li>



                            <li>

                                <i class="fa-solid fa-circle-check"></i>

                                <strong class="text-white">{{ __('company_offer_value_analytics') }}</strong>

                                <span class="float-right"><del style="opacity: .55;">100 €</del></span>

                            </li>



                            <li>

                                <i class="fa-solid fa-circle-check"></i>

                                <strong class="text-white">{{ __('company_offer_hosting') }}</strong>

                                <span class="float-right"><del style="opacity: .55;">70 €</del></span>

                            </li>



                            <li>

                                <i class="fa-solid fa-circle-check"></i>

                                <strong class="text-white">{{ __('company_offer_domain') }}</strong>

                                <span class="float-right theme-color">{{ __('company_offer_included_masculine') }}</span>

                            </li>



                            <li>

                                <i class="fa-solid fa-circle-check"></i>

                                <strong class="text-white">{{ __('company_offer_value_inquiry') }}</strong>

                                <span class="float-right theme-color">{{ __('company_offer_included_feminine') }}</span>

                            </li>



                            <li>

                                <i class="fa-solid fa-circle-check"></i>

                                <strong class="text-white">{{ __('company_offer_value_mobile') }}</strong>

                                <span class="float-right theme-color">{{ __('company_offer_included_feminine') }}</span>

                            </li>



                            <li>

                                <i class="fa-solid fa-circle-check"></i>

                                <strong class="text-white">{{ __('company_offer_value_seo') }}</strong>

                                <span class="float-right theme-color">{{ __('company_offer_included_feminine') }}</span>

                            </li>



                            <li>

                                <i class="fa-solid fa-circle-check"></i>

                                <strong class="text-white">{{ __('company_offer_value_publish') }}</strong>

                                <span class="float-right theme-color">{{ __('company_offer_included_neuter') }}</span>

                            </li>

                        </ul>



                        <hr>



                        <div class="text-center pt-20">

                            <p class="mb-5">{{ __('company_offer_total_value') }}</p>



                            <h3 class="mb-15">

                                <del style="opacity: .55;">1 270 €+</del>

                            </h3>



                            <p class="mb-5">{{ __('company_offer_your_final_price') }}</p>



                            <h2 class="theme-color mb-0" style="font-size: 64px;">

                                750 €

                            </h2>



                            <p class="mt-15 mb-0">

                                {{ __('company_offer_savings_start') }} <strong class="text-white">520
                                    €</strong>{{ __('company_offer_savings_end') }}

                            </p>

                        </div>



                    </div>



                </div>

            </div>



        </div>

    </section>

    <!-- ====== Value Breakdown End ====== -->





    <!-- ====== Payment Start ====== -->

    <section class="secondary-bg pt-80 pb-80">

        <div class="container">



            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">



                    <div class="title text-center mb-50">

                        <span
                            class="theme-color text-uppercase d-block mb-6">{{ __('company_offer_payment_label') }}</span>

                        <h2 class="text-dark">{{ __('company_offer_payment_title') }}</h2>

                        <p class="mt-20">{{ __('company_offer_payment_description') }}</p>

                    </div>



                    <div class="row">



                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-25">

                            <div class="shadow-hover transition3 primary-bg border-radius12 p-4 h-100 text-center">



                                <span class="theme-color d-block mb-15" style="font-size: 42px;">01</span>



                                <h4 class="mb-15">{{ __('company_offer_payment_first_title') }}</h4>



                                <h2 class="theme-color mb-15">325 €</h2>



                                <p class="mb-0">

                                    {{ __('company_offer_payment_first_description') }}

                                </p>



                            </div>

                        </div>



                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-25">

                            <div class="shadow-hover transition3 primary-bg border-radius12 p-4 h-100 text-center">



                                <span class="theme-color d-block mb-15" style="font-size: 42px;">02</span>



                                <h4 class="mb-15">{{ __('company_offer_payment_second_title') }}</h4>



                                <h2 class="theme-color mb-15">325 €</h2>



                                <p class="mb-0">

                                    {{ __('company_offer_payment_second_description') }}

                                </p>



                            </div>

                        </div>



                    </div>



                    <div class="shadow-hover transition3 primary-bg border-radius12 p-4 mt-20 text-center">

                        <i class="fa-solid fa-shield-halved theme-color mb-15" style="font-size: 38px;"></i>



                        <h4 class="mb-15">

                            {{ __('company_offer_payment_guarantee_title') }}

                        </h4>



                        <p class="mb-0">

                            {{ __('company_offer_payment_guarantee_description') }}

                        </p>

                    </div>



                </div>

            </div>



        </div>

    </section>

    <!-- ====== Payment End ====== -->





    <!-- ====== Process Start ====== -->

    <section class="background_main pt-80 pb-80">

        <div class="container">



            <div class="row justify-content-center">

                <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 col-12">



                    <div class="title text-center mb-50">

                        <span
                            class="theme-color text-uppercase d-block mb-6">{{ __('company_offer_process_label') }}</span>

                        <h2 class="text-white">{{ __('company_offer_process_title') }}</h2>

                    </div>



                </div>

            </div>



            <div class="row">



                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-25">

                    <div class="shadow-hover transition3 primary-bg border-radius12 p-4 h-100 text-center">



                        <span class="theme-color d-block mb-15" style="font-size: 42px;">01</span>



                        <h4 class="mb-15">{{ __('company_offer_process_step1_title') }}</h4>



                        <p class="mb-0">

                            {{ __('company_offer_process_step1_description') }}

                        </p>



                    </div>

                </div>



                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-25">

                    <div class="shadow-hover transition3 primary-bg border-radius12 p-4 h-100 text-center">



                        <span class="theme-color d-block mb-15" style="font-size: 42px;">02</span>



                        <h4 class="mb-15">{{ __('company_offer_process_step2_title') }}</h4>



                        <p class="mb-0">

                            {{ __('company_offer_process_step2_description') }}

                        </p>



                    </div>

                </div>



                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-25">

                    <div class="shadow-hover transition3 primary-bg border-radius12 p-4 h-100 text-center">



                        <span class="theme-color d-block mb-15" style="font-size: 42px;">03</span>



                        <h4 class="mb-15">{{ __('company_offer_process_step3_title') }}</h4>



                        <p class="mb-0">

                            {{ __('company_offer_process_step3_description') }}

                        </p>



                    </div>

                </div>



            </div>



        </div>

    </section>

    <!-- ====== Process End ====== -->
@endsection
