#include<stdio.h>

int main() { 

int n, aux,alg, inv=0; 

printf("Digite um numero: ");
scanf("%d", &n); 

aux = n; 

while (n > 0) { 

alg = aux % 10; 
inv = 10*inv + alg; 
aux = aux/10; 
} 

printf("\nNumero invertido: %d\n",inv); 



return 0; 
}
