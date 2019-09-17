Program Pzim ;
uses crt;
var i, total, idade: Integer;

Begin
   for i:= 1 to 7 do
   begin
  	write('Sua idade: ');
  	read(idade);
  	if (idade >= 18)then
  	total := total + 1;
   end;
   
   write('Maiores de idade: ' , total);
End.