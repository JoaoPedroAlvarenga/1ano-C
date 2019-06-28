#include<stdio.h>
#include<string.h>
int main() {
    char str[50];
    char novo[120];
    int aux;
    int i = 0;
    
    printf("Digite uma frase: \n");
    gets(str);
    
    for(aux = 0; aux < strlen(str); aux++) {
        if(str[aux] != ' ') {
            novo[i] = str[aux];
            i++;
        }
    }
    novo[i] = '\0';
    printf("%s\n", novo);
    return 0;
}
