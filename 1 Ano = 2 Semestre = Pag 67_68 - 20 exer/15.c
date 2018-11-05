#include <stdio.h>
#include <stdlib.h>

main(){
       
       int vet[5],copy[5],i,resp=1,temp;
       
       for(i=0; i<5; i++){
                printf(" Entre com um numero: ");
                scanf("%i",&vet[i]);
       }
       temp = vet[0]; 
       for (i=1;i<5;i++){
                if(vet[i] == temp){
                      resp++; 
                }
                else{
                if(resp > 1){
                       printf("\n O valor %i esta repetido %i vezes\n",temp,resp);
                       resp = 1;
                }
        
                       temp = vet[i]; 
                }
        }
        if(resp > 1){ 
              printf("\n O valor %i esta repetido %i vezes\n",temp,resp);
        }
        for (i=0;i<5;i++){ 
              copy[i]=vet[i];
              if(vet[i]==copy[i])
                       printf("\n %d",copy[i]);
                       
        }
        system("pause>>null");
        }
