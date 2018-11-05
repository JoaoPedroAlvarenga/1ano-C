#include <stdio.h>
#include <stdlib.h>

int main(){
	
	int n;
	system("color a");
	
printf("Digite um numero:");
scanf("%d",&n);

    if (n % 2 == 0) {
      printf("\nNumero par.");  
    }        
    else {
      printf("\nNumero impar."); 
    }
                     
  printf("\n\n");
  system("pause");
  return 0;
}

