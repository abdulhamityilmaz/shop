<?php require_once('header.inc.php'); ?>

<?php 

if(isset($_POST['schokolade']) OR isset($_POST['pralinen'])){

    //Das $_POST - Array durchlaufen... 
    foreach($_POST as $art_nr => $menge){
        //Prüfe ob Menge größer als 0 ist...(Kunde hat bestellt)
        if((int)$menge > 0) {
            $_SESSION[$art_nr] = (int)$menge;
        } else {
            //ist die Menge 0 , dann hat der Kunde entweder nicht bestellt oder 
            // die Bestellung rückgängig gemacht.
            //Prüfe also bo die aktuelle Artikelnr. bereits im Session-Array existiert 
            //wenn ja , lösche diese
            if(isset($_SESSION[$art_nr])){
                unset($_SESSION[$art_nr]);
            }
        }
    }
}

?>
<table class="table table-hover">
    <tr class="table-success">
        <th>Art.-Nr</th>
        <th>Bezeichnung</th>
        <th>Menge</th>
        <th>Aktion</th>
    </tr>

<?php foreach($_SESSION as $art_nr => $menge): ?>

    <tr>
        <td><?php echo $art_nr; ?></td>
        <td>
            <?php 
            //beginnt die Artikelnummer mit 's' nutze das Schokolade-Array
            if(str_starts_with($art_nr, 's')){
                $link = 'schokolade.php';
                echo $array_schoko[$art_nr];
            } 
            if(str_starts_with($art_nr, 'p')){
                $link = 'pralinen.php';
                echo $array_pralinen[$art_nr];
            } 
            
            ?>
        </td>
        <td><?php echo $menge; ?></td>
        <td></td>
    </tr>

<?php endforeach; ?>
</table>

<P>Was möchten Sie als nächstes tun? </P>

<ul>
    <li><a href="schokolade.php">Schokolade bestellen</a></li>
    <li><a href="pralinen.php">Pralinen bestellen</a></li>
    <li><a href="kasse.php">Bestellung abschließen</a></li>
</ul>

<?php get_footer(false,true); ?>