<?php 

//Get the current category data(All) as an array
$category = get_queried_object();

//retrive ID
echo $category->term_id;