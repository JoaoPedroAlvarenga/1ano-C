#include <stdio.h>

int main() {
	
	int matrizA[4][4];
	int matrizB[4][4];
	int i, j;

	for (i=0; i<4; i++)
	{
		for (j=0; j<4; j++)
		{
			printf ("Insira o elemento [%d][%d] das Matriz A\n", i, j);
			scanf ("%d", &matrizA[i][j]);
		}
	}

	for (i=0; i<4; i++)
	{
          for (j=0; j<4; j++) 
		  {
            printf("%d\t", matrizA[i][j]);

		  }
		  printf("\n");

	}
	system("pause");
	
	printf("Ela transposta \|/");

	for (i=0; i<4; i++)
	{

			for (j=0; j<4; j++)
			{
				matrizB[i][j]=matrizA[j][i];
			}

	}

	for (i=0; i<4; i++)
	{
          for (j=0; j<4; j++) 
		  {
            printf("%d\t", matrizB[i][j]);

		  }
		  printf("\n");
	}


	system("pause");
	return (0);
}
