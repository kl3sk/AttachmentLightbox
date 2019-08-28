<?php

/**
 * extends MantisPlugin
 * Provide a lightbox like to bugnotes images
 */

class AttachmentLightboxPlugin extends MantisPlugin
{
    # Declare your plugin here
    # Properties will be used by Mantis plugin's system
    public function register()
    {
        $this->name = 'AttachementLightbox';
        $this->description = 'Create lightbox to attached images';
        $this->page = '';

        $this->version = '0.0.1';
        $this->requires = array(
            "MantisCore" => "2.0.0",
        );

        $this->author = 'Kl3sk';
        $this->contact = 'klesk44@gmail.com';
        $this->url = '';
    }

    function hooks()
    {
        # retrieve existing hooks.
        $hooks = parent::hooks();

        # add in our plugin's hooks.
        $hooks['EVENT_LAYOUT_RESOURCES'] = 'lightbox_css';
        $hooks['EVENT_LAYOUT_PAGE_FOOTER'] = 'lightbox_scripts';

        return $hooks;
    }

    # This method will echo '<script>' before closing '<body>'
    public function lightbox_scripts()
    {
        # Implement the javascript files
        echo '<script type="text/javascript" src="' . plugin_file('js/lightgallery.js') . '"></script>';
        echo '<script type="text/javascript" src="' . plugin_file('js/lg-fullscreen.js') . '"></script>';
        echo '<script type="text/javascript" src="' . plugin_file('js/lg-zoom.js') . '"></script>';
        echo '<script type="text/javascript" src="' . plugin_file('js/lightbox.js') . '"></script>';
    }

    # This method will echo '<link>' in '<header>'
    public function lightbox_css()
    {
        # Implement the stylesheet file
        echo '<link rel="stylesheet" type="text/css" href="' . plugin_file('css/lightgallery.css') . '"/>';
    }
}
