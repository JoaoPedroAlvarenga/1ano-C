<%-- 
    Document   : page
    Created on : Nov 4, 2020, 7:34:37 PM
    Author     : joaopedro
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<jsp:useBean id="calcula" 
             class="br.com.bean.BeanJsp" 
             type="br.com.bean.BeanJsp"
             scope="page"
             />
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <h1>Page.jsp</h1>
        
        <jsp:setProperty property="*" name="calcula"/>
        
        <jsp:getProperty property="nome" name="calcula"/>
        <jsp:getProperty property="ano" name="calcula"/>
        <jsp:getProperty property="sexo" name="calcula"/>
    </body>
</html>
