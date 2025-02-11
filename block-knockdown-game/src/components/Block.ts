class Block {
    constructor(x, y, width, height) {
        this.position = { x: x, y: y };
        this.size = { width: width, height: height };
        this.isKnockedOver = false;
    }

    render(context) {
        if (!this.isKnockedOver) {
            context.fillStyle = 'blue'; // Color of the block
            context.fillRect(this.position.x, this.position.y, this.size.width, this.size.height);
        }
    }

    knockOver() {
        this.isKnockedOver = true;
    }
}

export default Block;