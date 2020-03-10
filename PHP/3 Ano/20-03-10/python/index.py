name = str(input('Seu nome: '))
number = int(input('Numero de vezes para eu repetir seu nome: '))

for i in range(number):
  print(i + 1, ' - ', name)