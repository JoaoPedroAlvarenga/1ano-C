#include<stdio.h>
#include<stdlib.h>
#include<math.h>
#include<string.h>
main()
{
 char nome[30];
 
 printf("\nInforme um nome: ");
 gets(nome);
 
 if(nome[0]=='A'||nome[0]=='a')
	printf("\n%s",nome);
	printf("\n\n");
	system("pause");
	
 return(0);
}
