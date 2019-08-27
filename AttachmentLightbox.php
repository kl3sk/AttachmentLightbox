<?php

/** Plugin declaration
 * extends MantisPlugin
 * Example plugin that implements Jquery files
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
        $hooks['EVENT_CORE_HEADERS'] = 'csp_headers';

        return $hooks;
    }

    # This method will echo our '<script>'
    public function lightbox_scripts()
    {
        # Implement the Jquery files
        echo '<script type="text/javascript" src="' . plugin_file('js/lightgallery.js') . '"></script>';
        echo '<script type="text/javascript" src="' . plugin_file('js/lg-fullscreen.js') . '"></script>';
        echo '<script type="text/javascript" src="' . plugin_file('js/lg-zoom.js') . '"></script>';
        echo '<script type="text/javascript" src="' . plugin_file('js/lightbox.js') . '"></script>';
    }

    # This method will echo our '<script>' link to Jquery
    public function lightbox_css()
    {
        # Implement the Jquery files
        echo '<link rel="stylesheet" type="text/css" href="' . plugin_file('css/lightgallery.css') . '"/>';
    }
}
