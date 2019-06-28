#include <stdio.h>
#include <stdlib.h>
int main()
{
int vetorA[4][4];
int maior[4][4];
int i, j;

printf("Digite os numeros do vetor:\n");
for(i=0; i<4; i++)
{
for (j = 0; j < 4; j++)
{
scanf("%d", &vetorA[i][j]);
}
}
for (i = 0; i < 4; i++)
{
for (j = 0; j < 4; j++)
{
if(vetorA[i][j]>10)
{
maior[i][j] = vetorA[i][j];
}
else
{
maior[i][j] = 0;
}
}
}

printf("\n\n\n");
printf("Os valores da matriz sao: \n");
for (i = 0; i < 4; ++i)
{
for (j = 0; j < 4; ++j)
{
printf("%d\t", vetorA[i][j]);
}
printf("\n");
}
printf("\n\n\n");
printf("Os valores maiores que 10 sao: \n");
for (i = 0; i < 4; ++i)
{
for (j = 0; j < 4; ++j)
{
printf("%d\t", maior[i][j]);
}
printf("\n");
}
 
system("pause");

}
