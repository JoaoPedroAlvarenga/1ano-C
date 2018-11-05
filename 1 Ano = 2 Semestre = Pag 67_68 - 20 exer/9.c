#include <stdio.h>

int main() {
  int n=6, i, v[6];

  printf("Digite uma sequencia com 6 numeros inteiros: \n");
  for (i = 0; i < n; i++){
  	scanf("%d", &v[i]);
    }
    printf("\n");
    
   if( (v[i]%2)==0 ){   
	  for (i = n-1; i >= 0; i--){
	    printf("%d ", v[i]);
	    printf("\n"); 		
	}
	} 
  return 0;
}
