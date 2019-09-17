uses crt;
var i, idade, total : Integer;
begin
 for i:= 1 to 7 do
 begin
   write('Sua idade: ');
   read(idade);
   
   if (idade >= 18) then
	 begin
	    total := total + 1;
	    writeln('Maior de idade');
	 end;
 end; 

  writeln('Maiores de idade: ', total);
end.