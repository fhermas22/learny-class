<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/courses', function () {
    $courses = [
        [
            'id' => '1',
            'title' => 'React Avancé',
            'instructor' => 'Jean Dupont',
            'price' => 49000,
            'rating' => 4.8,
            'students' => 1250,
            'image' => 'images/react-js.jpg',
            'category' => 'Développement',
            'level' => 'Avancé',
        ],
        [
            'id' => '2',
            'title' => 'Design UI/UX Moderne',
            'instructor' => 'Marie Martin',
            'price' => 39000,
            'rating' => 4.9,
            'students' => 980,
            'image' => 'images/ui-ux-design.jpg',
            'category' => 'Design',
            'level' => 'Intermédiaire',
        ],
        [
            'id' => '3',
            'title' => 'Node.js & Express',
            'instructor' => 'Pierre Bernard',
            'price' => 44000,
            'rating' => 4.7,
            'students' => 1520,
            'image' => 'images/node-js.jpg',
            'category' => 'Backend',
            'level' => 'Intermédiaire',
        ],
        [
            'id' => '4',
            'title' => 'Tailwind CSS Complet',
            'instructor' => 'Sophie Laurent',
            'price' => 34000,
            'rating' => 4.6,
            'students' => 2100,
            'image' => 'images/tailwind-css.jpg',
            'category' => 'CSS',
            'level' => 'Débutant',
        ],
    ];

    return view('pages.courses', ['courses' => $courses]);
})->name('courses');

Route::get('/course/{id}', function ($id) {
    $coursesData = [
        '1' => [
            'id' => '1',
            'title' => 'React Avancé',
            'instructor' => 'Jean Dupont',
            'price' => 49000,
            'rating' => 4.8,
            'students' => 1250,
            'image' => 'images/react-js.jpg',
            'category' => 'Développement',
            'level' => 'Avancé',
            'duration' => '12 heures',
            'description' => 'Maîtrisez React avec les hooks, context API et patterns avancés.',
            'fullDescription' => 'React est l\'une des bibliothèques JavaScript les plus populaires au monde. Dans ce cours avancé, vous apprendrez les concepts les plus importants pour maîtriser React et créer des applications web performantes et scalables.',
            'syllabus' => [
                ['module' => 1, 'title' => 'Introduction aux Hooks', 'duration' => '2h', 'lessons' => 8],
                ['module' => 2, 'title' => 'Context API Avancée', 'duration' => '2h', 'lessons' => 7],
                ['module' => 3, 'title' => 'Performance et Optimisation', 'duration' => '2h', 'lessons' => 6],
            ],
            'requirements' => [
                'Connaissance solide de JavaScript ES6+',
                'Expérience avec React (niveau intermédiaire)',
            ],
            'learnings' => [
                'Maîtriser les hooks React',
                'Gérer l\'état global avec Context API',
                'Optimiser les performances',
            ],
        ],
        '2' => [
            'id' => '2',
            'title' => 'Design UI/UX Moderne',
            'instructor' => 'Marie Martin',
            'price' => 39000,
            'rating' => 4.9,
            'students' => 980,
            'image' => 'images/ui-ux-design.jpg',
            'category' => 'Design',
            'level' => 'Intermédiaire',
            'duration' => '10 heures',
            'description' => 'Apprenez à créer des interfaces élégantes et des expériences utilisateurs mémorables.',
            'fullDescription' => 'Ce cours vous guide à travers le processus complet du design, de la recherche utilisateur au prototypage haute fidélité. Vous maîtriserez les outils de l\'industrie et les principes psychologiques du design.',
            'syllabus' => [
                ['module' => 1, 'title' => 'Principes du Design Visuel', 'duration' => '3h', 'lessons' => 10],
                ['module' => 2, 'title' => 'Recherche et Wireframing', 'duration' => '3h', 'lessons' => 8],
                ['module' => 3, 'title' => 'Prototypage Interactif', 'duration' => '4h', 'lessons' => 12],
            ],
            'requirements' => [
                'Aucun prérequis technique',
                'Intérêt pour la créativité et la psychologie',
            ],
            'learnings' => [
                'Maîtriser Figma ou Adobe XD',
                'Comprendre la hiérarchie visuelle',
                'Réaliser des tests utilisateurs efficaces',
            ],
        ],
        '3' => [
            'id' => '3',
            'title' => 'Node.js & Express',
            'instructor' => 'Pierre Bernard',
            'price' => 44000,
            'rating' => 4.7,
            'students' => 1520,
            'image' => 'images/node-js.jpg',
            'category' => 'Backend',
            'level' => 'Intermédiaire',
            'duration' => '15 heures',
            'description' => 'Développez des API robustes et scalables avec l\'écosystème Node.js.',
            'fullDescription' => 'Apprenez à construire le côté serveur de vos applications. Nous explorerons l\'architecture événementielle, la gestion des bases de données et la sécurité des API.',
            'syllabus' => [
                ['module' => 1, 'title' => 'Fondamentaux de Node.js', 'duration' => '4h', 'lessons' => 12],
                ['module' => 2, 'title' => 'API REST avec Express', 'duration' => '6h', 'lessons' => 15],
                ['module' => 3, 'title' => 'MongoDB et Mongoose', 'duration' => '5h', 'lessons' => 10],
            ],
            'requirements' => [
                'Maîtrise de JavaScript asynchrone',
                'Bases en ligne de commande',
            ],
            'learnings' => [
                'Créer des API RESTful performantes',
                'Gérer l\'authentification avec JWT',
                'Déployer des serveurs en production',
            ],
        ],
        '4' => [
            'id' => '4',
            'title' => 'Tailwind CSS Complet',
            'instructor' => 'Sophie Laurent',
            'price' => 34000,
            'rating' => 4.6,
            'students' => 2100,
            'image' => 'images/tailwind-css.jpg',
            'category' => 'CSS',
            'level' => 'Débutant',
            'duration' => '8 heures',
            'description' => 'Stylisez vos applications web plus rapidement que jamais sans quitter votre HTML.',
            'fullDescription' => 'Oubliez les fichiers CSS de 1000 lignes. Avec Tailwind, vous construisez des interfaces complexes en assemblant des classes utilitaires directement dans votre code.',
            'syllabus' => [
                ['module' => 1, 'title' => 'Installation et Configuration', 'duration' => '2h', 'lessons' => 5],
                ['module' => 2, 'title' => 'Layouts et Responsive Design', 'duration' => '3h', 'lessons' => 9],
                ['module' => 3, 'title' => 'Personnalisation et Thèmes', 'duration' => '3h', 'lessons' => 7],
            ],
            'requirements' => [
                'Bases solides en HTML',
                'Compréhension de base du CSS standard',
            ],
            'learnings' => [
                'Maîtriser le workflow Utility-First',
                'Créer des designs responsives facilement',
                'Optimiser la taille du CSS final',
            ],
        ],
    ];

    $course = $coursesData[$id] ?? null;

    if (!$course) {
        abort(404);
    }

    return view('pages.course-detail', ['course' => $course]);
})->name('course-detail');

Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');
