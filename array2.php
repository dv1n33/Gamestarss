
<?php
$searchTitle = "assasin's creed origins"; 
$myAge = 19;

$games = array(
    "Call of Duty: Modern Warfare II" => array(
        'Genre'        => "Shooter",
        'Release_year' => 2022,
        'Platform'     => "PS4, PS5, Xbox One, Xbox Series X & S, PC",
        'Developer'    => "Infinity Ward",
        'Pegi_rating'  => 18,
        'Images'       => array("Call_of_Duty_Modern_Warfare_2_(2009)_cover.png", "aa42ebcd-6732-4739-9ce6-be219526ff24.jpg"),
        'Description'  => "Ervaar intense gevechten in deze realistische shooter."
    ),
    "assasin's creed origins" => array(
        'Genre'        => "Action-Adventure",
        'Release_year' => 2017,
        'Platform'     => "PS4, Xbox One, PC",
        'Developer'    => "Ubisoft",
        'Pegi_rating'  => 18,
        'Images'       => array("ACOrigins_cover.webp", "ACO_05.jpg.avif"),
        'Description'  => "Ontdek het oude Egypte in deze epische actie-avonturenspel."
    )
);

if (isset($games[$searchTitle])) {
    $selectedGame = $games[$searchTitle];
    $selectedGame['Title'] = $searchTitle;
} else {
    $selectedGame = null;
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="devine kuma leo">
    <title>Game review: <?php echo "{$searchTitle}"; ?></title>
    <style>
        body { font-family: Arial, sans-serif; 
               background-color: #17161b; 
               padding: 20px; }
               
        h1, h2, p, ul { color: #ffffffff; }

        .error-notice h2 { color: #FF0000; }

        strong { color: #FF0000; }

        figure { display: flex; 
                 gap: 10px; 
                 margin: 20px 0 0 0; 
                 padding: 0; 
                 flex-wrap: wrap; }

        figure img { width: 48%; 
                     height: auto; 
                     border-radius: 4px; 
                     object-fit: cover; }
    </style>
</head>
<body>
    <main>
        <?php if ($selectedGame): ?>

            <?php if ($myAge >= $selectedGame['Pegi_rating']): ?>
                <article>
                    <h1>Review: <?php echo "{$selectedGame['Title']}"; ?></h1>

                    <ul>
                        <figure>
                            <?php foreach ($selectedGame['Images'] as $image): ?>
                                <img src="../images/<?php echo "{$image}"; ?>" alt="Game screenshot">
                            <?php endforeach; ?>
                        </figure>
                        <?php foreach ($selectedGame as $key => $value): ?>
                            <?php if ($key !== 'Images' && $key !== 'Title'): ?>
                                <li><strong><?php echo "{$key}:"; ?></strong> <?php echo "{$value}"; ?></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>

                </article>

            <?php else: ?>
                <section class="error-notice">
                    <h2>Helaas!</h2>
                    <p>Je bent pas <?php echo "{$myAge}"; ?> jaar oud, maar deze game is voor <?php echo "{$selectedGame['Pegi_rating']}"; ?>+.</p>
                </section>
            <?php endif; ?>

        <?php else: ?>
            <section class="not-found">
                <h2>Game niet gevonden</h2>
                <p>De game "<?php echo "{$searchTitle}"; ?>" is niet beschikbaar in ons systeem.</p>
            </section>
        <?php endif; ?>
    </main>
</body>
</html>