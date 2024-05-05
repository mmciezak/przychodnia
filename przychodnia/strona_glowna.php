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
                                <h2>CDT MEDICUS</h2>
                                <p>Przychodnia oferuje opiekę m.in. lekarzy medycyny rodzinnej, pediatrów, pielęgniarek i położnej. W ramach działalności w przychodni wykonuje się u pacjentów m.in. badania laboratoryjne i obrazowe, szczepienia obowiązkowe i zalecane zarówno u dzieci jak i dorosłych, oraz programy profilaktyczne. Więcej informacji na temat zakresu usług można znaleźć w zakładce zakres usług.</p>
                                <p>Przychodnia CDT MEDICUS to przychodnia oferująca szeroki zakres kompleksowych usług medycznych oraz doświadczoną kadrę medyczną. Indywidualne podejście do każdego pacjenta i poświęcona im uwaga podczas wizyty gwarantują szybkie i pozytywne rezultaty w postaci właściwej diagnozy problemów zdrowotnych i dobraniu skutecznego leczenia.</p>
                                <p>Niepubliczny Zakład Opieki Zdrowotnej MEDIMED oferuje także najwyższej klasy urządzenia medyczne zapewniające właściwą jakość i bezpieczeństwo. Pacjenci mogą liczyć na profesjonalną opiekę w przytulnie wyposażonych gabinetach, które zmniejszają stres badania. Również dzieci, dzięki przyjaznemu nastawieniu lekarza pediatry, przestaną obawiać się wizyty u doktora.</p>
                                <p>Wszystkie osoby niepełnosprawne bez problemu dotrą do przychodni i bez większych problemów będą się po niej poruszać. Budynek przychodni MEDIMED został bowiem dostosowany do potrzeb osób niepełnosprawnych.</p>
                            </div><br>
                            <img src="https://cdtmedicus.pl/files/PRZYCHODNIE/Lubin_Lena_Foto_low.jpg" id="img_szpital">
                            <div class="middle">
                                <p>
                                    <p><b>KOMUNIKAT DLA PACJENTÓW</b><p>

                                    Szanowni Państwo,
                                    W związku z wystąpieniem przypadku pozytywnego zakażenia wirusem SARS-CoV-2 w Oddziale Chorób Płuc i Chemioterapii nastąpiło zamknięcie w/w oddziału w dniach od 15.04.2021r. od godz.15:00 do dnia 26.04.2021r. do godz.10:00.
                                    Równocześnie informuję, iż powyższe skutkuje wstrzymaniem przyjęć pacjentów do w/w oddziału.
                                    Jedocześnie wskazuje się najbliższe placówki udzielające świadczeń w w/w zakresie:
                                    Szpital Powiatowy w Oświęcimiu
                                    Nowy Szpital w Olkuszu
                                    Szpital Wielospecjalistyczny w Jaworznie
                                </p>
                                <p>W związku z wystąpieniem podejrzenia ogniska epidemicznego wywołanego zakażeniem wirusem SARS-CoV-2 nastąpiło czasowe wstrzymanie przyjęć w Oddziale Chirurgii Ogólnej i Onkologicznej w dniach od 14.04.2021 od godz. 13:00 do dnia 21.04.2021 do godz.13:00.</p>
                            </div><br>
                            <img src="szczepienia.png" id="szczepienia">
                            <div class="middle">
                                <p>
                                    <p>W kwietniu uruchamiamy zapisy dla kolejnych roczników. Rejestracja będzie prowadzona zgodnie z harmonogramem:<p>

                                    12 kwietnia – rocznik 1962,<br>
                                    13 kwietnia – rocznik 1963,<br>
                                    14 kwietnia – rocznik 1964,<br>
                                    15 kwietnia – rocznik 1965,<br>
                                    16 kwietnia – rocznik 1966,<br>
                                    17 kwietnia – rocznik 1967,<br>
                                    19 kwietnia – rocznik 1968,<br>
                                    20 kwietnia – rocznik 1969,<br>
                                    21 kwietnia – rocznik 1970,<br>
                                    22 kwietnia – rocznik 1971,<br>
                                    23 kwietnia – rocznik 1972,<br>
                                    24 kwietnia – rocznik 1973.<br>
                                </p>
                            </div><br>

                            <div class="middle">
                                <table>
                                    <tr>
                                        <td class="td_mid">
                                            <table>
                                                <tr>
                                                    <td class="td_mid" >
                                                    Przychodnia specjalistyczna<br>
                                                    "CDT MEDICUS"<br>
                                                    ul. Wapowskiego 2<br>
                                                    20-491 Lublin<br>
                                                    tel./ fax. 81 45-05-825<br>
                                                    NIP 712-27-98-735<br>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="td_mid">
                                            <table  style='border-left:1px rgba(0, 0, 0, 0.315) solid;'>
                                                <tr>
                                                    <td colspan='2' style="text-align:center;">Godziny otwarcia:</td>
                                                <tr>
                                                <tr>
                                                    <td class="td_mid" >poniedziałek</td>
                                                    <td class="td_mid">08:00–18:00</td>
                                                </tr>
                                                <tr>
                                                    <td class="td_mid">wtorek</td>
                                                    <td class="td_mid">08:00–18:00</td>
                                                </tr>
                                                <tr>
                                                    <td class="td_mid">środa</td>
                                                    <td class="td_mid">08:00–18:00</td>
                                                </tr>
                                                <tr>
                                                    <td class="td_mid">czwartek</td>
                                                    <td class="td_mid">08:00–18:00</td>
                                                </tr>
                                                <tr>
                                                    <td class="td_mid">piątek</td>
                                                    <td class="td_mid">08:00–18:00</td>
                                                </tr>
                                                <tr>
                                                    <td class="td_mid">sobota</td>
                                                    <td class="td_mid">Zamknięte</td>
                                                </tr>
                                                <tr>
                                                    <td class="td_mid">niedziela</td>
                                                    <td class="td_mid">Zamknięte</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </div><br>
                            
                        </center>
                    
                </div>  
            </center>
		</body>
	</htl>