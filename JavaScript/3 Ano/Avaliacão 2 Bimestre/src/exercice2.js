// Leia 20 valores reais e  
// seu somatório utilizando a instrução do...while.
const element = document.querySelector("#value")

function getValues(maxValue) {
  let i = 1
  let sumNumbers = 0

  do {
    const newValue = window.prompt('Valor ' + i)

    if (newValue) {
      sumNumbers += parseInt(newValue)
      i++
    }
  } while (i <= maxValue);


  return sumNumbers
}

const value = getValues(20)
element.innerHTML = "Soma com do while: " + value
