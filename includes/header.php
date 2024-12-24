<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="index.php" <?php echo $active_page == 'home' ? 'class="active"' : ''; ?>>Home</a></li>
                    <li><a href="#about" <?php echo $active_page == 'about' ? 'class="active"' : ''; ?>>About</a></li>
                    <li><a href="#skills" <?php echo $active_page == 'skills' ? 'class="active"' : ''; ?>>Skills</a></li>
                    <li><a href="#projects" <?php echo $active_page == 'projects' ? 'class="active"' : ''; ?>>Projects</a></li>
                    <li><a href="#contact" <?php echo $active_page == 'contact' ? 'class="active"' : ''; ?>>Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
   