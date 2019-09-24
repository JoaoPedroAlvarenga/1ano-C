#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	int i; 
	setlocale(LC_ALL,"Portuguese");

	for(i=1; i<=50;i++){
		if(i%5 == 0)
		printf("%d\n",i);
	}
		
system("pause");
return 0;
}
