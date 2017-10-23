<nav class="main-nav navbar-fixed-top headroom headroom--pinned">
    <div class="container">
        <!-- Brand and toggle -->
        <div class="navbar-header">
            <?php include('templates/menu/Navigation.php'); ?>
            <a href="<?php echo esc_url( home_url() ); ?>">
                <?php echo wp_get_attachment_image( get_theme_mod( 'blocks_header_1_logo' ), 'medium', null, array(
                    'class' => 'brand-img img-responsive'
                ) ) ?>
            </a>
        </div>
        <!-- Navigation -->
        <div class="collapse navbar-collapse">
            <?php include('templates/menu/menu.php'); ?>
            <!--//nav-->
        </div>
        <!--// End Navigation -->
    </div>
    <!--// End Container -->
</nav>