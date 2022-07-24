<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php

    include_once '../db/dbConnect.php';

    $sql = "SELECT `emailscolected`.`idEmailColected`,
    `emailscolected`.`email`
    FROM `shopmee_challenge`.`emailscolected`;
    ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "  <table class='table'>
                    <thead>
                        <tr>
                            <th scope='col'>#</th>
                            <th scope='col'>Email</th>
                            <th scope='col'></th>
                            <th scope='col'></th>
                        </tr>
                    </thead>
                <tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td scope='row'>
                    " . $row["idEmailColected"] . "
                </td>
                <td>
                    " . $row["email"] . "
                </td>
                <td>
                    <form class='leadForm' action='catchDataToEditEmail.php' method='post'>
                        <input type='hidden' name='idEmailEdit' value='" . $row["idEmailColected"] . "'/>
                        <input type='hidden' name='emailEdit' value='" . $row["email"] . "'/>
                        <input class='btn btn-success btn-sm rounded-0' type='submit' name='sendButton' value='Editar' />
                    </form>
                </td>
                <td>
                    <form class='leadForm' action='deleteEmail.php' method='post'>
                        <input type='hidden' name='idEmailDeleted' value='" . $row["idEmailColected"] . "'/>
                        <input class='btn btn-danger btn-sm rounded-0' type='submit' name='sendButton' value='Excluir' />
                    </form>
                </td>
            </tr>";
        }
        echo "
        </tbody>
    </table>";
    } else {
        echo "0 results";
    }
    $conn->close();

    ?>

    <br>

    <form class='leadForm' action='exportToSpreadsheet.php'>
        <a href="index.php">Voltar</a>
        <input class='btn btn-sm rounded-0' type='submit' name='sendButton' value='Exportar' />
    </form>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>