
<?php include "header.php" ; 
?>



<div class="container" style="margin: 7.5% auto auto auto">
    <h2 class='pt-3 text center'>Ajouter une nationalité</h2>
        <from action="valideAjoutNationalite.php" method="post">
                    <div classe="from-group">
                        <label for="libelle">Libellé</label>
                        <input type="text" class='from-control' id='libelle' placehoder='saisir le libellé' name='libelle'> 
                    </div>
                    <div class="row">
                        <div class="col"><a href=listeNationalite.php class='btn btn-warning'>revenir à la liste</a></div>
                        <div class="col"><button type ='submit' class='btn-success'>ajouter</button></div>
                    </div>
        </from>

</div>
<?php include "footer.php" ; 

?>  