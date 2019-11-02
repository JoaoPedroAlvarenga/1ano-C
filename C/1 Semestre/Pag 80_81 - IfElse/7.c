#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	setlocale(LC_ALL,"Portuguese");
		int n1,n2,f,nf;
	
		printf("Quis foram as suas notas?\n");
		scanf("%d%d",&n1,&n2);

		printf("Qual foi a sua frequencia?\n");
		scanf("%d",&f);

		system("cls");
		
		nf = n1+n2/2;

		if(nf >=7 && f >= 75){
			printf("Aprovado\n");
			system("color a");
		}else{
			printf("Reprovado\n");
			system("color 4");
		}
system("pause");
return 0;

}

