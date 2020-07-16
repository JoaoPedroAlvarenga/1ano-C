// leia o código do item adquirido pelo consumidor e a quantidade,
// calculando e mostrando o valor a pagar. Não será necessário 
// exibir o produto e o valor, somente o valor final.
const element = document.querySelector("#value")

const table = {
  100: { product: "Cachorro quente", price: 1.70 },
  101: { product: "Bauru simples", price: 2.50 },
  102: { product: "Bauru com ovo", price: 3.00 },
  103: { product: "Hamburguer", price: 4.50 },
  104: { product: "Pão árabe", price: 5.00 },
  105: { product: "Refrigerante", price: 4.00 },
}

function getValue() {
  while (true) {
    const productCode = parseInt(
      window.prompt(`
      100 - R$ 1,70 - Cachorro quente
      101 - R$ 2,50 - Bauru simples
      102 - R$ 3,00 - Bauru com
      103 - R$ 4,50 - Hamburguer
      104 - R$ 5,00 - Pão árabe
      105 - R$ 4,00 - Refrigerante
      Código do item: `))

    if (table[productCode]) {
      const selectedItem = table[productCode]
      const productAmount = parseInt(window.prompt(`Quantidade de ${selectedItem.product}:`))
      
      if (productAmount) {
        const finalValue = productAmount * selectedItem.price
        return [finalValue, selectedItem]
      }
    }
  }
}

const [value, item] = getValue()
element.innerHTML = `O valor final do ${item.product} foi de R$ ${value.toFixed(2)}`