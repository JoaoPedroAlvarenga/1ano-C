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
	
	printf("Subtra��o: ");
	printf("%d \n",v1-v2);

	printf("Divis�o: ");
	printf("%d \n",v1/v2);
	
	printf("Multiplica��o: ");
	printf("%d \n",v1*v2);

	printf("---------------------------------------\n");
	
system("pause");
return 0;

}

