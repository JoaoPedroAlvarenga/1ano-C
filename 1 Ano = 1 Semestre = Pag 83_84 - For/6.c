#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	int i; 
	setlocale(LC_ALL,"Portuguese");

	for(i=1; i<=20;i++){
		if(i%2 == 0)
		printf("%d\n",i);
	}
		
system("pause");
return 0;
}
