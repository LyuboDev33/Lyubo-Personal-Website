@extends('layouts.app')


@section('SEO')

    <title>Л. С. | Портфолио</title>

    <meta
        name="description"
        content=""
    >

@endsection


@section('content')

    <!-- ====== about-area-start ====== -->
    <div
        id="about"
        class="about-area over-hidden background_main"
    >

        <div class="about-content-wrapper mt-130 mb-20 position-relative">

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">

                        <div class="about-img-wrapper position-relative mb-30">

                            <div
                                class="about-img position-relative z-index11"
                                data-aos="fade-right"
                                data-aos-duration="2000"
                                data-aos-delay="100"
                            >

                                <div class="transition5 d-inline-block position-relative">

                                    <div
                                        class="position-relative z-index11"
                                        data-tilt
                                        data-tilt-max="10"
                                    >

                                        <img
                                            class="border-radius13 position-relative z-index11"
                                            src="/assets/images/products.jpg"
                                            alt="products"
                                        >

                                    </div>

                                </div>

                            </div><!-- /about-img -->

                        </div><!-- /about-img-wrapper -->

                    </div><!-- /col -->


                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">

                        <div class="about-content position-relative">

                            <div class="position-relative text-centered">

                                <div class="title">

                                    <span class="theme-color text-uppercase d-block mb-1 mt--5">
                                        {{ __('about_info') }}
                                    </span>

                                    <h2 class="mb-30">
                                        {{ __('developed_products_title') }}
                                    </h2>

                                    <p>
                                        {{ __('developed_products_description') }}
                                    </p>

                                </div><!-- /title -->

                            </div>

                        </div><!-- /about-content -->

                    </div><!-- /col -->

                </div><!-- /row -->

            </div><!-- /container -->

        </div><!-- /about-wrapper -->

    </div>
    <!-- about-area-end -->


    <!-- ====== service-area-start ====== -->
    <div
        id="service"
        class="service-area section-bg over-hidden pt-30 pb-145"
    >

        <div class="service-wrapper position-relative">

            <div class="container">

                <div class="row align-items-start">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="title text-center">

                            <span class="theme-color text-uppercase d-block mb-6">
                                {{ __('products_section_label') }}
                            </span>

                            <h2 class="text-white">
                                {{ __('developed_web_products') }}
                            </h2>

                        </div><!-- /title -->

                    </div><!-- /col -->

                </div><!-- /row -->


                <div class="row service-wrappers mt-80">

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 projects-about">

                        <div class="shadow-hover transition3 primary-bg border-radius10">

                            <div class="d-flex flex-column">

                                <div class="text-lg-center">

                                    <div class="d-inline-block text-center position-relative mb-15">

                                        <img
                                            class="position-relative z-index1"
                                            src="/assets/images/work/softex-livechat.png?v=<?php echo time(); ?>"
                                            alt="Chat Application"
                                        >

                                        <div
                                            class="service-small-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"
                                        ></div>

                                        <div
                                            class="service-large-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"
                                        ></div>

                                    </div>

                                </div>


                                <div>

                                    <div class="service-text d-inline-block ml-xl-2">

                                        <h3 class="mb-15">
                                            {{ __('softex_livechat_title') }}
                                        </h3>

                                    </div>


                                    <div class="header-btn text-center d-lg-block pb-10">

                                        <a
                                            target="_blank"
                                            href="https://chat.softex.bg"
                                            class="text-uppercase d-inline-block"
                                        >
                                            {{ __('visit_website') }}
                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div><!-- /row -->

            </div><!-- /container -->


            <div class="about-icon position-absolute d-none d-md-inline-block z-index1 zoom-animation">

                <img
                    src="/assets/images/shape/content-shape2.png"
                    alt="shape 2"
                >

            </div><!-- /intro-feature-icon -->

        </div><!-- /service-wrapper -->

    </div>
    <!-- service-area-end -->


    <!-- ====== testimonial-area-start ====== -->

    @include('components.review')

    <!-- testimonial-area-end -->

@endsection