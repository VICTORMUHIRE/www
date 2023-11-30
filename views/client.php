<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Client</title>
</head>
<body>
    
    <?php include_once "../controllers/getListeClient.php"?>
    
    <div class="menu">
       
    </div>
    <div class="container">
        <div class="head">
            <p>Gestion des Client</p>
        </div>
        <div class="container-child1">
            <div class="ajouter">
                <a href="ajouterClient.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Free 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                <p>Ajouter Client</p></a></div>
                               
            
            <div class="Client">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>N°</th>
                            <th>Nom</th>
                            <th>password</th>
                            <th>solde</th>
                        </tr>
                    </thead>
                    <tbody id='tableBody'>
                        <?php
                            $Clients = getListeClient();
                            for ($i = 0; $i < count($Clients); $i++) {
                                echo "<tr>";
                                echo "<td scope='row'>" . ($i + 1) . "</td>";
                                echo "<td scope='row'>" . $Clients[$i]->getNom() . "</td>";
                                echo "<td scope='row'>" . $Clients[$i]->getPasword() . "</td>";
                                echo "<td scope='row'>" . $Clients[$i]->getSolde() . "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
                <div id='div2'>
                    
                </div>
            </div>
        </div>
    </div>    

</div>

</body>
</html>