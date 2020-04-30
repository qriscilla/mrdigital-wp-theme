<!DOCTYPE html>
<html>
    <head>

        <!-- Plugging in header hooks -->
        <?php wp_head();?>

    </head>

<!-- Allows adding WordPress classes to the body -->
<body <?php body_class();?>>

<header class="sticky-top">

    <div class="container">
        <?php wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                // Can use this to style the ul's
                'menu_class' => 'navigation'
            )
        );?>    
    </div>



</header>