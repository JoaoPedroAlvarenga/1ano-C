package fundamentos;

public class VariáveisEConstantes {
	
	public static void main(String[] args) {
		
		// ctrl + 1 = Renomear
		double raio = 4.5;
		final double PI = 3.1416;
		double area = PI * raio * raio;
		
		System.out.printf("A area é %f m2\n", area);
		System.out.printf("A area é %.2f m2", area);
		
	}

}
