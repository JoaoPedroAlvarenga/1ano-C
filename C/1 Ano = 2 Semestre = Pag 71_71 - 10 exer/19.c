#include<stdio.h>
#include<string.h>
int main(){
	
	char palavra[50];
	char comp[2] = "aA";
	int x = 0;
	int y = 0;
	
	printf("Digite uma frase:\n");
	gets(palavra);
	
	for(x=0;x<30;x++){
		for(y=0;y<2;y++){
			if(palavra[x]==comp[y]){	
				palavra[x] = '*';
			}		
		}	
	}
  
	printf("%s", palavra);
	return 0;
}
