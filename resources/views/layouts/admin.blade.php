<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurantly Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <style>

 @media (max-width:767px) {
    h2 {
        margin-bottom: 25px;
        padding-top: 25px;
        font-size: 24px
    }
}

.intro {
    font-size: 16px;
    max-width: 500px;
    margin: 0 auto
}

.intro p {
    margin-bottom: 0
}

.people {
    padding: 50px 0;
    cursor: pointer
}

.item {
    margin-bottom: 30px
}

.item .box {
    text-align: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 280px;
    position: relative;
    overflow: hidden
}

.item .cover {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(31, 148, 255, 0.75);
    transition: opacity 0.15s ease-in;
    opacity: 0;
    padding-top: 80px;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.15)
}

.item:hover .cover {
    opacity: 1
}

.item .name {
    font-weight: bold;
    margin-bottom: 8px
}

.item .title {
    text-transform: uppercase;
    font-weight: bold;
    color: #bbd8fb;
    letter-spacing: 2px;
    font-size: 13px;
    margin-bottom: 20px
}

.social {
    font-size: 18px
}

.social a {
    color: inherit;
    margin: 0 10px;
    display: inline-block;
    opacity: 0.7
}

.social a:hover {
    opacity: 1
}

.myinputclass{
    padding:10px;
    color:#a39b86!important;
    font-size:14px;
    background: transparent!important;
    border-radius:0%;
    border:1px solid #625b4b;
}
.myinputclass:hover{
    border:1px solid #625b4b;
}

.mybuttonclass{
    padding:10px;
    color:white;
    font-size:14px;
    background: #cda45e!important;
    border-radius:5%;
    border:1px solid #625b4b;
}
  </style>
</head>

<body>

    @include('partials.admin.header')
    <main id="main">
    @yield('content')
    </main><!-- End #main -->
    @include('partials.admin.footer')

</body>

</html>