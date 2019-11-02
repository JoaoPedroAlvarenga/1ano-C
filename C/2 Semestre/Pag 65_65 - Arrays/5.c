#include<stdio.h>
#include<stdlib.h>
#include<conio.h>
#include<math.h>
#include<string.h>

int main(){
	int x, y, tam;
	char nome[30];
	
	printf("digite uma palavra:");
	gets(nome);
	tam=strlen(nome);
		
	for(x=1;x<=tam; x++){
		for(y=1; y<=x; y++)
		printf("%s\t",nome);
		printf("\n");
	
	} 

	return 0;
}
