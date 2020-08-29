package com.pdr.pag95;

import java.util.Scanner;
/* P D R */		
public class E12 {

	private static Scanner sc;

	public static void main(String[] args) {
		sc = new Scanner(System.in);
		
		System.out.println("Digite a nota do 1 trimestre: ");
		float t1 = sc.nextFloat();
		System.out.println("Digite a nota do 2 trimestre: ");
		float t2 = sc.nextFloat();
		System.out.println("Digite a nota do 3 trimestre: ");
		float t3 = sc.nextFloat();
		System.out.println("Digite a nota do 4 trimestre: ");
		float t4 = sc.nextFloat();
		
		float mf1 = t1 * 1;
		float mf2 = t2 * 2;
		float mf3 = t3 * 3;
		float mf4 = t4 * 4;
		
		float tt = (mf1 + mf2 + mf3 + mf4)/10;
		
		System.out.println("A média PONDERADA é " + tt + " TALKEI????");
		
	}

}
