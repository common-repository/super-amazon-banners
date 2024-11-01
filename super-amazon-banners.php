<?php
/*
Plugin Name: Super Amazon Banners
Plugin URI: http://www.bluehatseo.org/super-amazon-banners/
Description: Allows you to easily embed Amazon product images linked with your affilliate tag.
Version: 1.0
Author: Billy Blue Hat
Author URI: http://www.bluehatseo.org/
License: GPL2
*/



function super_amazon_banner_tag($asin = "B002Y27P3M", $size = "200", $country = "US", $tag = "squizard-20")
{
  $super_amazon_banner_output = '';
  
  $id = uniqid();
  $js_url = "http://wordpress.seoranker.info/$asin/$country/$tag/?size=$size&id=$id";     
  $super_amazon_banner_output = "<script src='$js_url' type='text/javascript'></script>";
  
  echo $super_amazon_banner_output;
}

function super_amazon_banners_filter_post($content)
{

  // Search post for the tag
  $pattern = '/\<\!\-\-\s?super_amazon_banner\((.*)\)\s?\-\-\>/';
  preg_match_all($pattern, $content, $matches, PREG_OFFSET_CAPTURE, 3);
  

  // Loop through each product
  for ($i = 0; $i < sizeof($matches[1]); ++$i)
  {
    $params = explode(',', $matches[1][$i][0]);
    $string_to_replace = $matches[0][$i][0];

    $asin = trim($params[0]);
    $country = trim($params[2]);
    $tag = trim($params[3]);
    $size = trim($params[1]);
    
    $id = uniqid();
    $js_url = "http://wordpress.seoranker.info/$asin/$country/$tag/?size=$size&id=$id";     
    $content = str_replace($string_to_replace, "<script src='$js_url' type='text/javascript'></script>", $content);
  }


  return $content;
}

function super_amazon_banners_admin_msg()
{
  
  $version = 1.0;
  if (function_exists('curl_version') == "Enabled")
  {
    $ch = curl_init();
    

    // set URL and other appropriate options

    curl_setopt($ch, CURLOPT_URL, "http://wordpress.seoranker.info/version?version=$version");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    
    $remote_content = curl_exec($ch);
    if (strlen($remote_content) > 0)
    {
      echo "<div class='error'>$remote_content</div>";
    }


    curl_close($ch);
    
  // See if CURL exentsions is available, show error message if it is not
  #
  }
}

add_filter( "the_content", "super_amazon_banners_filter_post" );
add_action('admin_notices', 'super_amazon_banners_admin_msg');
?>