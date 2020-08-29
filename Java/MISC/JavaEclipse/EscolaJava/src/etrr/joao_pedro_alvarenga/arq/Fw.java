package etrr.joao_pedro_alvarenga.arq;

import java.io.BufferedReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.InputStreamReader;

public class Fw {

	public static void main(String[] args) {
		
		int num;
		
		BufferedReader reader = new BufferedReader(new InputStreamReader(System.in));
		
		try {
			FileWriter fw = new FileWriter("C:\\n\\tx.txt");
			System.out.print("Digite um número: ");
			num = Integer.parseInt( reader.readLine() );
			for (int i = 0; i <= 10; i++) {
				int result = num*i;
				fw.append(num + " x " + i + " = " + result + "\r\n");
			}
			fw.close();
			System.out.println("Ok!");
			
		} catch (IOException e) {
			e.printStackTrace();
		}

	}

}
