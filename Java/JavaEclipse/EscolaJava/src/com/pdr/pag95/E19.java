package com.pdr.pag95;

import java.util.Scanner;

public class E19 {
	
	private static Scanner sc;

	public static void main(String[] args) {
		sc = new Scanner(System.in);
		int n;
		
		System.out.print("Digite um numero: ");
		n = sc.nextInt();
		int ni = 0; 
		
		while (n > 0) { 
		ni *= 10; 
		//System.out.println(ni+"  n1");
		ni += (n % 10); 
		//System.out.println(ni+"  n2");
		n /= 10; 
		//System.out.println(n+"  n3\n");
		}
		
		System.out.printf("O numero inverso é %d",ni);	
	}
}
