<?php
$sudoku =[
    [8, 2, 7, 9, 6, 5, 4, 3, 1,],
    [1, 5, 4, 3, 2, 7, 6, 8, 9,],
    [3, 9, 6, 1, 4, 8, 7, 5, 2,],
    [5, 9, 3, 4, 7, 2, 6, 1, 8,],
    [4, 6, 8, 5, 1, 3, 9, 7, 2,],
    [2, 7, 1, 6, 8, 9, 4, 3, 5,],
    [7, 6, 8, 1, 5, 4, 2, 3, 9,],
    [2, 3, 5, 7, 9, 6, 8, 4, 1,],
    [9, 1, 4, 8, 2, 3, 5, 6, 7,],
];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foreach ciklas</title>
    <style>
        table {
            text-align: center;
            margin: 50px auto;
            width: 500px;
            height: 500px;
            border-collapse: collapse;
        }
        table tr td {
            border: 1px solid lightgray;
        }
        td:first-child {
            border-left: solid;
        }
        td:nth-child(3n) {
            border-right: solid;
        }
        tr:first-child {
            border-top: solid;
        }
        tr:nth-child(3n) td {
            border-bottom: solid;
        }

    </style>
</head>
<body>
    <table>
        <tbody>
        <?php foreach($sudoku as $square): ?>
            <tr>
                <?php for($i = 0; $i <= count($square) -1; $i++): ?>
                    <td><?php print $square[$i]; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>