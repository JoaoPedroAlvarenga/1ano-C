#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	int dia,mes,ano,diaA,mesA,anoA;
	
	system("color a");
	
	printf("=====Seu Nascimento=====\n");

	printf("Informe o DIA do seu nascimento:\n");
	scanf("%d",&dia);

	printf("Informe o MES do seu nascimento:\n");
	scanf("%d",&mes);

	printf("Informe o ANO do seu nascimento:\n");
	scanf("%d",&ano);
	
	printf("=========Atual=========\n");

	printf("Informe o DIA atual:\n");
	scanf("%d",&diaA);

	printf("Informe o MES atual:\n");
	scanf("%d",&mesA);

	printf("informe o ANO atual:\n");
	scanf("%d",&anoA);
	
	printf("=====Idade=====\n");
	
if(mesA>=mes && diaA>=dia)
    printf("Voce tem %d anos",anoA-ano);
 else
    printf("Voce tem %d anos",anoA-ano-1);

return 0 ;
}

