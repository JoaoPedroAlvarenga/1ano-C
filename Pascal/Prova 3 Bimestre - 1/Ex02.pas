Program Pzim ;
var i : Integer;
Begin
	for i:= 10 to 50 do begin
	    if (i mod 2 = 0) and ( i mod 7 = 0) then
	    writeln(i);
	end;   
End.