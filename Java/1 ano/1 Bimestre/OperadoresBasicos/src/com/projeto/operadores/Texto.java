package com.projeto.operadores;

public class Texto {
	public static void main(String[] args){
		System.out.println(Character.isDigit('c')); // testas se � numero
		System.out.println(Character.isDigit('5'));
		
		System.out.println(Character.isLetter('c')); //testa se � letra
		System.out.println(Character.isLetter('5'));
		
		System.out.println(Character.isLetterOrDigit('c')); // testa se � uma das anteriores
		System.out.println(Character.isLetterOrDigit('5'));
		
		System.out.println(Character.isUpperCase('c')); // se est� em mai�sculo
		System.out.println(Character.isUpperCase('C'));
		
		System.out.println(Character.isLowerCase('c')); // min�sculo
		System.out.println(Character.isLowerCase('C'));

		System.out.println(Character.isWhitespace(' ')); // se est� void
		
			String arquivo = "prova.html";
		    arquivo = arquivo.replace("html", "jps");
		    System.out.println(arquivo);
		    
		    String texto = "Testando";
		    
		    if(texto.equals("Testando")){
		    	 System.out.println("verdadeiro");
		    }else{
		    	System.out.println("falso");
		    }
		    
		    if(texto.equalsIgnoreCase("testando"))
		    	System.out.println("verdadeiro");
		
		    else{
		    	System.out.println("falso");}
		    
	}

}
