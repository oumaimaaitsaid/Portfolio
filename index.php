<?php
$title = "John Doe - PHP Expert";
$active_page = "home";
include 'includes/header.php';
?>

<main>
    <section id="hero" class="hero">
        <div class="container">
            <h1>Oumaima Ait Said</h1>
            <h2>PHP Expert & Web Developer</h2>
            <p>Crafting robust and scalable web applications with over 1 years of experience</p>
            <a href="#contact" class="cta-button">Get in Touch</a>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <h2>About Me</h2>
            <p>I'm a passionate PHP developer with a strong background in creating efficient, secure, and maintainable web applications. With expertise in frameworks like Laravel and Symfony, I bring ideas to life through clean, well-structured code.</p>
        </div>
    </section>

    <section id="skills" class="skills">
        <div class="container">
            <h2>Skills</h2>
            <ul>
                <li>PHP (OOP, MVC, Design Patterns)</li>
                <li>Laravel & Symfony Frameworks</li>
                <li>MySQL & PostgreSQL</li>
                <li>RESTful API Development</li>
                <li>Unit Testing (PHPUnit)</li>
                <li>Version Control (Git)</li>
                <li>HTML5, CSS3, JavaScript</li>
                <li>Docker & DevOps</li>
            </ul>
        </div>
    </section>

    <section id="projects" class="projects">
        <div class="container">
            <h2>Featured Projects</h2>
            <div class="project-grid">
                <?php include 'includes/projects.php'; ?>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2>Get in Touch</h2>
            <?php include 'includes/contact-form.php'; ?>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>