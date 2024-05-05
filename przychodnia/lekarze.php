
<?php
	session_start();
?>

<!DOCTYPE htl>
	<html lang="pl">
		<head><eta charset="UTF-8"/>
			<title> CDT - Lekarze </title>
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
                                <table style='width:1000px;margin-bottom:80px;'>
                                    <tr><h2 class='td_pac'>LEKARZE</h2></tr>
                                    <tr>
                                        <td class='td_pac'><h3>Imię i nazwisko</h3></td>
                                        <td class='td_pac'><h3>Kontakt</h3></td>
                                        <td class='td_pac'><h3>Specjalizacja</h3></td>
                                    </tr>

                                <?php
                                    $db = mysqli_connect("localhost", "root", "", "przychodnia");


                                    $sql = "select lekarze.imie, lekarze.nazwisko, specjalizacje.nazwa, lekarze.telefon, lekarze.email
                                        from lekarze inner join specjalizacje
                                        where specjalizacje.id_specjalizacji = lekarze.specjalizacja";
                                    
                                    $result = mysqli_query($db, $sql);
                                    while ($row = mysqli_fetch_array($result))
                                    {
                                        $imie = $row['imie'];
                                        $nazwisko = $row['nazwisko'];
                                        $telefon = $row['telefon'];
                                        $email = $row['email'];
                                        $specjalizacja = $row['nazwa'];

                                        echo "<tr>
                                                <td class='td_pac'>$imie $nazwisko</td>
                                                <td class='td_pac'>
                                                    $telefon<br>$email
                                                </td>
                                                <td class='td_pac'>$specjalizacja</td>
                                            </tr>"
                                        ;
                                    }
                                    
                                    mysqli_close($db);
                                
                            ?>  
                            </table>
                        </center>
                </div>  
            </center>
		</body>
	</html>