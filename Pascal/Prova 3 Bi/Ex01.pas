uses crt;
var v: integer;
var i: integer;
begin

	for i:=100 to 200 do
	begin
		if ( i mod 2 = 0 ) then
		writeln(i);
	end;
	
	for i:=100 to 200 do
	begin
		if ( i mod 2 = 1 ) then
		writeln(i);
	end;
end.
