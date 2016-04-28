# itt-starter-plugins
Each file in this repo contains recommendation settings for the TGM Plugin Activation code

http://tgmpluginactivation.com/

You will need one file out of the TGM folder from the site above or from https://github.com/TGMPA/TGM-Plugin-Activation.

You are looking for the file *class-tgm-plugin-activation.php*

In your theme or plugin or code location you need to first require this file

`require_once dirname(__FILE__) . '/class-tgm-plugin-activation.php';`

Then grab one of the *function* files listed in this repo and hook it into a specific action hook (that is defined in the above Class we just required.

`add_action( 'tgmpa_register', 'itt_custom_suggested_plugin_suite' );`

For more information, this was demonstrated during the 15th WordPress Developer Course at https://training.ithemes.com
