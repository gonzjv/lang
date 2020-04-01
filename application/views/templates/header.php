<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--meta property for sharing social networks-->
        <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Your Website Title" />
        <meta property="og:description"   content="Your description" />
        <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
        <!--<link rel="stylesheet" href="./css/main.css">-->
        <?php echo link_tag('css/main.css'); ?>
        <?php echo link_tag('css/animate.min.css'); ?>
        <script src="https://kit.fontawesome.com/6cfa4c0aa7.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="wrap">
            <div class="container">
<!--            <div class="row mt-5">
            </div>-->
                <nav class="animated fadeInDown navbar navbar-expand-lg navbar-light background rounded-bottom" id="animate">
                    <a class="navbar-brand mx-2" href="./">
                        <!--<img src="./img/logo_car.png" width="200" height="57" alt="">-->
                        <div class="lead text-dark">
                            <div>🌍 Language school</div> 
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav font-weight-bold ml-10">
                            <!--<a class="nav-item nav-link active url" href="./index.php">Главная <span class="sr-only">(current)</span></a>-->
                            <a class="nav-item nav-link url" href="?activities">🚴‍♂️ Scheduled activities</a>
                            <a class="nav-item nav-link url" href="?team">🧙 Our team</a>
                            <!--<a class="nav-item nav-link url" href="./news">News</a>-->
                            <?php echo anchor('news', '🗞 News', 'class="nav-item nav-link url"'); ?>
                            <!--Prints: <a href="http://example.com/index.php/news/local/123" title="News title">My News</a>-->
                        </div>  
                    </div>
                </nav>
                
                