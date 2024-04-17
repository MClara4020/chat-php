<?php
    session_start();

    // $SESSION['mensagens'] = [];

    if(isset($_POST) && !empty($_POST))
    {
        $_SESSION['mensagens'][] = $_POST['mensagem'];
        // ARMAZENAR NA SESSION
    }

    unset($_POST['mensagem']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
</head>
<body style="display: flex; flex-direction: column"> 
    <div class="mensagens">
        <?php
        
        if(isset($_SESSION) && !empty($_SESSION))
        {
            foreach ($_SESSION['mensagens'] as $mensagem) {

                ?>
                    <div style="background-color: #ff00ff">
                        <p><?= $mensagem  ?></p>
                        <p><?= date('d/m/Y')  ?></p>
                    </div>
                <?php
            }
            // Foreach para mostrar a session / mensagens com HTML
        }
        
        ?>
    </div>
    <form action="/" method="post">
        <input name="mensagem">
        <button type="submit">enviar</button>
    </form>
</body>
</html>