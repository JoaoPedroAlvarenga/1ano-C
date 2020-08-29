package com.pdr.aulacharat;

public class Main {
	
	String nome;
	
	public Main(String nome){	
		this.nome = nome;
		
		stringChar(nome);
		
	}
	
	public static void stringChar(String n){
		
		System.out.println(n);
		System.out.println(n.charAt(0));
		System.out.println(n.charAt(n.length() - 1 ));
		
		for (int i = n.length() - 1; i >= 0; i--) {
			System.out.print(n.charAt(i));
		}
		
	}
	
}