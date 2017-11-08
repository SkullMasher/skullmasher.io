/*
 * Devis page
 */
let initDevis = () => {
  // Hide the noJS warning
  const warningNOJS = document.getElementById('warningNOJS')
  warningNOJS.remove()

  // devis rates & time
  const ratesAndTime = [
    { // design&code for pages
      rate: 500,
      time: {
        min: 5,
        max: 9
      }
    },
    { // branding
      rate: 300,
      time: {
        min: 2,
        max: 3
      },
      businessCard: {
        rate: 300,
        time: 2
      },
      flyer: {
        rate: 300,
        time: 2
      }
    },
    { // blog
      rate: 500,
      time: {
        min: 2,
        max: 4
      },
      feed: {
        rate: 150,
        time: 1
      }
    },
    { // newsLetter
      rate: 300,
      time: {
        min: 3,
        max: 4
      }
    },
    { // teaching
      rate: 280,
      time: 1
    },
    { // hosting
      rate: 150,
      time: 1
    },
    { // support
      rate: 600,
      time: 1,
      publish: {
        rate: 600,
        time: 1
      }
    },
    { // deployement
      rate: 500,
      time: {
        min: 1,
        max: 2
      }
    }
  ]

  const $devisChoices = document.querySelectorAll('.devis-choices')
  const $price = document.querySelector('.devis-cost__price')
  const $averageTime = document.querySelector('.devis-time__days')
  const $averageTimeMin = document.querySelector('.devis-time__days-min')
  const $averageTimeMax = document.querySelector('.devis-time__days-max')
  const maquetteCount = document.getElementById('maquetteCount')

  // default value of website cost
  let price = 0
  let frontEndCost = 1000
  let frontEndTimeMin = 5 * 2
  let frontEndTimeMax = 9 * 2
  let averageTimeMin = frontEndTimeMin
  let averageTimeMax = frontEndTimeMax
  let averageTime = () => Math.ceil((averageTimeMin + averageTimeMax) / 2)

  let refreshDevisNav = () => {
    $price.textContent = price + frontEndCost
    $averageTime.textContent = averageTime()
    $averageTimeMin.textContent = averageTimeMin
    $averageTimeMax.textContent = averageTimeMax
  }
  refreshDevisNav() // run on page load to set the default value

  let updateDevisNav = (index, substract = false) => {
    if (index === 0) { // input range
      frontEndCost = ratesAndTime[index].rate * maquetteCount.value
      averageTimeMin -= frontEndTimeMin
      averageTimeMax -= frontEndTimeMax
      frontEndTimeMin = ratesAndTime[index].time.min * maquetteCount.value
      frontEndTimeMax = ratesAndTime[index].time.max * maquetteCount.value
      averageTimeMin += frontEndTimeMin
      averageTimeMax += frontEndTimeMax
      averageTime()
      refreshDevisNav()
    } else {
      if (substract) { // the index needs to substract his rates & time
        price -= ratesAndTime[index].rate
        refreshDevisNav()
      } else { // Just add the damn price and time
        price += ratesAndTime[index].rate
        refreshDevisNav()
      }
    }
  }

  // Show the range input current value & update nav
  maquetteCount.addEventListener('input', (event) => {
    maquetteCount.nextElementSibling.firstChild.textContent = maquetteCount.value
    // update nav
    updateDevisNav(0)
  })

  // Use foreach from arrays methods on NodeList
  const devisChoicesButtons = document.querySelectorAll('.devis-choices button')
  // Add click handling on devis-choice question
  Array.prototype.forEach.call(devisChoicesButtons, (choice, index) => {
    choice.addEventListener('click', (event) => {
      // Change the state of the current button being clicked
      choice.classList.toggle('btn--disabled')

      // Defined index to pass in the devisNav

      if (choice.nextElementSibling === null) { // Toggles the Sibling
        // Toggle the state of the YES button & update the devisNav
        if (choice.previousElementSibling.classList.toggle('btn--disabled')) {
          updateDevisNav(Math.ceil(index / 2), true) // substract
        } else {
          updateDevisNav(Math.ceil(index / 2))
        }
      } else {
        // Toggle the state of the NO button
        if (choice.nextElementSibling.classList.toggle('btn--disabled')) {
          updateDevisNav(index / 2 + 1)
        } else {
          updateDevisNav(index / 2 + 1, true) // Substract
        }
      }
    })
  })

  // fix the devis navbar
  const devisNav = document.querySelector('.devis-nav')
  const TopOfDevisNav = devisNav.offsetTop

  addEventListener('scroll', (event) => {
    // detect if the window has been scrolled past the devis-nav
    if (scrollY >= TopOfDevisNav) {
      devisNav.classList.add('devis-nav--fixed')
      document.body.style.paddingTop = `${devisNav.offsetHeight}px`
    } else {
      devisNav.classList.remove('devis-nav--fixed')
      document.body.style.paddingTop = `0px`
    }
  })
}

// let generatePDF = () => {

// }

const $generatePDF = document.querySelector('.devis-action button')

$generatePDF.addEventListener('click', (event) => {

})

addEventListener('DOMContentLoaded', (event) => {
  initDevis()
})
