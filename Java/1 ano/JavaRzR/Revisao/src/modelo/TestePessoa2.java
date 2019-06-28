package modelo;

public class TestePessoa2 {

	public static void main(String[] args) {
		
		Pessoa p2 = new Pessoa("Lucas", "Alvarenga", "175-122-324-09", 
				"000000-000","55","Casinha");
		
		System.out.println("nome: " + p2.nome);
		System.out.println("sobrenome: " + p2.sobrenome);
		System.out.println("cpf: " + p2.cpf);
		System.out.println("cep: " + p2.cep);
		System.out.println("num: " + p2.num);
		System.out.println("complemento: " + p2.complemento);
	}

}
