Program Pzim ;
{NUmeros de 10 a 50 que são divisiveis por 3 and 7}
var i : Integer;
Begin


  for i:= 10 to 50 do
  begin
    if(i mod 3 = 0) and (i mod 7 = 0)then
      writeln(i);
  end;
  
End.