package javaapplication1;

import java.util.Scanner;

public class JavaApplication1 {

  public static void main(String[] args) {
        
    Scanner sc = new Scanner(System.in);
    
    String Shallow;
    int number;
    
      //System.out.println("");
      
      System.out.println("<h1> Qual o seu time </h1>");
      System.out.println("1 - Furia \n2 - MIBR\n3 - Liquid\n4 - ENCE");
      System.out.print("\n\nDiga sua escolha:");
      
      number = sc.nextInt();
    
//    System.out.println((number < 15) ? "Primeira 15ena" : "Segunda 15ena");
//      
//      if (number == 1) {
//          System.err.println("Voce escolheu botafogo");
//          
//      }
      
      switch(number){
          case 1:
                System.out.println("Time lichinho");
                break;
          case 2:
                System.out.println("GOGO MIBR");
                break;
          case 3:
              System.out.println("Lets go LIQUID");
              break;
          case 4:
              System.out.println("EZ4ENCE");
              break;  
          default:
            System.out.println("Escolhe idiota");      
      }    
    }    
}
