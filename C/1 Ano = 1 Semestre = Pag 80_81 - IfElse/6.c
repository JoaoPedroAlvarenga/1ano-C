#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	int n;
	setlocale(LC_ALL,"Portuguese");
	system("color a");
	
	printf("Escreva um numero \n");
		scanf("%d",&n);
		system("cls");
		
	if(n<=50 && n>=20){
		printf("\nEste numero está entre 20 e 50\n\n");
		}else{
		printf("\nNÂO está entre 20 e 50\n\n");
}

	system("pause");
   return 0;
}
