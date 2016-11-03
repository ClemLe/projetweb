<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='fr' lang='fr' dir='ltr'>
<head>
    <title>Ajouter un user</title>
</head>
<body>
    <h1 style="text-align:center">Voici la liste des nouveau Users :</h1>
    <table style = "border-collapse: collapse">
        <div>
            <table border="2">
                <thead>	
                <td>Prenom de l'user</td>
                </thead>
                <?php
                foreach ($resultat as $value) {
                    echo "<tr>
			<td>" . $value->getPrenom() . "</td>
			</tr>";
                }
                ?>
            </table>
        </div>
</body>
</html>