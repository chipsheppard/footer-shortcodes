=== Footer Shortcodes ===
Contributors: Chip Sheppard
Tags: copyright, date, year, shortcode, plugin
Requires at least: 3.0
Tested up to: 4.8.8
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Enables shortcodes in text widgets. Provides Shortcodes to display the Copyright symbol, the Current Year and a site link.

== Description ==

Footer Shortcodes will work in content and text widgets only.
Footer Shortcodes will NOT work in Titles, WP Custom Fields, Site Title, Site Description, Widget Titles, Menus, Headers and the HTML `<title>` element that appears in the Title Bar of most browsers.

To display the current year use the `[fs-y]` shortcode.

To display the Copyright symbol (&copy;) use the `[fs-c]` shortcode.

To display the site name as a link to the homepage use the `[fs-s]` shortcode.

To display all three use the `[fs-cys]` shortcode .

For example:

`[fs-c] [fs-y] [fs-s]`
Assuming it is currently the year 2018, that would display as:

&copy; 2018 <a href="/">Site Title</a>

Because we are using the PHP date() function, the year will always be up to date.

== Installation ==

1. Use **Add Plugin** within the WordPress Admin panel to download and install this *Footer Shortcodes* plugin from the WordPress.org plugin repository (preferred method).
1. Activate the *Footer Shortcodes* plugin through the **Installed Plugins** Admin panel in WordPress.
1. Insert the `[fs-c]`, `[fs-y]`, `[fs-s]` and/or `[fs-cys]` shortcodes as many times as you wish in one or more WordPress Pages, Posts or text widgets.

== Changelog ==

= 1.0 =
* Initial commit
