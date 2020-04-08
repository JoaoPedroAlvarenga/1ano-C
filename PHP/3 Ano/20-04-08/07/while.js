// 7. Sorteie números aleatórios de 0 a 100, vá somando os números sorteados e imprimindo cada soma na tela.
// Só pare quando passar de 1.000;

let sum = 0;

do {
  sorted = Math.ceil(Math.random() * 100) - 1;
  console.log(`${sum} + ${sorted} = ${sum + sorted}`);
  sum += sorted;
} while (sum <= 1000);


console.log(sum)
