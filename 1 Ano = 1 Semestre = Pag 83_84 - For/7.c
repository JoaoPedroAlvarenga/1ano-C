#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	int i; 
	setlocale(LC_ALL,"Portuguese");

	for(i=70; i>=1;i++){
		if(i > 0)
		printf("%d\n",i);
		
	}
		
system("pause");
return 0;
}
