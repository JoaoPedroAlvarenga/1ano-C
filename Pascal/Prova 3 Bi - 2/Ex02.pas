uses crt;
var i: Integer;
begin
	for i:= 10 to 50 do begin
	    if (i mod 3 = 0) and (i mod 7 = 0 ) then
	    	writeln(i);
	end;

end.