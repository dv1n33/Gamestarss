<?php
$mijnLeeftijd = 17; 
$gekozenGameTitel = "Elden Ring"; 

$games = [
    "The Legend of Zelda" => [
        "genre" => ["Action", "Adventure"],
        "fotos" => ["Zelda-games-in-order-b2ffc41-e1732633540942.jpeg", "The_Legend_of_Zelda_Breath_of_the_Wild.jpg", "051523-10-Essential-Legend-of-Zelda-Games-BG.jpg.webp"],
        "pegi" => 12,
        "beschrijving" => "Een episch avontuur in Hyrule.",
        "ratings" => [9, 10, 9, 8],
        "youtube" => "https://www.youtube.com/embed/uHGShqcAHlQ",
        "platforms" => ["Nintendo Switch"],
        "maker" => "Nintendo"
    ],
    "Elden Ring" => [
        "genre" => ["RPG", "Soulslike"],
        "fotos" => ["elden-ring-shadow-of-the-erdtree-playstation-5-playstation-4-spel-playstation-store-europe-cover.jpg", "apps.9885.14338380153424734.3274e4bc-67f9-41d0-981b-226eba56b1ed-43b38ccc1c926583144b.jpg", "images-6.jpeg"],
        "pegi" => 16,
        "beschrijving" => "Verken de Lands Between en word de Elden Lord.",
        "ratings" => [10, 10, 9, 10],
        "youtube" => "https://www.youtube.com/embed/E3Huy2cdih0",
        "platforms" => ["PC", "PS5", "Xbox"],
        "maker" => "FromSoftware"
    ]
];

switch ($gekozenGameTitel) {
    case "The Legend of Zelda":
        $gameData = $games["The Legend of Zelda"];
        break;
    case "Elden Ring":
        $gameData = $games["Elden Ring"];
        break;
    default:
        $gameData = null;
}

$gemiddeldeRating = array_sum($gameData['ratings']) / count($gameData['ratings']);
?>

<!DOCTYPE html>
<html lang="nl">
<body>
    <style>
        body{
            background-color: #17161b;
            color: #ffffff;
            
        }
    </style>
    <?php if ($gameData): ?>
        <?php if ($mijnLeeftijd >= $gameData['pegi']): ?>
            <h1><?= "Titel: $gekozenGameTitel" ?></h1>
            <p><strong>Maker:</strong> <?= $gameData['maker'] ?></p>
            <p><strong>Beschrijving:</strong> <?= $gameData['beschrijving'] ?></p>
            <p><strong>Rating:</strong> <?= $gemiddeldeRating ?>/10</p>
            
            <p><strong>Genres:</strong></p>
            
                <?php foreach($gameData['genre'] as $g): ?>
                    <li><?= $g ?></li>
                <?php endforeach; ?>
            

            <p><strong>Beschikbaar op:</strong></p>
            <?php foreach($gameData['platforms'] as $p) echo "$p "; ?>

            <h3>Media:</h3>
            <?php foreach($gameData['fotos'] as $foto): ?>
                <img src="../images/<?= $foto ?>" width="300" height="200" style="object-fit: cover;" alt="Screenshot">
            <?php endforeach; ?>

            <br><br>
            <iframe width="560" height="315" src="<?= $gameData['youtube'] ?>"></iframe>

        <?php else: ?>
            <p>Helaas, je bent <?=$mijnLeeftijd?> jaar. Deze game vereist een PEGI-leeftijd van <?=$gameData['pegi']?>+.</p>
        <?php endif; ?>
    <?php else: ?>
        <p>Game niet gevonden.</p>
    <?php endif; ?>
</body>
</html>