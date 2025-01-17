=== Classic Commerce Plugin Checker ===
Plugin URI: https://simplycomputing.com.au/cc-plugin-checker/
Contributors: ozfiddler, smilebeda
Tags: classic commerce, woocommerce, compatibility
Requires: 1.0.0
Tested: 1.3.0
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A Simple plugin to check WC plugin compatibility with Classic Commerce

== Description ==

Classic Commerce was forked from WooCommerce 3.5.3.
Any plugins declaring "WC requires at least" above 3.5.3 may not work with Classic Commerce.
This plugin helps you scan the installed Plugins on your website, to spot them easily.

== Changelog ==

= 1.2.4 =
* Add check for plugins above WC 3.5.3 and make text red for clearer alerts

= 1.2.3 =
* Change function so that WC/CC not required to be activated
* Remove WC/CC activation check and warning message
* Change styling on table

= 1.2.2 =
* Update readme file for CP directory requirements

= 1.2.1 =
* Add extra line for case where neither WC or CC is activated

= 1.2.0 =
* Add proper uninstall hook
* Make sure only non-existing versions are greyed out

= 1.1.1 =
* Fix issue when disabling/deleting/activating manually renamed plugin

= 1.1.0 =
* Add WC to required plugins

= 1.0.1 =
* Add cap check for plugin links

= 1.0 =
* WPCS compliance
* Security
* Capabilities
* Localization
* OOP

= 0.0.1 =
* Initial Commit
