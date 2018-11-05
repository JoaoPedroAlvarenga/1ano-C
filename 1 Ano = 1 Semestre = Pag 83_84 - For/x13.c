#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main (){
	
	int i, j,cnt=0;
		for(i=1;i<30;i++){
			cnt=0;
			for(j=1;j<=i;j++){
				if(i%j==0)
					cnt++;
			}
			if(cnt==2)
				printf("%d \n",i);
		}
	
system("pause");
return 0;
 
}
