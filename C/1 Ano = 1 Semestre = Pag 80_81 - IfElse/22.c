#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	int p,f,i,r;
	
	system ("color a");
	
	printf("Qual o numero da placa do carro?\n(Digite UM numero por vez) \n");
	scanf("%d%d%d%d",&p,&p,&i,&r);
	
	if(i != 1 & r == 1){
		printf("Janeiro\n");
	}
	else if (i != 1 & r == 2){
		printf("fevereito\n");
	}
	else if (r == 3){
		printf("Março\n");
	}
	else if (r == 4){
		printf("Abril\n");
	}
	else if (r == 5){
		printf("Maio\n");
	}
	else if (r == 6){
		printf("Junho\n");
	}
	else if (r == 7){
		printf("Julho\n");
	}
	else if (r == 8){
		printf("Agosto\n");
	}
	else if (r == 9){
		printf("Setembro\n");
	}
	else if (i == 1 & r == 0){
		printf("Outubro\n");
	}
	else if (i == 1 & r == 1){
		printf("Novemnro\n");
	}
	else if(i == 1 & r == 2){
		printf("Dezembro\n");
	}
	else{
		printf("O numero está errado");
	}
		
	system("pause");
   return 0;
}
