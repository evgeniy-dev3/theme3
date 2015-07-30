<?php get_header(); ?>

    <div class="page-title">
    <h1><?php single_cat_title(); ?></h1>
    <p class="page-title-map"><a href="<?php echo home_url(); ?>">Home</a>  /  <?php single_cat_title(); ?></p>
    </div>

                  <!--  ВЫВОД МЕТОК-->

<?php

$cat_id = get_query_var('cat');      // получаем номер рубрики с которой работает
$tags = get_tags_in_cat($cat_id);   // принимает результаты выполения функции


if( $tags){
    echo '<div class="page-nav">';
        echo '<ul>';
            foreach($tags as $tag_id => $tag_name){
                echo '<li><a href="' . get_tag_link($tag_id) . '">' . $tag_name . '</a></li>';
            }
        echo '</ul>';
    echo '</div>';
}

?>



                <!--КОНТЕНТ--><!--КОНТЕНТ--><!--КОНТЕНТ-->


<?php if ( have_posts() ) : ?>
    <div class="content-main">

<?php while ( have_posts() ) : the_post(); ?>

    <div class="artical-anons-main">
    <?php the_post_thumbnail('full', array('class' => 'artical-img') ); ?>
    <div class="artical-head">
        <h1><?php the_title(); ?></h1>
        <?php my_list_tags(); ?>
    </div>
    <?php the_excerpt(); ?>
    <p><a href="<?php the_permalink(); ?>" class="read-more">Read more</a></p>
     </div>
<?php endwhile; ?>
        <ul class="pager">
            <li><a href="#" class="now">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
        </ul>
    </div>
<?php else: ?>
    <div class="content-main">
    в рубрике нет постов.
<?php endif; ?>



<?php get_footer();?>