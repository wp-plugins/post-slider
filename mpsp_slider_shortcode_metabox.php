<?php
function mpsp_slider_posts_shortcode($post){
    // $post is already set, and contains an object: the WordPress post
    global $post;
 //////////////////////////////////////////////////////////////////////////
                                                                        //  
                               //START                                 //
                                                                      //  
                                                                     //
    ///////  MAIN SETTINGS var assign BOX Starts HERE!!! /////////////

    $postid = $post->ID;

    ?>

    <p> [mpsp_posts_slider id='<?php echo $postid; ?>']</p>
    

    <?php


 }


 ?>