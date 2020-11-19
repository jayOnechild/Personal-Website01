<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width">
    <title>JacksonMwanaumo.com</title>
</head>
<body>
    <div class="site">
    <a href="index.php">JacksonMwanaumo.com</a>
   </div>
    <div class="main-nav">
   <?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?> 
    <nav> 

    <ul>
        <li><a href="index.php" <?php if ($currentPage == 'index.php') {echo 'id="here"';} ?>>Home</a></li>
        <li><a href="about.php" <?php if ($currentPage =="about.php"){echo 'id="here"';}?>>About</a></li>
        <li><a href="partners.php" <?php if ($currentPage =="partners.php"){echo 'id="here"';}?>>Partners</a></li>
        <li><a href="blogs.php" <?php if ($currentPage=="blogs.php"){echo 'id="here"';}?>>Blogs</a></li>
        <li><a href="contact.php" <?php if ($currentPage=="contact.php"){echo 'id="here"';}?>>Contact</a></li>
    </ul>
    </nav>     
        
</div>
