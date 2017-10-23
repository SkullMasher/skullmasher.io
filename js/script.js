'use strict'

var greetingMessage = function greetingMessage () {
  console.log('  #####   ')
  console.log(' #######  ')
  console.log('#  ###  # ' + ' Hello There')
  console.log('#   #   # ')
  console.log('######### ' + ' Come contribute to the code !')
  console.log(' ### ###  ')
  console.log('  #####   ' + ' github.com/SkullMasher/skullmasher.io')
  console.log('  # # #   ')
}

// Canvas Support & positionning
var canvas = document.querySelector('#canvas')
var header = document.querySelector('header')

var isCanvasSupported = function isCanvasSupported () {
  // Thx modernizr
  var kek = document.createElement('canvas')
  return !!(kek.getConelemtext && kek.getContext('2d'))
}

var prepareCanvas = function prepareCanvas () {
  canvas.style.display = 'block'
  header.style.backgroundImage = 'initial'
}

// Helper function
var random = function random (min, max) {
  return Math.floor(Math.random() * (max - min) + min)
}

// Canvas size
var canvasHeight = document.querySelector('header').clientHeight
// const canvasHeight = 300

// set context of the canvas 2d or webGL
var ctx = canvas.getContext('2d', { alpha: true })

// Colors
var rectColor = 'rgba(38,38,38,1)'

var colorPool = [
// { r: 38, g: 38, b: 38 }, // main grey color
{ r: 54, g: 54, b: 54 }, // lighter grey color
  { r: 69, g: 163, b: 64 // matrix green grey color
  }]
// const rectHighlight = 'rgba(68,163,64,1)'

// Square Dimension
var squareD = 6

// spacing beetween squares
var spacing = 2

// Initialize some squares helper methods and variables
var squaresLength = 0
var squares = []

/*
 * Instead of doing a count on each square object we check if the lucky number
 * of the object match the number in the god count to have much better
 * performance. God count gets reset at the when it's egal to the number of
 * of total squares on the screen is reach.
 * The god Count is used by the square.breath prototype function.
 */
var godCount = 0

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
    ctx.fillStyle = 'rgba(69,163,64,' + this.opacity + ')'
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
var fillCanvas = function fillCanvas () {
  var i = void 0,
    j = void 0,
    x = void 0,
    y = void 0
  j = i = 1
  x = y = 0

  // Clear the canvas
  // ctx.clearRect(x, y, canvas.width, canvas.height)

  ctx.fillStyle = rectColor // Default squares color

  while (y < canvas.height) {
    y = spacing * i + squareD * (i - 1) // Vertical line
    while (x < canvas.width) {
      x = spacing * j + squareD * (j - 1) // Horizontal line
      squares.push(new Square(x, y)) // Store all the squares coordinates
      j++
    }
    j = x = 0
    i++
  }
  y = i = 0

  // Draw all the rectangle from stores coordinates
  squares.forEach(function (sqr) {
    sqr.draw()
  })
  squaresLength = squares.length
}

var init = function init () {
  canvas.width = innerWidth
  canvas.height = canvasHeight

  fillCanvas()
}

// Animaiton
var animate = function animate () {
  squares.forEach(function (sqr) {
    sqr.breath()
  })
  if (godCount === squaresLength) {
    godCount = 0
  }
  godCount++
  requestAnimationFrame(animate)
}

addEventListener('DOMContentLoaded', function (event) {
  greetingMessage()
  if (isCanvasSupported) {
    prepareCanvas()
    init()
    animate()
  }
})
