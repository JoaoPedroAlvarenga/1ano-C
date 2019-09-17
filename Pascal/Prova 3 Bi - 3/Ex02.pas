Program Pzim ;
var i : Integer;
Begin
	for i:= 10 to 50 do begin
	    if(i mod 3 = 0) and (i mod 7 = 0)then begin
	        writeln(i);
	    end;
	end;
  
End.