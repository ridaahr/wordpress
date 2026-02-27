<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wp-bootstrap</title>
    <?php wp_head(); ?>
</head>

<body class="bg-warning">
    <aside>
        
    </aside>
    <nav class="navbar navbar-expand-md navbar-dark bg-black">

        <div class="container">
            <a class="navbar-brand text-warning" href="#">
                3ra evaluación 2026
            </a>
            

            <button class="navbar-toggler border border-warning" type="button"
                data-bs-toggle="collapse" data-bs-target="#main-menu"
                aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="main-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container' => false,
                    'menu_class' => 'ms-auto gap-2',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav %2$s">%3$s</ul>',
                    'depth' => 2,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
            </div>
        </div>

    </nav>