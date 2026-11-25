@extends('layouts.app')

@section('SEO')
    <title>Л. С. | Портфолио</title>
    <meta name="description" content="">
@endsection

@section('content')

    <!-- ====== about-area-start ======================================= -->
    <div id="about" class="about-area over-hidden background_main">
        <div class="about-content-wrapper mt-130 mb-20 position-relative">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                        <div class="about-img-wrapper position-relative mb-30">
                            <div class="about-img position-relative z-index11" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="100">
                                <div class="transition5 d-inline-block position-relative">
                                    <div class="position-relative z-index11" data-tilt data-tilt-max="10">
                                        <img class="border-radius13 position-relative z-index11" src="/assets/images/html-css-concept.jpg" alt="Projects">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                        <div class="about-content position-relative">
                            <div class="position-relative text-centered">
                                <div class="title">
                                    <span class="theme-color text-uppercase d-block mb-1 mt--5">
                                        {{ __('portfolio_about_info') }}
                                    </span>
                                    <h2 class="mb-30">{{ __('portfolio_about_label') }}</h2>
                                    <p>{{ __('portfolio_about_text1') }}</p>
                                    <p>{{ __('portfolio_about_text2') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- about-area-end -->

    <div id="service" class="service-area section-bg over-hidden pt-30 pb-145">
        <div class="service-wrapper position-relative">
            <div class="container">

                <div class="row align-items-start">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="title text-center">
                            <span class="theme-color text-uppercase d-block mb-6">
                                {{ __('portfolio_title') }}
                            </span>
                            <h2 class="text-white">{{ __('portfolio_subtitle') }}</h2>
                        </div>
                    </div>
                </div>

                <div class="row service-wrappers mt-80">

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 projects-about">
                        <div class="shadow-hover transition3 primary-bg border-radius10">
                            <div class="d-flex flex-column">
                                <div class="text-lg-center">
                                    <div class="d-inline-block text-center position-relative mb-15 w-100">
                                        <img class="position-relative z-index1" src="/assets/images/testimonial/relux_project.png?v=<?php echo time(); ?>" alt="icon">
                                        <div class="service-small-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                        <div class="service-large-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service-text d-inline-block ml-xl-2">
                                        <h3 class="mb-15">{{ __('project_reluxtop') }}</h3>
                                    </div>
                                    <div class="header-btn text-center d-lg-block pb-10">
                                        <a target="_blank" href="https://reluxtop.com" class="text-uppercase d-inline-block">{{ __('visit_website') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 projects-about">
                        <div class="shadow-hover transition3 primary-bg border-radius10">
                            <div class="d-flex flex-column">
                                <div class="text-lg-center">
                                    <div class="d-inline-block text-center position-relative mb-15 w-100">
                                        <img class="position-relative z-index1" src="/assets/images/testimonial/s.png?v=<?php echo time(); ?>" alt="icon">
                                        <div class="service-small-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                        <div class="service-large-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service-text d-inline-block ml-xl-2">
                                        <h3 class="mb-15">{{ __('project_valente') }}</h3>
                                    </div>
                                    <div class="header-btn text-center d-lg-block pb-10">
                                        <a target="_blank" href="https://valenteoptic.com" class="text-uppercase d-inline-block">{{ __('visit_website') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 projects-about">
                        <div class="shadow-hover transition3 primary-bg border-radius10">
                            <div class="d-flex flex-column">
                                <div class="text-lg-center">
                                    <div class="d-inline-block text-center position-relative mb-15 w-100">
                                        <img class="position-relative z-index1" src="/assets/images/testimonial/weebix-project.png?v=<?php echo time(); ?>" alt="icon">
                                        <div class="service-small-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                        <div class="service-large-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service-text d-inline-block ml-xl-2">
                                        <h3 class="mb-15">{{ __('project_weebix') }}</h3>
                                    </div>
                                    <div class="header-btn text-center d-lg-block pb-10">
                                        <a target="_blank" href="https://weebix.bg" class="text-uppercase d-inline-block">{{ __('visit_website') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 projects-about">
                        <div class="shadow-hover transition3 primary-bg border-radius10">
                            <div class="d-flex flex-column">
                                <div class="text-lg-center">
                                    <div class="d-inline-block text-center position-relative mb-15 w-100">
                                        <img class="position-relative z-index1" src="/assets/images/testimonial/estate-finish.png?v=<?php echo time(); ?>" alt="icon">
                                        <div class="service-small-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                        <div class="service-large-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service-text d-inline-block ml-xl-2">
                                        <h3 class="mb-15">{{ __('project_estate_finish') }}</h3>
                                    </div>
                                    <div class="header-btn text-center d-lg-block pb-10">
                                        <a target="_blank" href="https://estatefinish.bg" class="text-uppercase d-inline-block">{{ __('visit_website') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 projects-about">
                        <div class="shadow-hover transition3 primary-bg border-radius10">
                            <div class="d-flex flex-column">
                                <div class="text-lg-center">
                                    <div class="d-inline-block text-center position-relative mb-15 w-100">
                                        <img class="position-relative z-index1" src="/assets/images/testimonial/rabotazamen.png?v=<?php echo time(); ?>" alt="icon">
                                        <div class="service-small-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                        <div class="service-large-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service-text d-inline-block ml-xl-2">
                                        <h3 class="mb-15">{{ __('project_rabotazamen') }}</h3>
                                    </div>
                                    <div class="header-btn text-center d-lg-block pb-10">
                                        <a target="_blank" href="https://rabotazamen.bg" class="text-uppercase d-inline-block">{{ __('visit_website') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 projects-about">
                        <div class="shadow-hover transition3 primary-bg border-radius10">
                            <div class="d-flex flex-column">
                                <div class="text-lg-center">
                                    <div class="d-inline-block text-center position-relative mb-15 w-100">
                                        <img class="position-relative z-index1" src="/assets/images/testimonial/sofiapilates-p.png?v=<?php echo time(); ?>" alt="icon">
                                        <div class="service-small-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                        <div class="service-large-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service-text d-inline-block ml-xl-2">
                                        <h3 class="mb-15">{{ __('project_sofiapilates') }}</h3>
                                    </div>
                                    <div class="header-btn text-center d-lg-block pb-10">
                                        <a target="_blank" href="https://sofiapilates.com" class="text-uppercase d-inline-block">{{ __('visit_website') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 projects-about">
                        <div class="shadow-hover transition3 primary-bg border-radius10">
                            <div class="d-flex flex-column">
                                <div class="text-lg-center">
                                    <div class="d-inline-block text-center position-relative mb-15 w-100">
                                        <img class="position-relative z-index1" src="/assets/images/testimonial/bestcars.png?v=<?php echo time(); ?>" alt="icon">
                                        <div class="service-small-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                        <div class="service-large-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service-text d-inline-block ml-xl-2">
                                        <h3 class="mb-15">{{ __('project_bestcars') }}</h3>
                                    </div>
                                    <div class="header-btn text-center d-lg-block pb-10">
                                        <a target="_blank" href="https://bestcars-rentals.com/" class="text-uppercase d-inline-block">{{ __('visit_website') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 projects-about">
                        <div class="shadow-hover transition3 primary-bg border-radius10">
                            <div class="d-flex flex-column">
                                <div class="text-lg-center">
                                    <div class="d-inline-block text-center position-relative mb-15 w-100">
                                        <img class="position-relative z-index1" src="/assets/images/testimonial/evita-project.png?v=<?php echo time(); ?>" alt="icon">
                                        <div class="service-small-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                        <div class="service-large-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service-text d-inline-block ml-xl-2">
                                        <h3 class="mb-15">{{ __('project_evita') }}</h3>
                                    </div>
                                    <div class="header-btn text-center d-lg-block pb-10">
                                        <a target="_blank" href="https://evitapancharevo.com" class="text-uppercase d-inline-block">{{ __('visit_website') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 projects-about">
                        <div class="shadow-hover transition3 primary-bg border-radius10">
                            <div class="d-flex flex-column">
                                <div class="text-lg-center">
                                    <div class="d-inline-block text-center position-relative mb-15 w-100">
                                        <img class="position-relative z-index1" src="/assets/images/testimonial/relaxa-project.png?v=<?php echo time(); ?>" alt="icon">
                                        <div class="service-small-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                        <div class="service-large-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service-text d-inline-block ml-xl-2">
                                        <h3 class="mb-15">{{ __('project_relaxa') }}</h3>
                                    </div>
                                    <div class="header-btn text-center d-lg-block pb-10">
                                        <a target="_blank" href="https://relaxa.bg/" class="text-uppercase d-inline-block">{{ __('visit_website') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 projects-about">
                        <div class="shadow-hover transition3 primary-bg border-radius10">
                            <div class="d-flex flex-column">
                                <div class="text-lg-center">
                                    <div class="d-inline-block text-center position-relative mb-15 w-100">
                                        <img class="position-relative z-index1" src="/assets/images/testimonial/nanko-project.png?v=<?php echo time(); ?>" alt="icon">
                                        <div class="service-small-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                        <div class="service-large-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service-text d-inline-block ml-xl-2">
                                        <h3 class="mb-15">{{ __('project_nanko') }}</h3>
                                    </div>
                                    <div class="header-btn text-center d-lg-block pb-10">
                                        <a target="_blank" href="https://nanko.bg/" class="text-uppercase d-inline-block">{{ __('visit_website') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 projects-about">
                        <div class="shadow-hover transition3 primary-bg border-radius10">
                            <div class="d-flex flex-column">
                                <div class="text-lg-center">
                                    <div class="d-inline-block text-center position-relative mb-15 w-100">
                                        <img class="position-relative z-index1" src="/assets/images/testimonial/sfashion-project.png?v=<?php echo time(); ?>" alt="icon">
                                        <div class="service-small-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                        <div class="service-large-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service-text d-inline-block ml-xl-2">
                                        <h3 class="mb-15">{{ __('project_sfashion') }}</h3>
                                    </div>
                                    <div class="header-btn text-center d-lg-block pb-10">
                                        <a target="_blank" href="https://sfashion-shop.bg/" class="text-uppercase d-inline-block">{{ __('visit_website') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 projects-about">
                        <div class="shadow-hover transition3 primary-bg border-radius10">
                            <div class="d-flex flex-column">
                                <div class="text-lg-center">
                                    <div class="d-inline-block text-center position-relative mb-15 w-100">
                                        <img class="position-relative z-index1" src="/assets/images/testimonial/infinity21-project.png?v=<?php echo time(); ?>" alt="icon">
                                        <div class="service-small-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                        <div class="service-large-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service-text d-inline-block ml-xl-2">
                                        <h3 class="mb-15">{{ __('project_infinity21') }}</h3>
                                    </div>
                                    <div class="header-btn text-center d-lg-block pb-10">
                                        <a target="_blank" href="https://infinity21.org" class="text-uppercase d-inline-block">{{ __('visit_website') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 projects-about">
                        <div class="shadow-hover transition3 primary-bg border-radius10">
                            <div class="d-flex flex-column">
                                <div class="text-lg-center">
                                    <div class="d-inline-block text-center position-relative mb-15 w-100">
                                        <img class="position-relative z-index1" src="/assets/images/testimonial/lunara.png?v=<?php echo time(); ?>" alt="icon">
                                        <div class="service-small-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                        <div class="service-large-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service-text d-inline-block ml-xl-2">
                                        <h3 class="mb-15">{{ __('project_lunara') }}</h3>
                                    </div>
                                    <div class="header-btn text-center d-lg-block pb-10">
                                        <a target="_blank" href="https://lunarakids.com" class="text-uppercase d-inline-block">{{ __('visit_website') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 projects-about">
                        <div class="shadow-hover transition3 primary-bg border-radius10">
                            <div class="d-flex flex-column">
                                <div class="text-lg-center">
                                    <div class="d-inline-block text-center position-relative mb-15 w-100">
                                        <img class="position-relative z-index1" src="/assets/images/testimonial/profix-project.png?v=<?php echo time(); ?>" alt="icon">
                                        <div class="service-small-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                        <div class="service-large-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service-text d-inline-block ml-xl-2">
                                        <h3 class="mb-15">{{ __('project_profix') }}</h3>
                                    </div>
                                    <div class="header-btn text-center d-lg-block pb-10">
                                        <a target="_blank" href="https://profix.bg/" class="text-uppercase d-inline-block">{{ __('visit_website') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 projects-about">
                        <div class="shadow-hover transition3 primary-bg border-radius10">
                            <div class="d-flex flex-column">
                                <div class="text-lg-center">
                                    <div class="d-inline-block text-center position-relative mb-15 w-100">
                                        <img class="position-relative z-index1" src="/assets/images/testimonial/mollov-project.png?v=<?php echo time(); ?>" alt="icon">
                                        <div class="service-small-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                        <div class="service-large-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service-text d-inline-block ml-xl-2">
                                        <h3 class="mb-15">{{ __('project_mollov') }}</h3>
                                    </div>
                                    <div class="header-btn text-center d-lg-block pb-10">
                                        <a target="_blank" href="https://yulianmollov.bg/" class="text-uppercase d-inline-block">{{ __('visit_website') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 projects-about">
                        <div class="shadow-hover transition3 primary-bg border-radius10">
                            <div class="d-flex flex-column">
                                <div class="text-lg-center">
                                    <div class="d-inline-block text-center position-relative mb-15 w-100">
                                        <img class="position-relative z-index1" src="/assets/images/testimonial/tsarevets-project.png?v=<?php echo time(); ?>" alt="icon">
                                        <div class="service-small-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                        <div class="service-large-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service-text d-inline-block ml-xl-2">
                                        <h3 class="mb-15">{{ __('project_tsarevets') }}</h3>
                                    </div>
                                    <div class="header-btn text-center d-lg-block pb-10">
                                        <a target="_blank" href="https://tsarevetsswimclub.bg/" class="text-uppercase d-inline-block">{{ __('visit_website') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 projects-about">
                        <div class="shadow-hover transition3 primary-bg border-radius10">
                            <div class="d-flex flex-column">
                                <div class="text-lg-center">
                                    <div class="d-inline-block text-center position-relative mb-15 w-100">
                                        <img class="position-relative z-index1" src="/assets/images/testimonial/skyline-project.png?v=<?php echo time(); ?>" alt="icon">
                                        <div class="service-small-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                        <div class="service-large-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service-text d-inline-block ml-xl-2">
                                        <h3 class="mb-15">{{ __('project_skyline') }}</h3>
                                    </div>
                                    <div class="header-btn text-center d-lg-block pb-10">
                                        <a target="_blank" href="https://skylineconstruct.eu" class="text-uppercase d-inline-block">{{ __('visit_website') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 projects-about">
                        <div class="shadow-hover transition3 primary-bg border-radius10">
                            <div class="d-flex flex-column">
                                <div class="text-lg-center">
                                    <div class="d-inline-block text-center position-relative mb-15 w-100">
                                        <img class="position-relative z-index1" src="/assets/images/testimonial/softex-project.png?v=<?php echo time(); ?>" alt="icon">
                                        <div class="service-small-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                        <div class="service-large-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service-text d-inline-block ml-xl-2">
                                        <h3 class="mb-15">{{ __('project_softex') }}</h3>
                                    </div>
                                    <div class="header-btn text-center d-lg-block pb-10">
                                        <a target="_blank" href="https://softex.bg/" class="text-uppercase d-inline-block">{{ __('visit_website') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 projects-about">
                        <div class="shadow-hover transition3 primary-bg border-radius10">
                            <div class="d-flex flex-column">
                                <div class="text-lg-center">
                                    <div class="d-inline-block text-center position-relative mb-15 w-100">
                                        <img class="position-relative z-index1" src="/assets/images/testimonial/mineralnabanya-project.png?v=<?php echo time(); ?>" alt="icon">
                                        <div class="service-small-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                        <div class="service-large-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service-text d-inline-block ml-xl-2">
                                        <h3 class="mb-15">{{ __('project_mineralnabanya') }}</h3>
                                    </div>
                                    <div class="header-btn text-center d-lg-block pb-10">
                                        <a target="_blank" href="https://mineralnabanya.com" class="text-uppercase d-inline-block">{{ __('visit_website') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 projects-about">
                        <div class="shadow-hover transition3 primary-bg border-radius10">
                            <div class="d-flex flex-column">
                                <div class="text-lg-center">
                                    <div class="d-inline-block text-center position-relative mb-15 w-100">
                                        <img class="position-relative z-index1" src="/assets/images/testimonial/prikluchenci-project.png?v=<?php echo time(); ?>" alt="icon">
                                        <div class="service-small-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                        <div class="service-large-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service-text d-inline-block ml-xl-2">
                                        <h3 class="mb-15">{{ __('project_prikluchenci') }}</h3>
                                    </div>
                                    <div class="header-btn text-center d-lg-block pb-10">
                                        <a target="_blank" href="https://prikluchenci.bg/" class="text-uppercase d-inline-block">{{ __('visit_website') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 projects-about">
                        <div class="shadow-hover transition3 primary-bg border-radius10">
                            <div class="d-flex flex-column">
                                <div class="text-lg-center">
                                    <div class="d-inline-block text-center position-relative mb-15 w-100">
                                        <img class="position-relative z-index1" src="/assets/images/testimonial/vremezasun-project.png?v=<?php echo time(); ?>" alt="icon">
                                        <div class="service-small-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                        <div class="service-large-circle service-circle rounded-circle transition5 secondary-bg d-inline-block position-absolute"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="service-text d-inline-block ml-xl-2">
                                        <h3 class="mb-15">{{ __('project_vremezasun') }}</h3>
                                    </div>
                                    <div class="header-btn text-center d-lg-block pb-10">
                                        <a target="_blank" href="https://vremezasun.com" class="text-uppercase d-inline-block">{{ __('visit_website') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="about-icon position-absolute d-none d-md-inline-block z-index1 zoom-animation">
                <img src="/assets/images/shape/content-shape2.png" alt="shape 2">
            </div>
        </div>
    </div>
    <!-- service-area-end -->

    @include('components.review')

@endsection