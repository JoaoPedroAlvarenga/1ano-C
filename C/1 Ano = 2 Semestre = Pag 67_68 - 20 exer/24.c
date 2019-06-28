#include <stdio.h>

int main(){
	int n[6], vetPar[10], vetImpar[10];
	int spar=0,qimpar=0;
	int i,j,c;
	int tamPar, tamImpar;
	
	
	for(i = 0; i < 6 ;i++){
		printf("Digite o %d numero: ",i+1);
		scanf("%d",&n[i]);
		
		/* ====soma par / q impar =============== */
		if (n[i]%2 == 0){
			spar += n[i];	
		}else{
			qimpar += 1;	
		}
		/* =====par / impar ==================== */
		 if (n[i] % 2 == 0) {
            vetPar[tamPar] = n[i];
            tamPar++;
        } else {
            vetImpar[tamImpar] = n[i];
            tamImpar++;
        }
		
		/* ===================================== */		
	}
	printf("\nNumeros pares digitados -------- : ");
	 for (i = 0; i < tamPar; i++) 
        printf("%d ", vetPar[i]);
	printf("\nNumeros impares digitados ------ : ");
	 for (i = 0; i < tamImpar; i++) 
        printf("%d ", vetImpar[i]);
        
	printf("\nSoma dos pares digitados ------- : %d", spar);
	printf("\nQuantidade de  impares digitados : %d \n\n\n", qimpar);
		
	system("pause");
	return 0;
}
