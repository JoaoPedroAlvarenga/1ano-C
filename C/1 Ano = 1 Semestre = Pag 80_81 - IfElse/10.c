#include <stdio.h>


	char main(){

		char v;

		printf("Digie alguma letra\n");
		scanf("%c",&v);

		switch(v){
			case 'a':
			case 'e':
			case 'i':
			case 'o':
			case 'u':
			case 'A':
			case 'E':
			case 'I':
			case 'O':
			case 'U':
				printf("Vogal\n");
				break;
			default:
				printf("Nao Vogal\n");
				break;
		}
	system("pause");
	return 0;
}

