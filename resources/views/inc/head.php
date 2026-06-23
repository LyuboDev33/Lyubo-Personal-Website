<!-- Place favicon.ico in the root directory -->
<link rel="shortcut icon"
      href="/assets/images/logo/favicon.png?v=<?php echo time(); ?>"
      type="image/x-icon">

<!-- CSS -->

<!-- Bootstrap -->
<link rel="stylesheet"
      href="/assets/css/bootstrap.min.css?v=<?php echo time(); ?>">

<!-- AOS -->
<link rel="stylesheet"
      href="/assets/css/aos.css?v=<?php echo time(); ?>">

<!-- Default -->
<link rel="stylesheet"
      href="/assets/css/default.css?v=<?php echo time(); ?>">

<!-- MeanMenu -->
<link rel="stylesheet"
      href="/assets/css/meanmenu.css?v=<?php echo time(); ?>">

<!-- Main Style -->
<link rel="stylesheet"
      href="/assets/css/style.css?v=<?php echo time(); ?>">

<!-- Responsive -->
<link rel="stylesheet"
      href="/assets/css/responsive.css?v=<?php echo time(); ?>">

<!-- Custom -->
<link rel="stylesheet"
      href="/assets/css/custom.css?v=<?php echo time(); ?>">

<!-- Font Awesome -->
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
      integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer">

<!-- Lenis -->
<script src="https://unpkg.com/lenis@1.3.23/dist/lenis.min.js"></script>

<script>
const lenis = new Lenis({
    duration: 1,
    smoothWheel: true,
    wheelMultiplier: 0.8,
    touchMultiplier: 0.8,
    lerp: 0.5
});

function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}

requestAnimationFrame(raf);
</script>