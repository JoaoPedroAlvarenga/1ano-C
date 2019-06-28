#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	int f;
	setlocale(LC_ALL,"Portuguese");
	system("color a");
	
	printf("Quantos Filhos voce tem? \n");
		scanf("%d",&f);
		
	system("cls");
	
	if(f>=1)
		printf("\nVoce Receberá %d reais \n\n",f*30);
		else
		printf("\n1Não ganhará nada\n\n");
  	
	system("pause");
   return 0;
}
