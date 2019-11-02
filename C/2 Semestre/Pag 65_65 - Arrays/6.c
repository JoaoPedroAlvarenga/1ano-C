#include <stdio.h>

int main(){
    char frase[100];
    int i,tamanho;

    printf("Informe uma frase: ");
    gets(frase);
    
    tamanho = strlen(frase);
    
    printf("\nFrase invertida: ");
    for ( i = tamanho; i >= 0; i--){
        printf ("%c",frase[i]);
    }
    
    printf("\n");
    system ("pause");
    return 0;
}
