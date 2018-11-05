//As linhas "include" se chamam bobliotecas
#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main() 
{
	//Variavel Numerica
	int v1;
	//A linha abaixo configura o idioma para portugues
	setlocale(LC_ALL,"Portuguese");
	//A linha abaixo muda a cor do texto
	system("color A");
	
	printf("\nOlá Mundo \n\n");
	system("pause");
	//Limpa a tela
	system("cls");
	printf("\nSeu comando funcionou corretamente \n\n");
	//Pausar(aperte uma tecla para continuar)
	system("pause");
	
	return 0;
}
