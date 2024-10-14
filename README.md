# 📝 Notes Branch: In-File Documentation and Examples

This branch focuses on embedding **in-code documentation** and **examples** within the `data_types.php` file of the `intro-to-php` project. This approach allows learning notes and explanations to be integrated directly into the PHP files, providing a streamlined experience for understanding key PHP concepts.

## 📂 Folder Structure

```
htdocs
├── dashboard
│   ├── [Customized XAMPP Dashboard Files]
│   └─── index.html        # 🖥️ Custom dashboard for quick access to projects
├── projects
│   ├── intro-to-php      # 📁 Main Notes: Intro to PHP
│   │   ├── data_types.php    # ✍️ PHP file with in-code notes on data types
│   │   └─── index.php        # 🏠 Home page of my notes
types and superglobals
│   └── project2          # 📁 Another PHP project
└── index.php             # 🌐 Optional root-level index file
```

### 🔑 Key Components:
- **dashboard/index.html**: 🖥️ The custom dashboard providing navigation to projects and resources.
- **projects/**: 📁 A directory for all development projects, organized for easy access.
  - **intro-to-php/**: 📁 Contains the files for different topics with **integrated examples and notes**.
    - **data_types.php**: ✍️ A single PHP file that includes both **PHP data types** and **superglobals** with inline documentation and code examples. It consolidates notes into one place for easier reference.
- **index.php**: 🌐 An optional root-level file for potential routing or central access to projects.


---

### 🛠️ How to View My Notes on XAMPP

To access and view the embedded notes through your XAMPP setup, follow these steps:

1. **Move Files to XAMPP**:
   - Copy the entire contents of the `htdocs` folder from this branch into your local XAMPP installation directory (`xampp/htdocs`).

2. **Start Apache Server**:
   - Open the **XAMPP Control Panel** and start the **Apache server** by clicking the "Start" button.

3. **Access the Notes in Your Browser**:
   - Once the Apache server is running, open a browser and type `http://localhost/projects/intro-to-php/` in the address bar. This will load the **index.php** file, which serves as the home page for your notes.
   - You can navigate to `data_types.php` directly by going to `http://localhost/projects/intro-to-php/data_types.php`, where you'll find the **in-code documentation** on PHP data types and superglobals.
