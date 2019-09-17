Var i: integer;
        peso, menor, maior, outroPeso, pesoHomem, mediaTurma, mediaHomens: real;
        sexo: string;
Begin
  textcolor (yellow);
  writeln ('Pesos da turma. Digite f para feminino e m para masculino.');
  writeln ('   ');
  textcolor (white);
    write ('Entre com o 1º peso: ');
    readln (peso);
    write ('Entre com o sexo: ');
    readln (sexo);
    menor:= peso;
    maior:= peso;
    for i:= 2 to 5 do    //até 5 para testar.
    begin
        textcolor (white);
        write ('Entre com o ' , i , ' º peso: ');
        readln (peso);
        write ('Entre com o sexo: ');
        readln (sexo);
        begin
            if (sexo = 'm') then
                pesoHomem:= peso
        end;
        if (peso < menor) then
            menor:= peso
        else if (peso > maior) then
            maior:= peso
        else
            outroPeso:= peso;    
  end;
  mediaTurma:= (outroPeso + menor + maior) / 5;
  mediaHomens:= pesoHomem / 5;
  writeln ('Menor peso é de: ' , menor);
  writeln ('Maior peso é de: ' , maior);
  writeln ('A média de peso da turma é: ' , mediaTurma);
  writeln ('A média de peso dos homens é: ' , mediaHomens);
readkey;
End.