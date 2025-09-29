// Game variables
const canvas = document.getElementById('game-board');
const ctx = canvas.getContext('2d');
const startBtn = document.getElementById('start-btn');
const resetBtn = document.getElementById('reset-btn');
const scoreElement = document.getElementById('score');
const highScoreElement = document.getElementById('high-score');

// Game settings
const gridSize = 20;
const tileCount = canvas.width / gridSize;
let speed = 7;

// Game state
let gameRunning = false;
let gameOver = false;
let score = 0;
let highScore = localStorage.getItem('snakeHighScore') || 0;

// Snake initial state
let snake = [
    { x: 10, y: 10 }
];
let velocityX = 0;
let velocityY = 0;
let nextVelocityX = 0;
let nextVelocityY = 0;

// Food initial state
let food = {
    x: 5,
    y: 5
};

// Colors
const snakeColor = '#4CAF50';
const snakeHeadColor = '#45a049';
const foodColor = '#FF5252';
const gridColor = '#333';

// Initialize the game
function init() {
    highScoreElement.textContent = highScore;
    resetBtn.disabled = true;
    drawGame();
}

// Main game loop
function drawGame() {
    if (gameRunning) {
        setTimeout(function() {
            clearCanvas();
            drawGrid();
            moveSnake();
            checkCollision();
            drawFood();
            drawSnake();
            updateScore();
            
            if (!gameOver) {
                requestAnimationFrame(drawGame);
            } else {
                endGame();
            }
        }, 1000 / speed);
    } else if (!gameOver) {
        clearCanvas();
        drawGrid();
        drawFood();
        drawSnake();
        requestAnimationFrame(drawGame);
    }
}

// Clear the canvas
function clearCanvas() {
    ctx.fillStyle = '#222';
    ctx.fillRect(0, 0, canvas.width, canvas.height);
}

// Draw the grid
function drawGrid() {
    ctx.strokeStyle = gridColor;
    ctx.lineWidth = 0.5;
    
    // Draw vertical lines
    for (let i = 0; i <= tileCount; i++) {
        ctx.beginPath();
        ctx.moveTo(i * gridSize, 0);
        ctx.lineTo(i * gridSize, canvas.height);
        ctx.stroke();
    }
    
    // Draw horizontal lines
    for (let i = 0; i <= tileCount; i++) {
        ctx.beginPath();
        ctx.moveTo(0, i * gridSize);
        ctx.lineTo(canvas.width, i * gridSize);
        ctx.stroke();
    }
}

// Move the snake
function moveSnake() {
    // Update velocity based on next velocity
    velocityX = nextVelocityX;
    velocityY = nextVelocityY;
    
    // Move the snake's head
    const head = { x: snake[0].x + velocityX, y: snake[0].y + velocityY };
    snake.unshift(head);
    
    // Check if snake ate food
    if (snake[0].x === food.x && snake[0].y === food.y) {
        score++;
        generateFood();
        // Increase speed slightly every 5 points
        if (score % 5 === 0 && speed < 15) {
            speed += 1;
        }
    } else {
        // Remove the tail if no food was eaten
        snake.pop();
    }
}

