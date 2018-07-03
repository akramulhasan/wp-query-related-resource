<?php 

//Get the current post data(All) as an array
$post_data = get_queried_object();

//retrive Post ID
echo $post_data->term_id;

//retrive Post Title
echo $post_data->name;