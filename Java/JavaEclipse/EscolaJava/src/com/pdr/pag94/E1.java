package com.pdr.pag94;
/* P D R */		
import java.util.Scanner;

public class E1 {
	private static Scanner sc;
	public static int n1;
	public static int n2;
		public static void main(String[] args) {
			sc = new Scanner(System.in);
			
			System.out.print("Numero 1: ");
			n1 = sc.nextInt();
			System.out.print("Numero 2: ");
			n2 = sc.nextInt();
			/*Math.pow*/
			int r = 1;
			for( int i = 0 ; i < n2 ; i++){
				r = r * n1;  
			}
			System.out.print(r);
	}
}
