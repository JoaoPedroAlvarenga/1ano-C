#include <stdio.h>

int main(){
	int n[10],i;
	int maior = 0,menor = 0;
	
	for(i = 0; i <10 ;i++){
		printf("Digite um numero: ");
		scanf("%d",&n[i]);
		
	if (n[i] > maior){
		maior = n[i];
	}
	if (n[i] == n[0]){
		menor = n[0];
	}
	if (n[i] < menor){
		menor = n[i];
	}
	}
	
	printf("\nO numero maior e o %d",maior);
	printf("\nO numero menor e o %d",menor);		
}
