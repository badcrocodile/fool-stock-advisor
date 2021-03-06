<?php

namespace FoolShortcodes;


class AddAction
{
    /**
     * Enqueue scripts & styles
     *
     * @return bool
     */
    public function enqueueScripts()
    {
        // *_version updates version # whenever file is updated to help with caching issues
        $js_version  = date("ymd-Gis", filemtime(plugin_dir_path(dirname(__FILE__)) . 'Resources/js/scripts.js'));
        $css_version = date("ymd-Gis", filemtime(plugin_dir_path(dirname(__FILE__)) . 'Resources/css/styles.css'));

        wp_enqueue_script('scripts', plugin_dir_url(dirname(__FILE__)) . 'Resources/js/scripts.js', array('jquery'), $js_version);
        wp_enqueue_style('styles', plugin_dir_url(dirname(__FILE__)) . 'Resources/css/styles.css', false, $css_version);

        wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/206ac00799.js');

        return true;
    }

}