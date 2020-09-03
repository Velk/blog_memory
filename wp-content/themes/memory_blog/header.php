<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title>Memory - Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />

    <?php wp_head(); ?>

    <meta name="viewport" content="width=device-width">

</head>
<body>
    <header>
        <div class="memory_navbar fixed-top">
            <nav class="navbar navbar-expand-lg  navbar-light bg-light">
                <a href="http://preblog.memoryvoyage.com" /> <img href="" id="logo" src="<?php echo get_template_directory_uri(); ?>/src/img/memory-blog-logo.png" alt="Logo de memory, travel & events">
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.memoryvoyage.com/contact">Nous contacter</a>
                        </li>
                        <li class="nav-item callToAction-Memory">
                            <a class="nav-link callToAction-Memory" href="https://www.memoryvoyage.com/">Visitez le site principal</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

    </header>