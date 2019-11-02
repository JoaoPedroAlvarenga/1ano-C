#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	int num;
	setlocale(LC_ALL,"Portuguese");
	system("color a");
	
	printf("O numero vale\n");
	scanf("%d",&num);

	switch(num){
                case 1:
                     printf("O valor vale 1");
                     break;
                case 2:
                     printf("O valor vale 2");
                     break;
                case 3:
                     printf("O valor vale 3");
                     break;
                case 4:
                     printf("O valor vale 4");
                     break;
                case 5:
                     printf("O valor vale 5");
                     break;
                     default:
                             printf("Numero invalido");
                             break;
                             }
	
	

	system("pause");
   return 0;
}
