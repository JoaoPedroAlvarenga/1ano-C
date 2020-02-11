package modelo;

public class TestePessoa {

	public static void main(String[] args) {
		
		Pessoa p = new Pessoa(); //metodo construtor;
		
		//obj
		p.nome = "Lucas";
		p.sobrenome = "Alvarenga";		
		p.cpf = "175-122-324-09";
		p.cep = "000000-000";
		p.num = "55";
		p.complemento = "Casinha";
		
		System.out.println("nome: " + p.nome);
		System.out.println("sobrenome: " + p.sobrenome);
		System.out.println("cpf: " + p.cpf);
		System.out.println("cep: " + p.cep);
		System.out.println("num: " + p.num);
		System.out.println("complemento: " + p.complemento);
	}

}
