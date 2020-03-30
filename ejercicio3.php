
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>examen practico</title>
    <LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
</head>
<body bgcolor="yellow" >


<table border="1" width="100%"  >
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

    </td>
    <tr>
        <td>
            <ul>
                <li><a href="index.php">INICIO</a></li>
                
               

            </ul>
        </td>
        
    </tr>

    <tr>
        <td><form method="post" action="">
            
            
                

            <tr>
                <td>¿Qué tabla quiere calcular? : <input type="text" size="1" name="num1" required></td>
                
            </tr>
           
           <td><input type="submit"

                value="Calcular" name="ver"</td>

            </tr>
            </td>
    </tr>
    <tr>
        <td>
        <?php
if(isset($_REQUEST['num1']))
{




 $num1=$_REQUEST['num1'];

for($contador=1;$contador<=10;$contador++)
{
    $resultado=$num1 * $contador;
  print $num1. " * " .$contador." = ".$resultado."<br>";
    
}

}
else
{
    print "";
}
  
?>
        </td>
    </tr>
    
    
</table>
</body>
</html>