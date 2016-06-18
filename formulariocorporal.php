<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title></title>
</head>
<body>
	<?php  
	$nombre=$_REQUEST["nombre"] ;
	$peso=$_REQUEST["peso"];
	$cintura=$_REQUEST["cintura"];
	$cuello=$_REQUEST["cuello"];
	$altura=$_REQUEST["altura"];
	$cadera=$_REQUEST["cadera"];
	$edad=$_REQUEST["edad"];
	$sexo=$_REQUEST["sexo"];
	$cuello1=$_REQUEST["cuello1"];
	$cintura1=$_REQUEST["cintura1"];
	$altura1=$_REQUEST["altura1"];





		if ($_REQUEST["sexo"]=="Masculino" ) {
			 $pgc =(((495/(1.0324-0.19077*(log10($cintura1-$cuello1))+0.15456*log10($altura1)))-450));
		} 
		if ($_REQUEST["sexo"]=="Femenino") {
			$pgc=(((495/(1.29579-0.35004*(log10($cintura+$cadera-$cuello))+0.221*(log10($altura))))-450));
		} 

		$pgc=round($pgc,2);
		
		if ($sexo=="Masculino") {
			
		switch (true) {
			case ($edad<19):
				echo "este registro solo se puede realizar de 19 años en adelante";
				break;
			case ($edad>=19 && $edad<=24):

				switch (true) {
					case ($pgc<=2):
						$rango="esencial";
						break;
					case ($pgc>2 & $pgc<=6):
						$rango="atleta";
						break;
					case ($pgc>6 & $pgc<=9):
						$rango="Excelente";
						break;
					case ($pgc>9 & $pgc<=15):
						$rango="bueno";
						break;
					case ($pgc>15 & $pgc<=19):
						$rango="estandar";
						break;
					case ($pgc>19 & $pgc<=23):
						$rango="sobrepeso";
						break;
					case ($pgc>23):
						$rango="obesidad";
						break;
					
					default:
						echo "este rango no existe";
						break;
				}


				break;
			
				case ($edad>=25 & $edad<=29):

				switch (true) {
					case ($pgc<=2):
						$rango="esencial";
						break;
					case ($pgc>2 & $pgc<=6):
						$rango="atleta";
						break;
					case ($pgc>6 & $pgc<=10):
						$rango="Excelente";
						break;
					case ($pgc>10 & $pgc<=16):
						$rango="bueno";
						break;
					case ($pgc>16 & $pgc<=19):
						$rango="estandar";
						break;
					case ($pgc>19 & $pgc<=24):
						$rango="sobrepeso";
						break;
					case ($pgc>24):
						$rango="obesidad";
						break;
					
					default:
						echo "este rango no existe";
						break;
				}


				break;

				case ($edad>=30 && $edad<=34):

				switch (true) {
					case ($pgc<=2):
						$rango="esencial";
						break;
					case ($pgc>2 & $pgc<=6):
						$rango="atleta";
						break;
					case ($pgc>6 & $pgc<=11):
						$rango="Excelente";
						break;
					case ($pgc>11 & $pgc<=17):
						$rango="bueno";
						break;
					case ($pgc>17 & $pgc<=20):
						$rango="estandar";
						break;
					case ($pgc>20 & $pgc<=25):
						$rango="sobrepeso";
						break;
					case ($pgc>25):
						$rango="obesidad";
						break;
					
					default:
						echo "este rango no existe";
						break;
				}


				break;

				case ($edad>=35 && $edad<=39):

				switch (true) {
					case ($pgc<=2):
						$rango="esencial";
						break;
					case ($pgc>2 & $pgc<=6):
						$rango="atleta";
						break;
					case ($pgc>6 & $pgc<=12):
						$rango="Excelente";
						break;
					case ($pgc>12 & $pgc<=18):
						$rango="bueno";
						break;
					case ($pgc>18 & $pgc<19):
						$rango="estandar";
						break;
					case ($pgc>19 & $pgc<=26):
						$rango="sobrepeso";
						break;
					case ($pgc>26):
						$rango="obesidad";
						break;
					
					default:
						echo "este rango no existe";
						break;
				}


				break;

				case ($edad>=40 && $edad<=44):

				switch (true) {
					case ($pgc<=2):
						$rango="esencial";
						break;
					case ($pgc>3 & $pgc<=6):
						$rango="atleta";
						break;
					case ($pgc>6 & $pgc<=13):
						$rango="Excelente";
						break;
					case ($pgc>13 & $pgc<=19):
						$rango="bueno";
						break;
					case ($pgc>19 & $pgc<20):
						$rango="estandar";
						break;
					case ($pgc>=20 & $pgc<=27):
						$rango="sobrepeso";
						break;
					case ($pgc>27):
						$rango="obesidad";
						break;
					
					default:
						echo "este rango no existe";
						break;
				}


				break;

				case ($edad>=45 && $edad<=49):

				switch (true) {
					case ($pgc<=2):
						$rango="esencial";
						break;
					case ($pgc>2 & $pgc<=6):
						$rango="atleta";
						break;
					case ($pgc>6 & $pgc<=15):
						$rango="Excelente";
						break;
					case ($pgc>15 & $pgc<=21):
						$rango="bueno";
						break;
					case ($pgc>21 & $pgc<=25):
						$rango="estandar";
						break;
					case ($pgc>25 & $pgc<=28):
						$rango="sobrepeso";
						break;
					case ($pgc>28):
						$rango="obesidad";
						break;
					
					default:
						echo "este rango no existe";
						break;
				}


				break;

				case ($edad>=50 && $edad<=54):

				switch (true) {
					case ($pgc<=2):
						$rango="esencial";
						break;
					case ($pgc>2 & $pgc<=6):
						$rango="atleta";
						break;
					case ($pgc>6 & $pgc<=17):
						$rango="Excelente";
						break;
					case ($pgc>17 & $pgc<=23):
						$rango="bueno";
						break;
					case ($pgc>23 & $pgc<=26):
						$rango="estandar";
						break;
					case ($pgc>26 & $pgc<=29):
						$rango="sobrepeso";
						break;
					case ($pgc>29):
						$rango="obesidad";
						break;
					
					default:
						echo "este rango no existe";
						break;
				}


				break;

				case ($edad>=55 && $edad<=59):

				switch (true) {
					case ($pgc<=2):
						$rango="esencial";
						break;
					case ($pgc>2 & $pgc<=6):
						$rango="atleta";
						break;
					case ($pgc>6 & $pgc<=19):
						$rango="Excelente";
						break;
					case ($pgc>19 & $pgc<=24):
						$rango="bueno";
						break;
					case ($pgc>24 & $pgc<=28):
						$rango="estandar";
						break;
					case ($pgc>28 & $pgc<=30):
						$rango="sobrepeso";
						break;
					case ($pgc>30):
						$rango="obesidad";
						break;
					
					default:
						echo "este rango no existe";
						break;
				}


				break;

				case ($edad>=60):

				switch (true) {
					case ($pgc<=2):
						$rango="esencial";
						break;
					case ($pgc>2 & $pgc<=6):
						$rango="atleta";
						break;
					case ($pgc>6 & $pgc<=20):
						$rango="Excelente";
						break;
					case ($pgc>20 & $pgc<=25):
						$rango="bueno";
						break;
					case ($pgc>25 & $pgc<=29):
						$rango="estandar";
						break;
					case ($pgc>29 & $pgc<=31):
						$rango="sobrepeso";
						break;
					case ($pgc>31):
						$rango="obesidad";
						break;
					
					default:
						echo "este rango no existe";
						break;
				}


				break;

			default:
				echo "Esta edad no se encuentra registrada";
				break;
		}
	}

	//comenzamos con la tabla de la mujer

	if ($sexo=="Femenino") {
			
		switch (true) {
			case ($edad<19):
				echo "este registro solo se puede realizar de 19 años en adelante";
				break;
			case ($edad>=19 && $edad<=24):

				switch (true) {
					case ($pgc<=7):
						$rango="esencial";
						break;
					case ($pgc>7 & $pgc<=12):
						$rango="atleta";
						break;
					case ($pgc>12 & $pgc<=15):
						$rango="Excelente";
						break;
					case ($pgc>15 & $pgc<=20):
						$rango="bueno";
						break;
					case ($pgc>20 & $pgc<=25):
						$rango="estandar";
						break;
					case ($pgc>25 & $pgc<=30):
						$rango="sobrepeso";
						break;
					case ($pgc>30):
						$rango="obesidad";
						break;
					
					default:
						echo "este rango no existe";
						break;
				}


				break;
			
				case ($edad>=25 & $edad<=29):

				switch (true) {
					case ($pgc<=7):
						$rango="esencial";
						break;
					case ($pgc>7 & $pgc<=12):
						$rango="atleta";
						break;
					case ($pgc>12 & $pgc<=16):
						$rango="Excelente";
						break;
					case ($pgc>16 & $pgc<=21):
						$rango="bueno";
						break;
					case ($pgc>21 & $pgc<=26):
						$rango="estandar";
						break;
					case ($pgc>26 & $pgc<=31):
						$rango="sobrepeso";
						break;
					case ($pgc>32):
						$rango="obesidad";
						break;
					
					default:
						echo "este rango no existe";
						break;
				}


				break;

				case ($edad>=30 && $edad<=34):

				switch (true) {
					case ($pgc<=7):
						$rango="esencial";
						break;
					case ($pgc>7 & $pgc<=12):
						$rango="atleta";
						break;
					case ($pgc>12 & $pgc<=17):
						$rango="Excelente";
						break;
					case ($pgc>17 & $pgc<=22):
						$rango="bueno";
						break;
					case ($pgc>22 & $pgc<=27):
						$rango="estandar";
						break;
					case ($pgc>27 & $pgc<=32):
						$rango="sobrepeso";
						break;
					case ($pgc>32):
						$rango="obesidad";
						break;
					
					default:
						echo "este rango no existe";
						break;
				}


				break;



				case ($edad>=35 && $edad<=39):



				switch (true) {
					case ($pgc<=7):
						$rango="esencial";
						break;
					case ($pgc>7 & $pgc<=12):
						$rango="atleta";
						break;
					case ($pgc>12 & $pgc<=19):
						$rango="Excelente";
						break;
					case ($pgc>19 & $pgc<=23):
						$rango="bueno";
						break;
					case ($pgc>23 & $pgc<=28):
						$rango="estandar";
						break;
					case ($pgc>28 & $pgc<=33):
						$rango="sobrepeso";
						break;
					case ($pgc>33):
						$rango="obesidad";
						break;
					
					default:
						echo "este rango no existe";
						break;
				}


				break;

				case ($edad>=40 && $edad<=44):

				switch (true) {
					case ($pgc<=7):
						$rango="esencial";
						break;
					case ($pgc>7 & $pgc<=12):
						$rango="atleta";
						break;
					case ($pgc>12 & $pgc<=21):
						$rango="Excelente";
						break;
					case ($pgc>21 & $pgc<=24):
						$rango="bueno";
						break;
					case ($pgc>24 & $pgc<=29):
						$rango="estandar";
						break;
					case ($pgc>29 & $pgc<=34):
						$rango="sobrepeso";
						break;
					case ($pgc>34):
						$rango="obesidad";
						break;
					
					default:
						echo "este rango no existe";
						break;
				}


				break;

				case ($edad>=45 && $edad<=49):

				switch (true) {
					case ($pgc<=7):
						$rango="esencial";
						break;
					case ($pgc>7 & $pgc<=12):
						$rango="atleta";
						break;
					case ($pgc>12 & $pgc<=23):
						$rango="Excelente";
						break;
					case ($pgc>23 & $pgc<=26):
						$rango="bueno";
						break;
					case ($pgc>26 & $pgc<=31):
						$rango="estandar";
						break;
					case ($pgc>31 & $pgc<=36):
						$rango="sobrepeso";
						break;
					case ($pgc>36):
						$rango="obesidad";
						break;
					
					default:
						echo "este rango no existe";
						break;
				}


				break;

				case ($edad>=50 && $edad<=54):

				switch (true) {
					case ($pgc<=7):
						$rango="esencial";
						break;
					case ($pgc>7 & $pgc<=12):
						$rango="atleta";
						break;
					case ($pgc>12 & $pgc<=25):
						$rango="Excelente";
						break;
					case ($pgc>25 & $pgc<=28):
						$rango="bueno";
						break;
					case ($pgc>28 & $pgc<=33):
						$rango="estandar";
						break;
					case ($pgc>33 & $pgc<=37):
						$rango="sobrepeso";
						break;
					case ($pgc>37):
						$rango="obesidad";
						break;
					
					default:
						echo "este rango no existe";
						break;
				}


				break;

				case ($edad>=55 && $edad<=59):

				switch (true) {
					case ($pgc<=7):
						$rango="esencial";
						break;
					case ($pgc>7 & $pgc<=12):
						$rango="atleta";
						break;
					case ($pgc>12 & $pgc<=27):
						$rango="Excelente";
						break;
					case ($pgc>27 & $pgc<=30):
						$rango="bueno";
						break;
					case ($pgc>30 & $pgc<=35):
						$rango="estandar";
						break;
					case ($pgc>35 & $pgc<=39):
						$rango="sobrepeso";
						break;
					case ($pgc>39):
						$rango="obesidad";
						break;
					
					default:
						echo "este rango no existe";
						break;
				}


				break;

				case ($edad>=60):

				switch (true) {
					case ($pgc<=7):
						$rango="esencial";
						break;
					case ($pgc>7 & $pgc<=12):
						$rango="atleta";
						break;
					case ($pgc>12 & $pgc<=27):
						$rango="Excelente";
						break;
					case ($pgc>27 & $pgc<=30):
						$rango="bueno";
						break;
					case ($pgc>30 & $pgc<=35):
						$rango="estandar";
						break;
					case ($pgc>35 & $pgc<=39):
						$rango="sobrepeso";
						break;
					case ($pgc>39):
						$rango="obesidad";
						break;
					
					default:
						echo "este rango no existe";
						break;
				}


				break;

			default:
				echo "Esta edad no se encuentra registrada";
				break;
		}
	}

	





	?>


	<div class="mensaje">
<?php	
echo "<re>".$nombre."</re>"." su indice de grasa corporal es del "."<re>".$pgc."</re>"."%, el cual esta situado en el rango "."<re>".$rango."</re>"." para personas del sexo "."<re>".$sexo."</re>"; 
?>
<br><br>
<input type="button" onclick="history.back()" value="Regresar" id="buton">
</div>
</body>
</html>