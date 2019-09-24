#include<stdio.h>
#include<stdlib.h>
#include<string.h> 
int main(){
         char nome[30],M;
         int x,t,soma=0;
         float percent, t2=0;
         printf("Digite uma frase: ");
         gets(nome);
         t=strlen(nome);
         for(x=0;x<=t;x++)
         if(nome[x]=='a' || nome[x]=='A' || nome[x]=='e' || nome[x]=='E'  ||
         nome[x]=='i' || nome[x]=='I' || nome[x]=='o' || nome[x]=='O' ||
         nome[x]=='u' || nome[x]=='U')
         soma++;
         printf("\n A frase tem %d caracteres: ",t);
         printf("\n A frase tem %d vogais: ",soma);
         //Este for vai calcular o percentual de vogais no nome.
         for(x=0;x<=t2;x++)
         {
         t2=strlen(nome);
         percent=soma;
         }
         printf("\n\n");
         system("pause");
         return 0;      
		 
		  }
