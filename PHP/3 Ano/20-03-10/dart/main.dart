import 'dart:io';

main() {
    print('Seu nome: ');
    var name = stdin.readLineSync();

    print('Quantida de vezes para repetirrepetir: ');
    var number = int.parse(stdin.readLineSync());


    for (var i = 0; i < number; i++) {
      print(name);
    }



}