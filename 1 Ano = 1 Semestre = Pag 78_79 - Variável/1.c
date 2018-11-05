#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	setlocale(LC_ALL,"Portuguese");
		
	int v1,v2;
	system("color a");
	printf("Digite 2 Numeros: ");
	scanf("%d%d",&v1,&v2);
	system("cls");
	
	printf("---------------------------------------\n");
		
	printf("Soma: ");
	printf("%d \n",v1+v2);
	
	printf("Subtração: ");
	printf("%d \n",v1-v2);

	printf("Divisão: ");
	printf("%d \n",v1/v2);
	
	printf("Multiplicação: ");
	printf("%d \n",v1*v2);

	printf("---------------------------------------\n");
	
system("pause");
return 0;

}

