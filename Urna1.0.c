#include <stdio.h>

int main(){
	
	int voto,total = 0,totalbr = 0,vencedor = 000;
	int cont19 = 0,cont51 = 0,cont12 = 0,cont27 = 0,cont13 = 0,cont45 = 0,cont50 = 0,cont15 = 0,cont17 = 0,cont30 = 0,cont54 = 0,cont18 = 0,cont16 = 0,contbr = 0;
		
		while(voto != 0){
		int e = 0;
		
		system("cls");	
		printf("Digite seu candidato / DIGITE 0 PARA SAIR\n");
		printf("=================================VOTOS====\n\n");
		printf("19 = Alvaro Dias (Podemos)        %d\n",cont19);
		printf("51 = Cabo Daciolo (Patriota)      %d\n",cont51);
		printf("12 = Ciro Gomes (PDT)             %d\n",cont12);	
		printf("27 = Eymael(DC)                   %d\n",cont27);
		printf("13 = Fernando Haddad (PT)         %d\n",cont13);	
		printf("45 = Geraldo Alckmin (PSDB)       %d\n",cont45);
		printf("50 = Guilherme Boulos (PSol)      %d\n",cont50);
		printf("15 = Henrique Meirelles (MDB)     %d\n",cont15);	
		printf("17 = Jair Bolsonaro (PSL)         %d\n",cont17);	
		printf("30 = Joao Amoedo (Novo)           %d\n",cont30);
		printf("54 = Joao Vicente Goulart (PPL)   %d\n",cont54);
		printf("18 = Marina Silva (Rede)          %d\n",cont18);	
		printf("16 = Vera Lucia (PSTU)            %d\n",cont16);
		printf("01 = Branco                       %d\n",contbr);
		printf("\n========================================\n\n");
		
		printf("Seu voto: ");
		scanf("%d",&voto);
		printf("==============\n");

	
		
		if(voto == 19){
			printf("Voce votou em Alvaro Dias (Podemos)");
			printf("\nEsta correto? [1]Sim | [2]Nao : ");
			scanf("%d",&e);
			if(e == 2 ){
				printf("Voto anulado");
			}else if (e == 1){
				cont19++;
				total ++;
			}else{
				printf("Erro");
			}
			
			printf("\n==============\n");			
		}else if(voto == 51){
			printf("Voce votou em Cabo Daciolo (Patriota)");
			printf("\nEsta correto? [1]Sim | [2]Nao : ");
			scanf("%d",&e);
			if(e == 2 ){
				printf("Voto anulado");
			}else if (e == 1){
				cont51++;
				total ++;
			}else{
				printf("Erro");
			}
		
			printf("\n==============\n");		
		}else if(voto == 12){
			printf("Voce votou em Ciro Gomes (PDT)");	
			printf("\nEsta correto? [1]Sim | [2]Nao : ");
			scanf("%d",&e);
			if(e == 2 ){
				printf("Voto anulado");
			}else if (e == 1){
				cont12++;
				total ++;
			}else{
				printf("Erro");
			}
			
			printf("\n==============\n");				
		}else if(voto == 27){
			printf("Voce votou em Eymael(DC)");
			printf("\nEsta correto? [1]Sim | [2]Nao : ");
			scanf("%d",&e);
			if(e == 2 ){
				printf("Voto anulado");
			}else if (e == 1){
				cont27++;
				total ++;
			}else{
				printf("Erro");
			}
		
			printf("\n==============\n");					
		}else if(voto == 13){
			printf("Voce votou em Fernando Haddad (PT)");
			printf("\nEsta correto? [1]Sim | [2]Nao : ");
			scanf("%d",&e);
			if(e == 2 ){
				printf("Voto anulado");
			}else if (e == 1){
				cont13++;
				total ++;
			}else{
				printf("Erro");
			}	
			
			printf("\n==============\n");				
		}else if(voto == 45){
			printf("Voce votou em Geraldo Alckmin (PSDB)");
			printf("\nEsta correto? [1]Sim | [2]Nao : ");
			scanf("%d",&e);
			if(e == 2 ){
				printf("Voto anulado");
			}else if (e == 1){
				cont45++;
				total ++;
			}else{
				printf("Erro");
			}
			
			printf("\n==============\n");					
		}else if(voto == 50){
			printf("Voce votou em Guilherme Boulos (PSol)");
			printf("\nEsta correto? [1]Sim | [2]Nao : ");
			scanf("%d",&e);
			if(e == 2 ){
				printf("Voto anulado");
			}else if (e == 1){
				cont50++;
				total ++;
			}else{
				printf("Erro");
			}
				
			printf("\n==============\n");			
		}else if(voto == 15){
			printf("Voce votou em Henrique Meirelles (MDB)");
			printf("\nEsta correto? [1]Sim | [2]Nao : ");
			scanf("%d",&e);
			if(e == 2 ){
				printf("Voto anulado");
			}else if (e == 1){
				cont15++;
				total ++;
			}else{
				printf("Erro");
			}	
			
			printf("\n==============\n");			
		}else if(voto == 17){
			printf("Voce votou em Jair Bolsonaro (PSL)");	
			printf("\nEsta correto? [1]Sim | [2]Nao : ");
			scanf("%d",&e);
			if(e == 2 ){
				printf("Voto anulado");
			}else if (e == 1){
				cont17++;
				total ++;
			}else{
				printf("Erro");
			}
			
			printf("\n==============\n");				
		}else if(voto == 30){
			printf("Voce votou em Joao Amoedo (Novo)");
			printf("\nEsta correto? [1]Sim | [2]Nao : ");
			scanf("%d",&e);
			if(e == 2 ){
				printf("Voto anulado");
			}else if (e == 1){
				cont30++;
				total ++;
			}else{
				printf("Erro");
			}
	
			printf("\n==============\n");					
		}else if(voto == 54){
			printf("Voce votou em Joao Vicente Goulart (PPL)");
			printf("\nEsta correto? [1]Sim | [2]Nao : ");
			scanf("%d",&e);
			if(e == 2 ){
				printf("Voto anulado");
			}else if (e == 1){
				cont54++;
				total ++;
			}else{
				printf("Erro");
			}
			
			printf("\n==============\n");					
		}else if(voto == 18){
			printf("Voce votou em Marina Silva (Rede)");	
			printf("\nEsta correto? [1]Sim | [2]Nao : ");
			scanf("%d",&e);
			if(e == 2 ){
				printf("Voto anulado");
			}else if (e == 1){
				cont18++;
				total ++;
			}else{
				printf("Erro");
			}
			
			printf("\n==============\n");			
		}else if(voto == 16){
			printf("Voce votou em Vera Lucia (PSTU)");
			printf("\nEsta correto? [1]Sim | [2]Nao : ");
			scanf("%d",&e);
			if(e == 2 ){
				printf("Voto anulado");
			}else if (e == 1){
				cont16++;
				total ++;
			}else{
				printf("Erro");
			}
			
			printf("\n==============\n");		
		}else if(voto == 01){
			printf("Voce votou em branco");
			printf("\nEsta correto? [1]Sim | [2]Nao : ");
			scanf("%d",&e);
			if(e == 2 ){
				printf("Voto anulado");
			}else if (e == 1){
				contbr++;
				totalbr ++;
			}else{
				printf("Erro");
			}
			
			printf("\n==============\n");	
		}else if(voto == 00){
			printf("Finalizado\n");
		}else if(voto == 171){
				cont13 = cont13 + 656354634;
		}{
			printf("Candidato Invalido\n");
		
	
		}		
	}
	printf("O total de votos validos foi : %d\n",total);
	printf("O total de votos brancos foi : %d\n",totalbr);
	
	
	

	printf("\n");
	system("pause");
	return 0;
}

