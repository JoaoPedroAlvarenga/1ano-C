#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	int cont=0; 
	setlocale(LC_ALL,"Portuguese");
		
		do{
			printf("3 x %d = %d \n",cont,3*cont);
			cont++;
		}while (cont <=10);
	
		
system("pause");
return 0;
}
