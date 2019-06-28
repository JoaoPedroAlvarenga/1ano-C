#include <stdio.h>

int main(){
	int n[9],i,maior = 0;
	
	for (i=0; i<10 ;i++){
		printf("Digite um valor: ");
		scanf("%d",&n[i]);
		
		if (n[i] > maior){
			maior = n[i];
		}
	
	}
	printf("\nO maior numero foi o %d\n", maior);
	system("pause");
	return 0;	
}
