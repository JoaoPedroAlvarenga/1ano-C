<%-- 
    Document   : submitpage
    Created on : 28/08/2020, 22:18:58
    Author     : joaopedro
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Página de entrega que tem como objetivo entregar algo</title>
    </head>
    <body>
        <%! 
            String valor;

            public boolean valorize(String valor){
                this.valor = valor;

                if(valor.equals("pudim")) {
                    return true;
                } else {
                    return false;
                }
            }
        %>

        <%
            if( valorize(request.getParameter("name"))){
                response.sendRedirect("//pudim.com.br");
            }else{
                out.print("<h1> nao é o pudim <h1/>");
            }
        %>


    </body>
</html>
