package com.pdr.pag95;

import java.util.Scanner;

public class E16 {

	private static Scanner sc;

	public static void main(String[] args) {
		sc = new Scanner(System.in);
		
		System.out.print("Digite UM NUMERO TALKEI??: ");
		float n = sc.nextFloat();
		
		Double raiz = Math.sqrt(n);
		
		System.out.println("\nNumero: "+ n);
		System.out.println("Quadrado: "+ n * n);
		System.out.println("Raiz Quadrada: "+ raiz);

	}

}
