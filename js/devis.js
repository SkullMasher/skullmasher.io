/*
 * Devis page
 */
let initDevis = () => {
  // Hide the noJS warning
  const warningNOJS = document.getElementById('warningNOJS')
  warningNOJS.remove()

  const $price = document.querySelector('devis-cost__price')
  const $averageTime = document.querySelector('devis-time__days')
  const $averageTimeMin = document.querySelector('devis-time__days-min')
  const $averageTimeMax = document.querySelector('devis-time__days-max')

  const price = 2250
  const averageTime = 10
  const averageTimeMin = 8
  const averageTimeMax = 12

  // devis rates & time. Rates are for a single day.
  const RatesAndTime = [
    { // design
      rate: 300,
      time: {
        min: 2,
        max: 3
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
    { // frontEnd
      rate: 300,
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
      time: 4
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

  // Show the range input current value & add update nav
  const maquetteCount = document.getElementById('maquetteCount')
  maquetteCount.addEventListener('input', (event) => {
    maquetteCount.nextElementSibling.firstChild.textContent = maquetteCount.value
    // update nav
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

  const devisChoices = document.querySelectorAll('.devis-choices button')
  // Use foreach from arrays methods on NodeList
  Array.prototype.forEach.call(devisChoices, (choice) => {
    choice.addEventListener('click', (event) => {
      choice.classList.toggle('btn--disabled')
      // Toggles the Sibling
      if (choice.nextElementSibling === null) {
        choice.previousElementSibling.classList.toggle('btn--disabled')
      } else {
        choice.nextElementSibling.classList.toggle('btn--disabled')
      }
    }, false)

    if (!choice.classList.contains('btn--disabled')) {
      // TODO: Find what user choosed in parents element
      console.log(choice)
    }
  })
}

addEventListener('DOMContentLoaded', (event) => {
  initDevis()
})
