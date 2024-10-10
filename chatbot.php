<?php
include('view/top.php');
include('view/menue.php');
include('config/config.php');
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeeMomente</title>
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
    <p class="titelStartseite">Chatbot</p>
    <p class="beschreibungstext">Willkommen bei TeeMomente! Ich bin dein persönlicher Chatbot und stehe dir gerne zur Verfügung. Wie kann ich dir helfen?</p>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input name="prompt"><input type="submit" value="Suche">
    </form>
    <?php
    if (isset($_POST['prompt'])) {
        $payload = createPayload($_POST['prompt']);
        $result = ollama_api_call($payload, $config['groq_api_key']);
        echo '<p style="color:blue;">' . $_POST['prompt'] . '</p>';
        echo '<p>' . nl2br($result['response']) . '</p>';
    }
    ?>
</body>

</html>


<?php
include('view/bottom.php');
?>

<style>
    form {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    form input[name="prompt"] {
        width: 300px;
        padding: 10px;
        border: 2px solid #FFD700;
        /* Goldene Umrandung */
        border-radius: 5px;
        margin-right: 10px;
    }

    form input[type="submit"] {
        padding: 10px 20px;
        background-color: #FFD700;
        /* Goldene Hintergrundfarbe */
        border: none;
        border-radius: 5px;
        color: #8B4513;
        /* Braune Textfarbe */
        font-weight: bold;
        cursor: pointer;
    }

    form input[type="submit"]:hover {
        background-color: #FFA500;
        /* Orange Hintergrundfarbe beim Hover */
    }

    #ollama-chatbot {
        margin: 20px auto;
        max-width: 600px;
        background-color: #FFFFFF;
        /* Weiße Hintergrundfarbe */
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        color: #000000;
        /* Schwarze Textfarbe */
    }

    #ollama-chatbot p {
        margin: 10px 0;
    }
</style>