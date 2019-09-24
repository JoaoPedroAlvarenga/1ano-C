#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main ()
{
   char sexo;
   int idade;

   printf("Digite M para Masculino e F para feminino"
   "\nQual seu sexo? \n");
   scanf("%s", &sexo);
   printf("Qual sua idade? \n");
   scanf("%d", &idade);
	system("cls");
	
	if(sexo='f' && idade <=25){

		printf("ACEITAR\n");
	}else{
		printf("NEGAR\n");
		}
	if(sexo="f" && idade <=25){
		system("color a");
	}else{
		system("color 4");
	}
	
   
   system("pause");
   return 0;
}
