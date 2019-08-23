package pdbeatiful;

public class quadrado {

	private int lado;
	
	public int getLado(){
		return lado;
	}
	
	public void SetLado(int lado){
		this.lado = lado;
	}
	
	public int getArea(){
		int area = lado*lado;
		return area;		
	}
	
	public int getPerimetro(){
		int perimetro = lado*4;
		return perimetro;		
		
	}
	
	public String getNomeFigura(){
		return "quadrado";
	}
}