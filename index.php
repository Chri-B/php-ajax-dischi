<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-ajax-dischi</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.min.js" charset="utf-8"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"/>
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina+2&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="dist/css/app.css">
    </head>
    <body>
        <header>
            <div id="logo">
                <img src="https://dl2.macupdate.com/images/icons256/33033.png?d=1511990622" alt="logo">
            </div>
            <div class="header-dx">
                <h1>PHP AJAX DISCHI</h1>
            </div>
        </header>
        <main>
            <div id="card-container" class="container">
                <!-- VERSIONE PHP USATO DIRETTAMENTE IN HTML -->
                <!-- <?php
                    include 'data.php';
                ?>
                <?php foreach ($albums as $key => $album) {; ?>
                    <div class="card">
                        <div class="card-content">
                            <div class="copertina">
                                <img src="<?php echo $album['cover']; ?>" alt="<?php echo $album['album']; ?>">
                            </div>
                            <div class="text">
                                <h2><?php echo $album['album']; ?></h2>
                                <p><?php echo $album['autore']; ?>}</p>
                                <span><?php echo $album['anno']; ?></span>
                            </div>
                        </div>
                    </div>
                <?php }; ?> -->
                <!-- FINE VERSIONE PHP USATO DIRETTAMENTE IN HTML -->
            </div>
        </main>
        <footer>
            <div class="credits">
                <p>
                    Made with <i class="fas fa-heart"></i> by Boolean Classe #10
                </p>
            </div>
        </footer>

        <!-- VERSIONE DATABASE CODIFICATO IN SERVER.PHP => RICHIAMATO DA JS => STAMPATO TRAMITE HANDLEBARS IN HTML -->
        <script id="card-template" type="text/x-handlebars-template">
            <div class="card">
                <div class="card-content">
                    <div class="copertina">
                        <img src="{{cover}}" alt="{{titolo}}">
                    </div>
                    <div class="text">
                        <h2>{{titolo}}</h2>
                        <p>{{autore}}</p>
                        <span>{{anno}}</span>
                    </div>
                </div>
            </div>
        </script>

        <!-- link a script JS -->
        <script src="dist/js/main.js" charset="utf-8"></script>
        <!-- FINE VERSIONE DATABASE CODIFICATO IN SERVER.PHP => RICHIAMATO DA JS => STAMPATO TRAMITE HANDLEBARS IN HTML -->
    </body>
</html>
