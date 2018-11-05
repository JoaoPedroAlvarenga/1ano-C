#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	int total,pessoa,vin=0,cin=0,cont;
	int idade;
	setlocale(LC_ALL,"Portuguese");
	
	printf("Informe total de pessoas \n");
	scanf("%d",&total);
	system("cls");
	
	while (cont < total){
		printf("Informe a Idade\n)");
		scanf("%d",&idade);
		
		system("cls");
		
	
		if(idade<=25){
		vin++;
		}else if(idade>65){
		cin++;
		}else {
			printf("erro");
		}
		
		cont+=1;
	}
		printf("Total de 20 anos:%d\n",vin);
		printf("Total de 50 anos:%d\n",cin);
}
