<?php
/*
Plugin Name: Last Category
Plugin URI: http://wordpress.org/extend/plugins/last-category/
Description:  This plugin transforms long path from categories and posts to a small path. ex: http://site.com/cat1/cat2/cat3/cat4  to  http://site.com/cat4. Plugin by <a href="http://pabloaugusto.com">Pablo Augusto</a>.
Version: 0.2
Author: pabloaugusto
Author URI: http://pabloaugusto.com
License: GPLv2
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/





add_filter('post_link', 'lastcategory_post_permalink', 10, 3);
add_filter('category_link', 'lastcategory_category_permalinks',1000,2);

function lastcategory_post_permalink($permalink) {
    $lastCat = array_reverse(explode("/",$permalink));
    $permalink = get_bloginfo('url') . "/".$lastCat[1]."/".$lastCat[0];
    return $permalink;
}

function lastcategory_category_permalinks($catlink) {
    $lastCatlink = array_reverse(explode("/",$catlink));
    $catlink = get_bloginfo('url') . "/".$lastCatlink[0];
    return $catlink;
}
