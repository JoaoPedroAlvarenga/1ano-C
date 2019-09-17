Program Pzim ;
var i, idade, total : Integer;
Begin
	for i:= 1 to 7 do begin
	    writeln('Sua idade');
	    read(idade);
	    clrscr;
	     if (idade >= 18)then begin
	         total := total + 1;
	     end else begin
	     			writeln('oi');
	     end;
	end;
   writeln('Total: ', total);
End.