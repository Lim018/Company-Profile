<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet" href="{{ asset('css/global.css') }}">
   <link rel="stylesheet" href="{{ asset('css/sop.css') }}">
   <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body>
   @include('components.navbar')
   <section class="header">
      <h1 data-aos="zoom-out-down" data-aos-duration="1000">STANDAR OPERASIONAL PROSEDUR</h1>
   </section>
   <section class="content">
      <h2 data-aos="zoom-out" data-aos-duration="1000">PARTNERSHIP</h2>
      <iframe src="assets/sop_partnership.pdf" frameborder="0" data-aos="fade-up" data-aos-duration="3000"></iframe>
      <button>Hubungi Kami</button>
   </section>
   @include('components.footer')

   <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
   <script>
      AOS.init();
   </script>
</body>
</html>