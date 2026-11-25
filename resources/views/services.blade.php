@extends('layouts.app')

@section('SEO')
    <title>Услуги | Изработка на Уебсайтове и Уеб Приложения – Любомир Стоянов</title>

    <meta name="description" content="Професионална изработка на уебсайтове, онлайн магазини, уеб приложения и custom софтуерни решения. Индивидуална разработка с фокус върху качество, бързина и нуждите на вашия бизнес.">

    <meta name="keywords" content="изработка на уебсайт, изработка на сайт, онлайн магазин, уеб приложения, custom софтуер, уеб разработка, уеб услуги, фрийланс програмист, уеб разработчик, Любомир Стоянов">

    <link rel="canonical" href="https://lubodev.com/services">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Услуги | Изработка на Уебсайтове и Уеб Приложения – Любомир Стоянов">
    <meta property="og:description" content="Изработка на модерни уебсайтове, онлайн магазини, уеб приложения и индивидуални софтуерни решения, съобразени с целите и нуждите на вашия бизнес.">
    <meta property="og:url" content="https://lubodev.com/services">
    <meta property="og:image" content="https://lubodev.com/assets/images/seo-test.png">
    <meta property="og:site_name" content="Любомир Стоянов – Уеб Разработчик">
    <meta property="og:locale" content="bg_BG">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Услуги | Изработка на Уебсайтове и Уеб Приложения – Любомир Стоянов">
    <meta name="twitter:description" content="Професионална изработка на уебсайтове, онлайн магазини, уеб приложения и custom софтуерни решения за вашия бизнес.">
    <meta name="twitter:image" content="https://lubodev.com/assets/images/seo-test.png">
@endsection

@section('content')

    <!-- service-area-start -->
    <section class="background_main over-hidden pt-120 pb-40">
        @include('components.component-services')
    </section>
    <!-- service-area-end -->

@endsection