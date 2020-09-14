/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package tag;


import javax.servlet.jsp.tagext.SimpleTagSupport;

/**
 *
 * @author joaopedro
 */
public class tagEtrrJsp extends SimpleTagSupport {
    
    @Override
    public void doTag() throws JspException, IOException{
        JspWriter out = getJspContext().getOut();
        
        out.println("Tag personalizada que não funciona :)");
    }
}
