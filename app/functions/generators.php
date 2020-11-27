<?php

function nav()
{
    if (is_logged_in()) {
        $nav = [
            'links' => [
                'home' => [
                    'value' => 'Home',
                    'path' => '/index.php'
                ],
                'add' => [
                    'value' => 'Add Item',
                    'path' => '/admin/add.php'
                ],
                'logout' => [
                    'value' => 'Log Out',
                    'path' => '/logout.php'
                ],
            ],
        ];

        return $nav;
    } else {
        $nav = [
            'links' => [
                'home' => [
                    'value' => 'Home',
                    'path' => '/index.php'
                ],
                'register' => [
                    'value' => 'Register',
                    'path' => '/register.php'
                ],
                'login' => [
                    'value' => 'Log In',
                    'path' => '/login.php'
                ],
            ],
        ];

        return $nav;
    }
}

function my_poo(): array
{
    $db = new FileDB(DB_FILE);
    $db->load();
    $my_poo = [];

    if (is_logged_in()) {
        $my_poo = $db->getRowsWhere('items', $conditions = ['id' => $_SESSION['email']]);
    }

    return $my_poo;
}