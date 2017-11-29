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
      rate: 625,
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
      option: [
        { // businessCard
          rate: 300,
          time: 2
        },
        { // flyer
          rate: 300,
          time: 2
        }
      ]
    },
    { // blog
      rate: 500,
      time: {
        min: 2,
        max: 4
      },
      option: [
        { // feed
          rate: 150,
          time: 1
        }
      ]
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
      time: 0,
      option: [
        { // maintainWebsite
          rate: 600,
          time: 0
        }
      ]
    },
    { // deployement
      rate: 500,
      time: {
        min: 1,
        max: 2
      }
    }
  ]

  const $price = document.querySelector('.devis-cost__price')
  const $averageTime = document.querySelector('.devis-time__days')
  const $averageTimeMin = document.querySelector('.devis-time__days-min')
  const $averageTimeMax = document.querySelector('.devis-time__days-max')
  const maquetteCount = document.getElementById('maquetteCount')

  // default value of website cost
  let price = 0
  let frontEndCost = 1250
  let frontEndTimeMin = 5 * 2
  let frontEndTimeMax = 9 * 2
  let averageTimeMin = frontEndTimeMin
  let averageTimeMax = frontEndTimeMax
  let averageTime = () => Math.ceil((averageTimeMin + averageTimeMax) / 2)

  let setDevisNavText = () => {
    $price.textContent = price + frontEndCost
    $averageTime.textContent = averageTime()
    $averageTimeMin.textContent = averageTimeMin
    $averageTimeMax.textContent = averageTimeMax
  }
  setDevisNavText() // run on page load to set the default value

  // Set the devis price and time based on user choice
  let updateDevisNav = (index, substract = false, toggle = false) => {
    if (index === 0) { // input range
      frontEndCost = ratesAndTime[index].rate * maquetteCount.value
      averageTimeMin -= frontEndTimeMin
      averageTimeMax -= frontEndTimeMax
      if (maquetteCount.value > 5) {
        frontEndTimeMin = Math.ceil((ratesAndTime[index].time.min * maquetteCount.value) / 1.15)
        frontEndTimeMax = Math.ceil((ratesAndTime[index].time.max * maquetteCount.value) / 1.15)
      } else {
        frontEndTimeMin = ratesAndTime[index].time.min * maquetteCount.value
        frontEndTimeMax = ratesAndTime[index].time.max * maquetteCount.value
      }
      averageTimeMin += frontEndTimeMin
      averageTimeMax += frontEndTimeMax
      averageTime()
      setDevisNavText()
    } else {
      if (substract) { // the index needs to substract his rates & time
        price -= ratesAndTime[index].rate
        if (ratesAndTime[index].time.hasOwnProperty('min')) {
          averageTimeMin -= ratesAndTime[index].time.min
          averageTimeMax -= ratesAndTime[index].time.max
        } else {
          averageTimeMin -= ratesAndTime[index].time
          averageTimeMax -= ratesAndTime[index].time
        }
        setDevisNavText()
      } else { // Just add the damn price and time
        price += ratesAndTime[index].rate
        if (ratesAndTime[index].time.hasOwnProperty('min')) {
          averageTimeMin += ratesAndTime[index].time.min
          averageTimeMax += ratesAndTime[index].time.max
        } else {
          averageTimeMin += ratesAndTime[index].time
          averageTimeMax += ratesAndTime[index].time
        }
        setDevisNavText()
      }
    }
  }

  // Show the range input current value & update nav
  maquetteCount.addEventListener('input', (event) => {
    maquetteCount.nextElementSibling.firstChild.textContent = maquetteCount.value
    updateDevisNav(0)
  })

  // Use foreach from arrays methods on NodeList
  const devisChoicesButtons = document.querySelectorAll('.devis-choices button')
  // Add click handling on devis-choice question
  Array.prototype.forEach.call(devisChoicesButtons, (choice, index) => {
    choice.addEventListener('click', (event) => {
      // Change the state of the current button being clicked
      choice.classList.toggle('btn--disabled')

      if (choice.nextElementSibling === null) { // Toggles the Sibling
        // Toggle the state of the YES button & update the devisNav
        if (choice.previousElementSibling.classList.toggle('btn--disabled')) {
          updateDevisNav(Math.ceil(index / 2), true) // Substract
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

  let updateDevisNavToggle = (index, optionIndex, substract) => {
    if (substract) { // the index needs to substract his rates & time
      price -= ratesAndTime[index].option[optionIndex].rate
      if (ratesAndTime[index].option[optionIndex].time.hasOwnProperty('min')) {
        averageTimeMin -= ratesAndTime[index].option[optionIndex].time.min
        averageTimeMax -= ratesAndTime[index].option[optionIndex].time.max
      } else {
        averageTimeMin -= ratesAndTime[index].option[optionIndex].time
        averageTimeMax -= ratesAndTime[index].option[optionIndex].time
      }
      setDevisNavText()
    } else { // Just add the damn price and time
      price += ratesAndTime[index].option[optionIndex].rate
      if (ratesAndTime[index].option[optionIndex].time.hasOwnProperty('min')) {
        averageTimeMin += ratesAndTime[index].option[optionIndex].time.min
        averageTimeMax += ratesAndTime[index].option[optionIndex].time.max
      } else {
        averageTimeMin += ratesAndTime[index].option[optionIndex].time
        averageTimeMax += ratesAndTime[index].option[optionIndex].time
      }
      setDevisNavText()
    }
  }

  const devisToggleOptions = document.querySelectorAll('.toggle')
  Array.prototype.forEach.call(devisToggleOptions, (toggle) => {
    toggle.addEventListener('change', (event) => {
      // toggle style of the price label & update the devis nav
      if (toggle.checked) {
        toggle.parentElement.nextElementSibling.querySelector('.badge').classList.toggle('badge--disabled')
        updateDevisNavToggle(toggle.dataset.choiceid, toggle.dataset.optionid)
      } else {
        toggle.parentElement.nextElementSibling.querySelector('.badge').classList.toggle('badge--disabled')
        updateDevisNavToggle(toggle.dataset.choiceid, toggle.dataset.optionid, true)
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

  const $generatePDF = document.querySelector('.devis-action button')

  $generatePDF.addEventListener('click', (event) => {
    let date = new Date()
    let year = date.getFullYear()
    let month = prefixZero(date.getMonth())
    let day = prefixZero(date.getDate())
    let hour = prefixZero(date.getHours())
    let minutes = prefixZero(date.getMinutes())
    let seconds = prefixZero(date.getSeconds())

    var pdf = new jsPDF()
    // Fill with background color
    pdf.setFillColor(250,250,250)
    pdf.rect(0, 0, 210, 297, 'F')
    // Text content
    pdf.text(20, 20, 'Devis site web')
    pdf.setFontSize(12)
    pdf.text(20, 30, 'Florian Ledru')
    pdf.text(20, 35, '06 25 97 05 61')
    pdf.text(20, 40, 'N° SIREN : 793 553 448')
    pdf.text(180, 30, `${prefixZero(day)}/${prefixZero(month)}/${year}`, null, null, 'right')
    pdf.setFontSize(10)
    pdf.text(20, 50, `Dispensé d’immatriculation au registre du commerce
et des sociétés (RCS) et au répertoire des métiers
(RM)`)
    pdf.setFillColor(230,230,230)
    pdf.rect(20, 70, 160, 15, 'F')
    pdf.setFontSize(12)
    pdf.text(40, 79, 'DÉSIGNATION')
    pdf.text(110, 79, 'Qté')
    pdf.text(130, 79, 'PU HT')
    pdf.text(150, 79, 'TOTAL HT')
    // Show a downlod prompt to client
    pdf.save(`DEVIS-site-web_skullmasherio_${year}${month}${day}-${hour}${minutes}${seconds}.pdf`)
  })
}

addEventListener('DOMContentLoaded', (event) => {
  initDevis()
})
