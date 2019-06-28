#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	setlocale(LC_ALL,"Portuguese");
		
	int v1;
	system("color a");
	printf("Digite 1 Numero: ");
	scanf("%d",&v1);
	system("cls");
	
	printf("Quadrado: ");
	printf("%d \n",v1*v1);

system("pause");
return 0;

}

