#include <stdio.h>

int main(){
	int n[6],i;
	
	for(i = 0; i <6 ;i++){
		printf("Digite um numero: ");
		scanf("%d",&n[i]);
	}
	system("cls");
	for(i = 0; i <6 ;i++){
		printf("%d\n",n[i]);
	
	}
		
	system("pause");
	return 0;
}
