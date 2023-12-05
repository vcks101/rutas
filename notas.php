<?php
/* Haga un programa que calcule el promedio de notas sabiendo que tienen valor de 30%, 30% y 40% respectivamente */
$Nota1=4.0;
$Nota2=3.0;
$Nota3=3.8;
$Resultado=($Nota1*30)/100 + ($Nota2*30)/100 + ($Nota3*40)/100;
echo ("El resultado es: ".$Resultado);


/*Un programa que al capturar la edad de una persona diga si es: 
/*Menor de edad (Menor a 18 años) 
/*Adulto (Mayor o igual a 18 años y menor a 60 años) 
/*Adulto mayor (Mayor o igual a 60 años) 
/*Adicionalmente si la persona es mayor o igual a 18 años*/

$edad=62;
if ($edad<18){
    print("La persona es menor de edad");
}
else if($edad<60){
    print("La persona es adulto");
}
else{
    print("La persona es adulto mayor");
}

/*Desarrollar un programa que determine los divisores de un número definido previamente*/
$numero=8.0;
echo "Divisores del numero".$numero":";
for ($i=1;$i<=$numero;$i++){
    //mod (%) retorna el residuo de una division entera
    $residuo=$numero % $i;
    if($residuo==0)
{
echo "[ ".$i." ] ";
}
}


?>

<!-- Realizar un algoritmo con funciones que en la primera opción cargue e imprima vectores, 
en la segunda opción cargue e imprima matrices-->
<html>
    <head> <title>Menu de arreglos</title> </head>
    <body>
    </body>
    <!--Elaboramos un formulario HTML usando el metodo Post-->
    <form method="POST">
        <label for="">Seleccione una opcion</label>
        <input type="radio" value="1" name="opcion" required>Vectores
        <input type="radio" value="1" name="opcion" required>Matrices
        <input type="submit" value="Enviar">
    </form>
    </body>
</html>

<?php

if ($_POST){
    $opcion=$_POST['opcion']; 
    // Usamos un switch para crear un menu que según el caso nos ejecute una opción

switch($opcion){
    case 1:
    echo "<strong>Vectores</strong><br><br>";
    $vector1[0]-1; $vector1[1]-2; $vector1[2]="3"; $vector1[3]='a';

$vector1[4]='Hola';
                 foreach ($vector1 as $valor)
                    echo $valor." ";

                echo "<br><br><em>Otra forma<em> <br>";


                    $vector2['COLOMBIA' ] BOGOTA"; $vector2[ 'VENEZUELA']="CARACAS";
                    $vector2[ 'CHILE']="SANTIAGO"; $vector2['URUGUAY']='MONTEVIDEO";
                    $vector2['PERU']='LIMA'; 
                    foreach ($vector2 as $valor )
                        echo $valor."";


                    echo "<br><br><em>Otra formacem> <br>";
                    $vector 3-array(1,2,"3",'a', 'Hola');
                    foreach ($vector3 as $valor )
                        echo $valor." ";


                    echo "<br><br><em>Otra formacem> <br>"; 
                    $vector4[]-1; $vector4[]=2; $vector4[]="3"; $vector4[]='a';

$vector4[]='Hola';

                    foreach ($vectors as $valor) 
                        echo Svalor." ";
                break;

                    case 2:
                        echo "<strong>Matrices</strong><br><br>";
                        $matriz1[0][0]-1; $matriz1[0][1]=2;
                        $matriz1[1][0]="3"; $matriz1[1][1]='a';
                        foreach ($matriz1 as $filas ){ 
                            foreach ($filas as $celdas)
                                echo $celdas." ";
                            echo "<br>";
                        }
                        
                        echo "<br><br><em>Otra forma<em> <br>"; 
                        $matriz2-array(array(1,2), array('a', '3'));
                        $i=0;
                    for ($fil=0;$fil<2;$fil++){
                        for ($col=0;$col<2; $col++)
                            echo $matriz2[$fil][$col];
                        echo "<br>";
                    }
                    break;
                    default:
                        echo "Error en el programa";
                        break;
                }
            }
 ?>           

<?php

/*1.) Haga un programa que calcule la siguiente ecuación: Y = X * Z + Z + X

Definir las variables X, Z y Y*/
$X = 15; 
$Z = 7;
$Y = 0;

// Calcular la ecuación Y = X * Z + Z + X
$Y = $X * $Z + $Z + $X;

// Mostrar el resultado en la pantalla
echo "El valor de Y es: " . $Y;
?>

<?php
//2.) Realizar programa que capturado un n umero, realice la tabla de multiplicar de ese hasta el 10

$numero = 0;
echo "Ingrese un número: ";
$numero = (int) fgets(STDIN);

echo "La tabla de multiplicar del número " . $numero . " es:\n";
for ($i = 1; $i <= 10; $i++) {
    $producto = $numero * $i;

    echo $numero . " x " . $i . " = " . $producto . "\n";
}
?>

<?php

/*3.) Hacer un programa que imprima el costo de una llamada telefónica, capturando la duración 
de la llamada en minutos y conociendo lo siguiente: 
-Toda llamada que dure tres minutos o menos tiene un costo de $200. 
- Cada minuto adicional cuesta $30.*/

$duracion = 0;
$costo = 0;
echo "Ingrese la duración de la llamada en minutos: ";
$duracion = (int) fgets(STDIN);

if ($duracion <= 3) {
    $costo = 200;
} else {
    $costo = 200 + ($duracion - 3) * 30;
}
echo "El costo de la llamada es: $" . $costo;
?>

<?php

/*4.) Realizar el programa que calcule las áreas de un circulo, cuadrado y triangulo aplicando el 
concepto de funciones*/

function area_circulo($radio) {
    return pi() * pow($radio, 2);
}

function area_cuadrado($lado) {
    return pow($lado, 2);
}

function area_triangulo($base, $altura) {
    return ($base * $altura) / 2;
}
$radio = 5; 
$lado = 10; 
$base = 15; 
$altura = 8;

echo "El área del círculo de radio " . $radio . " es: " . area_circulo($radio) . "\n";
echo "El área del cuadrado de lado " . $lado . " es: " . area_cuadrado($lado) . "\n";
echo "El área del triángulo de base " . $base . " y altura " . $altura . " es: " . area_triangulo($base, $altura) . "\n";
?>



