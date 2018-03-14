<?php
    define ("PAGE_TITLE", "Uppdatering");
    include 'header.php';
?>

<header class="header text-center">
    <div class="container">
    <h1 class="text-uppercase mb-0"><?=PAGE_UPDATE?></h1>
    <hr>
    </div>
</header>
<?php
    include 'navigation.php'; 
?>
<div class="row">
    <table class="table"><tr>
        <td><a class="btn btn-primary" href="#addGarn">Lägg till garn</a></button></td>
        <td><a class="btn btn-primary" href="#addColour">Lägg till färg</a></button></td>
        <td><a class="btn btn-primary" href="#addGarnColour">Koppla garn/färg</a></button></td>
        <td><a class="btn btn-primary" href="#addMottagare">Lägg till mottagare</a></button></td>
        <td><a class="btn btn-primary" href="#addKategori">Lägg till kategori</a></button></td>
        <td><a class="btn btn-primary" href="#addItem">Lägg till modelltyp</a></button></td>
        <td><a class="btn btn-primary" href="#addAlster">Lägg till alster</a></button></td>
        <td><a class="btn btn-primary" href="#addAHG">Koppla alster/garn</a></button></td>
    </tr></table>
</div>

<div id="addGarn">
    <h5 class="h5Update">Lägg till garn - garnnamn, märke/tillverkare/lev</h5>
    <!--metod = post == metoden som används för att skicka info -->
    <!--action = filen jag skickar info till -->
    <form action="garnInsert.php" method="post" class="form-inline formUpdate">  <!--visar på samma rad -->
        <!--label = etikett som visar det inom >  < -->
        <!--Annars kan placeholder="Namn"/"Telefonnummer" användas -->
        <!-- MEN då syns "Namn" bara när fältet är tomt!!! -->
        <!--input = skrivfält -->
        <!-- for = den inre benämningen  -->
        <!-- required == anger att inmatning krävs. -->
        <label for="nameManuf">Namn, tillverkare</label> 
        <input type="text" id="nameManuf" class="form-control mx-2" name ="nameManuf" required>
        
        <label for="material">Material</label>
        <input type="text" id="material" class="form-control mx-2" name ="material" required>
        
        <button class="btn btn-outline-primary" type="submit">
            Lägg till
        </button>
    </form>
</div>

<div id="addColour">
    <h5  class="h5Update">Lägg till färg - beskrivning eller namn</h5>
    <form action="colourInsert.php" method="post" class="form-inline formUpdate"> 
        <label for="fargNamn">Färg</label> 
        <input type="text" id="fargNamn" class="form-control mx-2" name ="fargNamn" required>
        
        <button class="btn btn-outline-primary" type="submit">
            Lägg till
        </button>
    </form>
</div>

<div id="addGarnColour">
    <h5  class="h5Update">Koppla färg + garn - välj från menyer</h5>
    <form action="garnColourInsert.php" method="post" class="form-inline formUpdate"> 
        
    <!-- Lista för att välja garn -->
        <?php
            $sql = "SELECT DISTINCT *
            FROM garn
            ORDER BY
            nameManuf ASC";
            
            $table = mysqli_query($connection, $sql); 
            
            echo '<select name="garn">'; 
            echo "<OPTION>Välj garn</OPTION>"; 
            
            while ($row = $table->fetch_assoc()) { 
                $nameManuf = $row["nameManuf"];
                $id = $row["ID"];
                echo '<OPTION value="' . $id . '">' . $nameManuf . '</OPTION>'; 
            } 
            echo '</SELECT>';
        ?>
        <!-- Lista för att välja färg -->
        <?php
            $sql = "SELECT DISTINCT * FROM colour";
            
            $table = mysqli_query($connection, $sql); 
            
            echo '<select name="fargNamn">'; 
            echo "<OPTION>Välj färg</OPTION>"; 
            
            while ($row = $table->fetch_assoc()) { 
                $fargNamn = $row["fargNamn"];
                echo '<OPTION value="' . $fargNamn . '">' . $fargNamn . '</OPTION>'; 
            } 
            echo '</SELECT>';
        ?>
        <button class="btn btn-outline-primary" type="submit">
            Lägg till
        </button>
    </form>
</div>



<div id="addMottagare">
    <h5  class="h5Update">Lägg till mottagare</h5>
    <form action="mottagareInsert.php" method="post" class="form-inline formUpdate"> 
        <label for="namn">Namn</label> 
        <input type="text" id="namn" class="form-control mx-2" name ="namn" required>
        
        <label for="kontakt">Kontaktväg</label>
        <input type="text" id="kontakt" class="form-control mx-2" name ="kontakt">
        
        <button class="btn btn-outline-primary" type="submit">
            Lägg till
        </button>
    </form>
</div>

<div id="addKategori">
    <h5 class="h5Update">Lägg till kategori</h5>
    <form action="kategoriInsert.php" method="post" class="form-inline formUpdate"> 
        <label for="namn">Kategori</label> 
        <input type="text" id="namn" class="form-control mx-2" name ="namn" required>
       
        <button class="btn btn-outline-primary" type="submit">
            Lägg till
        </button>
    </form>
</div>

