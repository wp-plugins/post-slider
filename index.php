<?php 
/*
Plugin Name: Posts Slider Free 
Description: Creates  beautiful Slides of your Posts.
Author:umarbajwa
Plugin URI:http://web-settler.com/posts-slider/
Author URI :http://web-settler.com/
Version:1.2
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Donate link:http://web-settler.com/posts-slider/
*/



/*
 -------------- Buy Premium Version -----------------


 

  * Buy the premium Version if you like the plugin.
  * If you want to alter or use code please buy the premium version.
  * A five star rating will be admired :) .





 ----------------------------------------------------
 */




function mpsp_style_free(){


  wp_register_style('mpsp-custom-style',plugins_url('css/custom_style.css',__FILE__));
  wp_enqueue_style( 'mpsp-custom-style');

	wp_register_style('mpsp-style',plugins_url('mpsp_slider/main_slider.css',__FILE__));
	wp_enqueue_style( 'mpsp-style' );
  
	wp_register_style('mpsp_theme',plugins_url('mpsp_slider/mpsp_theme.css',__FILE__));
	
    wp_enqueue_style('mpsp_theme');

	wp_register_style('mpsp_transitions',plugins_url('mpsp_slider/mpsp_transitions.css',__FILE__));
	wp_enqueue_style('mpsp_transitions');
}
add_filter('init','mpsp_style_free');

function mpsp_scrpt_free(){
  
	wp_enqueue_script('mpsp_scrpt_free1',plugins_url('mpsp_slider/main_slider.js',__FILE__));


  wp_enqueue_script('mpsp_jquery-2',plugins_url('/js/mpsp_custom_script.js',__FILE__));

wp_enqueue_script("jquery");
}
add_filter('init','mpsp_scrpt_free');
wp_enqueue_script("jquery");

