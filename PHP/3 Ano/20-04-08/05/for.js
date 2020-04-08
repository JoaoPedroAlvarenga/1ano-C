// 5. Exiba a soma de todos os números até o máximo informado pelo usuário (formulário)

let maxNumer = 5
let sum = 0;

for (let index = 1; index <= maxNumer; index++) {
  console.log(`${sum} + ${index} = ${sum += index}`)
}