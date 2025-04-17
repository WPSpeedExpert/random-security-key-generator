=== Random Security Key Generator ===
Contributors:        octahexa
Tags:                shortcode, security, key, generator, random, api key, password, token
Requires at least:   5.6
Tested up to:        6.8
Requires PHP:        7.4
Stable tag:          1.0.0
License:             GPLv2 or later
License URI:         https://www.gnu.org/licenses/gpl-2.0.html

Easily generate secure, random alphanumeric keys using a simple shortcode. Great for tokens, passwords, or config keys.

== Description ==

Need to generate secure keys or tokens? This lightweight plugin provides a shortcode to generate random alphanumeric security keys of any length.

Perfect for:

- API key generation
- Password creation
- WP config keys
- Anywhere a unique token is needed

**Usage:**
Just place the shortcode `[random_security_key]` anywhere on your site. Optionally, define the key length.

**Example:**

`[random_security_key length=48]`

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/random-security-key-generator` directory, or install via the WordPress plugins screen.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Use the `[random_security_key]` shortcode in posts, pages, or widgets.

== Frequently Asked Questions ==

= What characters are used? =
Only uppercase, lowercase letters and numbers (A–Z, a–z, 0–9).

= How secure are the keys? =
Keys are generated using PHP's `random_int()` for cryptographic randomness.

= Can I generate keys longer than 32 characters? =
Yes. Use `[random_security_key length=64]` or any positive integer >= 8.

= Does this plugin store generated keys? =
No, keys are generated on-the-fly and not stored in the database.

== Screenshots ==

1. Example output of the `[random_security_key]` shortcode on a page.

== Changelog ==

= 1.0.0 =
* Initial release – shortcode to generate random security keys.

== Upgrade Notice ==

= 1.0.0 =
Initial version.

== License ==

This plugin is licensed under the GPLv2 or later.
