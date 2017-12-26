<?php
 if (!defined('BASEPATH')) {
     exit('No direct script access allowed');
 }

$config['image_library'] = 'gd2'; // set the image library that will be used by the image_lib.
$config['source_directory'] = 'public/uploads/original/'; // if there is a default source directory for the images; the source directory should be relative to the main index.php
$config['parent_directory'] = 'public/uploads/'; // if there is a default parent directory for the images; if not, leave empty and it will be used the source directory as parent directory
$config['size_folders'] = true; // TRUE - if we want different sizes to be automatically put inside directories having the same name as the sizes
$config['default_sizes'] = '31x31|255x220|270x330|380x600|424x424|500x500|1600x90|1920x616|400x420|526x773'; // default sizes that will automatically be processed
$config['keep_aspect_ratio'] = false; // if we want the images to have the dimensions we've mentioned in $_default_sizes (images will be cropped and then resized), then we must set $_keep_aspect_ratio to FALSE. if we only want to resize the images, then we set it to TRUE
$config['default_master_dim'] = 'auto'; // $_default_master_dim only works if we do resizing without cropping (that is, if $_keep_aspect_ratio is set to TRUE)
$config['default_style'] = ['vertical'=>'center', 'horizontal'=>'center']; // here we say what is our preference when the cropping is done. we want the cropping to be done from the center of the image (where the action is actually happening inside a photo)
$config['overwrite_images'] = false; // if we are sure that there is no possibility that the overwriting of existing files would affect our application, we can set this one to TRUE. but I think is much better to leave it to FALSE
$config['default_quality'] = '70%'; // we can set a default quality for the processed image. Usually should be set to 70%
