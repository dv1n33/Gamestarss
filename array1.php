<?php

$index = 0; 

$games = array(
    array(
        'Title'        => "The Sims 4",
        'Genre'        => "Simulation",
        'Release_year' => 2014,
        'Platform'     => "PS4, PC, Mac",
        'Developer'    => "Maxis",
        'Pegi_rating'  => "12",
        'Images'       => array("The-Sims-4-ea.jpg", "maxresdefault-5.jpg"),
        'Description'  => "Bouw je droomhuis en beheer het leven van je Sims."
    ),
    array(
        'Title'        => "Fortnite",
        'Genre'        => "Battle Royale",
        'Release_year' => 2017,
        'Platform'     => "PC, PS5, Xbox, Switch",
        'Developer'    => "Epic Games",
        'Pegi_rating'  => "12",
        'Images'       => array("fortnite1.jpg", "fortnite2.jpg"),
        'Description'  => "Vecht met 100 spelers tegelijk om de laatste overlevende te zijn."
    )
);


if ($index == 1) {
    $game = $games[1];
} else {
    $game = $games[0];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="devine kuma leo">
    <title>Game review: <?php echo "{$game['Title']}"; ?></title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #17161b;
        padding: 20px;
    }
    h1 { color: #ffffff; }
    
    .image-wrapper { 
        display: flex; 
        gap: 10px; 
        margin-top: 20px; 
    }

    .image-wrapper img { 
        width: 48%; 
        height: 200px; 
        object-fit: cover; 
        border: 1px solid #333; 
    }

    p { 
        color: #f9f8ff; 
    }

    .info { 
        margin-top: 20px; 
    }
    </style>
</head>
<body>
    
    <div class="game-container">
        <h1>Review: <?php echo "{$game['Title']}"; ?></h1>

        <div class="image-wrapper">
            <?php foreach ($game['Images'] as $image): ?>
                <img src="../images/<?php echo "{$image}"; ?>" alt="Game screenshot">
            <?php endforeach; ?>
        </div>
        
        <div class="info">
            <p><strong>Genre:</strong> <?php echo "{$game['Genre']}"; ?></p>
            <p><strong>Release Year:</strong> <?php echo "{$game['Release_year']}"; ?></p>
            <p><strong>Platform:</strong> <?php echo "{$game['Platform']}"; ?></p>
            <p><strong>Developer:</strong> <?php echo "{$game['Developer']}"; ?></p>
            <p><strong>PEGI:</strong> <?php echo "{$game['Pegi_rating']}"; ?></p>
            <p><?php echo "{$game['Description']}"; ?></p>
        </div>

    </div>
</body>
</html>