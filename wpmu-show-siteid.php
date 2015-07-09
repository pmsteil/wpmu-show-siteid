<?php
/*
Plugin Name: Show Site ID
Plugin URI: http://halfelf.org/hacks/site-id-columns-multisite/
Description: Show Site ID in Sites Column for Multisite
Version: 1.0
Author: Mika 'Ipstenu' Epstein
Author URI: http://www.ipstenu.org/
 
        This plugin is free software; you can redistribute it and/or modify
        it under the terms of the GNU General Public License as published by
        the Free Software Foundation; either version 2 of the License, or
        (at your option) any later version.
 
        This plugin is distributed in the hope that it will be useful,
        but WITHOUT ANY WARRANTY; without even the implied warranty of
        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
        GNU General Public License for more details.
 
*/
 
function siteid_columns($column, $blog_id) {
        global $wpdb;
        if ( $column == 'site_id' ) {
                echo $blog_id;
        }
        return $value;
}
 
// Add in a column header
function site_id($columns) {
    $columns['site_id'] = __('ID', 'site_id');
    return $columns;
}
 
        add_filter( 'wpmu_blogs_columns', 'site_id' );
        add_action('manage_sites_custom_column',  'siteid_columns', 10, 3);
        add_action('manage_blogs_custom_column',  'siteid_columns', 10, 3);
