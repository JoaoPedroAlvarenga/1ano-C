<%-- 
    Document   : index
    Created on : 28/08/2020, 22:54:05
    Author     : joaopedro
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ਪੱਕੇ ਆਬਜੈਕਟ</title>
    </head>
    <body>
        <h1>Hello  <%= application.getInitParameter("RJ") %></h1>
        
        <% 
            session.setAttribute("user", "joao pedro");
            
            response.sendRedirect("session.jsp");
        %>       
  
    </body>
</html>
