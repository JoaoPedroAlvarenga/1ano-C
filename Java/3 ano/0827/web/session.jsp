<%-- 
    Document   : session
    Created on : 28/08/2020, 23:09:27
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
        <h1>Hello  <%= application.getInitParameter("session") %></h1>
        
        
        <h1>User: <%= session.getAttribute("user") %></h1>
    </body>
</html>