function mpsp_html_slider_free(){
ob_start();

    //SLider 
  $mpsp_slide_items =get_option('mpsp_slide_items');
  $mpsp_slide_speed =get_option('mpsp_slide_speed');
  $mpsp_slide_navigation = get_option('mpsp_slide_navigation');
  $mpsp_slide_pagination = get_option('mpsp_slide_pagination');
  $mpsp_slide_pagination_numbers =get_option('mpsp_slide_pagination_numbers');
  $mpsp_slide_main_heading =get_option('mpsp_slide_main_heading');
  $mpsp_slide_main_head_bar =get_option('mpsp_slide_main_head_bar');
  $mpsp_slide_custom_width = get_option('mpsp_slide_custom_width');
  $mpsp_slide_nav_button_position =get_option('mpsp_slide_nav_button_position');
    $mpsp_slide_single =get_option('mpsp_slide_single');
    $mpsp_slide_nav_button_color = get_option('mpsp_slide_nav_button_color');



  //POsts
  $mpsp_posts_visible = get_option('mpsp_posts_visible');
  $mpsp_posts_order = get_option('mpsp_posts_order');
  $mpsp_posts_heading_color =get_option('mpsp_posts_heading_color');
  $mpsp_posts_description_color =get_option('mpsp_posts_description_color');
  $mpsp_posts_bg_color =get_option('mpsp_posts_bg_color');



	?>


<style>
.owl-buttons{
  color:<?php echo get_option('mpsp_slide_nav_button_color');?>
}

</style>







<div id="mpsp_wrapper" style= " background-color:<?php echo $mpsp_posts_bg_color;?>; padding:10px; margin:40px; border-radius:5px; width:<?php echo $mpsp_slide_custom_width; ?>;  <?php echo $mpsp_slide_gradient; ?>    ">


    <h1 align="center"style="width:100%;

    background: #ffffff;
background: -moz-linear-gradient(top,  #ffffff 0%, #e5e5e5 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#e5e5e5));
background: -webkit-linear-gradient(top,  #ffffff 0%,#e5e5e5 100%);
background: -o-linear-gradient(top,  #ffffff 0%,#e5e5e5 100%);
background: -ms-linear-gradient(top,  #ffffff 0%,#e5e5e5 100%);
background: linear-gradient(to bottom,  #ffffff 0%,#e5e5e5 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e5e5e5',GradientType=0 );

 height:;    display:<?php echo $mpsp_slide_main_head_bar; ?>;  border-radius:3px;">
     <?php echo $mpsp_slide_main_heading; ?>
   </h1> 




  
             
              <div id="owl-demo" class="owl-carousel">
                
          
                
          <?php

          
function string_limit_words_mpsp($string, $word_limit)
{

  
  $words = explode(' ', $string, ($word_limit + 2000));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}



              // WP_Query arguments
                  $args = array (
                    $mpsp_posts_key          => $mpsp_posts_value,
                    'posts_per_page'         => $mpsp_posts_visible,
                    'order'                  => $mpsp_posts_order,
                    'orderby'                => $mpsp_posts_orderby,

                  );

// The Query
                  $the_query = new WP_Query( $args );

           function get_attachment_id_from_src ($image_src) {

                    global $wpdb;
                    $query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$image_src'";
                     $id = $wpdb->get_var($query);
                   }

          while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <div> 
         <h1 align="center" style="font-size:35px;"><a href="<?php the_permalink() ?>" style= "color:<?php echo $mpsp_posts_heading_color;?>;  text-decoration:none;"><?php the_title(); ?>
         </a></h1>
         
       
       <div class="mpsp_img" style="<?php echo $mpsp_slide_layout_custom; ?>">

        <?php  
       if ( has_post_thumbnail() ) {

               echo get_the_post_thumbnail($page->ID,'medium');
              }
                else {
                   
                
                       
              }
          ?>
       
        <?php  ?> <!-- Post Featured Image --></div>
      <p style="margin:5px; text-decoration:none; color:<?php echo $mpsp_posts_description_color;?>;">
         <?php

               $excerpt = get_the_excerpt(__('(more…)'));
              echo string_limit_words_mpsp($excerpt,500);
            ?> </p>

            
          

          <!-- Linked Post Description  -->
         
       

         <a href="<?php the_permalink() ?>" style=" color:red;">Read more…<!-- Linked Read More  -->
         </a>

         


           







    </div>

<?php endwhile;?>


               
            </div>
    


               
            </div>
          

            <script>

            jQuery(document).ready(function() {
 
         jQuery("#owl-demo").owlCarousel({
              navigation: <?php echo $mpsp_slide_navigation; ?>,
              paginationSpeed : 1000,
              goToFirstSpeed : 2000,
              pagination : <?php echo $mpsp_slide_pagination; ?>,
              singleItem : true,
              paginationNumbers :<?php echo $mpsp_slide_pagination_numbers; ?>,

        });
       });

         



            </script>

          <?php

          return ob_get_clean();
}

add_shortcode('mpsp_slider_free','mpsp_html_slider_free');

register_activation_hook(__FILE__,'mpsp_active_options_free');

function mpsp_active_options_free(){
// add_option('name','')

  // Slider Options
  add_option('mpsp_slide_items','3');
  add_option('mpsp_slide_single','true');
  add_option('mpsp_slide_speed','1000');
  add_option('mpsp_slide_navigation','true');
  add_option('mpsp_slide_pagination','false');
  add_option('mpsp_slide_pagination_numbers','');
  add_option('mpsp_slide_main_heading','');
  add_option('mpsp_slide_main_head_bar','');
  add_option('mpsp_slide_nav_button_position','');
  add_option('mpsp_slide_custom_width','');
  add_option('mpsp_slide_nav_button_color','');

  //Posts Options 

    add_option('mpsp_posts_visible','5');
    add_option('mpsp_posts_order','ASC');
    add_option('mpsp_posts_heading_color','');
    add_option('mpsp_posts_description_color','');
    add_option('mpsp_posts_bg_color','');

    


}


add_action('wp_head','mpsp_options_set_to_head_free');

function mpsp_options_set_to_head_free(){
 // $option = get_option('some option');

  //SLider 
  $mpsp_slide_items =get_option('mpsp_slide_items');
  $mpsp_slide_speed =get_option('mpsp_slide_speed');
  $mpsp_slide_navigation = get_option('mpsp_slide_navigation');
  $mpsp_slide_pagination = get_option('mpsp_slide_pagination');
  $mpsp_slide_main_heading =get_option('mpsp_slide_main_heading');
  $mpsp_slide_main_head_bar =get_option('mpsp_slide_main_head_bar');
  $mpsp_slide_nav_button_position = get_option('mpsp_slide_nav_button_position');
  $psp_slide_nav_button_color = get_option('psp_slide_nav_button_color');
  $mpsp_slide_custom_width = get_option('mpsp_slide_custom_width');
  $mpsp_slide_nav_button_color = get_option('mpsp_slide_nav_button_color');

  //POsts
  $mpsp_posts_visible = get_option('mpsp_posts_visible');
  $mpsp_posts_order = get_option('mpsp_posts_order');
  $mpsp_posts_heading_color =get_option('mpsp_posts_heading_color');
  $mpsp_posts_description_color =get_option('mpsp_posts_description_color');
  $mpsp_posts_bg_color =get_option('mpsp_posts_bg_color');
  $mpsp_slide_pagination_numbers =get_option('mpsp_slide_pagination_numbers');
    $mpsp_slide_single =get_option('mpsp_slide_single');










}
add_action('admin_init','mpsp_register_options_mpsp_free');
function mpsp_register_options_mpsp_free(){
  // register_setting('mpsp_options_group','option');
    register_setting('mpsp_options_group','mpsp_slide_items');
    register_setting('mpsp_options_group','mpsp_slide_speed');
    register_setting('mpsp_options_group','mpsp_slide_navigation');
    register_setting('mpsp_options_group','mpsp_slide_pagination');
    register_setting('mpsp_options_group','mpsp_slide_pagination_numbers');
    register_setting('mpsp_options_group','mpsp_slide_main_head_bar');
    register_setting('mpsp_options_group','mpsp_slide_custom_width');
    register_setting('mpsp_options_group','mpsp_slide_single');
    register_setting('mpsp_options_group','mpsp_slide_nav_button_color');


    register_setting('mpsp_options_group','mpsp_posts_visible');
    register_setting('mpsp_options_group','mpsp_posts_order');
    register_setting('mpsp_options_group','mpsp_posts_heading_color');
    register_setting('mpsp_options_group','mpsp_posts_description_color');
    register_setting('mpsp_options_group','mpsp_posts_bg_color');
    register_setting('mpsp_options_group','mpsp_slide_main_heading');


}


add_action('admin_menu','mpsp_settings_page_mpsp_free');
function mpsp_settings_page_mpsp_free(){
    add_menu_page(
      'Posts Slider',
      'Posts Slider',
      'administrator',
      'mpsp_settings_slug_free',
      'mpsp_options_page_func_free'
     );
}


function mpsp_options_page_func_free(){
  ?>

  

<a href="http://web-settler.com/posts-slider/" target="_blank"><img src="<?php echo plugins_url('img/banner.png',__FILE__); ?>" style="margin:20px; width:950px; height:350px;" align="center"></a>

   <div class="formLayout">
    <h3 class="slide_hed">Slider Settings</h3>
    <div id="slider_settings">
    <form method="post" action="options.php">
      <?php settings_fields( 'mpsp_options_group' );?>
      <?php do_settings_sections( 'mpsp_options_group' );?>
      <br>
      <br>
      <br>

      <label for="mpsp_posts_bg_color">Background Color :</label>
      <input type="color" name="mpsp_posts_bg_color" value="<?php echo get_option('mpsp_posts_bg_color'); ?>">
      <br>
      <br>
      <textarea name="mpsp_slide_gradient" placeholder='Use Only for css gradient codes, For hex codes use "background: " before the code. e.g "background:#e3e3e3;"' value="<?php echo get_option('mpsp_slide_gradient');?>" style="float:right;margin-right:100px"></textarea>
      <br>
      <br>
      <br>
      <br>
      <label for="mpsp_posts_heading_color">Slide Heading Color :</label>
      <input type="color" name="mpsp_posts_heading_color" value="<?php echo get_option('mpsp_posts_heading_color'); ?>">
      <br>
      <br>

    <label for="mpsp_posts_description_color">Description Color :</label>
      <input type="color" name="mpsp_posts_description_color" value="<?php echo get_option('mpsp_posts_description_color'); ?>">

      <br>
      <br>
      

      <label for="mpsp_slide_speed">Slide Speed :</label>
      <input type="number" name="mpsp_slide_speed" value="<?php echo get_option('mpsp_slide_speed'); ?>" placeholder="200">
      <br>
      <br>

    <label for="mpsp_slide_transistion">Select Transition :</label>
    <select name="mpsp_slide_transistion" value="<?php get_option('mpsp_slide_transistion');?>">
      <option disabled value="false">none</option>
      <option disabled value="'fade'">fade</option>
      <option disabled value="'backSlide'">backSlide</option>
      <option disabled value="'goDown'">goDown</option>
      <option disabled value="'fadeUp'">fadeUp</option>

      </select>

      <br>
     <br>

    
      <label for="mpsp_slide_single"> Carousel :</label>
      <select  name="mpsp_slide_single">
        <option disabled value="false">Enable </option>
        <option disabled value="true" selected>Disable</option>

      </select>
      <br>
      <br>

      <label for="mpsp_slide_autoplay">Auto Play :</label>
      <select >
        <option disabled value="true">Enable</option>
        <option disabled value="false">Disable</option>

      </select>
      <br>
      <br>


      <label for="mpsp_slide_pagination"> Pagination :</label>
      <select name="mpsp_slide_pagination">
        <option value="true"

<?php selected('true',get_option('mpsp_slide_pagination')); ?>

        >Enable</option>
        <option value="false"

<?php selected('false',get_option('mpsp_slide_pagination')); ?>

        >Disable</option>

      </select>
      <br>
      <br>
      <label for="mpsp_slide_pagination_numbers">Pagination Numbers :</label>
      <select name="mpsp_slide_pagination_numbers">
        <option value="true"

<?php selected('true',get_option('mpsp_slide_pagination_numbers')); ?>

        >Enable</option>
        <option value="false"

<?php selected('false',get_option('mpsp_slide_pagination_numbers')); ?>

        >Disable</option>

      </select>

      
      <br>
      <br>
      <label for="mpsp_slide_main_head_bar">Slider Title Bar :</label>
      <select name="mpsp_slide_main_head_bar">
        <option value=""

<?php selected('',get_option('mpsp_slide_main_head_bar')); ?>

        >Enable</option>
        <option value="none"

<?php selected('none',get_option('mpsp_slide_main_head_bar')); ?>

        >Disable</option>

      </select>
      <br>
      <br>
      <label for="mpsp_slide_main_heading">Slider Title Bar Text  :</label>
      <input type="text" name="mpsp_slide_main_heading" value="<?php echo get_option('mpsp_slide_main_heading');?>"style="width:130px;">



      <br>
      <br>
      <label for="mpsp_slide_navigation">Navigation Buttons</label>
      <select name="mpsp_slide_navigation">
        <option value="true"

<?php selected('true',get_option('mpsp_slide_navigation')); ?>

        >Enable</option>
        <option value="false"

<?php selected('false',get_option('mpsp_slide_navigation')); ?>


        >Disable</option>

      </select>
      <br>
      <br>

            <label for="mpsp_slide_nav_button_position">Navigation Buttons Position :</label>
      <select name="mpsp_slide_nav_button_position">
        <option disabled value="">Default</option>
        <option disabled> Left </option>
        <option disabled> Right </option>        

      </select>
      <br>
      <br>
      <label for="mpsp_slide_nav_button_color">Navigation Buttons Color :</label>
      <input name="mpsp_slide_nav_button_color" type="color" value="<?php echo get_option('mpsp_slide_nav_button_color'); ?>">
      <br>
      <br>
      <label for="mpsp_slide_custom_width">Custom Slider Width :</label>
      <input type="text" placeholder="Leave blank for responsive slider" name="mpsp_slide_custom_width" value="<?php echo get_option('mpsp_slide_custom_width'); ?>" style="width:190px;">




    
    </div>
    <h3 class='slide_hed_posts'>Posts Settings</h3>

    <div id="posts_settings">

      <br>
      <br>
      <br>

       <label for="cs_post_types">Select Post Type :</label>

     <?php 
     $post_types = get_post_types('', 'names');

      echo "<select name='mpsp_post_types'>
      <option value='' selected( 'select', get_option('mpsp_post_types') );>Select</option>
      ";


    foreach($post_types as $post_type) {
       ?>

      <option disabled value='<?php echo $post_type;?>' <?php selected($post_type, get_option('mpsp_post_types') ); ?> ><?php echo $post_type;?> </option>
      <?php
     }

      echo "</select>";

     ?>
      <br>
      <br>




      <label for="mpsp_posts_visible">No. of Posts In Slider :</label>
      <input type="number" max="10" name="mpsp_posts_visible" value="<?php echo get_option('mpsp_posts_visible'); ?>">
      <br>
      <br>
      <label for="mpsp_posts_Desc_limit">Description Words Limit :</label>
      <input disabled type="text" name="mpsp_posts_Desc_limit" value="max">
      <br>
      <br>
      <label for="mpsp_posts_order">Posts Order :</label>
      <select name="mpsp_posts_order">
        <option value="ASC"
<?php selected('ASC',get_option('mpsp_posts_order')); ?>

        >Ascending</option>
        <option value="DESC"
<?php selected('DESC',get_option('mpsp_posts_order')); ?>

        >Descending</option>

      </select>
      <br>
      <br>

      <label for="mpsp_posts_orderby"  title="Sort retrieved posts by.">Posts Order By :</label >
      <select  name="mpsp_posts_orderby">
        <option disabled selected value="">Choose..</option>
        <option disabled value="none">None</option>
        <option disabled value="rand">Random</option>
        <option disabled value="id">ID</option>
        <option disabled value="title">Title</option>
        <option disabled value="name">Slug</option>
        <option disabled value="date">Date - Default</option>
        <option disabled value="modified">Modified Date</option>
        <option disabled value="parent">Parent ID</option>
        <option disabled value="menu_order">Menu Order</option>
        <option disabled value="comment_count">Comment Count</option>
        

      </select>
      <br>
      <br>


      <label disabled for="mpsp_posts_key">Get Posts By :</label>
      <select name="mpsp_posts_key">
        <option disabled value="">Choose..</option>
        <option disabled value="category_name" disabled>Category Name</option>
        <option disabled value="post_name">Post Name</option>
        <option disabled value="tag_name">Tag Name</option>
        <option disabled value="author_name">Author Name</option>

      </select>
      <br>
      <br>
      <label disabled for="mpsp_posts_value">Get Posts By (Value) :</label>
      <input disabled type="text" name="mpsp_posts_value" value="<?php echo get_option('mpsp_posts_value'); ?>" placeholder="i.e category name" style="width:150px;">

      <br>
      <br>
      
      <label disabled for="mpsp_posts_img_size">Image Size :</label>
      <select name="mpsp_posts_img_size">
        <option disabled value="thumbnail">Small</option>
        <option disabled value="medium">Medium</option>
        <option disabled value="large">Large</option>
        <option disabled value="original">Original</option>

      </select>

      <h2 align="center">Select layout</h2>
      <label disabled for="mpsp_slide_layout_custom"><img src="<?php echo plugins_url('img/layout-def.png',__FILE__); ?>" width="150px" height"150px"></label>

      <input type="radio" name="mpsp_slide_layout_custom" value="" style="width:15px;" disabled>
      <br>

      <label disabled for="mpsp_slide_layout_custom"><img src="<?php echo plugins_url('img/layout-1.png',__FILE__); ?>" width="150px" height"150px"></label>
      <input disabled disabled type="radio" name="mpsp_slide_layout_custom"

       style="width:15px;">
          <br>

      <label disabled for="mpsp_slide_layout_custom"><img src="<?php echo plugins_url('img/layout-2.png',__FILE__); ?>" width="150px" height"150px"></label>
      <input  type="radio" name="mpsp_slide_layout_custom"
      style="width:15px;" checked >
          <br>
          <label disabled for="mpsp_slide_layout_custom"><img src="<?php echo plugins_url('img/layout-3.png',__FILE__); ?>" width="150px" height"150px"></label>
      <input disabled type="radio" name="mpsp_slide_layout_custom"

      style="width:15px;">
          <br>
          <br>
          <br>
          <label for="scode">Insert this shortcode into your posts or text widget to show Slider</label>
          <input type="text" name="scode" value="[mpsp_slider_free]" disabled  style="width:150px; background:#000; color:#fff;">




      


    
    
    

  </div>
    </div>
    <div style="position:relative; top:-105px; left:-39px;"> 
    <?php submit_button();?></div>

   <a href="http://web-settler.com/posts-slider/" target="_blank"> <p style="font-size:15px;left:0;position:absolute;margin-top:-130px;"><span style="color:red;">Note :</span> <i>Premium Version includes all the disabled features + support. </i></p></a>
</form>






<?php


  //SLider 
  $mpsp_slide_items =get_option('mpsp_slide_items');
  $mpsp_slide_single =get_option('mpsp_slide_single');
  $mpsp_slide_speed =get_option('mpsp_slide_speed');
  $mpsp_slide_autoplay =get_option('mpsp_slide_autoplay');
  $mpsp_slide_navigation = get_option('mpsp_slide_navigation');
  $mpsp_slide_pagination = get_option('mpsp_slide_pagination');
  $mpsp_slide_transistion = get_option('mpsp_slide_transistion');
  $mpsp_slide_pagination_numbers =get_option('mpsp_slide_pagination_numbers');
  $mpsp_slide_main_heading =get_option('mpsp_slide_main_heading');
  $mpsp_slide_main_head_bar =get_option('mpsp_slide_main_head_bar');
  $mpsp_slide_gradient =get_option('mpsp_slide_gradient');
  $mpsp_slide_layout_custom = get_option('mpsp_slide_layout_custom');
  $mpsp_slide_nav_button_position = get_option('mpsp_slide_nav_button_position');
  $psp_slide_nav_button_color = get_option('psp_slide_nav_button_color');
  $mpsp_slide_custom_width = get_option('mpsp_slide_custom_width');
  $mpsp_slide_single =get_option('mpsp_slide_single');



  //POsts
  $mpsp_posts_visible = get_option('mpsp_posts_visible');
  $mpsp_posts_order = get_option('mpsp_posts_order');
  $mpsp_posts_orderby = get_option('mpsp_posts_orderby');
  $mpsp_posts_key = get_option('mpsp_posts_key');
  $mpsp_posts_value = get_option('mpsp_posts_value');
  $mpsp_posts_tag = get_option('mpsp_posts_tag');
  $mpsp_posts_img =get_option('mpsp_posts_img');
  $mpsp_posts_img_size =get_option('mpsp_posts_img_size');
  $mpsp_posts_heading_color =get_option('mpsp_posts_heading_color');
  $mpsp_posts_description_color =get_option('mpsp_posts_description_color');
  $mpsp_posts_bg_color =get_option('mpsp_posts_bg_color');
  $mpsp_posts_Desc_limit =get_option('mpsp_posts_Desc_limit');
  $mpsp_slide_nav_button_color = get_option('mpsp_slide_nav_button_color');


}


?>