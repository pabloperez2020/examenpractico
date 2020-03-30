<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>examen practico</title>
</head>
<body bgcolor="yellow" >


<table border="1" width="100%">
    <td style="text-align: center;">
    <img src="img/logo.png"
    align="left"
     width="150" height="150"
     alt="Alt text"><img src="img/logo1.png"
    align="right"
     width="150" height="150"
     alt="Alt text">
        <p>UNIVERSIDAD AUTONOMA DE CHIAPAS</p>
        <p>FACULTAD DE CONTADURIA Y ADMINISTRACION</p>
        <p>PROGRAMACION WEB</p>
        <p>ELABORADO POR: REYNEL PEREZ PABLO</p>
        <P>PROFESOR: RIGOBERTO OVANDO PEREZ</P> 
        <p>SUMADE DE DIGITOS </p>
    </td>
    <tr>
        <td>
            <ul>
                <li><a href="index.php">INICIO</a></li>
                

            </ul>
        </td>
        
    </tr>
    <td>

    <form method="post" action="">
    
                <tr>
                    <td><h3>Ingrese el Primer Numero :<input type="text" size="10" name="nn1" required></td>
                </tr>
                <tr>
                    <td><h3>Ingrese el Segundo Numero :<input type="text" size="10" name="nn2" required></td>
                </tr>
                <tr>
                    <td><input type="submit"

                    value="CALCULAR" name="ver"</td>

                </tr>
                 
            
    </td>
<tr>
    <td>
    <?php 
    
    if(isset($_REQUEST['nn1']))
    {
    
    
    {
    
        $num1=$_POST['nn1'];
        $num2=$_POST['nn2'];
        
    $suma=$num1+$num2;
     echo "La suma es: $suma ";
    
    }
    
    
    }
    else
    {
        print "INGRESE LOS DATOS";
    }
    ?>
    
    </td>
</tr>
</table>
</body>
</html>
</body>
</html>