=== Plugin Name ===
Contributors: BillyBlueHat
Donate link: http://www.bluehatseo.org/super-amazon-banners/
Tags: amazon,banners,affiliate,make money,earnings
Requires at least: 3.0
Tested up to: 3.2.1
Stable tag: trunk

Allows you to easily include Amazon product banners with your own affiliate links.

== Description ==

Super Amazon Banners allows you to easily embed Amazon product banners and links with your affiliate tag anywhere on your blog.  

You can show product banners from individual posts, pages or the template of your Wordpress site.  You can also link to different Amazon sites (US, UK, more to come), and pass through your affiliate ID.

For more information, check out the homepage: [Super Amazon Banners](http://www.bluehatseo.org/super-amazon-banners/)


== Installation ==

1. Upload `super-amazon-banners.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<!-- super_amazon_banner(B00365F6EG,480,US,squizard-20) -->` in your posts and pages or `<?php super_amazon_banner('B00365F6EG',480,'US','squizard-20'); ?>` in your template files.

= Usage =

You can use this plugin in either a post or in your WordPress template. The syntax is pretty much the same and it always takes 4 arguments:

super_amazon_banner(ASIN, Width, Country, Affiliate_Tag)

Where...

	* ASIN is the product ASIN (Amazon Standard Identification Number) you want to feature, 
	* Size can either be 550, 300 or 200 – this dictates which size banner is returned; you can see some samples on the demo page above or just play around to find the one you want. 
	* Country defaults to "US" – you can use US or UK at the moment. 
	* Affiliate_tag is – obviously – your own affiliate tracking ID so Amazon will credit you for sending visitors their way


== Frequently Asked Questions ==

= Does this require a lot of processing on my server? =

No!  All the processing is done on my own server, so there is minimal work done by your servers.  The plugin replaces the tags with a Javascript snippet which loads the image remotely.


== Screenshots ==

1. This is the 200px wide banner (there is a wide 550px, medium 300px or this 200px banner) - you pass in the product ASIN and the size you want, and this plugin returns the relevant image and link for you

== Upgrade Notice ==

None yet

== Changelog ==

= 1.0 =
* Initial release
