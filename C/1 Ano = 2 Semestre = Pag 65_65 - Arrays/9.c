#include <stdio.h>
#include <string.h>
int main() {
	
char n[10];
int t,cont=0,i;

printf("Digite uma palavra: ");
scanf ("%s",n);

for (t=0;n[t]!= '\0';t++){}
for (i=0;i<t;i++){
    if (n[i]!= n[t-i-1])
    cont++;
}
    if (cont!=0)
    printf ("Nao e um palindromo\n");
    else
    printf ("E um palindromo\n");
    
return 0;
}

