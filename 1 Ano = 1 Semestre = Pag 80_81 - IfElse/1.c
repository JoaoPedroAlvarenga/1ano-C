#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	int n1,n2;
	setlocale(LC_ALL,"Portuguese");
	system("color a");
	
	printf("Digite 2 Notas\n");
		scanf("%d%d",&n1,n2);
	
	system("cls");
	
	if(n1+n2)
	{
		printf("fff");
	}else{
		printf("dddd");
	}
	
	
	system("pause");
   return 0;
}
