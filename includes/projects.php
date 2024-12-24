<?php
$projects = [
    [
        'title' => 'E-commerce Platform',
        'description' => 'A fully-featured e-commerce platform built with Laravel, featuring product management, user authentication, and payment integration.',
        'technologies' => ['PHP', 'Laravel', 'MySQL', 'JavaScript', 'Stripe API'],
        'github' => 'https://github.com/johndoe/ecommerce-platform',
        'live' => 'https://example-ecommerce.com'
    ],
    [
        'title' => 'Task Management System',
        'description' => 'A Symfony-based task management application with real-time updates, team collaboration features, and detailed reporting.',
        'technologies' => ['PHP', 'Symfony', 'PostgreSQL', 'WebSockets', 'Vue.js'],
        'github' => 'https://github.com/johndoe/task-manager',
        'live' => 'https://example-taskmanager.com'
    ],
    [
        'title' => 'RESTful API for Mobile App',
        'description' => 'Developed a robust RESTful API using Lumen to power a mobile application, including authentication, data validation, and caching.',
        'technologies' => ['PHP', 'Lumen', 'MySQL', 'Redis', 'JWT'],
        'github' => 'https://github.com/johndoe/mobile-api',
        'live' => 'https://api.example-mobile.com'
    ]
];

foreach ($projects as $project): ?>
    <div class="project-card">
        <h3><?php echo htmlspecialchars($project['title']); ?></h3>
        <p><?php echo htmlspecialchars($project['description']); ?></p>
        <h4>Technologies:</h4>
        <ul>
            <?php foreach ($project['technologies'] as $tech): ?>
                <li><?php echo htmlspecialchars($tech); ?></li>
            <?php endforeach; ?>
        </ul>
        <div class="project-links">
            <a href="<?php echo htmlspecialchars($project['github']); ?>" target="_blank" class="button">GitHub</a>
            <a href="<?php echo htmlspecialchars($project['live']); ?>" target="_blank" class="button">Live Demo</a>
        </div>
    </div>
<?php endforeach; ?>