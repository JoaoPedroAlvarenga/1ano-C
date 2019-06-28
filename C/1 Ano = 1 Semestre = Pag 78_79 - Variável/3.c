#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	setlocale(LC_ALL,"Portuguese");
		
	int v1,v2,v3,v4;
	system("color a");
	printf("Digite 4 Numeros: ");
	scanf("%d%d%d%d",&v1,&v2,&v3,&v4);
	system("cls");
		printf("========================\n");
	printf("Soma: \n");
	printf("%d \n",v1+v2);
	printf("%d \n",v1+v3);
	printf("%d \n",v1+v4);
	printf("%d \n",v2+v3);
	printf("%d \n",v2+v4);
	printf("%d \n",v3+v4);
		printf("========================\n");
	printf("Subtração: \n");
	printf("%d \n",v1-v2);
	printf("%d \n",v1-v3);
	printf("%d \n",v1-v4);
	printf("%d \n",v2-v3);
	printf("%d \n",v2-v4);
	printf("%d \n",v3-v4);
		printf("========================\n");
	printf("Divisão: \n");
	printf("%d \n",v1/v2);
	printf("%d \n",v1/v3);
	printf("%d \n",v1/v4);
	printf("%d \n",v2/v3);
	printf("%d \n",v2/v4);
	printf("%d \n",v3/v4);
		printf("========================\n");
	printf("Multiplicação: \n");
	printf("%d \n",v1*v2);
	printf("%d \n",v1*v3);
	printf("%d \n",v1*v4);
	printf("%d \n",v2*v3);
	printf("%d \n",v2*v4);
	printf("%d \n",v3*v4);
		printf("========================\n");
system("pause");
return 0;

}

