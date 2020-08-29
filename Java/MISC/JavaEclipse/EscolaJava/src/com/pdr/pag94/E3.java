package com.pdr.pag94;

import java.util.Scanner;

public class E3 {
	private static Scanner sc;
	public static int n1;
	public static int n2;
	private static int Dq;
	private static int Qd;
	public static void main(String[] args) {
		sc = new Scanner(System.in);
		
		System.out.print("Numero 1: ");
		n1 = sc.nextInt();
		System.out.print("Numero 2: ");
		n2 = sc.nextInt();
		
		Dq = (n1*n1)-(n2*n2);
		Qd = (n1 - n2)*(n1 - n2);
		
		System.out.printf("\nA diferença do quadrado é " + Dq);
		System.out.printf("\nO quadrado da diferença é " + Qd);
		
	}
}
