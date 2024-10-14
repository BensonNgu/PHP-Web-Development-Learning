# 🛠️ Setting Up XAMPP for a PHP Project

### 1️⃣ Download XAMPP
Head to the official XAMPP website and download the appropriate version for your system: [**Download XAMPP**](https://www.apachefriends.org/).

### 2️⃣ Open the XAMPP Control Panel
After installing XAMPP, follow these steps to open the Control Panel:
   1. Navigate to your XAMPP installation folder, usually located at `C:/xampp`.
   2. Double-click the file **`xampp-control.exe`** to launch the Control Panel.

🔧 About the XAMPP Control Panel:
The XAMPP Control Panel serves as the main dashboard for managing your server environment. From here, you can:
   - **Start/Stop Services**: Easily toggle services like Apache (for hosting) and MySQL (for database management) using the Start/Stop buttons.
   - **Access Configurations**: Configure each service, view logs, or adjust settings to optimize performance.
   - **Explore Folders**: Quickly open critical directories, such as `htdocs`, using the "Explorer" button for easy project file management.

### 3️⃣ Access the `htdocs` Folder
The `htdocs` folder is where you should place your PHP files. To access it:
   - In the XAMPP Control Panel, find the 📂 **Explorer** button (located on the right side).
   - Click it, then select the `htdocs` folder.

### 4️⃣ Managing the `htdocs` Folder
The `htdocs` folder acts as the root directory for all your web projects:

- You can delete the existing files or folders within `htdocs` as they are not needed for your project.
- To host multiple websites, simply create separate folders inside `htdocs` for each website. Each folder will store the source code for a different project.
   - For example, create folders like `project1`, `project2`, and so on. Each folder will serve as a unique website when accessed through the browser (`localhost/project1`, `localhost/project2`).
