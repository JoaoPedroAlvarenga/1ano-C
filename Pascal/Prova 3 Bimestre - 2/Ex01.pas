uses crt;
var i ,total: Integer;
begin
total := 0;
	for i:= 100 to 200 do
	begin
		if (i mod 2 = 0)then
		begin
			writeln(i);
			total := total + 1;
		end;
		
	end;
	writeln('Total: ', total);
	
	for i:= 1 to 10 do
	begin
		writeln('');
	end;
	
	for i:= 100 to 200 do
	begin
	    if (i mod 2 = 1)then
	    begin
        writeln(i);
        total := total + 1;
	    end;
	    
	end;
  writeln('Total: ',total); 

end.