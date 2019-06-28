#include<stdio.h>

main()
{
  int i, tam=30;    
  char nome[tam];  

  printf("Digite um nome: ");
  gets(nome);
  
  for(i=0; i<strlen(nome); i++){
    printf("Letra %d: \%c\n", i+1, nome[i]);
  }
  
  printf("\n\n");
  
  system("pause");
}
