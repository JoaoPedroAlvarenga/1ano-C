#include <stdio.h>

int main(){
	int num[10],i;
		
		for(i=0;i<10;i++){
			num[i]=i+1;
		}
		
		for(i=0;i<10;i++){
			printf("%d\n",num[i]);
		}
		system("pause");
		printf("Isso foi muito chato,quer continuar mesmo?\n");
		system("pause");
		printf("Continue e vai ficar verde\n");
		system("color a");
		system("pause");
		printf("Quer continuar mesmo?\n");
		printf("Certeza?");
		int s = 0;
		while (s != 89){
		
			printf("Digite 89 para continuar entao\n");
			scanf("%d",&s);
		}
		system("tree");
		
	return 0;
}
