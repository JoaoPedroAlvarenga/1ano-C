#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	int a1, an, n; 
	setlocale(LC_ALL,"Portuguese");
	printf("Coloque o Numero de inicio: ");
	scanf("%d", &a1);
	printf("Coloque o Numero do final: ");
	scanf("%d", &an);
	printf("Coloque o Numero da quantidade de termos: ");
	scanf("%d", &n);
	
	printf("\nA soma dos 50 numeros inteiros é: %d", ( (a1+an)*n )/2);
	
system("pause");
return 0;
}
