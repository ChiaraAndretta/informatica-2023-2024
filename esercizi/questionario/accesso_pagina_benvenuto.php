<!DOCTYPE html>
<html>
<head>
    <title>Dati Utente Registrato</title>
    <style>
        
            <?php
                $coloresfondo = $_GET['Colore'];
                echo "background-color: $coloresfondo;";
            ?>
        
    </style>
</head>
<body style="font:gotham">
        <h1> ciao <?= $_GET['Nome']?><?=$_GET['Cognome']?> </h1>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
        foreach ($_GET as $k => $v)  {
        ?>
            <tr>
                <td>
                    <?= $k ?>
                </td>
                <td>
                    <?= $v ?>
                </td>
            </tr>

        <?php
            }
        }
        ?>
    </table>
</body>
</html>