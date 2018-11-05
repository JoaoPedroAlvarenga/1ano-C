#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	setlocale(LC_ALL,"Portuguese");
		int n;
	
		printf("Digite um numero\n");
		scanf("%d",&n);

		if (10 >= n){
		}else{
			printf("O numero é maior que 10\n");
		}
		
system("pause");
return 0;

}

