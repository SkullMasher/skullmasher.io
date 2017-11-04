/*
 * Devis page
 */
let initDevis = () => {
  // Hide the noJS warning
  const warningNOJS = document.getElementById('warningNOJS')
  warningNOJS.remove()

  // Show the range input current value
  const maquetteCount = document.getElementById('maquetteCount')
  maquetteCount.addEventListener('input', (event) => {
    maquetteCount.nextElementSibling.firstChild.textContent = maquetteCount.value
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
    }
  })
}

addEventListener('DOMContentLoaded', (event) => {
  initDevis()
})
