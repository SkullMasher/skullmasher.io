var greetingMessage = function () {
  console.log('  #####   ')
  console.log(' #######  ')
  console.log('#  ###  # ' + ' Hello There')
  console.log('#   #   # ')
  console.log('######### ' + ' Come contribute to the code !')
  console.log(' ### ###  ')
  console.log('  #####   ' + ' github.com/SkullMasher/skullmasher.io')
  console.log('  # # #   ')
}

/*
 * Helper function
 */
const random = (min, max) => {
  return Math.floor(Math.random() * (max - min) + min)
}

const isCanvasSupported = () => { // Thx modernizr
  var testCanvas = document.createElement('canvas')
  return !!(testCanvas.getConelemtext && testCanvas.getContext('2d'))
}

const prefixZero = (number) => { // transform 1 to 01
  if (number < 10) {
    return `0${number}`
  }
  return number
}

/*
 * Canvas
 */
const canvas = document.querySelector('#canvas')
const header = document.querySelector('header')

// Square Dimension
const squareD = 6

// spacing beetween squares
const spacing = 2

const prepareCanvas = () => {
  canvas.style.display = 'block'
  header.style.backgroundImage = 'initial'
}

// set context of the canvas 2d or webGL
const ctx = canvas.getContext('2d', {alpha: true})

// Colors
const rectColor = 'rgba(38,38,38,1)'

const colorPool = [
  // { r: 38, g: 38, b: 38 }, // main grey color
  { r: 54, g: 54, b: 54 }, // lighter grey color
  { r: 69, g: 163, b: 64 } // matrix green grey color
]

let squaresLength = 0
const squares = []

/*
 * Check if the lucky number of the object match the number in the god count
 * to have much better performance. God count gets reset at the when it's egual
 * to the number of squares on the screen is reach. godCount is incremented by
 * the requestAnimationFrame.
 */
let godCount = 0

// Square Object
function Square (x, y, opacity, opacityAccel) {
  this.x = x
  this.y = y
  this.color = rectColor
  this.opacity = opacity || 0.5
  this.opacityAccel = opacityAccel || -0.01
  this.squareIsBreathing = false
  this.luckyNumber = random(0, squaresLength)
}

Square.prototype.draw = function () {
  ctx.fillStyle = this.color
  ctx.fillRect(this.x, this.y, squareD, squareD)
}

Square.prototype.breath = function () {
  // Make a rectangle breath
  if (godCount === this.luckyNumber) {
    this.squareIsBreathing = true
    this.luckyNumber = random(0, squaresLength)
  }

  if (this.squareIsBreathing) {
    ctx.clearRect(this.x, this.y, squareD, squareD)
    ctx.fillStyle = `rgba(69,163,64,${this.opacity})`
    ctx.fillRect(this.x, this.y, squareD, squareD)
    this.opacity += this.opacityAccel // Make it glow !
  }

  if (this.opacity > 0.6) {
    this.opacityAccel = -this.opacityAccel // Fading away...
  } else if (this.opacity < 0.2) {
    // breathing cycle complete
    ctx.fillStyle = rectColor
    ctx.fillRect(this.x, this.y, squareD, squareD)
    this.squareIsBreathing = false
    this.opacityAccel = -this.opacityAccel // Get ready to glow again
    this.opacity = 0.2
  }
}

// Fill the canvas with squares
const fillCanvas = () => {
  let i, j, x, y
  j = i = 1
  x = y = 0

  // Clear the canvas
  // ctx.clearRect(x, y, canvas.width, canvas.height)

  ctx.fillStyle = rectColor // Default squares color

  while (y < canvas.height) {
    y = (spacing * i) + (squareD * (i - 1)) // Vertical line
    while (x < canvas.width) {
      x = (spacing * j) + (squareD * (j - 1)) // Horizontal line
      squares.push(new Square(x, y)) // Store all the squares object
      j++
    }
    j = x = 0
    i++
  }
  y = i = 0

  // Draw all the rectangle from stores coordinates
  squares.forEach((sqr) => {
    sqr.draw()
  })
  squaresLength = squares.length
}

const initCanvas = () => {
  const canvasHeight = header.clientHeight
  const canvasWidth = header.clientWidth

  canvas.width = canvasWidth
  canvas.height = canvasHeight

  fillCanvas()
}

// Animation
const animate = () => {
  squares.forEach((sqr) => {
    sqr.breath()
  })
  if (godCount === squaresLength) { godCount = 0 }
  godCount++
  requestAnimationFrame(animate)
}

addEventListener('DOMContentLoaded', (event) => {
  greetingMessage()
  if (isCanvasSupported) {
    prepareCanvas()
    initCanvas()
    animate()
  }
})

addEventListener('resize', (event) => {
  initCanvas()
})
