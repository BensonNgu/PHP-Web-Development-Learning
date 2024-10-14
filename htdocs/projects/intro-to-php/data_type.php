<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Data Types</title>

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
               margin: 30px auto;
               background-color: #fff;
               padding: 20px;
               box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
               border-radius: 5px;
          }
     </style>
</head>
<body>
     
<ul class="nav nav-tabs bg-light border-bottom border-black">
     <li class="nav-item">
          <a href="/dashboard/project.html" class="nav-link active" aria-current="page">Project Home</a>
     </li>
     <li class="nav-item">
          <a href="/projects/intro-to-php" class="nav-link active" aria-current="page">Previous Page</a>
     </li>
     <!-- Dropdown list -->
     <li class=" nav-item dropdown">
          <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" aria-expanded="false" role="button" href="#">
               Navigate To
          </a>
          <ul class="dropdown-menu" id="navbar">
               <li><a class="dropdown-item" href="/projects/intro-to-php">Intro Home</a></li>
               <li><a class="dropdown-item disabled" href="/projects/intro-to-php/data_type.php">Variable and Data types</a></li>
          </ul>
     </li>
     <li class="nav-item">
          <a href="#" class="nav-link active" aria-current="page">Next Page</a>
     </li>
</ul>
<div class="container">
<h1>Variable</h1>
     <?php
          $name = "John";
          $fullName = "John Smith";
          echo "My name is ", $name, ". Btw my full name is ", $fullName;
     ?>

     <hr>
     <h2>Different data types</h2>
     <div class="accordion" id="data-types">
          <div class="accordion-item">
               <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item-1" aria-expanded="false" aria-controls="item-1">
                         <strong>
                              Scalar types
                         </strong>
                    </button>
               </h2>
               <div class="accordion-collapse collapse" id="item-1" data-bs-parent="#data-types">
                    <div class="accordion-body">
                         <p>The variable contains one value to it.</p>
                         <p>Example:</p>
                         <pre class="border rounded"><code >

     &lt?php
          $string = "Daniel";
          $int = 12345;
          $float = 123.45;
          $bool = true;
     ?>
                         </code></pre>
                         <p>Default values:</p>
                         <pre class="border rounded"><code >

     &lt?php
          $string = "";
          $int = 0;
          $float = 0;
          $bool = false;
     ?>
                         </code></pre>
                    </div>
               </div>
          </div>
          <div class="accordion-item">
               <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item-2" aria-expanded="false" aria-controls="item-2">
                    <strong>
                         Array type
                    </strong>     
                    </button>
               </h2>
               <div class="accordion-collapse collapse" id="item-2" data-bs-parent="#data-types">
                    <div class="accordion-body">
                         <p>The variable contains one or more data inside</p>
                         <p>Example:</p>
                         <pre class="border rounded"><code >

     &lt?php
          $names = array("Daniel", "John");
          // require PHP 5.4 or higher to work
          $names = ["Daniel", "John"];
     ?>
                         </code></pre>
                         <p>Default values:</p>
                         <pre class="border rounded"><code >

     &lt?php
          $names = [];
     ?>
                         </code></pre>
                    </div>
               </div>
          </div>
          <div class="accordion-item">
               <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item-3" aria-expanded="false" aria-controls="item-3">
                         <strong>
                              Object type
                         </strong>
                    </button>
               </h2>
               <div class="accordion-collapse collapse" id="item-3" data-bs-parent="#data-types">
                    <div class="accordion-body">
                         <p>The variable created based on classes</p>
                         <p>Example:</p>
                         <pre class="border rounded"><code >

     &lt?php
          class Car {
               public $color;
               public $model;
               public function __construct($color, $model) {
                    $this->color = $color;
                    $this->model = $model;
               }

               public function message() {
                    return "My car is a " . $this-> color . " " . $this->model . " !"
               }
          }


          $car = new Car("red", "Volvo");
          echo $car->message();
     ?>
                         </code></pre>
                         <p>Default values:</p>
                         <pre class="border rounded"><code >


     &lt?php
          $car = null;
     ?>
                         </code></pre>
                    </div>
               </div>
          </div>
     </div>

     <hr>
     <h2>PHP Superglobals</h2>
     <p>Superglobal variables in PHP are built-in variables that are always available in all scopes. Below is a list of commonly used superglobals, grouped by category.</p>
     <div class="accordion" id="superglobal-types">
          <div class="accordion-item">
               <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#server" aria-expanded="false" aria-controls="server">
                         <strong>$_SERVER</strong>
                    </button>
               </h2>
               <div class="accordion-collapse collapse" id="server" data-bs-parent="#superglobal-types">
                    <div class="accordion-body">
                         <p>The <strong>$_SERVER</strong> superglobal is an array that contains information about headers, paths, and script locations. It is created by the web server and made available to PHP scripts.</p>
                         <p>Here are some of the common <strong>$_SERVER</strong> keys:</p>
                         <ul>
                              <li><strong>$_SERVER["DOCUMENT_ROOT"]</strong> - The document root directory under which the current script is executing.</li>
                              <li><strong>$_SERVER["PHP_SELF"]</strong> - The filename of the currently executing script, relative to the document root.</li>
                              <li><strong>$_SERVER["SERVER_NAME"]</strong> - The name of the server host under which the script is executing.</li>
                              <li><strong>$_SERVER["REQUEST_METHOD"]</strong> - The request method used to access the page (e.g., 'GET', 'POST').</li>
                              <li><strong>$_SERVER["HTTP_USER_AGENT"]</strong> - The user agent string sent by the browser accessing the page.</li>
                              <li><strong>$_SERVER["REMOTE_ADDR"]</strong> - The IP address from which the user is viewing the current page.</li>
                              <li><strong>$_SERVER["SERVER_PROTOCOL"]</strong> - The name and revision of the information protocol via which the page was requested (e.g., 'HTTP/1.1').</li>
                         </ul>
                         <p>Example:</p>
                         <pre class="border rounded"><code >
     &lt?php
          echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "&ltbr>";
          echo "PHP Self: " . $_SERVER['PHP_SELF'] . "&ltbr>";
          echo "Server Name: " . $_SERVER['SERVER_NAME'] . "&ltbr>";
          echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "&ltbr>";
          echo "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "&ltbr>";
          echo "Remote IP Address: " . $_SERVER['REMOTE_ADDR'] . "&ltbr>";
          echo "Protocol: " . $_SERVER['SERVER_PROTOCOL'] . "&ltbr>";
     ?>
                         </code></pre>
                         <p>Functions and Uses:</p>
                         <ul>
                              <li><strong>Accessing request data:</strong> Use $_SERVER["REQUEST_METHOD"] to check if the form was submitted via GET or POST.</li>
                              <li><strong>Server information:</strong> Use $_SERVER["SERVER_NAME"] to get the host server name, which is helpful for building dynamic URLs.</li>
                              <li><strong>User information:</strong> Use $_SERVER["HTTP_USER_AGENT"] to get browser and platform details.</li>
                         </ul>
                    </div>
               </div>
          </div>
          <div class="accordion-item">
               <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#request" aria-expanded="false" aria-controls="request">
                         <strong>$_REQUEST</strong>
                    </button>
               </h2>
               <div class="accordion-collapse collapse" id="request" data-bs-parent="#superglobal-types">
                    <div class="accordion-body">
                         <p>The <strong>$_REQUEST</strong> superglobal is an array that contains the contents of <strong>$_GET</strong>, <strong>$_POST</strong>, and <strong>$_COOKIE</strong> variables. It can be used to retrieve input data from forms submitted using either GET or POST methods or from cookies.</p>
                         <p>Here are some common use cases for <strong>$_REQUEST</strong>:</p>
                         <ul>
                              <li><strong>$_REQUEST["name"]</strong> - Retrieves the value of the input field with the name "name", whether it was submitted via GET or POST.</li>
                              <li><strong>$_REQUEST["email"]</strong> - Retrieves the email input from a form submission.</li>
                              <li><strong>$_REQUEST["search_query"]</strong> - Accesses search queries passed via URL parameters (GET method) or from a form submission.</li>
                         </ul>
                         <p>Example:</p>
                         <pre class="border rounded"><code >
               &lt?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                         // This will retrieve both GET and POST data using $_REQUEST
                         $name = $_REQUEST['name'];
                         $email = $_REQUEST['email'];
                         echo "Name: " . $name . "&ltbr>";
                         echo "Email: " . $email . "&ltbr>";
                    }
               ?>
                         </code></pre>
                         <p>Functions and Uses:</p>
                         <ul>
                              <li><strong>Accessing form data:</strong> Use $_REQUEST to easily access form input without needing to specify GET or POST.</li>
                              <li><strong>Accessing query strings:</strong> Retrieve query strings from URLs or user input using $_REQUEST.</li>
                              <li><strong>Handling cookies:</strong> Access data stored in cookies via $_REQUEST.</li>
                         </ul>
                         <p><strong>Note:</strong> It is generally better to use <strong>$_GET</strong> or <strong>$_POST</strong> specifically when you know the form method to ensure clarity and security in your code.</p>
                    </div>
               </div>
          </div>
          <div class="accordion-item">
               <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#get" aria-expanded="false" aria-controls="get">
                         <strong>$_GET</strong>
                    </button>
               </h2>
               <div class="accordion-collapse collapse" id="get" data-bs-parent="#superglobal-types">
                    <div class="accordion-body">
                         <p>The <strong>$_GET</strong> superglobal is an array that holds data sent to the server via HTTP GET requests. This data is typically passed as part of the URL query string.</p>
                         <p>Here are some common <strong>$_GET</strong> keys and examples:</p>
                         <ul>
                              <li><strong>$_GET["id"]</strong> - Retrieves the 'id' parameter from the URL (e.g., <code>?id=123</code>).</li>
                              <li><strong>$_GET["search"]</strong> - Retrieves the 'search' parameter from a URL used for search queries.</li>
                              <li><strong>$_GET["category"]</strong> - Accesses the 'category' parameter, often used in URLs for filtering or categorizing content.</li>
                         </ul>
                         <p>Example:</p>
                         <pre class="border rounded"><code >
               &lt?php
                    if (isset($_GET['id'])) {
                         // Collecting data sent via the URL query string using $_GET
                         $id = $_GET['id'];
                         echo "ID: " . $id . "&ltbr>";
                    }
               ?>
                         </code></pre>
                         <p>Functions and Uses:</p>
                         <ul>
                              <li><strong>URL parameters:</strong> Use $_GET to access data from query strings in URLs, such as filtering results or displaying specific content based on a URL parameter.</li>
                              <li><strong>Links and redirects:</strong> Easily pass information between pages via URL query parameters using the GET method.</li>
                         </ul>
                         <p><strong>Important Note:</strong> Since data passed via $_GET is visible in the URL, do not use it for sensitive information such as passwords. Always validate and sanitize any data received through $_GET to prevent security vulnerabilities like XSS or SQL injection.</p>
                    </div>
               </div>
          </div>

     </div>
</div>

<div class="container">
     <h2>Playground</h2>
     <hr>

     <?php
          if($_SERVER["REQUEST_METHOD"] == "POST") {
               $name = $_REQUEST['name'];
               $email = $_REQUEST['email'];
               echo $_SERVER["REQUEST_METHOD"] . "<br/>";
               echo "Name: " . $name . " > length: " . strlen($name) . "<br/>";
               echo "Email: " . $email . "<br/>";
          }else{
               $name = $_GET['name'];
               $email = $_GET['email'];
               $message = $_GET['message'];
               echo $_SERVER["REQUEST_METHOD"] . "<br/>";
               echo "Name: " . $name . "   (length: " . strlen($name) .  ")<br/>";
               echo "Email: " . $email . " (position of com: ". strpos($email, "com") .")<br/>";
               echo "Message: " . $message . "   (word count: " . str_word_count($message) .  ")<br/>";
          }
     ?>

     <?php
          if (isset($_GET['id'])) {
               // Collecting data sent via the URL query string using $_GET
               $id = $_GET['id'];
               echo "ID: " . $id . "<br>";
          }
     ?>
     </div>
</body>
</html>