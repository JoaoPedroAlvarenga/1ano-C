program NicePisco;
uses crt;

var myName: String;
var number, i: Integer;

begin
   writeln('Seu Nome: ');
   readln(myName);

   writeln('Quantidade de vezes para repetir: ');
   readln(number);

   for i:= 1 to number do begin
      writeln(myName);
   end;
  
end.
