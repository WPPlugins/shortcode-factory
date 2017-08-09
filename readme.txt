=== Plugin Name ===
Contributors: wpmadeasy
Donate link: http://shortcodefactory.com/
Tags: shortcodes, short codes, custom fields, posts, pages, tags, taxonomy, taxonomies, forms, category, categories, attachments, excerpt, meta, permalink, authors, users, roles, featured, utility, ultimate, bootstrap, tables
Requires at least: 3.5
Tested up to: 4.8
Stable tag: 2.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Create short codes for almost everything in the Word Press and use in Pages, Posts or anywhere.

== Description ==

<h4>WHAT's NEW in v2.5</h4>

* Compatibility with WordPress 4.8
* New Feature: Combine different shortcodes in a template and insert Shortcode Template where needed
* New Shortcode: For Shortcode Templates
* New Shortcode: For post comments, displays comments template from current theme, thus keeping the design intact
* Added UI option to enable "Text Widget Support" option under plugin settings
* Added UI option to enable "Bootstrap Support" under plugin settings

Shortcode Factory offers a wide range of ready-to-use short codes for your daily WordPress operations. There are plenty of short codes available at hand. We have tried to bring most common to most wanted features of WordPress, to these short codes.

[youtube https://www.youtube.com/watch?v=_jk2DTM3IVM]

Short codes are available for following purposes:

<h4>Shortcode Templates</h4>
* Combine different shortcodes into one place
* Reuse shortcodes at will
* No need to remember a set of shortcodes for a repeating task
* Easy to manage interface for shortcode templates (Shortcode Factory -> Templates)
* More improvements to come soon...

<h4>Posts and Pages</h4>
* Posts (Get number of posts from a post type, supports categories)
* Post ID, Title, Content, Excerpt, Permalink
* Post Meta (Publish Date, Modified Date, Comments Feed Link)
* Post Author (ID, Display Name, First Name, Last Name, Biography, Jabber, AIM, YIM, Google Plus, Twitter, Login Name, Password, Email, URL, Registration Date/Time, Account Status, Activation Key, Roles, Access Level)
* Post Featured Image (ID, URL, HTML Image / Thumbnail, Medium, Full)
* Post Custom Fields
* Post Categories (Names or Links / with Separator)
* Post Tags (Names or Links / with Separator)
* Post Custom Taxonomies (Names or Links / with Separator)
* Post Attachments (Custom Output / with Separator)
* Next / Previous Post (Custom Link Label, Position and Output Format)
* Post Comments (displays comments template from current theme)

<h4>Users and Roles</h4>
* User Role Based Content Display
* Login Form
* Login/Logout Link
* Register/Site Admin Link

<h4>Forms and Fields</h4>
* General Form Fields
* HTML5 Form Fields

<h4>UI and Utility</h4>
* Tables
* Custom Containers
* Countries List
* US States List


See User's Guide at http://shortcodefactory.com/users-guide/

== Installation ==

Shortcode Factory is easy to install.

1. Download plugin zip file to your computer and extract in a folder
1. Upload `shortcode-factory` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= How do I change the [More] label in 'link' return output of [scf-posts] short code? =

[scf-posts] offers `filter_label_more` filter, which can be used to override the default label for the link. See http://shortcodefactory.com/users-guide/scf-posts/ for details.

= Why [scf-register-link] is not showing a register link, while I am logged out? =

The "Register" link is not offered if the Administration > Settings > General > Membership: 'Anyone can register' box is not checked.

= Why [scf-register-link] is not working with WPMU? =

On WordPressMU, there is no /wp-register.php file, and /wp-login.php?action=register is not a valid registration form. Thus, wp_register function does not show a registration link.

= Does this plugin has a known conflict with Wordpress or other plugins? =

Although, we have tested it in very much detail. But technically, it shouldn’t create a conflict, since it does not try to change anything in the Wordpress System.

= What if I use another short code in [scf-allow]...[/scf-allow]? =

[scf-allow] supports "short code within short code", so your other short codes in an [scf-allow]...[/scf-allow] block are rendered pretty fine.

= How to add short code support in text widget? =

Simply enable "Text Widget Support" option under Dashboard -> Shortcode Factory -> Settings and save changes. On the other hand you can add `add_filter('widget_text', 'do_shortcode');` in your active theme's functions.php file.

== Screenshots ==

1. Plenty of short codes
2. Every short code has different attributes and options
3. Insert anywhere in a Post or Page
4. Works as expected, see it in action on front website
5. Posts and Pages
6. Users and Roles
7. Forms
8. HTML5 Form Elements
9. UI and Utility
10. Quick search to find desired short code
11. Combine several shortcodes in one place and reuse as a Shortcode Template

== Changelog ==

= 2.5 =
* Compatibility with WordPress 4.8
* New Feature: Combine different shortcodes in a template and insert Shortcode Template where needed
* New Shortcode: For Shortcode Templates
* New Shortcode: For post comments, displays comments template from current theme, thus keeping the design intact
* Added UI option to enable "Text Widget Support" option under plugin settings
* Added UI option to enable "Bootstrap Support" under plugin settings

= 2.4 =
* Compatibility with WordPress 4.6.1
* Improved and enhanced UI for short codes, including main screen.
* Updated settings page to use WordPress admin native tabs.
* Removed dependency and usage of jQuery UI.
* Fixed a compatibility issue in ColorBox, when it is used by other plugins.
* Changed URL to WPMadeasy Facebook page.

= 2.3 =
* 28 New shortcodes to create form, fields, HTML5 form fields, countries and US states lists.
* Fixed an issue in the GUI for [scf-container] shortcode.
* Compatibility and performance improvements with respect to WordPress 4.6

= 2.2 =
* New Shortcode [scf-posts] to output posts of defined post type. Also supports categories and different attributes.
* Compatibility and performance improvements with respect to WordPress 4.5.1
* Some GUI fixes.

= 2.1 =
* Compatibility and performance improvements with respect to WordPress 4.5

= 2.0 =
* MAJOR UPDATE: Please consider followings.
* NEW: short codes for Table, Table Row, Table Cell and Custom Container Tags.
* NEW: FAQ added to explain that how you can add short codes support for WordPress Text Widget.
* NEW: Setting to enable/disable desired group of short codes only. Improve performance of plugin by enabling only desired group of short codes.
* UI improvements and some changes to support Grouped View of short codes, in short code insertion dialogue screen.
* Corrected short code filter names for shortcode_atts_{$shortcode_name}. See https://developer.wordpress.org/reference/hooks/shortcode_atts_shortcode/ for more information.
* Several performance improvements.
* Several code improvements regarding code management and organization.
* Overall architecture improvements to support flexible enhancements in future versions.
* Compatibility improvements with respect to 3rd party plugins.

= 1.5 =
* New attributes (output and class) to support HTML Output Tag and apply CSS Classes.
* Added attributes support in plugin UI.
* Some performance improvements.

= 1.4 =
* New short code: [scf-login-form] to display WordPress login form.
* New short code: [scf-login-link] to display a login link, or if a user is logged in, displays a logout link.
* New short code: [scf-register-link] to display either the "Site Admin" link if the user is logged in or "Register" link if the user is not logged in.
* Enhanced UI to accommodate more short codes.

= 1.3 =
* New short code [scf-allow] introduced to control the display of certain content in a post/page, based on User Role
* Performance improvements

= 1.2 =
* Built-in pages for plugin Settings, Help and Support
* Dedicated menu option for plugin, in Word Press Admin left side menu
* Settings Page: Control plugin icon's visibility
* Help Page: Quick reference to available short codes, and link to online User's Guide
* Support Page: Links to plugin support, questions, change log and previous versions
* Some performance improvements

= 1.1.1 =
* add_query_arg() vulnerability fix for potential XSS attack vectors
* Compatibility testing up to Word Press 4.2

= 1.1 =
* Added user guide link in the short code UI, for an easy access to quick reference.

= 1.0 =
* First release, with basic Posts/Pages short codes

== Upgrade Notice ==

= 1.0 =
This is the first release and does not require an upgrade.

= 1.2 =
Upgrade to version 1.2 for some useful stuff built-in to the plugin's option pages. See change log for more details.

= 1.3 =
Upgrade to version 1.3 for new short code: [scf-allow]. See change log for more details.

= 1.4 =
Upgrade to version 1.4 for new short codes: [scf-login-form], [scf-login-link] and [scf-register-link]. See change log for more details.

= 1.5 =
Upgrade to version 1.5 for new supported attributes in short codes. See change log for more details.

= 2.0 =
MAJOR UPGRADE - See change log for more details.

= 2.1 =
Compatibility improvements for upcoming WordPress 4.5

= 2.2 =
Upgrade to 2.2 for new short code about getting posts from categories. See change log for details.

= 2.3 =
28 New shortcodes to create form, fields, HTML5 form fields, countries and US states lists. And compatibility upgrade for WordPress 4.6.

= 2.4 =
New and improved UI, as well as, compatibility fixes for WordPress 4.6.1.

= 2.5 =
Upgrade to 2.5 for compatibility with WordPress 4.8 and later.
