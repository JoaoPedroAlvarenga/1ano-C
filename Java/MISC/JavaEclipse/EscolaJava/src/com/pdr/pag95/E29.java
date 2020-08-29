package com.pdr.pag95;

import java.util.Scanner;

public class E29 {
	
	private static Scanner sc;

	public static void main(String[] args) {
		sc = new Scanner(System.in);
		double c1,c2,h;
		
		System.out.print("Cateto 1: ");
		c1 = sc.nextDouble();
		System.out.print("Cateto 2: ");
		c2 = sc.nextDouble();
		
		h = Math.sqrt( (c1*c1) + (c2*c2) );
		
		System.out.printf("A hipotenusa é %f",h);
	}
}
