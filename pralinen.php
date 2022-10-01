<?php require_once('header.inc.php'); ?>

<p class="lead">Bitte tragen Sie die gewünschten Mengen ein!</p>

<form action="warenkorb.php" method="post">

    <table class="table table-hover w-auto">
        <tr class="table-warning">
            <th>Art.-Nr.</th>
            <th>Bezeichnung</th>
            <th>Menge</th>
            <th>Mengeneinheit</th>
        </tr>
        
        <?php foreach ($array_pralinen as $art_nr => $bez): ?>

            <!-- Prüfe ob im Session-Array die aktuelle Artikelnummer bereits vorhanden ist, 
            wenn ja weise diese Menge der Variablen $menge zu, wenn nicht dann 0 -->
            <?php $menge = isset($_SESSION[$art_nr]) ? $_SESSION[$art_nr] : 0; ?>

            
            <tr>
                <td><?php echo $art_nr; ?></td>
                <td><?php echo $bez; ?></td>
                <td>
                    <input type="number" name="<?php echo $art_nr; ?>" size="5" min = "0" value="<?php echo $menge ?>">
                </td>
                <td>Schachtel (250g)</td>
            </tr>

        <?php endforeach; ?>

            <tr>
                <td colspan="4">
                    <input type="submit" value="In den Warenkorb" name = "pralinen" class="btn btn-primary">
                    <input type="reset" value="Abbrechen" class="btn btn-secondary">
                </td>
            </tr>

    </table>

</form>

<?php get_footer(false,true); ?>