// Draw the snake
function drawSnake() {
    snake.forEach((part, index) => {
        ctx.fillStyle = index === 0 ? snakeHeadColor : snakeColor;
        ctx.fillRect(part.x * gridSize, part.y * gridSize, gridSize, gridSize);
        
        // Add a border to each snake part
        ctx.strokeStyle = '#222';
        ctx.lineWidth = 1;
        ctx.strokeRect(part.x * gridSize, part.y * gridSize, gridSize, gridSize);
        
        // Add eyes to the snake head
        if (index === 0) {
            // Left eye
            ctx.fillStyle = 'white';
            
            // Position eyes based on direction
            let eyeX1, eyeY1, eyeX2, eyeY2;
            
            if (velocityX === 1) { // Moving right
                eyeX1 = part.x * gridSize + gridSize * 0.7;
                eyeY1 = part.y * gridSize + gridSize * 0.3;
                eyeX2 = part.x * gridSize + gridSize * 0.7;
                eyeY2 = part.y * gridSize + gridSize * 0.7;
            } else if (velocityX === -1) { // Moving left
                eyeX1 = part.x * gridSize + gridSize * 0.3;
                eyeY1 = part.y * gridSize + gridSize * 0.3;
                eyeX2 = part.x * gridSize + gridSize * 0.3;
                eyeY2 = part.y * gridSize + gridSize * 0.7;
            } else if (velocityY === -1) { // Moving up
                eyeX1 = part.x * gridSize + gridSize * 0.3;
                eyeY1 = part.y * gridSize + gridSize * 0.3;
                eyeX2 = part.x * gridSize + gridSize * 0.7;
                eyeY2 = part.y * gridSize + gridSize * 0.3;
            } else if (velocityY === 1) { // Moving down
                eyeX1 = part.x * gridSize + gridSize * 0.3;
                eyeY1 = part.y * gridSize + gridSize * 0.7;
                eyeX2 = part.x * gridSize + gridSize * 0.7;
                eyeY2 = part.y * gridSize + gridSize * 0.7;
            } else { // Default (not moving or initial state)
                eyeX1 = part.x * gridSize + gridSize * 0.3;
                eyeY1 = part.y * gridSize + gridSize * 0.3;
                eyeX2 = part.x * gridSize + gridSize * 0.7;
                eyeY2 = part.y * gridSize + gridSize * 0.3;
            }
            
            // Draw eyes
            ctx.beginPath();
            ctx.arc(eyeX1, eyeY1, gridSize * 0.15, 0, Math.PI * 2);
            ctx.fill();
            
            ctx.beginPath();
            ctx.arc(eyeX2, eyeY2, gridSize * 0.15, 0, Math.PI * 2);
            ctx.fill();
            
            // Draw pupils
            ctx.fillStyle = 'black';
            ctx.beginPath();
            ctx.arc(eyeX1, eyeY1, gridSize * 0.07, 0, Math.PI * 2);
            ctx.fill();
            
            ctx.beginPath();
            ctx.arc(eyeX2, eyeY2, gridSize * 0.07, 0, Math.PI * 2);
            ctx.fill();
        }
    });
}

// Generate food at random position
function generateFood() {
    let newFood;
    let foodOnSnake;
    
    do {
        foodOnSnake = false;
        newFood = {
            x: Math.floor(Math.random() * tileCount),
            y: Math.floor(Math.random() * tileCount)
        };
        
        // Check if food is on snake
        for (let i = 0; i < snake.length; i++) {
            if (snake[i].x === newFood.x && snake[i].y === newFood.y) {
                foodOnSnake = true;
                break;
            }
        }
    } while (foodOnSnake);
    
    food = newFood;
}

// Draw the food
function drawFood() {
    ctx.fillStyle = foodColor;
    ctx.beginPath();
    const centerX = food.x * gridSize + gridSize / 2;
    const centerY = food.y * gridSize + gridSize / 2;
    const radius = gridSize / 2 * 0.8; // Slightly smaller than the grid
    ctx.arc(centerX, centerY, radius, 0, Math.PI * 2);
    ctx.fill();
    
    // Add a shine effect
    ctx.fillStyle = 'rgba(255, 255, 255, 0.5)';
    ctx.beginPath();
    ctx.arc(centerX - radius * 0.3, centerY - radius * 0.3, radius * 0.3, 0, Math.PI * 2);
    ctx.fill();
}

// Check for collisions
function checkCollision() {
    const head = snake[0];
    
    // Check wall collision
    if (head.x < 0 || head.x >= tileCount || head.y < 0 || head.y >= tileCount) {
        gameOver = true;
        return;
    }
    
    // Check self collision (start from index 1 to avoid checking head against itself)
    for (let i = 1; i < snake.length; i++) {
        if (head.x === snake[i].x && head.y === snake[i].y) {
            gameOver = true;
            return;
        }
    }
}

// Update score display
function updateScore() {
    scoreElement.textContent = score;
    
    if (score > highScore) {
        highScore = score;
        highScoreElement.textContent = highScore;
        localStorage.setItem('snakeHighScore', highScore);
    }
}

// End the game
function endGame() {
    gameRunning = false;
    startBtn.textContent = 'Start Game';
    resetBtn.disabled = false;
    
    // Display game over message
    ctx.fillStyle = 'rgba(0, 0, 0, 0.75)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    
    ctx.font = '30px Arial';
    ctx.fillStyle = 'white';
    ctx.textAlign = 'center';
    ctx.fillText('Game Over!', canvas.width / 2, canvas.height / 2 - 30);
    
    ctx.font = '20px Arial';
    ctx.fillText(`Score: ${score}`, canvas.width / 2, canvas.height / 2 + 10);
    
    if (score === highScore && score > 0) {
        ctx.fillStyle = '#FFD700';
        ctx.fillText('New High Score!', canvas.width / 2, canvas.height / 2 + 40);
    }
}

// Reset the game
function resetGame() {
    snake = [{ x: 10, y: 10 }];
    velocityX = 0;
    velocityY = 0;
    nextVelocityX = 0;
    nextVelocityY = 0;
    score = 0;
    speed = 7;
    gameOver = false;
    generateFood();
    scoreElement.textContent = '0';
    resetBtn.disabled = true;
}

