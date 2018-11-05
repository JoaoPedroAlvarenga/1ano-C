#include<stdio.h>
#include<stdlib.h>
int main(){
	
int matriz[4][4];
int i1, i2, maior = 0;

	for (i1=0; i1<4; i1++){
		printf("Digite os valores da matriz [%d][%d]\n", i1, i2);
		printf("->");
		scanf("%d", matriz[i1]);
	for (i2=0; i2<4; i2++){
		printf("->");
		scanf("%d", matriz[i2]);
	
	if (maior < matriz[i1][i2])
		maior= matriz[i1][i2]; 

	}
	}
	
printf("\nMaior: %d \n\n", maior);
system("pause");
return 0;
}


