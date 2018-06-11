<?php

include("databaselogin.php"); // Inkluderer databaselogin.php, som logger på databasen
$sql = 'SELECT Titel, Forfatter, aarstal, genre, aarstal, sprog';

$resultat = mysqli_query($conn, $sql); //Lægger værdier i $resultat

?>

<!DOCTYPE html>

<html lang="da">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--stylesheets -->
    <link rel="stylesheet" href="stylesheet.css">
  
    
    <!-- titel -->
	<title>Bøger som skal læses</title>
            
</head>
    
    
<body>
    <header>
    <h1>BØGER SOM SKAL LÆSES</h1>  
    </header>
    <!-- wrapsection til siden -->
    <section class="wrapper"> 
    
    <h3>Opret ny bog</h3>
    
        <!-- Oprettelses form -->
    <form name="bogform" method="post" onsubmit="return validering()" action="bogbehandling.php">        
                    <!-- Titel -->
                    <label>Titel</label> <br>
                    <input type="text" class="textbox" id="titel" name="titel" /> <br>
                    <br>
                    <!-- Forfatter -->
                    <label>Forfatter</label> <br>
                    <input type="text" class="textbox" id="forfatter" name="forfatter" /> <br>
                    <br>
                    <!-- Årstal -->
                    <label>Årstal</label> <br>
                    <input type="text" class="textbox" id="aarstal" name="aarstal" /> <br>
                    <br>
                    <!-- Genre -->
                    <label>Genre</label><br>
                    <select id="genre" class="ddl" name="genre" >
                        <option value="Biografi">Biografi</option>
                        <option value="Bornebog">Børnebog</option>
                        <option value="Erotik">Erotik</option>
                        <option value="Ebog">E-bog</option>
                        <option value="Hobby">Hobby</option>
                        <option value="Kunstogkultur">Kunst og kultur</option>
                        <option value="Krimi">Krimi og spænding</option>
                        <option value="Mad">Mad og gastronomi</option>
                        <option value="Film">Filmbøger</option>
                        <option value="Krop">Krop og sind</option>
                        <option value="Filosofi">Filosofi</option>
                        <option value="Historie">Historie</option>       
                        <option value="Skonlitteratur">Skønlitteratur og digte</option>
                        <option value="Samfund">Samfund</option>                    
                        <option value="Andet">Andet</option>
                    </select>
                    <br>
                    <br>
                     <!-- Beskrivelse -->
                    <label>Beskrivelse</label><br>
                    <textarea id="beskrivelse" class="textarea" name="beskrivelse"></textarea>
                    <br>
                    <br>
                    <!-- Sprog -->
                    <label>Sprog</label><br>
                    <input type="text" class="textbox" id="sprog" name="sprog" /> <br>
                    <br>
                    <!-- Knap til at gemme -->
                    <button class="savebtn" type="submit" value="submit">Opret bog</button>
                </form>
    
    <!-- Alle de bøger som er blevet indsendt -->
    
    <h2>Liste over bøger som skal læses</h2> 
    <section id="bogliste">
                  <?php while ($r = mysqli_fetch_array($resultat)) { //En while-løkke der lægger hver række i $r
                            echo '<section class="spanclass">';
                                echo '<h3>' . $r['titel'] . ' <span class="bogtitel">(' . $r['aarstal'] . ')</span></h3>';
                                echo '<p><span class="spanclass">Forfatter:</span> ' . $r['forfatter'] . '</p>';                
                                echo '<p><span class="spanclass">Genre:</span> ' . $r['genre'] . 
                                echo '<p><span class="spanclass">Sprog:</span> ' . $r['sprog'] . '</p>';
                               '</p>';
                                echo '<p><span class="spanclass">Beskrivelse:</span> ' . $r['beskrivelse'] . '</p>';
                             
                            echo '</section><hr>';
                        } 
                    ?>
        	</section>
    
    </section>
   
    <!-- Footer -->
    <footer>
    <p>&copy; Sara Middelhede Erhvervsakademi Dania 2018</p>
    </footer>
    
    

    <!-- Javascript til cookies, som indholder styling. Fra cookieinfoscript.com -->
    
   <script type="text/javascript" id="cookieinfo"
	src="//cookieinfoscript.com/js/cookieinfo.min.js"
	data-bg="#645862"
	data-fg="#FFFFFF"
	data-link="#F1D600"
    data-message="Denne hjemmeside anvender cookies, for at optimere din oplevelse, ved at trykke acceptér, giver du samtykke til vores cookie-politik."
    data-linkmsg="Læs mere"
	data-cookie="CookieInfoScript"
	data-text-align="left"
    data-close-text="Acceptér!">
</script>

    </body>
    
</html>