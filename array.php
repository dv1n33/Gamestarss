<?php

$gameMinecraft = array(
    'Title'        => "Minecraft",
    'pegi_rating'  => "7",
    'genre'        => "Sandbox, Survival",
    'release_jaar' => 2011,
    'Platform'     => "Xbox, Nintendo Switch, PS5, PC",
    'developer'    => "Mojang Studios"
);

$gameLego = array(
    'Title'        => "LEGO Star Wars: The Skywalker Saga",
    'pegi_rating'  => "7",
    'genre'        => "Action-Adventure",
    'release_jaar' => 2022,
    'Platform'     => "PC, PS5, Xbox Series X, Switch",
    'developer'    => "TT Games"
);

$gekozenGame = "Minecraft"; 

if ($gekozenGame == "Minecraft") {
    $display = $gameMinecraft;
} else {
    $display = $gameLego;
}

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Game Informatie</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; background-color: #0d0d0dff; }
        .highlight {
            font-weight: bold; 
        }

        p { 
            color: #ffffffff; 
        }

        h1, h2 { 
            color: #ffffff; 
        }
    </style>
</head>
<body>

    <h1>Game Informatie Pagina</h1>

    <h2><?php echo "Details van: {$display['Title']}"; ?></h2>
    
    <p>
        <?php echo "De game <span class='highlight'>{$display['Title']}</span> is een {$display['genre']} game."; ?> 
        <br>
        <?php echo "Deze titel is ontwikkeld door {$display['developer']} en verscheen voor het eerst in {$display['release_jaar']}."; ?>
    </p>

    <p>
        <?php echo "Leeftijdscategorie: <strong>PEGI {$display['pegi_rating']}</strong>"; ?>
        <br>
        <?php echo "Speelbaar op: <em>{$display['Platform']}</em>"; ?>
    </p>

</body>
</html>