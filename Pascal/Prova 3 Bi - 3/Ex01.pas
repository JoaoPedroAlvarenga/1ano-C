Program Pzim ;
var i : Integer;
Begin
	for i:= 100 to 200 do begin
	    if(i mod 2 = 0)then begin
	    	writeln(i);
	    	end;
	end;
	writeln ('ímpar ');
	for i := 100 to 200 do begin
	    if( i mod 2 = 1)then begin
	        writeln(i);
	    end;
	end;
  
End.