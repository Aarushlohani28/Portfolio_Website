<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'My Portfolio'; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <nav class="navbar">
        <div class="logo">Portfolio.</div>
        <ul class="nav-links">
            <li><a href="index.php" class="<?php echo ($currentPage == 'home') ? 'active' : ''; ?>">Home</a></li>
            <li><a href="about.php" class="<?php echo ($currentPage == 'about') ? 'active' : ''; ?>">About</a></li>
            <li><a href="projects.php" class="<?php echo ($currentPage == 'projects') ? 'active' : ''; ?>">Projects</a></li>
            <li><a href="contact.php" class="<?php echo ($currentPage == 'contact') ? 'active' : ''; ?>">Contact</a></li>
            <button id="theme-toggle"><i class="fas fa-moon"></i></button>
        </ul>
        <div class="hamburger">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
