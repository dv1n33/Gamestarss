document.body.style.backgroundColor = "#17161b";
document.body.style.color = "#ffffff";

const games = [
    {
        titel: "Assassin's Creed Shadows",
        pegi: 16,
        genre: "Action-Adventure",
        platform: "PC, PS5, Xbox Series X",
        fotos: ["../../images/AC-RED-Hero-c670e300cce5edfef3cf.jpg", "../../images/81i5KCHJB1L.jpg"],
        beschrijving: "Duik in de wereld van de middeleeuwse schaduwen als een meesterlijke sluipmoordenaar."
    },
    {
        titel: "kingdom come: deliverance 2",
        pegi: 16,
        genre: "RPG",
        platform: "PC, PS5, Xbox Series X",
        fotos: ["../../images/hq720.jpg", "../../images/81uSnXVuDvL._AC_UF1000,1000_QL80_.jpg"],
        beschrijving: "Ervaar een realistische middeleeuwse RPG vol keuzes en gevolgen in een levendige open wereld."
    }
];

let gameIndex = 1; 

let gekozenGame;
if (gameIndex === 0) {
    gekozenGame = games[0];
} else {
    gekozenGame = games[1];
}


console.log("De getoonde game is: " + gekozenGame.titel);

const container = document.getElementById('game-display');
container.innerHTML = `
    <h1>${gekozenGame.titel}</h1>
    <p><strong>PEGI:</strong> ${gekozenGame.pegi}</p>
    <p><strong>Genre:</strong> ${gekozenGame.genre}</p>
    <p><strong>Platform:</strong> ${gekozenGame.platform}</p>
    <p>${gekozenGame.beschrijving}</p>
    <div class="gallery">
        <img src="${gekozenGame.fotos[0]}" width="300">
        <img src="${gekozenGame.fotos[1]}" width="300">
    </div>
`;
