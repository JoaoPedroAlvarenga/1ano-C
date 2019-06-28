package modelo;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class EntradaDeDados {

	String nome;
	BufferedReader bf = new BufferedReader(new InputStreamReader(System.in));
	
	public void capturaDados() {
		System.out.println("Informe seu nome: ");
		try{
			nome = bf.readLine();
		}catch (IOException e){
			//TODO Auto-
			e.printStackTrace();
		}		
	}
}
