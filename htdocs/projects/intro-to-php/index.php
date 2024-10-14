<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Intro to PHP</title>

     
    <!-- Bootstrap CSS for Modern Layout -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

     <style>
          * {
               scroll-behavior: smooth;
          }
          /* Basic styling for the body */
          body {
               font-family: Arial, sans-serif;
               background-color: #f4f4f4;
               color: #333;
               margin: 0;
               padding: 0;
          }

     
          .nav li.nav-item {
               margin-top: 6px;
               margin-left: 6px;
          }

          /* Centering content with padding */
          .container {
               max-width: 90%;
               margin:30px auto;
               background-color: #fff;
               padding: 20px;
               box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
               border-radius: 5px;
          }

          /* Styling for the main heading */
          h1, h2 {
               text-align: center;
               margin-bottom: 20px;
          }

          /* Styling for hr (divider lines) */
          hr {
               border: 1px solid #ccc;
               margin: 40px 0;
          }
          
     </style>
</head>
<body>

<ul class="nav nav-tabs bg-light border-bottom border-black">
     <li class="nav-item">
          <a href="/dashboard/project.html" class="nav-link active" aria-current="page">Project Home</a>
     </li>
     <li class="nav-item">
          <a href="/projects/intro-to-php" class="nav-link disabled" aria-current="page">Previous Page</a>
     </li>
     <!-- Dropdown list -->
     <li class=" nav-item dropdown">
          <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" aria-expanded="false" role="button" href="#">
               Navigate To
          </a>
          <ul class="dropdown-menu" id="navbar">
          <li><a class="dropdown-item disabled" href="/projects/intro-to-php">Intro Home</a></li>
               <li><a class="dropdown-item" href="/projects/intro-to-php/data_type.php">Variable and Data types</a></li>
          </ul>
     </li>
     <li class="nav-item">
          <a href="/projects/intro-to-php/data_type.php" class="nav-link active" aria-current="page">Next Page</a>
     </li>
</ul>

<!-- Main content sections -->

<div class="container" id="project">
     <h1>Introduction to PHP: The Power Behind Dynamic Web Pages</h1>
     <div class="paragraph-container">
          <p>Welcome, aspiring coder! PHP (Hypertext Preprocessor) is one of the most widely-used scripting languages for web development, enabling developers to create dynamic, interactive, and feature-rich websites with ease. Whether you're looking to manage forms, interact with databases, or build complex content management systems, PHP is a versatile tool that can bring your ideas to life. </p>
          <p>In this introductory guide, you'll learn the fundamental concepts of PHP, including variables, functions, control structures, and how to seamlessly integrate PHP with HTML to enhance your web applications. Let's dive into the world of server-side scripting and unlock the true potential of your coding skills!</p>
     </div>
</div>


</body>
</html>
