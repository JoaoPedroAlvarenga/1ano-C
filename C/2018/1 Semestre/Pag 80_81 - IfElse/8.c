#include <stdio.h>
#include <stdlib.h>
#include <math.h>
#include <locale.h>

int main ()
{
	int idade;
	printf("Digite a sua idade:");
	scanf("%d",&idade);
	system("cls");
	printf("Voce tem %d anos",idade);
	
	if(idade<18)
		printf("\nMenor de Idade\n");
	else
		printf("\nMaior de Idade\n");
		
	if(idade<18)
		system("color 4");
	else
		system("color a");	
	system("pause");
   return 0;
}
