<?php
	session_start();
	
?>
<!DOCTYPE htl>
	<htl lang="pl">
		<head><eta charset="UTF-8"/>
			<title>CDT MEDICUS</title>
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
                            <div class="middle">
                                <h2>OFERTY REHABILITACJI</h2>
                                <p><b>Terapia manualna (mobilizacje)</b><br>To metoda manualnej mobilizacji, w szczególności kręgosłupa i stawów, której celem jest przywrócenie funkcji i zniesienie ograniczeń ruchomości.</p>
                                <p><b>Osteopatia</b><br>Osteopatia opiera się w głównej mierze, na bardzo dokładnym określeniu przyczyny dolegliwości, które zaburzają poprawną pracę naszego ciała</p>
                                <p><b>Fizjoterapia dziecięca</b><br>Terapia wcześniaków, niemowląt i dzieci z zaburzeniami napięcia mięśniowego, asymetrią ułożenia ciała, zaburzeniami neurologicznymi, ortopedycznymi.</p>
                                <p><b>Fizjoterapia uroginekologiczna</b><br>Fizjoterapia uroginekologiczna zajmuje się wszelkiego rodzaju problemami dotyczącymi miednicy. Jej głównym zadaniem jest przywrócenie prawidłowych napięć w obszarze miednicy.</p>
                            </div><br>
                            <img src="rehabilitacja.png" id="szczepienia">
                            <div class="middle">
                                <p>
                                    <b>Fizjoterapia po COVID-19</b><br>
                                    Oferujemy kompleksową usługę fizjoterapii dla pacjentów z zaburzeniami wynikającymi z przebycia choroby COVID-19 (zakażenie koronawirusem SARS-CoV-2). Terapia taka wymaga bardzo indywidualnego i wielospecjalistycznego podejścia do Pacjenta.
                                    <br>Problemy zdrowotne jakie pozostają po przebytej chorobie COVID-19 są bardzo różne i występują z różną częstotliwością wśród pacjentów.
                                </p>
                                <p>W związku z wystąpieniem podejrzenia ogniska epidemicznego wywołanego zakażeniem wirusem SARS-CoV-2 nastąpiło czasowe wstrzymanie przyjęć w Oddziale Chirurgii Ogólnej i Onkologicznej w dniach od 14.04.2021 od godz. 13:00 do dnia 21.04.2021 do godz.13:00.</p>
                            </div><br>
                        </center> 
                </div>  
            </center>
		</body>
	</htl>