#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	int cont=0; 
	setlocale(LC_ALL,"Portuguese");
		
		do{
			printf("9 x %d = %d \n",cont,9*cont);
			cont++;
		}while (cont <=10);
	
		
system("pause");
return 0;
}
