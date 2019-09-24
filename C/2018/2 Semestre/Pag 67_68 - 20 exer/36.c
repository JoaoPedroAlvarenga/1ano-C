#include <stdio.h>

void imprime( int a[][3] ) {
  int i,j;
    for (i=0;i<3;i++){
    for (j=0;j<3;j++){
        printf("%6d",a[i][j]);
    };
    printf("\n");
  };
  printf("\n");
};
int main () {
  int v[3][3];
  int i,j,soma=0 ;
  for (i=0;i<3;i++) {
    for (j=0;j<3;j++) {
     printf("Informe o valor do elemento %d/%d",i,j);
      scanf("%d",&v[i][j]);
    }
  };
  for (i=0;i<3;i++) {
    soma += v[i][3-i-1];
  };
  printf("\nvai imprimir a matriz\n");
  imprime(&v);
  printf("O valor da soma de diagonal secundária é %d\n",soma);
}

