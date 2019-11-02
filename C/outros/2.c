#include <stdio.h>

int main(){
	int n,i,c;
	
	printf("Digite um numero: ");
	scanf("%d",&n);
	
	while(n > 0){
		c = n % 10;
		printf("%d",c);
		n /= 10;
	}
	
	printf("\n");
		

	system("pause");
	return 0;
}
