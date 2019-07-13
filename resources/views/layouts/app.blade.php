<!DOCTYPE html>
<html lang="id">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Lembaga Pelatihan - Sriwijaya Universal">
<meta name="keywords" content="Lembaga Pelatihan - Sriwijaya Universal">
<meta name="author" content="Sriwijaya Universal">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="color:Background" content="#f4fbfa">
<!-- <meta property="og:url" content="#"> -->
<meta property="og:type" content="article">
<meta property="og:title" content="Lembaga Pelatihan - Sriwijaya Universal">
<meta property="og:description" content="Lembaga Pelatihan - Sriwijaya Universal">
<meta property="og:site_name" content="Lembaga Pelatihan - Sriwijaya Universal">

<title>Lembaga Pelatihan - Sriwijaya Universal</title>

<link rel="icon" type="image/x-icon" href="/favicon.ico">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon.ico">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon.ico">
<link rel="apple-touch-icon" href="/favicon.ico">
<link rel="apple-touch-icon" sizes="57x57" href="/favicon.ico">
<link rel="apple-touch-icon" sizes="72x72" href="/favicon.ico">
<link rel="apple-touch-icon" sizes="76x76" href="/favicon.ico">
<link rel="apple-touch-icon" sizes="114x114" href="/favicon.ico">
<link rel="apple-touch-icon" sizes="120x120" href="/favicon.ico">
<link rel="apple-touch-icon" sizes="144x144" href="/favicon.ico">
<link rel="apple-touch-icon" sizes="152x152" href="/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon.ico">

<link rel="stylesheet" type="text/css" href="/css/custom.css">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/app.css">
<link rel="stylesheet" type="text/css" href="/css/upload.css">

<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700&display=swap" rel="stylesheet">

<script type="text/javascript" async="" src="/js/recaptcha__en_gb.js"></script>
<script async="" src="/js/analytics.js"></script>
<script src="/js/app.js"></script>
<!-- <script src="/js/api.js" async="" defer=""></script> -->


<style type="text/css">
    body {
        font-family: 'Nunito', sans-serif;
    }
@font-face {
  font-weight: 400;
  font-style:  normal;
  font-family: 'Inter-Loom';

  src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Regular.woff2') format('woff2');
}
@font-face {
  font-weight: 400;
  font-style:  italic;
  font-family: 'Inter-Loom';

  src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Italic.woff2') format('woff2');
}

@font-face {
  font-weight: 500;
  font-style:  normal;
  font-family: 'Inter-Loom';

  src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Medium.woff2') format('woff2');
}
@font-face {
  font-weight: 500;
  font-style:  italic;
  font-family: 'Inter-Loom';

  src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-MediumItalic.woff2') format('woff2');
}

@font-face {
  font-weight: 700;
  font-style:  normal;
  font-family: 'Inter-Loom';

  src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Bold.woff2') format('woff2');
}
@font-face {
  font-weight: 700;
  font-style:  italic;
  font-family: 'Inter-Loom';

  src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-BoldItalic.woff2') format('woff2');
}

@font-face {
  font-weight: 900;
  font-style:  normal;
  font-family: 'Inter-Loom';

  src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Black.woff2') format('woff2');
}
@font-face {
  font-weight: 900;
  font-style:  italic;
  font-family: 'Inter-Loom';

  src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-BlackItalic.woff2') format('woff2');
}</style></head>
<body>
    
<noscript>
    <div style="position: fixed;padding: 10px;background-color: white;width:3000px;height: 3000px;z-index: 5000">
        <img src=" /images/nojs.png"
             alt="">
        <h3>
            Untuk dapat menggunakan website ini,
            Mohon untuk mengaktifkan javascript anda
        </h3>
    </div>
</noscript>

<div id="wrapper">
    
    @include('layouts.header')

    <div class="clearfix"></div>

    @yield('content')

    @include('layouts.footer')

</div>
<script>
// function pushGaPv(path) {
//     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
//     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
//     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
//     })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

//     ga('create', 'UA-137963508-1', 'auto');
//     if (path == '') ga('send', 'pageview');
//     else ga('send', 'pageview', path);
// }

// pushGaPv('');
</script>
</body>
</html>