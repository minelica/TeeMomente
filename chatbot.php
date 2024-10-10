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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <p class="titelStartseite">Chatbot</p>
            <p class="beschreibungstext">Willkommen bei TeeMomente! Ich bin dein persönlicher Chatbot und stehe dir gerne zur Verfügung. Wie kann ich dir helfen?</p>

            <form class="chatbot_form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input name="prompt"><button type="submit"><i class="fas fa-paper-plane"></i></button>
            </form>
            <?php
            if (isset($_POST['prompt'])) {
                $payload = createPayload($_POST['prompt']);
                $result = ollama_api_call($payload, $config['groq_api_key']);
                echo '<p style="color:blue;">' . $_POST['prompt'] . '</p>';
                echo '<p>' . nl2br($result['response']) . '</p>';
            }
            ?>
        </div>
        <?php
        include('view/bottom.php');
        ?>
    </div>
</body>

</html>