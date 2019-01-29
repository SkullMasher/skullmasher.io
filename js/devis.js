/*
 * Devis page
 */
 let initDevis = () => {
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
    text: 'Recommendation d\'hébergement web,\nmail et nom de domaine.',
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

  const setDevisNavText = () => {
    $price.textContent = price + frontEndCost
    $averageTime.textContent = averageTime()
    $averageTimeMin.textContent = averageTimeMin
    $averageTimeMax.textContent = averageTimeMax
  }
  setDevisNavText() // run on page load to set the default value

  // Set the devis price and time based on user choice
  const updateDevisNav = (index, substract = false, toggle = false) => {
    const maquetteCountVal = parseInt(maquetteCount.value)
    if (index === 0) { // input range
      frontEndCost = devisConstant[index].rate * maquetteCountVal
      averageTimeMin -= frontEndTimeMin
      averageTimeMax -= frontEndTimeMax
      // Less time needed with more than 5 templates
      if (maquetteCountVal > 5) {
        frontEndTimeMin = Math.ceil((devisConstant[index].time.min * maquetteCountVal) / 1.15)
        frontEndTimeMax = Math.ceil((devisConstant[index].time.max * maquetteCountVal) / 1.15)
      } else {
        frontEndTimeMin = devisConstant[index].time.min * maquetteCountVal
        frontEndTimeMax = devisConstant[index].time.max * maquetteCountVal
      }
      averageTimeMin += frontEndTimeMin
      averageTimeMax += frontEndTimeMax
      averageTime()
      setDevisNavText()
    } else {
      if (substract) { // Substract rates & time at curent index
        price -= devisConstant[index].rate
        if (devisConstant[index].time.hasOwnProperty('min')) {
          averageTimeMin -= devisConstant[index].time.min
          averageTimeMax -= devisConstant[index].time.max
        } else {
          averageTimeMin -= devisConstant[index].time
          averageTimeMax -= devisConstant[index].time
        }
        setDevisNavText()
      } else { // Add the damn price and time
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

  // Maquette count input code
  let lastValidMaquetteCount = 2
  const isMaquetteCountValueCorrect = () => {
    const val = parseInt(maquetteCount.value)
    const min = parseInt(maquetteCount.min)
    const max = parseInt(maquetteCount.max)

    if (val >= min && val <= max) {
      lastValidMaquetteCount = val
      updateDevisNav(0)
      return true
    } else {
      // put back the default if the user typed something garbage
      console.log('reset')
      maquetteCount.value = lastValidMaquetteCount
      updateDevisNav(0)
      return false
    }
  }

  maquetteCount.addEventListener('change', (event) => {
    isMaquetteCountValueCorrect()
  });

  const $addTemplate = document.querySelector('.js-maquetteCountAdd')
  $addTemplate.addEventListener('click', () => {
    maquetteCount.value++
    isMaquetteCountValueCorrect()
  })

  const $subtractTemplate = document.querySelector('.js-maquetteCountSub')
  $subtractTemplate.addEventListener('click', () => {
    maquetteCount.value--
    isMaquetteCountValueCorrect()
  })

  // Handle yes or no buttons
  const devisChoicesButtons = document.querySelectorAll('.js-devisChoices button')
  devisChoicesButtons.forEach((choice, index) => {
    const className = 'btn--success'
    choice.addEventListener('click', (event) => { // click event to each buttons
      if (!choice.classList.contains(className)) {
        if (choice.nextElementSibling === null) { // YES is selected
          updateDevisNav(Math.ceil(index / 2))
          choice.previousElementSibling.classList.remove(className)
        } else { // NO is selected
          updateDevisNav(Math.ceil(index / 2 + 1), true)
          choice.nextElementSibling.classList.remove(className)
        }
        choice.classList.add(className) // current buttons
      }
    })
  })

  // Handle the toggles after the yes or no button
  const updateDevisNavToggle = (index, optionIndex, substract) => {
    if (substract) { // the index needs to substract his rates & time
      price -= devisConstant[index].option[optionIndex].rate
      if (devisConstant[index].option[optionIndex].time.hasOœnProperty('min')) {
        averageTimeMin -= devisConstant[index].option[optionIndex].time.min
        averageTimeMax -= devisConstant[index].option[optionIndex].time.max
      } else {
        averageTimeMin -= devisConstant[index].option[optionIndex].time
        averageTimeMax -= devisConstant[index].option[optionIndex].time
      }
      setDevisNavText()
    } else { // Just add the price and time
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

  const devisToggleOptions = document.querySelectorAll('.js-devisToggle')
  devisToggleOptions.forEach((toggle) => {
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
    const date = new Date()
    const year = date.getFullYear()
    const month = prefixZero(date.getMonth()+1)
    const day = prefixZero(date.getDate())
    const hour = prefixZero(date.getHours())
    const minutes = prefixZero(date.getMinutes())
    const seconds = prefixZero(date.getSeconds())

    const pdf = new jsPDF()

    const devisHeader = () => {
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
    }

    const devisContent = () => {
      let height = 95 // height where the devis table text start
      let lineHeight = 15

      const tableHeader = () => {
        pdf.setFillColor(230, 230, 230)
        pdf.rect(20, 70, 160, 15, 'F')
        pdf.setFontSize(12)
        pdf.text(40, 79, 'DÉSIGNATION')
        pdf.text(110, 79, 'Qté')
        pdf.text(130, 79, 'PU HT')
        pdf.text(150, 79, 'TOTAL HT')
      }

      const tableBody = () => {
        // find user choice
        const $devisChoices = document.querySelectorAll('.js-devisChoices')
        // console.log($devisChoices.values())
        $devisChoices.forEach((choice, index) => {
          // if (index === 1) { // How many templates
          //     pdf.text(22, height, choice.text)
          //     pdf.text(110, height, choice.quantity.toString())
          //     pdf.text(130, height, choice.unitPrice.toString())
          //     pdf.text(150, height, choice.totalPrice.toString())
          //     height += lineHeight
          // }

          if (choice.lastElementChild.classList.contains('btn--success')) {
            const txt = devisConstant[index].text
            const quantity = () => {
              if (devisConstant[index].time.hasOwnProperty('max')) {
                return devisConstant[index].time.max
              }

              return devisConstant[index].time
            }
            const unitPrice = devisConstant[index].rate
            const totalPrice = unitPrice * quantity()

            pdf.text(22, height, txt)
            pdf.text(110, height, quantity().toString())
            pdf.text(130, height, unitPrice.toString())
            pdf.text(150, height, totalPrice.toString())
            height += lineHeight
          }
        })
      }
      tableHeader()
      tableBody()
    }

    devisHeader()
    devisContent()
    // Show a downlod prompt to client
    pdf.save(`DEVIS-site-web_skullmasherio_dev.pdf`)
    // pdf.save(`DEVIS-site-web_skullmasherio_${year}${month}${day}-${hour}${minutes}${seconds}.pdf`)
  })
}

addEventListener('DOMContentLoaded', (event) => {
  initDevis()
})
