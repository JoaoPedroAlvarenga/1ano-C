package com.pdr.pag95;

import java.util.Scanner;

public class E17 {
	private static Scanner sc;

	public static void main(String[] args) {
		sc = new Scanner(System.in);
		
		System.out.print("Saldo: ");
		float s = sc.nextFloat();
		System.out.print("Quantidade de meses: ");
		int m = sc.nextInt();
		
		for (int i = 0; i < m; i++) {
			 s = s + ((s * 3)/100);
		}
		
		
		System.out.println(s);
	}
}
