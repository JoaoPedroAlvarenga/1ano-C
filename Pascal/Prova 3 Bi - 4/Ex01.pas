Program Pzim ;
{Números de 100 a 200 e imprima separadamente os impares dos pares}
var i : Integer;
Begin
	for i:= 100 downto 200 do begin
	    if (i mod 2 = 0)then begin
	        writeln('Numero par: ', i);
	    
	    end else begin
	        writeln('Numero Inpar: ', i);
	    
	    end;
	
	end;
	
	for i:= 100 to 200 do begin
    if (i mod 2 = 0)then
    begin
        writeln('Numero par: ', i)
    end
    else
    begin
        writeln('Numero Inpar: ', i);
    end;
	end;
End.