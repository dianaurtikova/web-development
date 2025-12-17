<?php
$mas = [
    [
        'book' => 'book1',
        'years' => '1000',
        'avtor' => 'Pushkin'
    ],
    [
        'book' => 'book2',
        'years' => '1000',
        'avtor' => 'Pushkin'
    ],
    [
        'book' => 'book3',
        'years' => '1000',
        'avtor' => 'Pushkin'
    ],
    [
        'book' => '4',
        'years' => '1000',
        'avtor' => 'Pushkin'
    ]
];

$html = "<ul>";
foreach ($mas as $user) {
    $html .= "<li>" . "Book: " . $user['book'] . "; Years: " . $user['years'] . "; Avtor: " . $user['avtor'] . "</li>";
}
$html .= "</ul>";
echo $html;