// 6. Sorteie números aleatórios de 0 a 50, imprima todos na tela e só pare quando o número sorteado for 37; use o rand


do {
  sorted = Math.ceil(Math.random() * 50) - 1;
  console.log(sorted)
} while (sorted !== 37);
