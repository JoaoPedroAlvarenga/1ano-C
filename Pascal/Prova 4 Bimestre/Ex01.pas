Program Pzim ;
{Numeros de 100 a 200 e imprima separadamente os impares dos pares}
var i: Integer;
begin
	
	for i:= 100 to 200 do begin
		if(i mod 2 = 0)then
			writeln(i);
	end;

	writeln('-- Numeros impares --');

	for i := 100 to 200 do begin
		if(i mod 2 = 1)then
			writeln(i);
	end;
	
End.