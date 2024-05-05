<?php
	session_start();
?>
<!DOCTYPE htl>
	<html lang="pl">
		<head><eta charset="UTF-8"/>
			<title> Logowanie </title>
			<link rel="stylesheet" href="p2.css" type="text/css">
            <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">			
		</head>
		<body>
            
            <center>
                <table style="vertical-align: middle;">
                    <tr>
                        <td>
                        <div id="log">
                            <a href="strona_glowna.php" id="a_panel"><img src="logo.png" id="logo_log"></a>  
                            
                            <p class="text_log">Logowanie</p>
                            <form method="POST">
                                <input type="text" name="login" placeholder="Login" class="log"/>
                                <br/>
                                <input type="password" name="pass" placeholder="Hasło" class="log"/>
                                <br/>
                                <input type="submit" value="ZALOGUJ" name="zaloguj" class="button">
                                
                            </form>
                            <?php
                                if(isset($_POST['zaloguj'])){
                                    $db = mysqli_connect("localhost", "root", "", "przychodnia");
                                    $login = $_POST['login'];
                                    $pass = $_POST['pass'];
                                    $pass_hash = hash('sha256',$pass);
                                        

                                    $sql = "SELECT * FROM pacjenci WHERE pesel = '$login' AND haslo = '$pass_hash'";
                                    $result = mysqli_query($db, $sql);
                                    
                                    $count = mysqli_num_rows($result);
                                    if($count == 1){
                                        $_SESSION['zalogowany'] = $login;
                                        header("Location: strona_glowna.php");
                                    }else{
                                        echo "<br>Login lub hasło nie są prawidłowe.<br/>Spróbuj pownownie.";
                                    }
                                    mysqli_close($db);
                                }
                            ?>
                        </div> 
                        </td>
                        <td>
                        <div id="log">
                            <p class="text_log">Rejestracja</p>
                            <form method="POST">
                                <input type="text" name="imie" placeholder="Imię" class="log"/>
                                <br/>
                                <input type="text" name="nazwisko" placeholder="Nazwisko" class="log"/>
                                <br/>
                                <input type="text" name="ulica" placeholder="Ulica" class="log"/>
                                <br/>
                                <input type="text" name="nr" placeholder="Numer domu" class="log"/>
                                <br/>
                                <input type="text" name="city" placeholder="Miejscowość" class="log"/>
                                <br/>
                                <input type="text" name="kod" placeholder="Kod pocztowy" class="log"/>
                                <br/>
                                <input type="text" name="pesel" placeholder="PESEL" class="log"/>
                                <br/>
                                <input type="text" name="tel" placeholder="Telefon" class="log"/>
                                <br/>
                                <input type="date" name="data" placeholder="Data urodzenia" class="log"/>
                                <br/>
                                <input type="password" name="pass" placeholder="Hasło" class="log"/>
                                <br/>
                                <input type="submit" value="ZAREJESTRUJ" name="rejestracja" class="button"/>
                            </form>
                            <?php
                                if(isset($_POST['rejestracja'])){
                                    $db = mysqli_connect("localhost", "root", "", "przychodnia");
                                    $imie = $_POST['imie'];
                                    $nazwisko = $_POST['nazwisko'];
                                    $ulica = $_POST['ulica'];
                                    $nr = $_POST['nr'];
                                    $city = $_POST['city'];
                                    $tel = $_POST['tel'];
                                    $data = $_POST['data'];
                                    $kod = $_POST['kod'];
                                    $pass = hash('sha256',$_POST['pass']);
                                    $data = $_POST['data'];
                                    $pesel = $_POST['pesel'];

                                    $zapytanie = "INSERT INTO pacjenci VALUES(NULL,'$imie','$nazwisko','$ulica','$nr','$city','$kod','$pesel','$tel','$data','$pass')";
                                    $query = mysqli_query($db, $zapytanie);
                                    header('refresh: 1;');

                                    mysqli_close($db);
                                }
                            ?>
                        </div>
                        </td>
                    </tr>
                </table>
            </center>
		</body>
	</html>