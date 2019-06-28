#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	int total,cont=0,contMasc=0,contFemi=0,i;
	int sexo;
	setlocale(LC_ALL,"Portuguese");
	
	printf("Informe total de cadastros \n");
	scanf("%d",&total);
	system("cls");
	
	for (i=0; i<total;i++){
		printf("Informe o sexo (1-Feminino e 2-Masculino) \n)");
		scanf("%d",&sexo);
		
		system("cls");
		
	
		if(sexo==2){
		contMasc++;
		}else if(sexo==1){
		contFemi++;
		}else {
			printf("erro");
		}
		
		cont+=1;
	}
		printf("Total de sexo Masulino digitado:%d\n",contMasc);
		printf("Total de sexo Feminino digitado:%d\n",contFemi);
}

