jQuery(document).ready(function () {
  'use strict'

  console.log('  XXXXX  ')
  console.log(' XXXXXXX ')
  console.log('XXXXXXXXX')
  console.log('X  XXX  X')
  console.log('X   X   X')
  console.log('XXXXXXXXX')
  console.log(' XXX XXX ')
  console.log(' XXXXXXX ')
  console.log(' X X X X ')
  console.log('')
  console.log('Hello There !')
  console.log('Allons boire une bière !')
  console.log('florian@skullmasher.io')

  // Getting my age dynamically
  var myAge = function () {
    var myBirthday = new Date('March 18, 1992 00:45:00')
    var today = new Date()

    return (today.getFullYear() - myBirthday.getFullYear())
  }

  var $skullage = $('.skullAge')

  $skullage.text('')
  $skullage.append(myAge() + ' ans.')
})
