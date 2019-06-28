#include <stdio.h> 
int main() { 

float x[10]; 
int i;
 
	for (i=0; i<10; i++) { 
		printf("Informe x[%d]: ", i); 
		scanf("%f", &x[i]); 
	if (x[i] < 0) 
	
	x[i] = 0; 
} 
for (i=0; i<10; i++) 
printf("\tx[%d] = %.1f \n", i, x[i]); 
return 0; 
}
