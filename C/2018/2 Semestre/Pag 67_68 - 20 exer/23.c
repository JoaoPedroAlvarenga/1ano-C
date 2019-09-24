#include <stdio.h>

main (){
int v[100],i;	 

for(i=0;i<100;++i){ 
 v[i] = i+1;

if((v[i] % 10)!=7){
	if ((v[i] % 7)!=0)
	printf("%d\n",v[i]); 
}
}

return 0;

}
