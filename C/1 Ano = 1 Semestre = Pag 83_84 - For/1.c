#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	int i; 
	setlocale(LC_ALL,"Portuguese");

	for(i=100; i<=250;i++){
	
		printf("%d\n",i);
	}
		
system("pause");
return 0;
}
