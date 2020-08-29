<%-- 
    Document   : thepage
    Created on : 20/08/2020, 11:03:08
    Author     : joaopedro
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <jsp:include page="input.jsp"></jsp:include>
        
        <%! 
            
//            public string isKingOfChat(string name){
//                this.name = name;
//
//                if(name.equals("joao")){
//                    return "the king";
//                }else{
//                     return "not king :(";
//                }
//            }
        %>
        
        <% 
            String user = request.getParameter("name");
//            String isKing = isKingOfChat(user);
        
            
        %>
        
        
        <%= "<h1>"+ user + "<h1>" %>
        
    </body>
</html>
