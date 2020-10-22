<?php
$users = [
    [
        'user_name' => 'black_widow',
        'password' => 'widdow2',
        'image' => 'https://qt.azureedge.net/resources/authors-images-large/sasha-grey.jpg',
        'email' => 'b_widow@gmail.com',
    ],
    [
        'user_name' => 'cap_america',
        'password' => '1maCap',
        'image' => 'https://www.edgemedianetwork.com/display/viewimage_storyMain.php?id=297082&minwidth=600&maxwidth=1000',
        'email' => 'cpt_america@gmail.com',
    ],
    [
        'user_name' => 'gomora',
        'password' => 'starL000rd',
        'image' => 'https://media1.s-nbcnews.com/i/newscms/2015_02/835681/150106-mia-khalifa-830a_bcc977bc287eeeb9c3148b332b0e1a7b.jpg',
        'email' => 'sodoma_gomora@gmail.com',
    ],
    [
        'user_name' => 'star_lord',
        'password' => 'widdow2',
        'image' => 'https://timesofindia.indiatimes.com/thumb/msid-59796527,width-1200,height-900,resizemode-4/.jpg',
        'email' => 'star_lord@gmail.com',
    ]
];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foreach ciklas</title>
    <style>
        article  {
            display: flex;
        }
        section {
            width: 200px;
            margin: 10px;
            border: 1px solid black;
            text-align: center;
        }
        div {
            height: 200px;
            background-position: top;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <article>
        <?php foreach($users as $user): ?>
            <section>
                <div style="background-image: url(<?php print $user['image']; ?>)" ></div>
                <h3>User name: <?php print $user['user_name']; ?></h3>
                <p>Password: <?php print $user['password']; ?></p>
                <p>Email: <?php print $user['email']; ?></p>
            </section>
        <?php endforeach; ?>
    </article>
</body>
</html>