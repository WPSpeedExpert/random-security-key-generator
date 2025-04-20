# Random Security Key Generator

![Plugin Version](https://img.shields.io/badge/version-1.0.2-blue.svg)  
[![License: GPLv3+](https://img.shields.io/badge/license-GPLv3%2B-blue.svg)](https://www.gnu.org/licenses/gpl-3.0.html)

Easily generate secure, random alphanumeric keys using a simple shortcode. Great for API tokens, passwords, WP config keys, and more.

## 🔹 Features

- Cryptographically secure keys using PHP `random_int()`
- Shortcode: `[random_security_key]`
- Customizable key length: `[random_security_key length=48]`
- Light/dark code block styling  
- Built‑in Copy button  
- No database writes; lightweight and stateless

## 🚀 Installation

1. Upload the `random-security-key-generator` folder to `/wp-content/plugins/`.  
2. Activate the plugin via the **Plugins** screen.  
3. Insert the shortcode anywhere:
   ```
   [random_security_key]
   ```
4. Specify a custom length:
   ```
   [random_security_key length=64]
   ```

## ❓ Frequently Asked Questions

**What characters are used?**

Only uppercase letters, lowercase letters, and digits (A–Z, a–z, 0–9).

**How secure are the keys?**

Generated with PHP's random_int(), providing cryptographic randomness.

**Are generated keys stored?**

No—keys are generated on‑the‑fly and never stored.

## 📸 Screenshots

1. Example of the [random_security_key] shortcode output with Copy button.

## 📝 Changelog

**1.0.2**

* Reorganized asset folders; added file headers
* Updated license to GPLv3+
* Documentation tweaks

**1.0.1**

* Added light/dark theme CSS
* Implemented Copy button
* Included uninstall.php

**1.0.0**

* Initial release

## ⬆️ Upgrade Notice

**1.0.2**

Small improvements; no functional changes.

**1.0.0**

Initial release.

## ⚖️ License

This project is licensed under the GPLv3+.

## 🧠 About

Created by **OctaHexa**
GitHub: https://github.com/WPSpeedExpert/random-security-key-generator
