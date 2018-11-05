#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	setlocale(LC_ALL,"Portuguese");
		int n1,n2;
			
			printf("digite 2 valores\n");
			scanf("%d%d",&n1,&n2);
		
		if(n1 > n2){
			printf("%d é maior\n",n1);
		}else{
			printf("%d é maior\n",n2);
		}
		

		
system("pause");
return 0;

}

