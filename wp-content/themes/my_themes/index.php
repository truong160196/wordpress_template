<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

    get_header();
?>

    <!-- Page Top Recipe Section Begin -->
    <?php thinkup_input_sliderhome(); ?>
    <!-- Page Top Recipe Section End -->
    <?php
    $getPosts = new WP_Query(array('showposts' => 5, 'orderby' => 1));
    ?>
    <?php if( have_posts() ) :
        $firstPost = true;
    ?>
    <!-- Top Recipe Section Begin -->
    <section class="top-recipe spad">
        <div class="section-title">
            <h5>Top Recipes this Week</h5>
        </div>
        <div class="container po-relative">
            <div class="plus-icon">
                <i class="fa fa-plus"></i>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="top-recipe-item large-item">
                        <?php echo thinkup_input_blogimage(); ?>
                        <div class="top-recipe-text">
                            <?php thinkup_input_blogcategory() ?>
                            <?php thinkup_input_blogtitle(); ?>
                            <p><?php thinkup_input_blogtext(); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <?php while( $getPosts->have_posts()) :
                            $getPosts->the_post();

                        if(!$firstPost) {
                            ?>
                            <div class="top-recipe-item <?php echo thinkup_input_stylelayout(); ?>">
                                <div class="row" id="post-<?php the_ID(); ?>" <?php post_class('blog-article'); ?>>
                                    <div class="col-sm-4">
                                        <?php echo thinkup_input_blogimage(); ?>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="top-recipe-text">
                                            <?php thinkup_input_blogcategory() ?>
                                            <?php thinkup_input_blogtitle(); ?>
                                            <p><?php thinkup_input_blogtext(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        $firstPost = false;
                        endwhile;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php else: ?>

        <?php get_template_part( 'no-results', 'archive' ); ?>

    <?php endif; ?>
    <!-- Top Recipe Section End -->

    <!-- Categories Filter Section Begin -->
    <div class="categories-filter-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="filter-item">
                        <ul>
                            <li class="active" data-filter="*">Vegetarian</li>
                            <li data-filter=".mostpopular">Most popular</li>
                            <li data-filter=".meatlover">Meat Lover</li>
                            <li data-filter=".glutenfree">Gluten Free</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cf-filter" id="category-filter">
                <div class="cf-item mix all mostpopular">
                    <div class="cf-item-pic">
                        <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/cate-filter/cate-filter-1.jpg" alt="">
                    </div>
                    <div class="cf-item-text">
                        <h5>Sunday Brunch: Spaghetti and Eggs Recipe</h5>
                    </div>
                </div>
                <div class="cf-item mix all mostpopular">
                    <div class="cf-item-pic">
                        <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/cate-filter/cate-filter-2.jpg" alt="">
                    </div>
                    <div class="cf-item-text">
                        <h5>Sunday Brunch: Spaghetti and Eggs Recipe</h5>
                    </div>
                </div>
                <div class="cf-item mix all meatlover mostpopular">
                    <div class="cf-item-pic">
                        <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/cate-filter/cate-filter-3.jpg" alt="">
                    </div>
                    <div class="cf-item-text">
                        <h5>Sunday Brunch: Spaghetti and Eggs Recipe</h5>
                    </div>
                </div>
                <div class="cf-item mix all meatlover">
                    <div class="cf-item-pic glutenfree">
                        <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/cate-filter/cate-filter-4.jpg" alt="">
                    </div>
                    <div class="cf-item-text">
                        <h5>Sunday Brunch: Spaghetti and Eggs Recipe</h5>
                    </div>
                </div>
                <div class="cf-item mix all meatlover glutenfree">
                    <div class="cf-item-pic">
                        <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/cate-filter/cate-filter-5.jpg" alt="">
                    </div>
                    <div class="cf-item-text">
                        <h5>Sunday Brunch: Spaghetti and Eggs Recipe</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Filter Section End -->

    <!-- Feature Recipe Section Begin -->
    <section class="feature-recipe">
        <div class="section-title">
            <h5>Featured Recipes</h5>
        </div>
        <div class="container po-relative">
            <div class="plus-icon">
                <i class="fa fa-plus"></i>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="fr-item">
                        <div class="fr-item-img">
                            <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/feature-1.jpg" alt="">
                        </div>
                        <div class="fr-item-text">
                            <h4>Sunday Brunch: Spaghetti and Eggs Recipe</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="fr-item">
                        <div class="fr-item-img">
                            <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/feature-2.jpg" alt="">
                        </div>
                        <div class="fr-item-text">
                            <h4>Sunday Brunch: Spaghetti and Eggs Recipe</h4>
                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Recipe Section End -->
<?php
get_footer();
?>
