#include <stdio.h>

int main(void){
	
	
int sexo,idade;
char nome[100];

	printf("Digite seu nome: ");
	scanf("%s",nome);
	
	printf("Diga seu sexo (1-Masculino)-(2-Feminino): ");
	scanf("%d",&sexo);
	
	printf("Diga sua idade: ");
	scanf("%d",&idade);
	
	if(sexo == 2){
		if(idade < 25){
			printf("\nSeu nome e %s",nome);
		
			printf("\nAceita");	
		}
	}else{
		printf("\nNao aceita");
	}


printf("\n\n");
system("pause");
return 0;
}
