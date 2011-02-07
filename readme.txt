=== Plugin Name ===
Contributors: pabloaugusto
Donate link: http://pabloaugusto.com/
Tags: category, permalink, seo, optimization, custom menu, url rewrite
Requires at least: 2.0.2
Tested up to: 3.x
Stable tag: 0.1


Transforms long path from categories and posts to a small path. Ex http://site.com/cat1/cat2/cat3/post-name  to  http://site.com/cat3/post-name.


== Description ==

This plugin transforms long path from categories and posts to a small path.

Ex:

<code>http://site.com/cat1/cat2/cat3/cat4  to  http://site.com/cat4</code>

and

<code>http:/site.com/cat1/cat2/cat3/cat4/post-name  to  http://site.com/cat4/post-name</code>


== Installation ==

1. Upload `lastCategoy.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Change Permalink structure to /%category%/%postname%
4. Add the follow code to functions.php
<pre><code>
add_filter('category_link', 'lastcategory_category_permalink',1000,2);
function lastcategory_category_permalink($catlink) {
    $lastCatlink = array_reverse(explode("/",$catlink));
    $catlink = get_bloginfo('url') . "/".$lastCatlink[0];
    return $catlink;
}
</code></pre>


== Frequently Asked Questions ==

= No questions yet =


== Screenshots ==



== Changelog ==

= 0.1 =
* inicial version.

== Arbitrary section ==