<?php

//Get all child categories of a specific parent cat
$categories =  get_categories('child_of=2');


//Start a loop for walking throughout all the childs of parent category
foreach  ($categories as $category) {


    //Display the sub category information using $category values like $category->cat_name
    echo '<h2>'.$category->name.'</h2>';
    echo '<ul>';

//start finding all the associated posts of an child cat
    $args = array (
                'post_type' => 'post',
                'posts_per_page' => -1,
                'cat' => $category->term_id,//defining the cat id here
                'orderby' => 'menu_order',
                'order' => 'ASC',
        );
        $custom_query = new WP_Query($args);
        
        if ( $custom_query->have_posts() ) :
    ?>
    
        <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
    
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    
        <?php endwhile; ?>
    
    <?php endif; wp_reset_query(); 
    echo '</ul>';
}
?>