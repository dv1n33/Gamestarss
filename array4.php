<?php
$games = [
    [
        "titel" => "Elden Ring",
        "genre" => ["RPG", "Action"],
        "pegi" => 16,
        "beschrijving" => "Een uitdagende open-world RPG in een duistere fantasiewereld.",
        "maker" => "FromSoftware",
        "platforms" => ["PC", "PS5", "Xbox Series X"],
        "trailer" => "https://www.youtube.com/embed/AKXiKBnzpBQ",
        "reviews" => [
            ["naam" => "Henk", "tekst" => "Geweldig spel!", "rating" => 5],
            ["naam" => "Lisa", "tekst" => "Moeilijk maar fair.", "rating" => 4],
            ["naam" => "Tom", "tekst" => "Prachtige graphics.", "rating" => 5]
        ]
    ],
    [
        "titel" => "Call of duty: Modern Warfare II",
        "genre" => ["Shooter", "Action"],
        "pegi" => 18,
        "beschrijving" => "Ervaar intense gevechten in deze realistische shooter.",
        "maker" => "Infinity Ward",
        "platforms" => ["PS4", "PS5", "Xbox One", "Xbox Series X", "PC"],
        "trailer" => "https://www.youtube.com/embed/7el5VW1wij0?si=CAMMO_KIBsLnsmN6",
        "reviews" => [
            ["naam" => "Mo", "tekst" => "Eindelijk bug-vrij en top!", "rating" => 5],
            ["naam" => "Sara", "tekst" => "Sfeer is onwerkelijk.", "rating" => 5],
            ["naam" => "Daan", "tekst" => "Beetje kort verhaal.", "rating" => 3]
        ]
    ],
    [
        "titel" => "assasin's creed origins",
        "genre" => ["Action-Adventure", "RPG"],
        "pegi" => 18,
        "beschrijving" => "Ontdek het oude Egypte in deze epische actie-avonturenspel.",
        "maker" => "Ubisoft",
        "platforms" => ["PS4", "Xbox One", "PC"],
        "trailer" => "https://www.youtube.com/embed/evC13w8URDc?si=s_ZHZSUWGL19z1nj",
        "reviews" => [
            ["naam" => "Rick", "tekst" => "Doodeng!", "rating" => 4],
            ["naam" => "Sophie", "tekst" => "Beste horror game ooit.", "rating" => 5],
            ["naam" => "Bas", "tekst" => "Goede gameplay.", "rating" => 4]
        ]
    ],
    [
        "titel" => "the legend of zelda: breath of the wild",
        "genre" => ["Action", "Adventure"],
        "pegi" => 12,
        "beschrijving" => "Een episch avontuur in de uitgestrekte wereld van Hyrule.",
        "maker" => "Nintendo",
        "platforms" => ["Nintendo Switch", "Wii U"],
        "trailer" => "https://www.youtube.com/embed/uHGShqcAHlQ",
        "reviews" => [
            ["naam" => "Kind1", "tekst" => "Super leuk!", "rating" => 5],
            ["naam" => "Ouder", "tekst" => "Mooi voor het hele gezin.", "rating" => 4],
            ["naam" => "Gamer", "tekst" => "Ziet eruit als Pixar.", "rating" => 5]
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Latest Reviews</title>
    <script src="javascript/sl"></script>
</head>
<body>
     <style>
        body{
            background-color: #17161b;
            color: #ffffff;
            
        }
    </style>


<div class="slideshow-container">
    <?php foreach ($games as $game): ?>
        <?php if ($game['pegi'] >= 16): ?>
            <div class="mySlides fade">
                <h2><?php echo $game['titel']; ?></h2>
                <p><strong>Maker:</strong> <?php echo $game['maker']; ?> | 
                   <strong>Platform:</strong> <?php echo implode(", ", $game['platforms']); ?></p>
                <p><strong>Genre:</strong> <?php echo implode(", ", $game['genre']); ?> | 
                   <span class="pegi-badge">PEGI <?php echo $game['pegi']; ?></span></p>
                
                <p><em><?php echo $game['beschrijving']; ?></em></p>
                
                <div class="trailer">
                    <iframe width="100%" height="400" src="<?php echo $game['trailer']; ?>" frameborder="0" allowfullscreen></iframe>
                </div>

                <h3>Bezoekers Reviews</h3>
                <?php foreach ($game['reviews'] as $rev): ?>
                    <div class="review-item">
                        <strong><?php echo $rev['naam']; ?> (<?php echo $rev['rating']; ?>/5)</strong><br>
                        <span><?php echo $rev['tekst']; ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

</body>
</html>