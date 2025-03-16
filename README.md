WordPress Contributors Plugin
Contributors: Mukesh Kumar
Requires WordPress Version: 5.0+
Tested up to: Latest Version
Requires PHP Version: 7.2+
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

📌 Description
The WordPress Contributors Plugin allows multiple authors to be assigned to a single post. It introduces a Contributors Metabox in the post editor, enabling users to select multiple contributors. The selected authors are then displayed at the bottom of the post, including their Gravatars and links to their author profiles.

This plugin is ideal for multi-author blogs, editorial teams, and collaborative projects where multiple writers contribute to the same post.

✨ Features
✅ Contributors Metabox – Easily assign multiple authors to a post.
✅ Multi-Author Selection – Select multiple contributors using checkboxes.
✅ Metadata Storage – Saves selected authors in post metadata for easy retrieval.
✅ Automatic Display – Contributors are displayed at the bottom of the post.
✅ Gravatar Support – Shows author profile pictures using WordPress Gravatars.
✅ Clickable Author Links – Each contributor’s name links to their author page.
✅ Seamless Integration – Works with existing WordPress user roles and profiles.

📥 Installation
Automatic Installation (Recommended)
Go to WordPress Dashboard → Plugins → Add New.
Search for "WordPress Contributors Plugin".
Click Install Now and then Activate the plugin.
Manual Installation
Download the plugin from GitHub or WordPress.org.
Upload the plugin folder to /wp-content/plugins/.
Go to WordPress Dashboard → Plugins and activate the plugin.

🛠️ Usage Instructions
Edit any post in WordPress.
Locate the Contributors Metabox in the post editor.
Select one or more authors from the available users.
Click Save/Update the post.
The selected contributors will be displayed at the bottom of the post automatically.

⚙️ Development & Technical Details
Languages Used: PHP, HTML, CSS, JavaScript
WordPress Compatibility: 5.0+
Requires PHP Version: 7.2 or later
Custom Hooks & Filters:
wp_contributors_metabox – For modifying the contributors' selection UI.
wp_contributors_display – For customizing how contributors appear on the frontend.
Database Usage: Stores contributor data in post meta (_wp_contributors).

📌 Customization & Hooks
Modify Contributor Display
You can customize how contributors are displayed in your theme by modifying the wp_contributors_display filter:

php
Copy
Edit
function my_custom_contributors_display( $contributors_html ) {
    return '<div class="custom-contributors">' . $contributors_html . '</div>';
}
add_filter( 'wp_contributors_display', 'my_custom_contributors_display' );
Disable Auto Display
If you want to remove the default contributors section from the post, you can add this to your functions.php:

php
Copy
Edit
remove_filter( 'the_content', 'wp_contributors_display' );

📝 Contributing
We welcome contributions from the community! You can:

Report issues or suggest new features via GitHub Issues.
Submit pull requests with enhancements or bug fixes.
Provide translations to make the plugin available in multiple languages.
If you want to contribute, please follow the WordPress Coding Standards and submit well-documented code.

📩 Support & Contact
For any questions or support requests, you can:

📧 Email: mukesh@webvantages.com
🌐 Website: https://github.com/mukeshoad
💼 LinkedIn: https://www.linkedin.com/in/mukeshoad

📌 License:
This plugin is open-source and licensed under GPLv2 or later. You are free to modify and distribute it as per the GPL license terms.

📜 Full License Details: https://www.gnu.org/licenses/gpl-2.0.html

📌 Notes
This plugin does not modify existing author roles or permissions.
Ensure that selected contributors have author or higher roles to be assigned correctly.
For custom styling, modify the .contributors-list CSS class in your theme.
