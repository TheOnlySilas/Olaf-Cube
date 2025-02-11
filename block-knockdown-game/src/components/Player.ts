class Player {
    constructor(x, y, size) {
        this.position = { x: x, y: y };
        this.size = size;
    }

    move(direction) {
        switch (direction) {
            case 'left':
                this.position.x -= this.size;
                break;
            case 'right':
                this.position.x += this.size;
                break;
            case 'up':
                this.position.y -= this.size;
                break;
            case 'down':
                this.position.y += this.size;
                break;
        }
    }

    shoot() {
        // Logic to launch the square at the blocks
    }
}

export default Player;