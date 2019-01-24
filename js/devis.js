/*
 * Devis page
 */
let initDevis = () => {
  // Hide the noJS warning
  const warningNOJS = document.getElementById('warningNOJS')
  warningNOJS.remove()

  // devis rates & time
  const devisConstant = [
    {
      text: 'Design et Intégration d\'une maquette\nweb sur mesure',
      rate: 625,
      time: {
        min: 5,
        max: 9
      }
    },
    {
      text: 'Logo',
      rate: 300,
      time: {
        min: 2,
        max: 3
      },
      option: [
        {
          text: 'Carte de visite',
          rate: 300,
          time: 2
        },
        {
          text: 'Flyer',
          rate: 300,
          time: 2
        }
      ]
    },
    {
      text: 'Foncionalitée de blogging',
      rate: 500,
      time: {
        min: 2,
        max: 4
      },
      option: [
        {
          text: 'Intégration des recommendations clients',
          rate: 150,
          time: 1
        },
        {
          text: 'Intégration d\'un fil d\'actualité issus d\'un réseau social',
          rate: 150,
          time: 1
        }
      ]
    },
    {
      text: 'Formation',
      rate: 280,
      time: 1
    },
    {
      text: 'Recommendation d\'hébergement web, mail et nom de domaine.',
      rate: 150,
      time: 1
    },
    {
      text: 'Mainteance, Support et Assistance',
      rate: 600,
      time: 0
    },
    {
      text: 'Déploiement du site',
      rate: 500,
      time: {
        min: 1,
        max: 2
      }
    }
  ]

  const $price = document.querySelector('.js-devisCostPrice')
  const $averageTime = document.querySelector('.js-devisTimeDays')
  const $averageTimeMin = document.querySelector('.js-devisTimeDaysMin')
  const $averageTimeMax = document.querySelector('.js-devisTimeDaysMax')
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
      frontEndCost = devisConstant[index].rate * maquetteCount.value
      averageTimeMin -= frontEndTimeMin
      averageTimeMax -= frontEndTimeMax
      if (maquetteCount.value > 5) {
        frontEndTimeMin = Math.ceil((devisConstant[index].time.min * maquetteCount.value) / 1.15)
        frontEndTimeMax = Math.ceil((devisConstant[index].time.max * maquetteCount.value) / 1.15)
      } else {
        frontEndTimeMin = devisConstant[index].time.min * maquetteCount.value
        frontEndTimeMax = devisConstant[index].time.max * maquetteCount.value
      }
      averageTimeMin += frontEndTimeMin
      averageTimeMax += frontEndTimeMax
      averageTime()
      setDevisNavText()
    } else {
      if (substract) { // the index needs to substract his rates & time
        price -= devisConstant[index].rate
        if (devisConstant[index].time.hasOwnProperty('min')) {
          averageTimeMin -= devisConstant[index].time.min
          averageTimeMax -= devisConstant[index].time.max
        } else {
          averageTimeMin -= devisConstant[index].time
          averageTimeMax -= devisConstant[index].time
        }
        setDevisNavText()
      } else { // Just add the damn price and time
        price += devisConstant[index].rate
        if (devisConstant[index].time.hasOwnProperty('min')) {
          averageTimeMin += devisConstant[index].time.min
          averageTimeMax += devisConstant[index].time.max
        } else {
          averageTimeMin += devisConstant[index].time
          averageTimeMax += devisConstant[index].time
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
      const updateBtnStyles = () => {
        choice.classList.remove('btn--disabled') // current buttons
        // update the sibling style
        if (choice.nextElementSibling === null) {
          choice.previousElementSibling.classList.add('btn--disabled')
        } else {
          choice.nextElementSibling.classList.add('btn--disabled')
        }
      }
      // Update if a disabled button is clicked
      if (choice.classList.contains('btn--disabled')) {
        // Detect if yes or no
        if (choice.nextElementSibling === null) {
          updateDevisNav(Math.ceil(index / 2)) // YES is selected
        } else {
          updateDevisNav(Math.ceil(index / 2 + 1), true) // Substract
        }
        // Update buttons style
        updateBtnStyles()
      }
    })
  })

  let updateDevisNavToggle = (index, optionIndex, substract) => {
    if (substract) { // the index needs to substract his rates & time
      price -= devisConstant[index].option[optionIndex].rate
      if (devisConstant[index].option[optionIndex].time.hasOwnProperty('min')) {
        averageTimeMin -= devisConstant[index].option[optionIndex].time.min
        averageTimeMax -= devisConstant[index].option[optionIndex].time.max
      } else {
        averageTimeMin -= devisConstant[index].option[optionIndex].time
        averageTimeMax -= devisConstant[index].option[optionIndex].time
      }
      setDevisNavText()
    } else { // Just add the damn price and time
      price += devisConstant[index].option[optionIndex].rate
      if (devisConstant[index].option[optionIndex].time.hasOwnProperty('min')) {
        averageTimeMin += devisConstant[index].option[optionIndex].time.min
        averageTimeMax += devisConstant[index].option[optionIndex].time.max
      } else {
        averageTimeMin += devisConstant[index].option[optionIndex].time
        averageTimeMax += devisConstant[index].option[optionIndex].time
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

  // fix the devis navbar when scrolled past it
  const devisNav = document.querySelector('.js-devisNav')
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
    const fillDevisTable = () => {
      let height = 95 // height where the devis table text start
      let lineHeight = 15
      // find user choice
      let userChoice = [
        {
          text: "Design et Intégration d'une maquette\nweb sur mesure",
          quantity: maquetteCount.value,
          unitPrice: devisConstant[0].rate,
          totalPrice: frontEndCost
        }
      ]

      userChoice[3] = {
        text: 'trippin on music\nArt as Cartasis',
        quantity: 6666,
        unitPrice: 4266,
        totalPrice: 7086
      }

      userChoice[4] = {
        text: 'Coding this from spain',
        quantity: 42,
        unitPrice: 87,
        totalPrice: 879
      }

      userChoice.forEach((choice) => {
        pdf.text(22, height, choice.text)
        pdf.text(110, height, choice.quantity.toString())
        pdf.text(130, height, choice.unitPrice.toString())
        pdf.text(150, height, choice.totalPrice.toString())
        height += lineHeight
      })
    }

    let date = new Date()
    let year = date.getFullYear()
    let month = prefixZero(date.getMonth())
    let day = prefixZero(date.getDate())
    let hour = prefixZero(date.getHours())
    let minutes = prefixZero(date.getMinutes())
    let seconds = prefixZero(date.getSeconds())

    var pdf = new jsPDF()
    // Fill with background color
    pdf.setFillColor(250, 250, 250)
    pdf.rect(0, 0, 210, 297, 'F')
    // Text content
    pdf.text(20, 20, 'Devis site web')
    pdf.setFontSize(12)
    pdf.text(20, 30, 'Florian Ledru')
    pdf.text(20, 35, '06 25 97 05 61')
    pdf.text(20, 40, 'N° SIREN : 793 553 448')
    pdf.text(180, 30, `${day}/${month}/${year}`, null, null, 'right')
    pdf.setFontSize(10)
    pdf.text(20, 50, "Dispensé d'immatriculation au registre du commerce\net des sociétés (RCS) et au répertoire des métiers (RM)")
    pdf.setFillColor(230, 230, 230)
    pdf.rect(20, 70, 160, 15, 'F')
    pdf.setFontSize(12)
    pdf.text(40, 79, 'DÉSIGNATION')
    pdf.text(110, 79, 'Qté')
    pdf.text(130, 79, 'PU HT')
    pdf.text(150, 79, 'TOTAL HT')
    fillDevisTable() // Add line to devis table based on user choice
    // Show a downlod prompt to client
    pdf.save(`DEVIS-site-web_skullmasherio_dev.pdf`)
    // pdf.save(`DEVIS-site-web_skullmasherio_${year}${month}${day}-${hour}${minutes}${seconds}.pdf`)
  })
}

addEventListener('DOMContentLoaded', (event) => {
  initDevis()
})
