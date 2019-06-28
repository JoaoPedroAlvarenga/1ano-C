package fundamentos;

public class NotaçãoPonto {
	public static void main(String[] args) {
		String s = "Bom dia ?".toUpperCase().replace("?", "Bia").concat("!");
		System.out.println(s);
	}
}
