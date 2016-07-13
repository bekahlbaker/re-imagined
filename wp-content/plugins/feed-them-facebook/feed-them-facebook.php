<?php
/*
Plugin Name: Feed Them Facebook
Plugin URI: http://slickremix.com/
Description: Create and display custom feeds for Facebook Groups, Facebook Pages, Facebook Events, Facebook Photos, Facebook Album Covers and more.
Version: 1.0.1
Author: SlickRemix
Author URI: http://slickremix.com/
Text Domain: feed-them-social
Domain Path: /languages
Requires at least: wordpress 3.6.0
Tested up to: WordPress 4.5.3
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

 * @package    	Feed Them
 * @category   	Core
 * @author      SlickRemix
 * @copyright  	Copyright (c) 2012-2016 SlickRemix

Need Support? http://www.slickremix.com/support-forum/forum/feed-them-social-2/
*/

final class Feed_Them_Facebook {
   
    //Main Instance of Display Posts Feed
    private static $instance;
    
    
    /**
     * Create Sidebar Shortcode Instance
     *
     * @return Sidebar_Support
     * @since 1.0.0
     */
    public static function instance() {
        if (!isset(self::$instance) && !(self::$instance instanceof Feed_Them_Facebook)) {
            self::$instance = new Feed_Them_Facebook;

            // Make sure php version is greater than 5.3
            if (function_exists('phpversion'))
                $phpversion = phpversion();
            $phpcheck = '5.2.9';
            if ($phpversion > $phpcheck) {
                // Add actions
                add_action('init', array(self::$instance ,'ftf_action_init'));
            } // end if php version check
            else {
                // if the php version is not at least 5.3 do action
                deactivate_plugins('feed-them-facebook/feed-them-facebook.php');
                if ($phpversion < $phpcheck) {
                    add_action('admin_notices', array(self::$instance ,'ftf_required_php_check1'));

                }
            } // end fts_required_php_check

            // Include our own Settings link to plugin activation and update page.
            add_filter('plugin_action_links_' . plugin_basename(__FILE__), array(self::$instance , 'ftf_free_plugin_actions'), 10, 4);

            // Include Leave feedback, Get support and Plugin info links to plugin activation and update page.
            add_filter('plugin_row_meta', array(self::$instance , 'ftf_free_add_leave_feedback_link'), 10, 2);


            self::$instance->setup_constants();
            //add_action( 'plugins_loaded', array( self::$instance, 'load_textdomain' ) );

            //Include the files
            self::$instance->includes();
            //Error Handler
            self::$instance->error_handler = new feedthemfacebook\fts_error_handler();
            //Functions
            self::$instance->functions = new feedthemfacebook\feed_them_social_functions();
            self::$instance->functions->init();
            
            //Facebook Feed
            self::$instance->functions = new feedthemfacebook\FTS_Facebook_Feed();
        }

        return self::$instance;
    }

    /**
     * Setup plugin constants
     *
     * @since 1.0.0
     */
    private function setup_constants() {
        // Makes sure the plugin is defined before trying to use it
        if (!function_exists('is_plugin_active'))
            require_once(ABSPATH . '/wp-admin/includes/plugin.php');

        $plugin_data = get_plugin_data(__FILE__);
        $plugin_version = $plugin_data['Version'];
        // Plugin version
        if (!defined('FEED_THEM_FACEBOOK_VERSION')) {
            define('FEED_THEM_FACEBOOK_VERSION', $plugin_version);
        }
        // Plugin Folder Path
        if (!defined('FEED_THEM_FACEBOOK_PLUGIN_PATH')) {
            define('FEED_THEM_FACEBOOK_PLUGIN_PATH', plugins_url());
        }
        // Plugin Directoy Path
        if (!defined('FEED_THEM_FACEBOOK_PLUGIN_FOLDER_DIR')) {
            define('FEED_THEM_FACEBOOK_PLUGIN_FOLDER_DIR', plugin_dir_path(__FILE__));
        }
    }

    /**
     * Incude Everything we need
     *
     * @since 1.0.0
     */
    private function includes() {
        //Error Handler
        include(FEED_THEM_FACEBOOK_PLUGIN_FOLDER_DIR . 'includes/error-handler.php');

        include(FEED_THEM_FACEBOOK_PLUGIN_FOLDER_DIR . 'admin/feed-them-system-info.php');
        include(FEED_THEM_FACEBOOK_PLUGIN_FOLDER_DIR . 'admin/feed-them-settings-page.php');
        include(FEED_THEM_FACEBOOK_PLUGIN_FOLDER_DIR . 'admin/feed-them-facebook-style-options-page.php');
        // Include core files and classes
        include(FEED_THEM_FACEBOOK_PLUGIN_FOLDER_DIR . 'includes/feed-them-functions.php');

        // Include feeds
        include(FEED_THEM_FACEBOOK_PLUGIN_FOLDER_DIR . 'feeds/facebook/facebook-feed.php');
        include(FEED_THEM_FACEBOOK_PLUGIN_FOLDER_DIR . 'feeds/facebook/facebook-feed-post-types.php');

    }

