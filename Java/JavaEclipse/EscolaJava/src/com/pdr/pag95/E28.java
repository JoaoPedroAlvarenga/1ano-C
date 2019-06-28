package com.pdr.pag95;

import java.util.Scanner;

public class E28 {

	private static Scanner sc;

	public static void main(String[] args) {
		sc = new Scanner(System.in);
		int n1,n2,n3,x;
		
		System.out.print("Numero 1: ");
		n1 = sc.nextInt();
		System.out.print("Numero 2: ");
		n2 = sc.nextInt();
		System.out.print("Numero 3: ");
		n3 = sc.nextInt();
		
		x = n1 + (n2 / (n3+n1)) + ((2 * n1) - (2 *  n2)) + (6);
		
		System.out.printf("X = %d",x);
	}

}
