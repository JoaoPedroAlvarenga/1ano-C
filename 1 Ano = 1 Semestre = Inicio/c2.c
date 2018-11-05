//As linhas "include" se chamam bobliotecas
#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) 
{
	system("color a");
	char nome[50];
	printf("digite o seu nome: ");
	gets(nome);
	system("cls");
	printf("Bem vindo %s\n",nome);
	system("pause");
	return 0;
}
