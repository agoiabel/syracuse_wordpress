<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg"/>    
    <title>Syracuse Africa</title>

    <?php wp_head(); ?>
</head>
<body>
    <div class="cursor" id="cursor"></div>
    <div class="navigation hide" id="navigation">
        <div class="container">
            <header class="header">
                <div class="logo" onclick="location.href = '/';"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo_white.svg" alt="logo.svg" /></div>
                <div class="menu" onclick="menu('closed')"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/menu_close.svg" alt="menu.svg" /></div>
            </header>

            <div class="navs_socials container">
                <div class="nav_social">
                    <div class="contact_navs">
                        <div class="navs">
                            <div class="nav" onclick="location.href = '/work';">Work</div>
                            <div class="nav" onclick="location.href = '/bmsm';">MSBM Diploma</div>
                            <div class="nav" onclick="location.href = '/scholarship';">The SA Fund</div>
                            <div class="nav" onclick="location.href = '/career';">Careers</div>
                            <div class="nav" onclick="location.href = '/about';">About</div>
                        </div>

                        <div class="contact">
                            <div class="contact__small">LET'S TALK ABOUT YOU</div>
                            <div>hello@syracuseafrica.co</div>
                            <div>+234 1 453 6589</div>
                        </div>
                    </div>

                    <div class="address_socials">
                        <div class="socials">
                            <div class="social">Blog</div>
                            <div class="social">Facebook</div>
                            <div class="social">Instagram</div>
                            <div class="social">Twitter</div>
                            <div class="social">Linkedln</div>    
                        </div>

                        <div class="contact">
                            <div class="contact__small">OUR OFFICE</div>
                            <div>54B, Adeniyi Jones Ave,</div>
                            <div>Ikeja, Lagos.</div>
                        </div>
                    </div>
                </div>
            </div>

            <span class="navigation__hello">Say hello</span>
        </div>
    </div>
