package modelo;

public class Pessoa {
	//criar atributos
	String nome;
	String sobrenome;
	String cpf;
	String cep;
	String num;
	String complemento;
	
	//criar construtor
	
	public Pessoa(){
		
	}//== '=' --> valor 

	public Pessoa(String nome, String sobrenome, String cpf, String cep, String num, String complemento) {
		super();
		this.nome = nome;
		this.sobrenome = sobrenome;
		this.cpf = cpf;
		this.cep = cep;
		this.num = num;
		this.complemento = complemento;
	}
}