    /**
     * FTS Versions Needed
     *
     * Define minimum premium version allowed to be active with Free Version.
     *
     * @return array
     * @since 1.0.0
     */
    function ftf_versions_needed() {
        $fts_versions_needed = array(
            'feed-them-premium/feed-them-premium.php' => '1.5.3',
            'feed-them-social-facebook-reviews/feed-them-social-facebook-reviews.php' => '1.0.0',
        );
        return $fts_versions_needed;
    }


    /**
     * FTS Action Init
     *
     * @since 1.0.0
     */
    function ftf_action_init() {
        // Localization
        load_plugin_textdomain('feed-them-facebook', false, basename(dirname(__FILE__)) . '/languages');
    }
    /**
     * FTS Required php Check
     *
     * @since 1.0.0
     */
    function ftf_plugin_check() {
        echo '<div class="error"><p>' . __('Warning: <strong>Feed Them Social</strong> has been deactivated because Feed Them Facebook is active and Feed Them Social already includes this functionality', 'feed-them-premium') . '</p></div>';
    }
    /**
     * FTS Required php Check
     *
     * @since 1.0.0
     */
    function ftf_required_php_check1() {
        echo '<div class="error"><p>' . __('<strong>Warning:</strong> Your php version is ' . phpversion() . '. You need to be running at least 5.3 or greater to use this plugin. Please upgrade the php by contacting your host provider. Some host providers will allow you to change this yourself in the hosting control panel too.<br/><br/>If you are hosting with BlueHost or Godaddy and the php version above is saying you are running 5.2.17 but you are really running something higher please <a href="https://wordpress.org/support/topic/php-version-difference-after-changing-it-at-bluehost-php-config?replies=4" target="_blank">click here for the fix</a>. If you cannot get it to work using the method described in the link please contact your host provider and explain the problem so they can fix it.', 'my-theme') . '</p></div>';
    }
    /**
     * FTS Plugin Actions
     *
     * @param $actions
     * @param $plugin_file
     * @param $plugin_data
     * @param $context
     * @return mixed
     * @since 1.0.0
     */
    function ftf_free_plugin_actions($actions, $plugin_file, $plugin_data, $context) {
        array_unshift(
            $actions, "<a href=\"" . __('https://wordpress.org/support/plugin/feed-them-facebook') . "\">" . __("Support") . "</a> | <a href=\"" . menu_page_url('feed-them-settings-page', false) . "\">" . __("Settings") . "</a>"

        );
        return $actions;
    }
    /**
     * FTS Add Leave Feedback Link
     *
     * @param $links
     * @param $file
     * @return mixed
     * @since 1.0.0
     */
    function ftf_free_add_leave_feedback_link($links, $file) {
        if ($file === plugin_basename(__FILE__)) {
            $links['feedback'] = '<a href="http://wordpress.org/support/view/plugin-reviews/feed-them-facebook" target="_blank">' . __('Rate Plugin', 'feed-them-premium') . '</a>';
            // $links['support'] = '<a href="http://www.slickremix.com/support-forum/forum/feed-them-social-2/" target="_blank">' . __('Get support', 'feed-them-premium') . '</a>';
            //  $links['plugininfo']  = '<a href="plugin-install.php?tab=plugin-information&plugin=feed-them-premium&section=changelog&TB_iframe=true&width=640&height=423" class="thickbox">' . __( 'Plugin info', 'gd_quicksetup' ) . '</a>';
        }
        return $links;
    }

}//END FINAL DAS CLASS
/**
 * Feed Them Facebook Start it up!
 *
 * @return Feed_Them_Facebook
 * @since 1.0.0
 */
function feed_them_facebook() {
    // Makes sure the plugin is defined before trying to use it
    if (!function_exists('is_plugin_active'))
        require_once(ABSPATH . '/wp-admin/includes/plugin.php');
// First check the free version is active
    if (is_plugin_active('feed-them-social/feed-them.php') && is_plugin_active('feed-them-facebook/feed-them-facebook.php')) {
        deactivate_plugins('feed-them-social/feed-them.php');
        add_action('admin_notices', array( new Feed_Them_Facebook ,'ftf_plugin_check'));
        return;
    }
    else{
        return Feed_Them_Facebook::instance();
    }

}

// Get Sidebar Support Running
feed_them_facebook();

?>