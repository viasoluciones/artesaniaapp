<?php
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'listingpro_required_plugins' );

function listingpro_required_plugins() {

	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		
		array(
            'name' => 'JS Composer',
            'slug' => 'js_composer',
            'source' => get_template_directory() . '/include/plugins/js_composer.zip',
            'required' => false,
            'version' => '',
            'force_activation' => false,
            'force_deactivation' => false
        ),
		array(
            'name' => 'Redux Framework',
            'slug' => 'redux-framework',
            'source' => get_template_directory() . '/include/plugins/redux-framework.zip',
            'required' => true,
            'version' => '',
            'force_activation' => false,
            'force_deactivation' => false
        ),
		array(
            'name' => 'Listingpro Plugin',
            'slug' => 'listingpro-plugin',
            'source' => get_template_directory() . '/include/plugins/listingpro-plugin.zip',
            'required' => true,
            'version' => '',
            'force_activation' => false,
            'force_deactivation' => false
        ),
		
		array(
            'name' => 'Listingpro Reviews',
            'slug' => 'listingpro-reviews',
            'source' => get_template_directory() . '/include/plugins/listingpro-reviews.zip',
            'required' => true,
            'version' => '',
            'force_activation' => false,
            'force_deactivation' => false
        ),
		array(
            'name' => 'Listingpro ADs',
            'slug' => 'listingpro-ads',
            'source' => get_template_directory() . '/include/plugins/listingpro-ads.zip',
            'required' => true,
            'version' => '',
            'force_activation' => false,
            'force_deactivation' => false
        ),
		// Facebook Connect
        array(
            'name' => 'Nextend Social Login and Register',
            'slug' => 'nextend-facebook-connect',
            'required' => false,
            'force_activation' => false,
            'force_deactivation' =>false
        ),

        // Twitter Connect
       
	);

	// Change this to your theme text domain, used for internationalising strings
	$theme_text_domain = 'listingpro';

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'domain'       		=> $theme_text_domain,         	// Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
		'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
		'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
		'menu'         		=> 'tgmpa-install-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> false,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
		'strings'      		=> array(
			'page_title'                       			=> __( 'Install Required Plugins', 'listingpro' ),
			'menu_title'                       			=> __( 'Install Plugins', 'listingpro' ),
			'installing'                       			=> __( 'Installing Plugin: %s', 'listingpro' ), // %1$s = plugin name
			'oops'                             			=> __( 'Something went wrong with the plugin API.', 'listingpro' ),
			'notice_can_install_required'     			=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'listingpro' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'			=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'listingpro' ), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'listingpro' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' , 'listingpro'), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'listingpro' ), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' , 'listingpro'), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'listingpro' ), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'listingpro' ), // %1$s = plugin name(s)
			'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'listingpro' ),
			'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'listingpro' ),
			'return'                           			=> __( 'Return to Required Plugins Installer', 'listingpro' ),
			'plugin_activated'                 			=> __( 'Plugin activated successfully.', 'listingpro' ),
			'complete' 									=> __( 'All plugins installed and activated successfully. %s', 'listingpro' ), // %1$s = dashboard link
			'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
		)
	);

	tgmpa( $plugins, $config );

}