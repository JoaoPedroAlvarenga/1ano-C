package fundamentos;

public class TiposPrimitivos {
	
	public static void main(String[] args) {
	
		//Tipo Primitivo - Boolean
		boolean bo1 = false;
		boolean bo2 = true;
		System.out.printf("%b %b\n",bo1, bo2);
		
		//Tipo Primitivo - 1 Caracter
		char c1 = 'a';
		char c2 = '!';
		char c3 = '\u0050';
		System.out.printf("%c %c %c\n",c1,c2,c3);
		
		//Tipo Primitivo - Inteiros
		byte b = 127; 
		short s = 32_767;
		int i = 2_147_483_647;
		long l = 9_223_372_036_854_775_807l; //Todo numero é inteiro por padrão - Long precisa-se por "l" no final
		System.out.printf("%d %d %d %d\n",b,s,i,l);
		
		//Tipos Primitivos - Reais(Ponto flutuante)
		float f = 3.1416f;
		double d = 2.45;
		System.out.printf("%f %f",f,d);
	}
}
