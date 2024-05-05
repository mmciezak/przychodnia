<?php
	session_start();
    if(!isset($_SESSION['zalogowany'])){
		header("Location: Logowanie.php");
	}
?> 
<!DOCTYPE htl>
	<html lang="pl">
		<head><eta charset="UTF-8"/>
			<title> CDT - Mój profil </title>
			<link rel="stylesheet" href="p2.css" type="text/css">
            <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">			
		</head>
        <body>
            
             <center>
                <div id="panel">
                    <a href="strona_glowna.php" id="a_panel"><img src="logo.png" id="logo"></a>  
                    <a href="strona_glowna.php" class="a_panel">Strona główna</a>                    
                    <a href="lekarze.php" class="a_panel">Lekarze</a>
                    <a href="zabiegi.php" class="a_panel">Zabiegi</a>
                    <a href="rehabilitacja.php" class="a_panel">Rehabilitacja</a>
                    
                    <?php
                    if(isset($_SESSION['zalogowany'])){
                        echo "<a href='moj_profil.php' class='a_panel'>Mój profil</a>";
                        echo "<a href='wyloguj.php' class='a_panel'>Wyloguj</a>";
                    }else{
                        echo "<a href='logowanie.php' class='a_panel'>Zaloguj</a>";
                    }
                    ?>
                    <hr>
                        <center>
                            <div class="middle_pac">
                                <p><a href='moj_profil.php' class='cofnij'>COFNIJ</a></p>
                                <?php
                                        $db = mysqli_connect("localhost", "root", "", "przychodnia");
                                        $pesel = $_SESSION['zalogowany'];

                                        $data=date("Y-m-d H:i");
                                        $sql = "SELECT w.id_wizyty,w.gabinet,w.data_godzina,w.powod, l.telefon,l.imie,l.nazwisko, u.nazwa FROM pacjenci, wizyty AS w, lekarze AS l, uslugi AS u WHERE w.pacjent=pacjenci.id_pacjenta AND pacjenci.pesel = $pesel AND w.lekarz=l.id_lekarza AND w.usluga=u.id_uslugi AND w.data_godzina<'$data'";
                                        $result = mysqli_query($db, $sql);
                                        $count = mysqli_num_rows($result);
                                        if($count > 0){
                                            while ($row = mysqli_fetch_array($result)){
                                                $imie = $row['imie'];
                                                $nazwisko = $row['nazwisko'];
                                                $tel = $row['telefon'];
                                                $gabinet = $row['gabinet'];
                                                $data_wizyty = $row['data_godzina'];
                                                $powod = $row['powod'];
                                                $nazwa = $row['nazwa'];

                                                echo "
                                                <table class='dane_pacjenta'>
                                                    <tr><td><b>WIZYTA</b></td></tr>
                                                    <tr>
                                                        <td class='td_pac'>Imię i nazwisko lekarza: </td>
                                                        <td class='td_pac'>
                                                                $imie $nazwisko
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class='td_pac'>Gabinet: </td>
                                                        <td class='td_pac'>
                                                                $gabinet
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class='td_pac'>Data i godzina wizyty: </td>
                                                        <td class='td_pac'>
                                                                $data_wizyty
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class='td_pac'>Powód wizyty i zabieg: </td>
                                                        <td class='td_pac'>
                                                                $powod - $nazwa
                                                        </td>
                                                    </tr>
                                                </table>";
                                            }
                                        }else{
                                            echo "<p>Brak umówionych wizyt</p>";
                                        }
                                        mysqli_close($db);
                                    
                                ?>    
            </div>
        </div>
    </body>  
</html>