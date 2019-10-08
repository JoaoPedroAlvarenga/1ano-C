  <?php
    $conectdb = new mysqli('localhost', 'root', '', 'bancoprodutos');
   
    if (!$conectdb) {
        die("<b class='erro'>Não foi possível conectar: " . mysql_error()."</b><br>");
    }