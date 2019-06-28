package com.pedro.aula;

public class Animal {

	private double peso;
	private String grupo;
	
	public double getPeso(){
		return peso;
	}
	
	public void setPeso(double peso){
		this.peso = peso;
	}
	
	public String getGrupo(){
		return grupo;
	}
	
	public void setGrupo(String grupo){
		this.grupo = grupo;
	}
	
	
	public Animal(){
		System.out.println("construtor padrão");
	}
	
	public Animal(double peso, String grupo){
		this.peso = peso;
		this.grupo = grupo;
	}
	
	public static void main(String[] args) {
		Animal b = new Animal (6.0, "Aves");
		System.out.println("peso: " + b.getPeso() + "\nGrupo: " + b.getGrupo());
		
		

	}

}
