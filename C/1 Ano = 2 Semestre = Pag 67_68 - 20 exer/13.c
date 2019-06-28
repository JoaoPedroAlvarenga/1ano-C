#include <stdio.h>

int main(){
	int n[5],i;
	int maior,menor;
	int me,ma;
	

	for(i = 0; i < 5 ;i++){
	printf("Digite um numero: ");
	scanf("%d",&n[i]);
	
		if (n[i] > maior){
			maior = n[i];
			ma = i;
		}
		if (n[i] == n[0]){
			menor = n[0];
	}
		if (n[i] <= menor){
			menor = n[i];
			me = i;
		}
		
	}
	printf("\nA posicao maior e a %d",ma + 1);
	printf("\nA posicao menor e a %d",me + 1);		
}