// Event listeners
startBtn.addEventListener('click', function() {
    if (gameOver) {
        resetGame();
    }
    
    if (!gameRunning) {
        gameRunning = true;
        startBtn.textContent = 'Pause Game';
        // If snake is not moving, start moving right
        if (velocityX === 0 && velocityY === 0) {
            nextVelocityX = 1;
            nextVelocityY = 0;
        }
        drawGame();
    } else {
        gameRunning = false;
        startBtn.textContent = 'Resume Game';
    }
});

resetBtn.addEventListener('click', function() {
    resetGame();
    startBtn.textContent = 'Start Game';
});

// Keyboard controls
document.addEventListener('keydown', function(event) {
    // Prevent default behavior for arrow keys
    if ([37, 38, 39, 40].includes(event.keyCode)) {
        event.preventDefault();
    }
    
    // Only change direction if game is running
    if (gameRunning) {
        switch (event.keyCode) {
            case 37: // Left arrow
                if (velocityX !== 1) { // Prevent moving right when going left
                    nextVelocityX = -1;
                    nextVelocityY = 0;
                }
                break;
            case 38: // Up arrow
                if (velocityY !== 1) { // Prevent moving down when going up
                    nextVelocityX = 0;
                    nextVelocityY = -1;
                }
                break;
            case 39: // Right arrow
                if (velocityX !== -1) { // Prevent moving left when going right
                    nextVelocityX = 1;
                    nextVelocityY = 0;
                }
                break;
            case 40: // Down arrow
                if (velocityY !== -1) { // Prevent moving up when going down
                    nextVelocityX = 0;
                    nextVelocityY = 1;
                }
                break;
            case 32: // Space bar - pause/resume game
                if (gameRunning) {
                    gameRunning = false;
                    startBtn.textContent = 'Resume Game';
                } else {
                    gameRunning = true;
                    startBtn.textContent = 'Pause Game';
                    drawGame();
                }
                break;
        }
    } else if (event.keyCode === 32 && !gameOver) { // Space bar - start game if not over
        gameRunning = true;
        startBtn.textContent = 'Pause Game';
        // If snake is not moving, start moving right
        if (velocityX === 0 && velocityY === 0) {
            nextVelocityX = 1;
            nextVelocityY = 0;
        }
        drawGame();
    }
});

// Touch controls for mobile devices
let touchStartX = 0;
let touchStartY = 0;

canvas.addEventListener('touchstart', function(event) {
    touchStartX = event.touches[0].clientX;
    touchStartY = event.touches[0].clientY;
    event.preventDefault();
});

canvas.addEventListener('touchmove', function(event) {
    if (!gameRunning || gameOver) return;
    
    const touchEndX = event.touches[0].clientX;
    const touchEndY = event.touches[0].clientY;
    
    const dx = touchEndX - touchStartX;
    const dy = touchEndY - touchStartY;
    
    // Determine swipe direction based on the greatest difference
    if (Math.abs(dx) > Math.abs(dy)) {
        // Horizontal swipe
        if (dx > 0 && velocityX !== -1) { // Right swipe
            nextVelocityX = 1;
            nextVelocityY = 0;
        } else if (dx < 0 && velocityX !== 1) { // Left swipe
            nextVelocityX = -1;
            nextVelocityY = 0;
        }
    } else {
        // Vertical swipe
        if (dy > 0 && velocityY !== -1) { // Down swipe
            nextVelocityX = 0;
            nextVelocityY = 1;
        } else if (dy < 0 && velocityY !== 1) { // Up swipe
            nextVelocityX = 0;
            nextVelocityY = -1;
        }
    }
    
    // Update touch start position for continuous swiping
    touchStartX = touchEndX;
    touchStartY = touchEndY;
    
    event.preventDefault();
});

// Responsive canvas sizing
function resizeCanvas() {
    const container = document.querySelector('.game-board-container');
    const containerWidth = container.clientWidth;
    
    if (containerWidth < 400) {
        canvas.width = containerWidth - 20; // Add some padding
        canvas.height = canvas.width; // Keep it square
    } else {
        canvas.width = 400;
        canvas.height = 400;
    }
    
    // Update grid size based on new canvas dimensions
    const newGridSize = canvas.width / tileCount;
    gridSize = newGridSize;
    
    // Redraw the game
    if (!gameRunning) {
        clearCanvas();
        drawGrid();
        drawFood();
        drawSnake();
    }
}

// Handle window resize
window.addEventListener('resize', resizeCanvas);

// Initialize the game
resizeCanvas();
generateFood();
init();