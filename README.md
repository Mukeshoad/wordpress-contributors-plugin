# WordPress Contributors Plugin

**Contributors:** Mukesh Kumar  
**Requires WordPress Version:** 5.0+  
**Tested up to:** Latest Version  
**Requires PHP Version:** 7.2+  

---

## 📌 Description  
The **WordPress Contributors Plugin** allows multiple authors to be assigned to a single post. It introduces a **Contributors Metabox** in the post editor, enabling users to select multiple contributors. The selected authors are then displayed at the bottom of the post, including their **Gravatars** and links to their **author profiles**.  

This plugin is ideal for **multi-author blogs, editorial teams, and collaborative projects** where multiple writers contribute to the same post.  

---

## ✨ Features  
✅ **Contributors Metabox** – Easily assign multiple authors to a post.  
✅ **Multi-Author Selection** – Select multiple contributors using checkboxes.  
✅ **Metadata Storage** – Saves selected authors in post metadata for easy retrieval.  
✅ **Automatic Display** – Contributors are displayed at the bottom of the post.  
✅ **Gravatar Support** – Shows author profile pictures using WordPress Gravatars.  
✅ **Clickable Author Links** – Each contributor’s name links to their author page.  
✅ **Seamless Integration** – Works with existing WordPress user roles and profiles.  

---

## 📥 Installation  

### **Automatic Installation (Recommended)**  
1️⃣ Go to **WordPress Dashboard** → **Plugins** → **Add New**.  
2️⃣ Search for **"WordPress Contributors Plugin"**.  
3️⃣ Click **Install Now** and then **Activate** the plugin.  

### **Manual Installation**  
1️⃣ Download the plugin from **GitHub** or **WordPress.org**.  
2️⃣ Upload the plugin folder to **`/wp-content/plugins/`**.  
3️⃣ Go to **WordPress Dashboard** → **Plugins** and **Activate** the plugin.  

---

## 🛠️ Usage Instructions  
1️⃣ **Edit any post** in WordPress.  
2️⃣ Locate the **Contributors Metabox** in the post editor.  
3️⃣ Select one or more **authors** from the available users.  
4️⃣ Click **Save/Update** the post.  
5️⃣ The selected contributors will be **displayed at the bottom** of the post automatically.  

---

## ⚙️ Development & Technical Details  

- **Languages Used:** PHP, HTML, CSS, JavaScript  
- **WordPress Compatibility:** 5.0+  
- **Requires PHP Version:** 7.2 or later  

### **Custom Hooks & Filters**  
- `wp_contributors_metabox` – For modifying the contributors' selection UI.  
- `wp_contributors_display` – For customizing how contributors appear on the frontend.  
- **Database Usage:** Stores contributor data in post meta (`_wp_contributors`).  

---

## 📌 Customization & Hooks  

### **Modify Contributor Display**  
You can customize how contributors are displayed in your theme by modifying the `wp_contributors_display` filter:  

```php
function my_custom_contributors_display( $contributors_html ) {
    return '<div class="custom-contributors">' . $contributors_html . '</div>';
}
add_filter( 'wp_contributors_display', 'my_custom_contributors_display' );
