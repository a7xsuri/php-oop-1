<?php 

require_once __DIR__.'/class.php';
$movies = [
    [
        'title' => 'film1',
        'genere' => 'Ciao',
        'eta' => 0,
    ],
    [
        'title' => 'film2',
        'genere' => 'Ciao',
        'eta' => 11,
    ],
    [
        'title' => 'Film3',
        'genere' => 'Ciao',
        'eta' => 18,
    ],
    [
        'title' => 'film4',
        'genere' => 'Ciao',
        'eta' => 5,
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <main>
        <div class="container">
            <?php 
            foreach($movies as $key => $value) {
                $movie = new Movie($value['title'], $value['genere'], $value['eta']);
                $movie->Etaminima($value['eta']);
                echo '<div>
                    <h2>Titolo: '.$movie->getTitle().'</h2>
                    <h4>Genere: ' .$movie->getGenere().'</h4>
                    <h5>'.$movie->getEta().'</h5>
                </div>';
            }
            ?>
        </div>
    </main>
</body>
</html>