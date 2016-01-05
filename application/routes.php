<?php 

/**
 *This file contains all the defined routes for this application.
 *Routes as not mandatory, but in order to make custom url names different from your controller names, you can 
 *define a custom route. To define a route, follow the example below. Define the route name as index and the 
 *controller name as value as this 
 *	'homepage' => 'Home'
 *To define a route name with controller and method combination, separate the controller and method with @symbol
 * 	'homepage' => 'Home@index'
 *To specify url parameter name for which to map values, specify their names separated by forward slash
 *	'homepage' => 'Home@index/id/token'
 *To specify only controller name and url parameters and only specify method everytime in the url, omit the @methodName
 *	'homepage' => 'Home/id/token'
 */
return array(

/**
 *This route loads the videos controller and getEdit() method
 *@param int $id The id of the video to edit
 */
'edit' => 'Videos@getEdit/id',
/**
 *This route loads the video for viewing and download
 *@param int $id The id of the video to load
 */
'view' => 'Videos@view/id',
/**
 *This route loads the videos controller and getEdit() method
 *@param int $id The id of the video to edit
 */
'delete' => 'Videos@delete/id',
/**
 *This routes loads the controller that display blog posts
 *@param string $category The category from which to get blog content
 *@param int $id The id of the post to load in this category
 */
'blog' => 'Load/category/id'

);