package modelo;
	
public class Cliente{
	private String nome; 
	private String sobrenome; 
	private String cep; 
	private String nun; 
	private String completento; 
	private String bairro;
	private int diaN;
	private int mesN;
	private int anoN;
	private int diaA;
	private int mesA;
	private int anoA;

	public void calcIdade(){
		private if idade;

		if ((diaN <= diaA && mesN <= mesA)||(mesN < mesA) ) 
			idade = anoA - anoN;
		else
			idade = anoA - anoN -1;
		System.out.println("Idade         :" +idade);
	}
	public void exibirCliente(){
		System.out.println("Nome Completo :" + nome + " " + sobrenome);
		System.out.println("Nome Social   :" + nomeSocial);
		System.out.println("Endereço      : Cep: " + cep  + "\nNumero: " + nun + "\nComplement: " + "\nBairro" + bairro );
	}

}