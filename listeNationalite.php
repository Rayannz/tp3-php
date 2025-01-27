
<?php include "header.php" ; 
include "connexionPdo.php";
$req=$monPdo->prepare("select * from nationalite");
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();    
$lesnationalites=$req->fetchAll();

?>


            <div class="container" style="margin: 7.5% auto auto auto">

            <div class="row">
            <div class="col-9"><h2>Liste des nationalités</h2></div>
            <div class="col-3"><a href="" class='btn btn-success'><i class="fas fa-plus-circle"></i> Créer une nationalités</a></div>

            <table class="table table-striped table-dark">

        <thead>
            <tr>
            <th scope="col">Numero</th>
            <th scope="col">Libellé</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
        foreach($lesnationalites as $nationalite){
            echo "<tr>";
            echo "<td>$nationalite->num</td>";
            echo "<td>$nationalite->libelle</td>";
            echo "<td>
            <a href='' class='btn btn-primary'><i class='fas fa-pen'></i> </a>
            <a href='' class='btn btn-danger'><i class='far fa-trash-alt'></i> </a>
            </td>";
            echo "</tr>";
            
        }
        ?>
               
        </tbody>
        </table>

    </div>
 


<?php include "footer.php" ; 

?>  