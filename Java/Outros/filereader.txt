import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;

public class Main {
	
	public static void main(String[] args){
		try{
			FileReader fr = new FileReader ("C:\\Users\\LABETRR19\\Documents\\Mega.txt");
			BufferedReader br = new BufferedReader (fr);
			string linha;
			linha = br.readLine();
			while (linha != null){
				System.out.println(lionha.substring(0,5));
				linha = br.readLine;
			}
			fr.close();
			br.close();
		}
		catch(IOException e){
			e.printStackTrace();
		}
	}
}