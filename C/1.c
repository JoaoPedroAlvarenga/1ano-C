#include <stdio.h>

int main(){
	char f[100];
	int i,tamanho;
	
	printf("Digite uma frase: ");
	gets(f);
	
	tamanho = strlen(f);
	
	printf("Frase invertida : ");
	
	
	for (i = tamanho; i >= 0 ; i--){
		printf("%c",f[i]);
	}
	
	printf("\n");
    system ("pause");
    return 0;
}
