package com.pdr.aulacharat;

import java.util.Scanner;

public class TestarMain {

	public static void main(String[] args) {
		
		String nome;

		Scanner scanner = new Scanner(System.in);
		
		System.out.print("Digite um nome: ");
		
		nome = scanner.nextLine();
		Main main = new Main(nome);

	}

}
