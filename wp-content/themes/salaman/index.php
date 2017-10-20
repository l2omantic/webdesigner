<?php
get_header(); ?>

<header id="header-1" class="header-1">
    <!-- Navbar -->
    <?php wp_nav_menu(); ?>
    <!--// End Navbar -->
</header>
<main class="pg-empty-placeholder">
    <section class="content-block content-1-8">
        <div class="container">
            <div class="tab-content">
                <?php
                    $tabs_args = array(
                        'post_parent' => get_theme_mod('blocks_content_1_8_source'),
                        'post_type' => 'blocks_content',
                        'post_status' => 'publish',
                        'nopaging' => true,
                        'order' => 'DESC',
                        'orderby' => 'ID'
                    )
                ?>
                <?php $tabs = new WP_Query( $tabs_args ); ?>
                <?php if ( $tabs->have_posts() ) : ?>
                    <?php $tabs_item_number = 0; ?>
                    <?php while ( $tabs->have_posts() ) : $tabs->the_post(); ?>
                        <div class="tab-pane fade<?php if( $tabs_item_number == 0) echo ' in active'; ?>" id="<?php echo 'tab_'.$tabs_item_number ?>">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-1 col-sm-6">
                                    <?php the_post_thumbnail( 'large', array(
                                            'class' => 'img-responsive home-img'
                                    ) ); ?>
                                </div>
                                <!-- /.col -->
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <?php $tabs_item_number++; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                <!-- /#tab1 -->
                <!-- /#tab2 -->
                <!-- /#tab3 -->
                <!-- /#tab4 -->
            </div>
            <ul class="nav nav-tabs text-center" role="tablist" id="myTab">
                <?php
                    $tabs_args = array(
                        'post_parent' => get_theme_mod('blocks_content_1_8_source'),
                        'post_type' => 'blocks_content',
                        'post_status' => 'publish',
                        'nopaging' => true,
                        'order' => 'DESC',
                        'orderby' => 'ID'
                    )
                ?>
                <?php $tabs = new WP_Query( $tabs_args ); ?>
                <?php if ( $tabs->have_posts() ) : ?>
                    <?php $tabs_item_number = 0; ?>
                    <?php while ( $tabs->have_posts() ) : $tabs->the_post(); ?>
                        <li class="<?php if( $tabs_item_number == 0) echo 'active'; ?>">
                            <a href="<?php echo '#tab_'.$tabs_item_number ?>" role="tab" data-toggle="tab">
                                <?php the_title(); ?>
                            </a>
                        </li>
                        <?php $tabs_item_number++; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </ul>
            <!-- /.tab-content -->
        </div>
        <!-- /.container -->
    </section>
    <section class="pricing-table-2 content-block">
        <div class="container">
            <div class="row">
                <div class="tables-row">
                    <div class="col-md-6 price-block">
                        <header>
                            <h1 class="three-home"><?php echo get_theme_mod( 'block_home_title', __( 'สินค้า', 'salaman' ) ); ?> <a href="<?php echo get_theme_mod( 'block_home_link', __( '#', 'salaman' ) ); ?>"><i class="btn"><?php echo get_theme_mod( 'block_home_textlink', __( 'กดไป &gt;', 'salaman' ) ); ?></i></a></h1>
                            <?php echo wp_get_attachment_image( get_theme_mod( 'block_home_img' ), null, null, array(
                                    'class' => 'img-responsive block-home3-image'
                            ) ) ?>

                        </header>
                        <!-- /.features -->
                    </div>
                    <div class="col-md-6 price-block">
                        <header>
                            <h1 class="three-home"><?php echo get_theme_mod( 'block_home_title2', __( 'สินค้า', 'salaman' ) ); ?><a href="<?php echo get_theme_mod( 'block_home_link2', __( '#', 'salaman' ) ); ?>"><i class="btn"><?php echo get_theme_mod( 'block_home_textlink2', __( 'กดไป &gt;', 'salaman' ) ); ?></i></a></h1>
                            <?php echo wp_get_attachment_image( get_theme_mod( 'block_home_img2' ), null, null, array(
                                    'class' => 'img-responsive block-home3-image'
                            ) ) ?>

                        </header>
                        <!-- /.features -->
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <section class="pricing-table-3 content-block">
        <div class="container">
            <div class="row">
                <div class="tables-row">
                    <div class="col-md-4 price-block">
                        <header>
                            <a href="<?php echo get_theme_mod( 'block_home_link6', __( '#', 'salaman' ) ); ?>" target="_blank"><div class="three-home2">  <?php echo get_theme_mod( 'block_home_textlink6', __( 'สินค้า', 'salaman' ) ); ?></div></a>
                        </header>
                        <!-- /.features -->
                    </div>
                    <div class="col-md-4 price-block">
                        <header>
                            <a href="<?php echo get_theme_mod( 'block_home_link7', __( '#', 'salaman' ) ); ?>"><div class="three-home2"><?php echo get_theme_mod( 'block_home_textlink7', __( 'สมัครงานกับเรา', 'salaman' ) ); ?></div></a>
                        </header>
                        <!-- /.features -->
                    </div>
                    <div class="col-md-4 price-block">
                        <header>
                            <a href="<?php echo get_theme_mod( 'block_home_link8', __( '#', 'salaman' ) ); ?>"><div class="three-home2"><?php echo get_theme_mod( 'block_home_textlink8', __( 'ติดต่อเรา', 'salaman' ) ); ?></div></a>
                        </header>
                        <!-- /.features -->
                    </div>
                    <!-- /.price-block -->
                    <!-- /.price-block -->
                    <!-- /.price-block -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>


    <section class="pricing-table-2 content-block content-block2">
        <div class="container">
            <div class="row">
                <div class="tables-row">
                    <div class="col-md-4 price-block col-md-4-2">
                        <a href="<?php echo get_theme_mod( 'block_home_link4', __( '#', 'salaman' ) ); ?>">
                            <?php echo wp_get_attachment_image( get_theme_mod( 'block_home_img4' ), null, null, array(
                                    'class' => 'pricing-table-img'
                            ) ) ?>
                        </a>
                        <!-- /.features -->
                    </div>
                    <!-- /.price-block -->
                    <!-- /.price-block -->
                    <div class="col-md-4 price-block">
                        <a href="<?php echo get_theme_mod( 'block_home_link5', __( '#', 'salaman' ) ); ?>">
                            <?php echo wp_get_attachment_image( get_theme_mod( 'block_home_img5' ) ) ?>
                        </a>
                        <!-- /.features -->
                    </div>
                    <!-- /.price-block -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
</main>
<section class="content-block-nopad bg-deepocean footer-wrap-1-3">
    <?php include('footer-page.php'); ?>
    <!-- /.container -->
</section>

<?php get_footer(); ?>