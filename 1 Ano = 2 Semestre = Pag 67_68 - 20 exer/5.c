#include <stdio.h>

int main(){
	int n[10],i;
	int cont = 0;
	for(i = 0; i <10 ;i++){
		n[i] = i;
	}
	for(i = 0; i<10 ;i++){
	
	if (n[i] % 2 == 0){
		printf("%d\n",n[i]);
		cont += 1;
	}
	}
	printf("\nO numero possui %d numeros pares",cont);		
}
