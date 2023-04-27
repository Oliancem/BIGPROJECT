
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Bricks Game</title>
    <link rel="shortcut icon" href="../images/ABD.svg" type="image/x-icon" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/brython/3.8.8/brython.js" integrity="sha256-rA89wPrTJJQFWJaZveKW8jpdmC3t5F9rRkPyBjz8G04=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/brython/3.8.8/brython_stdlib.js" integrity="sha256-Gnrw9tIjrsXcZSCh/wos5Jrpn0bNVNFJuNJI9d71TDs=" crossorigin="anonymous"></script>

    <style>
        * { padding: 0; margin: 0; }
        canvas { background: #eee; display: block; margin: 0 auto; }
        body,td,th{
            font-family:sans-serif;
            font-size:12px;
        }
    </style>

</head>
<body onload="brython(1)">

<table width="100%">
    <tr>
        <td width="25%" style="padding:3%;vertical-align: top;">
            <h2>Bricks game</h2>
        </td>
        <td id="right" style="padding:3%">
            <canvas id="myCanvas" width="480" height="320"></canvas>
        </td>
    </tr>
</table>

<script type="text/python">
import math

from browser import document, bind, window

ballRadius = 10
paddleHeight = 10
paddleWidth = 75
brickRowCount = 5
brickColumnCount = 3
brickWidth = 75
brickHeight = 20
brickPadding = 10
brickOffsetTop = 30
brickOffsetLeft = 30

class Brick:

    def __init__(self):
        self.x = 0
        self.y = 0
        self.status = 1


class Panel:

    def __init__(self, canvas):
        self.ctx = canvas.getContext("2d")
        self.x = canvas.width / 2
        self.y = canvas.height - 30
        self.dx = 2
        self.dy = -2
        self.paddleX = (canvas.width - paddleWidth) / 2
        self.rightPressed = False
        self.leftPressed = False
        self.score = 0
        self.lives = 3
        self.bricks = [[Brick() for r in range(brickRowCount)]
          for _ in range(brickColumnCount)]

    def collisionDetection(self):
        for c in range(brickColumnCount):
            for r in range(brickRowCount):
                b = self.bricks[c][r]
                if b.status == 1:
                    if (self.x > b.x) and (self.x < b.x + brickWidth) \
                            and (self.y > b.y) \
                            and (self.y < b.y + brickHeight):
                        self.dy = -self.dy
                        b.status = 0;
                        self.score += 1
                        if self.score == brickRowCount * brickColumnCount:
                            window.alert("YOU WIN, CONGRATS!")
                            document.location.reload()

    def drawBall(self):
        ctx = self.ctx
        ctx.beginPath()
        ctx.arc(self.x, self.y, ballRadius, 0, math.pi * 2)
        ctx.fillStyle = "#0095DD"
        ctx.fill()
        ctx.closePath()

    def drawPaddle(self):
        ctx = self.ctx
        ctx.beginPath()
        ctx.rect(self.paddleX,
                 canvas.height - paddleHeight,
                 paddleWidth,
                 paddleHeight)
        ctx.fillStyle = "#0095DD"
        ctx.fill()
        ctx.closePath()

    def drawBricks(self):
        for c in range(brickColumnCount):
            for r in range(brickRowCount):
                if self.bricks[c][r].status == 1:
                    brickX = (r * (brickWidth + brickPadding)) + brickOffsetLeft
                    brickY = (c * (brickHeight + brickPadding)) + brickOffsetTop
                    self.bricks[c][r].x = brickX
                    self.bricks[c][r].y = brickY
                    ctx = self.ctx
                    ctx.beginPath()
                    ctx.rect(brickX, brickY, brickWidth, brickHeight)
                    ctx.fillStyle = "#0095DD"
                    ctx.fill()
                    ctx.closePath()

    def drawScore(self):
        self.ctx.font = "16px Arial"
        self.ctx.fillStyle = "#0095DD"
        self.ctx.fillText(f"Score: {self.score}", 8, 20)

    def drawLives(self):
        self.ctx.font = "16px Arial";
        self.ctx.fillStyle = "#0095DD";
        self.ctx.fillText(f"Lives: {self.lives}", canvas.width - 65, 20)

    def draw(self, *args):
        self.ctx.clearRect(0, 0, canvas.width, canvas.height)
        self.drawBricks()
        self.drawBall()
        self.drawPaddle()
        self.drawScore()
        self.drawLives()
        self.collisionDetection()
        if (self.x + self.dx > canvas.width-ballRadius) or \
                (self.x + self.dx < ballRadius):
            self.dx = -self.dx
        if self.y + self.dy < ballRadius:
            self.dy = -self.dy;
        elif self.y + self.dy > canvas.height-ballRadius:
            if (self.x > self.paddleX) \
                    and (self.x < self.paddleX + paddleWidth):
                self.dy = -self.dy
            else:
                self.lives -= 1
                if not self.lives:
                    window.alert("GAME OVER")
                    document.location.reload()
                else:
                    self.x = canvas.width / 2
                    self.y = canvas.height - 30
                    self.dx = 3
                    self.dy = -3
                    self.paddleX = (canvas.width - paddleWidth) / 2

        if self.rightPressed and (self.paddleX < canvas.width - paddleWidth):
            self.paddleX += 7
        elif self.leftPressed and self.paddleX > 0:
            self.paddleX -= 7
        self.x += self.dx
        self.y += self.dy
        window.requestAnimationFrame(self.draw)

canvas = document["myCanvas"]
panel = Panel(document["myCanvas"])

@bind(document, "keydown")
def keyDownHandler(e):
    if e.keyCode == 39:
        panel.rightPressed = True
    elif e.keyCode == 37:
        panel.leftPressed = True

@bind(document, "keyup")
def keyUpHandler(e):
    if e.keyCode == 39:
        panel.rightPressed = False
    elif e.keyCode == 37:
        panel.leftPressed = False

@bind(document, "mousemove")
def mouseMoveHandler(e):
    relativeX = e.clientX - canvas.offsetLeft
    if relativeX > 0 and relativeX < canvas.width:
        panel.paddleX = relativeX - paddleWidth / 2

panel.draw()
</script>

</body>
</html>