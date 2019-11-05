Program Pzim ;
{Perguntar 7 idades e ver quais sao maiores de 18 anos}
var total, i, idade : Integer;

Begin


  for i:= 1 to 8 do begin
    writeln('Sua idade [' , i , ']');
    read(idade);
    if (idade >= 18)then 
    	total := total + 1;
  end;
  
  writeln('');
	writeln('Total de maiores: ', total);
  
End.