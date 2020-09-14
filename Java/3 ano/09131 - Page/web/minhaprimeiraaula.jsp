<%-- 
    Document   : minhaprimeiraaula
    Created on : 13/09/2020, 19:42:08
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
        <%--<%@page import="java.util.Date" %>--%>
        <%@page import="java.time.LocalDate" %>
        <%@page errorPage="error.jsp" %>
        
      
        <h1>Hoje é dia <%=  LocalDate.now().getDayOfMonth() %></h1>
        
        <%= 0 / 0  %>
    </body>
</html>
