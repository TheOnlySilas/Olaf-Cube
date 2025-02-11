const canvas = document.getElementById('gameCanvas') as HTMLCanvasElement;
const ctx = canvas.getContext('2d');

import Game from './components/Game';

const game = new Game(ctx);
game.start();

function gameLoop() {
    game.update();
    game.render();
    requestAnimationFrame(gameLoop);
}

gameLoop();