package com.pdr.pag95;

import java.util.Scanner;

public class E18 {

	private static Scanner sc;

	public static void main(String[] args) {
		int d,m,a ;
		sc = new Scanner(System.in);
		
		System.out.print("Digie uma data no formato(DDMMAAAA): ");
		int n = sc.nextInt(); // 12 34 5678
		
		d = n / 1000000; // 12 345678
		n = n % 1000000; // n = 345678
		
		m = n / 10000; // 34 5678
		n = n % 10000; // n = 5678
		
		a = n;
		
		
		
		System.out.println("\nDia: " + d);
		System.out.println("Mes: " + m);
		System.out.println("Ano: " + a );
		System.out.printf("\n\n\n%d/%d/%d",d,m,a);
	}

}
