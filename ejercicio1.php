
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>examen practico</title>
</head>
<body bgcolor="yellow">

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
        <p> NUMURO MAYOR</p>
    </td>
    <tr>
        <td>
            <ul>
                <li><a href="index.php">INICIO</a></li>
              

            </ul>
            <tr>
            <form method="post" action="">
                <tr>
                <td>   Ingrese el Primer Numero :      <input type="text" size="45" name="num1"></td>
                </tr>
                <tr>
                <td>   Ingrese el segundo Numero :     <input type="text" size="45" name="num2"></td>
                </tr>
                <tr>
                    <td><input type="submit"

                    value="Calcular" name="ver"</td>

                </tr>





            </form>
            </tr>
        </td> 
        
        
    
    </tr>
    


    <tr>
    <td>
    
    
    <?php

if(isset($_REQUEST['num1']))


{ 
 

    if($_POST['num1']== "")
    {
        echo "Debe de ingresar el primer Numero !!!";
    }
    else

    {
       
        if($_POST['num2']== ""){
            echo "Debe de ingresar el segundo Numero !!!";
        }
        else



        {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
           
            if($num1 > $num2){
                echo "El numero mayor es : $num1 ";
            }else if($num1 == $num2){
                echo "Los dos Numeros Son Iguales !!!";
                
            }
            else
            {
                echo "El numero mayor es : $num2 ";
               

            }
        }
    }
    
}
else
{
    print "Porfavor inserte los numeros ";
}
?>
    
    
    </td>
</tr>
    

    
</table>
</body>
</html>