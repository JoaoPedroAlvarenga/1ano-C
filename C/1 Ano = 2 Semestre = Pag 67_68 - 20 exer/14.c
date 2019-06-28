#include<stdio.h>

int main(){
	
	
int temp;
int repetidos = 1;
int vetor[15],tam=10,i;
    printf("O tamanho do vetor eh %d \n\n\n",tam); 
    printf("Digite os valores do vetor: ");
    for (i=0;i<tam;i++) {
        scanf("%d",&vetor[i]);
    }
temp = vetor[0];
for (i=1;i<tam;i++) {
    if( vetor[i] == temp ){
        repetidos++; 
    }
    else {
        
        if( repetidos > 1 ) {
            printf("O valor %i esta repetido %i vezes\n", temp, repetidos);
            repetidos = 1;
        }
        
        temp = vetor[i];
    }
}
if( repetidos > 1 ) {
    printf("O valor %i esta repetido %i vezes\n", temp, repetidos);
    printf("\n\n=================fim do programa=========================\n\n");
}
return 0;	
}
