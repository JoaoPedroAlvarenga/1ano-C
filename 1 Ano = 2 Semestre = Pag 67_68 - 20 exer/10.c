#include <stdio.h>

int main(){
	int n[15],soma,media = 0;
	int i;
	for(i = 0; i <15 ;i++){
		
	printf("Digite uma nota: ");
	scanf("%d",&n[i]);
}
	for(i = 0; i <15 ;i++){
		soma += n[i];
	}
	
	media = soma / 15;
	printf("\nO media dos alunos deu %d\n",media);		
	system("pause");
	return 0;
}
