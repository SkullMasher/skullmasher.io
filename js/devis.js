/*
 * Devis page
 */
let initDevis = () => {
  // Hide the noJS warning
  const warningNOJS = document.getElementById('warningNOJS')
  warningNOJS.remove()

  // devis rates & time
  const RatesAndTime = [
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

  let updateDevisNav = (index) => {
    if (index === 0) { // input range
      frontEndCost = RatesAndTime[index].rate * maquetteCount.value
      averageTimeMin -= frontEndTimeMin
      averageTimeMax -= frontEndTimeMax
      frontEndTimeMin = RatesAndTime[index].time.min * maquetteCount.value
      frontEndTimeMax = RatesAndTime[index].time.max * maquetteCount.value
      averageTimeMin += frontEndTimeMin
      averageTimeMax += frontEndTimeMax
      averageTime()
      refreshDevisNav()
    } else {

    }

/*
    RatesAndTime.forEach((step, index) => {
      // Add to overall price if devis choice is enable
      let isChoiceEnable = false
      let isRangeInput = false
      let isDeployement = false
      // avoid undefined devis choices (deployement step)
      if ($devisChoices[index]) {
        // Get only the YES button.
        if ($devisChoices[index].querySelector('button')) {
          // Get the enabled ones
          if (!$devisChoices[index].querySelector('button').classList.contains('btn--disabled')) {
            isChoiceEnable = true
          }
        } else if ($devisChoices[index].querySelector('#maquetteCount')) {
          isChoiceEnable = true
          isRangeInput = true
        }
      } else {
        isDeployement = true
      }

      if (isChoiceEnable === true) {
        if (isRangeInput) {
          price += step.rate * (maquetteCount.value)
          $price.textContent = price

          averageTimeMin += step.time.min * maquetteCount.value
          averageTimeMax += step.time.max * maquetteCount.value
          $averageTimeMin.textContent = averageTimeMin
          $averageTimeMax.textContent = averageTimeMax
        } else {
          price += step.rate
          $price.textContent = price
          // If the object have a min or max time
          if (step.time.hasOwnProperty('min')) {
            averageTimeMin += step.time.min
            averageTimeMax += step.time.max
            $averageTimeMin.textContent = averageTimeMin
            $averageTimeMax.textContent = averageTimeMax
          } else {
            averageTimeMin += step.time
            averageTimeMax += step.time
            $averageTimeMin.textContent = averageTimeMin
            $averageTimeMax.textContent = averageTimeMax
          }
        }
      }

      if (isDeployement) {
        price += step.rate
        $price.textContent = price
        averageTimeMin += step.time.min * maquetteCount.value
        averageTimeMax += step.time.max * maquetteCount.value
        $averageTimeMin.textContent = averageTimeMin
        $averageTimeMax.textContent = averageTimeMax
      }
    })
    // Average the time after each min and max step have been added
    averageTime = Math.ceil((averageTimeMax + averageTimeMin) / 2)
    $averageTime.textContent = averageTime
*/
  }

  // Show the range input current value & update nav
  maquetteCount.addEventListener('input', (event) => {
    maquetteCount.nextElementSibling.firstChild.textContent = maquetteCount.value
    // update nav
    updateDevisNav(0)
  })

  // Use foreach from arrays methods on NodeList
  const devisChoicesButtons = document.querySelectorAll('.devis-choices button')

  Array.prototype.forEach.call(devisChoicesButtons, (choice) => {
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
      // console.log(choice)
    }
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
