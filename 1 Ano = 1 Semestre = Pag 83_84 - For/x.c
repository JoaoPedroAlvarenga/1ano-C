#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	int cont=0,id, somaidade=0; 
	setlocale(LC_ALL,"Portuguese");

	while(cont<10){
		printf("informe a idade: ");
		scanf("%d",&id);
		somaidade = id+somaidade;
		cont++;
	}
	system("cls");
	printf("Total: %d\n",somaidade);
system("pause");
return 0;
}
