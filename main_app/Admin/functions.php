<?php

function ContadorEs()
{
    $dbho = new conexionbs();
    $query="SELECT * FROM clientes WHERE genero='Hombre'"; 
    $numero = $dbho -> query($query);
    $cont= mysqli_num_rows($numero);
    return $cont;
}

function Todosclientes()
{
    $dbho = new conexionbs();
    $query="SELECT * FROM clientes"; 
    $clientes = $dbho -> query($query);
    $cont= mysqli_num_rows($clientes);
    return $cont;
}

function Clientesinatender()
{
    $dbho = new conexionbs();
    $query="SELECT * FROM clientes WHERE genero='Mujer'"; 
    $clientesin = $dbho -> query($query);
    $cont= mysqli_num_rows($clientesin);
    return $cont;
}

function EmpresasRegistradas()
{
    $dbho = new conexionbs();
    $query="SELECT * FROM usuarios WHERE Tipo_usuario='Usuario'"; 
    $clientesin = $dbho -> query($query);
    $cont= mysqli_num_rows($clientesin);
    return $cont;
}

?>