package com.projeto.operadores;

public class OperadoresB {
	
	int v1 = 1, v2 = 2, v4 = 4, v3 = 1;
	
	public void somar(){
		
		System.out.println(v1 + v2);
		System.out.println(v1 + v3);
		System.out.println(v1 + v4);
		System.out.println(v2 + v3);
		System.out.println(v2 + v4);
		System.out.println(v3 + v4);
		
	}
	public void relacionar(){
		System.out.println(v1 >= v2);
		System.out.println(v1 == v3);
		System.out.println(v1 <= v4);
		System.out.println(v2 > v3);
		System.out.println(v2 < v4);
		
		
	}

}