<div id="addItem">
    <h5 class="h5Update">Lägg till modell - skriv in modelltyp, välj kategori</h5>
    <form action="itemInsert.php" method="post" class="form-inline formUpdate"> 
        <label for="modellTyp">Modell</label> 
        <input type="text" id="modellTyp" class="form-control mx-2" name ="modellTyp" required>
        
                <!-- Lista för att välja kategori -->
        <?php
            $sql = "SELECT DISTINCT * FROM kategori";
                
            $table = mysqli_query($connection, $sql); 
                
            echo '<select name="namn">';    
            echo "<OPTION>Välj kategori</OPTION>"; 
                
            while ($row = $table->fetch_assoc()) { 
                $namn = $row["namn"];
                echo '<OPTION value="' . $namn . '">' . $namn . '</OPTION>'; 
            } 
            echo '</SELECT>';
        ?>
        
        <button class="btn btn-outline-primary" type="submit">
            Lägg till
        </button>
    </form>
</div>

<div id="addAlster">
    <h5 class="h5Update">Lägg till alster - TBD!!! <br>
    Välj mottagare, modelltyp, garn, färg, skriv in teknik, skriv in särdrag, skriv in kommentarer, skriv in slutdatum (ca. ÅÅMMDD, men ange dag 01 som default)</h5>
    <br>Flera val måste vara möjliga för både garn och färg.
    <br>Hur ska jag kunna kontrollera att garn coh färg har en kombination i garn_has_colour? 
    <form action="alsterInsert.php" method="post" class="form-inline formUpdate"> 
        
        
        <!-- Lista för att välja mottagare -->
        <?php
            $sql = "SELECT DISTINCT * 
            FROM mottagare
            ORDER BY 
            namn ASC";
            
            $table = mysqli_query($connection, $sql); 
            
            echo '<select name="namn">'; 
            echo "<OPTION>Välj mottagare</OPTION>"; 
            
            while ($row = $table->fetch_assoc()) { 
                $namn = $row["namn"];
                $id = $row["ID"];
                echo '<OPTION value="' . $id . '">' . $namn . '</OPTION>'; 
            } 
            echo '</SELECT>';
        ?>
        <!-- Lista för att välja modell -->
        <?php
            $sql = "SELECT DISTINCT * 
            FROM item
            ORDER BY modellTyp ASC";
            
            $table = mysqli_query($connection, $sql); 
            
            echo '<select name="modellTyp" require>'; 
            echo "<OPTION>Välj modelltyp</OPTION>"; 
            
            while ($row = $table->fetch_assoc()) { 
                $modellTyp = $row["modellTyp"];
                $id = $row["ID"];
                echo '<OPTION value="' . $id . '">' . $modellTyp . '</OPTION>'; 
            } 
            echo '</SELECT>';
        ?>
        
        <label for="teknik">Teknik</label>
        <input type="text" id="teknik" class="form-control mx-2" name ="teknik">

        <label for="feature">Särdrag</label>
        <input type="text" id="feature" class="form-control mx-2" name ="feature">
        
        <label for="sticka">Sticka</label>
        <input type="text" id="sticka" class="form-control mx-2" name ="sticka">

        <label for="pris">Pris</label>
        <input type="text" id="pris" class="form-control mx-2" name ="pris">

        <label for="kommentarer">Kommentarer</label>
        <input type="text" id="kommentarer" class="form-control mx-2" name ="kommentarer">
        
        <label for="datumFinish">Slutdatum</label>
        <input type="text" id="datumFinish" class="form-control mx-2" name ="datumFinish">
        
        <button class="btn btn-outline-primary" type="submit">
            Lägg till
        </button>
    </form>
</div>

    <!-- Koppla alster och garn/färg -->
<div id="addAHG">
    <h5  class="h5Update">Koppla ett alster till garner - välj från menyer.</h5>
    1: välj mottagare (namn), 2: välj bland dens alster, 3: välj garn (nameManuf), 4: välj bland dess färger

    <form action="alsterGarnColourInsert.php" method="post" class="form-inline formUpdate"> 
    <!-- Lista för att välja mottagare och item (från alster-listan) -->
    <?php
            $sql = 
            "SELECT DISTINCT 
            m.namn, i.modellTyp, a.ID 
            FROM 
            mottagare AS m, item AS i, alster AS a 
            WHERE 
            a.Mottagare_ID = m.ID AND 
            a.Item_ID = i.ID AND
            a.inclColour = '0'
            ORDER BY namn ASC";
            
            $table = mysqli_query($connection, $sql); 
            
            echo '<select name="alsterId">'; 
            echo "<OPTION>Välj stickalster</OPTION>"; 
            
            while ($row = $table->fetch_assoc()) { 
                $namn = $row["namn"];
                $modellTyp = $row ["modellTyp"];
                $alsterId = $row["ID"];
                echo '<OPTION value="' . $alsterId . '">' . $namn . ', ' . $modellTyp. '</OPTION>'; 
            } 
            echo '</SELECT>';
    ?>
        <!-- Lista för att välja garn -->
        <?php
                $sql = 
                "SELECT 
                g.nameManuf, c.fargNamn, gc.ID 
                FROM 
                garn_has_colour AS gc, garn AS g, colour AS c
                WHERE 
                gc.Garn_ID = g.ID AND gc.fargNamn = c.fargNamn
                ORDER BY 
                g.nameManuf, c.fargNamn 
                ";
                
                $table = mysqli_query($connection, $sql); 
                
                echo '<select name="gcID">'; 
                echo "<OPTION>Välj garn och färg</OPTION>"; 
            
                while ($row = $table->fetch_assoc()) {     
                    $nameManuf = $row["nameManuf"];
                    $fargNamn = $row["fargNamn"];
                    $gcID = $row ["ID"];
                    echo '<OPTION value="' . $gcID .'">' . $nameManuf . ', ' . $fargNamn .'</OPTION>'; 
                } 
                echo '</SELECT>';
        ?>
        <button class="btn btn-outline-primary" type="submit">
            Lägg till
        </button>
    </form>
</div>

