package com.pedro.aula;

import java.awt.Color;

import javax.swing.JOptionPane;

public class NumeroInteiro {

	public static void main(String[] args) {
		int n = Integer.parseInt(JOptionPane.showInputDialog("Diga um numero"));
		
		JOptionPane.showMessageDialog(null, "valor anterior � " + (n - 1), "=========================",1);
		JOptionPane.showMessageDialog(null, "Valor sucessor � " + (n + 1), "=========================",2);
		
		
	}

}
