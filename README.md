# Random Security Key Generator

Generate secure, random alphanumeric keys using a WordPress shortcode. Ideal for API tokens, WP config keys, or secure passwords.

![Plugin Version](https://img.shields.io/badge/version-1.0.0-blue.svg)
![License](https://img.shields.io/badge/license-GPLv2%2B-blue.svg)

## 🔐 Features

- `[random_security_key]` shortcode to generate a random key
- Set custom length using `[random_security_key length=48]`
- Uses `random_int()` for cryptographic-level randomness
- No database writes – generated on the fly
- Lightweight and fast

## 🛠 Usage

Place this shortcode anywhere:

```wordpress
[random_security_key]

Or set a custom length:

[random_security_key length=64]

📦 Installation
	1.	Upload the plugin to your /wp-content/plugins/ directory.
	2.	Activate it via the Plugins menu in WordPress.
	3.	Insert the shortcode where you want a key to appear.

💬 FAQ

Q: Are these keys secure?
A: Yes — they’re generated using PHP’s random_int(), suitable for secure tokens.

Q: What characters are used?
A: A–Z, a–z, 0–9 (alphanumeric only).

Q: Is anything stored in the database?
A: Nope — it’s stateless and secure.

📄 License

GPLv2 or later
See LICENSE

🧠 About

Created by OctaHexa
GitHub: WPSpeedExpert/random-security-key-generator

---

Let me know if you'd like:
- GitHub Actions for automatic tag release
- Composer or Git Submodule support
- A zip-ready version of the plugin with both `readme.txt` and `readme.md` bundled

Want me to prep the folder structure for you too?
