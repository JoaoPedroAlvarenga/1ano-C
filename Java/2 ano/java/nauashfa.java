package pdbeatiful;

public class nauashfa {

	private static int robertoPerimetro;
	private static int robertoArea;

	public static void main(String[] args) {
		quadrado Quadrado = new quadrado();
		Quadrado.SetLado(3);
		System.out.printf("o tamanho da area é %d o tamanho do perimetro é %d ", Quadrado.getArea(), Quadrado.getPerimetro());
	
		triangulo roberto = new triangulo();
		roberto.setLadoA(8);
		roberto.setLadoB(7);
		roberto.setLadoC(6);
		roberto.setBase(8);
		roberto.setAltura(10);
		
		robertoPerimetro 	= roberto.getPerimetro();
		robertoArea			= roberto.getArea();
		
		System.out.printf("Perimetro: %d | Area: %d", robertoPerimetro, robertoArea);
		
	}
}
