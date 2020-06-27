<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <header>
        <div class="container">
            <div class="global-linkage-logo"></div>
            <div class="logo"></div>
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-reorder"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto header__spacing2">
                        <li><a class="nav-link" href="#about-section" id="about-select">ABOUT</a></li>
                        <li><a class="nav-link" href="#">WHO WE SERVE</a></li>
                        <li><a class="nav-link" href="#what-we-do-section" id="what-we-do-select">WHAT WE DO </a></li>
                        <li><a class="nav-link" href="#" >THOUGHT LEADERSHIP</a></li>
                        <li><a class="nav-link" href="#">EVENTS</a></li>
                        <li><a class="nav-link" href="#">OUR PARTNERS</a></li>
                    </ul>
                </div>
		    </nav>
        </div>
 </header>