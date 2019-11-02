#include <stdio.h>

int main(){
	int n[6],i;
	int m = 6;
	
	for(i = 0; i < 6 ;i++){
	printf("Digite um numero: ");
	scanf("%d",&n[i]);
	}
	system("cls");
	
	for (i = m-1; i >= 0; i--)
	printf("=%d\n",n[i]);

		
	system("pause");
	return 0;
}
