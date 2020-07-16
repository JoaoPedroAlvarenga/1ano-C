// Leia 20 valores reais e  
// calcule seu somatório utilizando a instrução while.
const element = document.querySelector("#value")

function getValues(maxValue) {
  let i = 1
  let sumNumbers = 0

  while (i <= maxValue) {
    const newValue = window.prompt('Valor ' + i)

    if (newValue) {
      sumNumbers += parseInt(newValue)
      i++
    }
  }

  return sumNumbers
}

const value = getValues(2)
element.innerHTML = "Soma com while: " + value
