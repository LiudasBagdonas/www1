<?php
$movies =
    [
        [
            'name' => 'Avatar',
            'director' => 'James Cameron',
            'image' => 'https://static.wixstatic.com/media/00f4ca_4b183e5a23a443119c3e54bc20474422~mv2.jpg',
            'genres' => ['Action', 'Adventure', 'Action',],
            'actors' => ['Sam Wortinghem', 'Zoe Saldma', 'Sigonrey Wildman',],
            'year' => 2013,
        ],
        [
            'name' => 'Avengers: Endgame',
            'director' => 'Anthony Russe',
            'image' => 'https://i.pinimg.com/originals/92/c8/e0/92c8e00b34fcfdeaf605a0647c21adb3.jpg',
            'genres' => ['Action', 'Adventure', 'Drama',],
            'actors' => ['Roben Downey Jr.', 'Chris Evans', 'Seman Harleydavidson',],
            'year' => 2014,
        ],
        [
            'name' => 'Django Unchained',
            'director' => 'Quentin Tarantine',
            'image' => 'https://m.media-amazon.com/images/M/MV5BMjIyNTQ5NjQ1OV5BMl5BanBnXkFtZTcwODg1MDU4OA@@._V1_UY1200_CR90,0,630,1200_AL_.jpg',
            'genres' => ['Drama', 'Western',],
            'actors' => ['Jame Foxx', 'Cristoug Waltz', 'Leonardo DiCaprio',],
            'year' => 2012,
        ],
    ];


function add_name(&$movies, $movie, $name) {
    foreach ($movies as &$movie_name) {
        if($movie_name['name'] === $movie) {
            $movie_name['actors'][] = $name;
        }
    }
}
add_name($movies, 'Avatar', 'Liudas Bagdonas');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foreach ciklas</title>
    <link rel="stylesheet" href="style.css">
    <style>
        article {
            display: flex;
        }
        section {
            width: 200px;
            border: 1px solid transparent;
            background-color: lightgrey;
            margin: 20px;
            padding: 20px;
            text-align: center;
        }
        ul {
            list-style: none;
        }
        img {
            height: 200px;
        }
    </style>
</head>
<body>
    <article>
        <?php foreach ($movies as $index => $value): ?>
            <section>
                <h1><?php print $movies[$index]['name']; ?></h1>
                <h2><?php print $movies[$index]['director']; ?></h2>
                <img src="<?php print $movies[$index]['image']; ?>" alt="">
                <h4>Genre:
                    <?php foreach ($value['genres'] as $item): ?>
                        <?php $genres[] = $item; ?>
                    <?php endforeach; ?>
                    <?php print implode(', ', $genres); $genres = []; ?>
                </h4>
                <ul>Actors:
                    <?php foreach ($value['actors'] as $item): ?>
                        <li>
                            <?php print $item; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        <?php endforeach; ?>
    </article>
</body>
</html>
