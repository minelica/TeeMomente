<?php
include('view/menue.php');
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
                <input name="prompt"><button type="submit"><i class="fas fa-search"></i></button>
            </form>
            <?php
            include 'config/config.php';
            include 'model/funktionen.php';

            if (!function_exists('my_str_contains')) {
                function my_str_contains(string $haystack, string $needle): bool
                {
                    return strpos($haystack, $needle) !== false;
                }
            }

            if (isset($_POST['prompt'])) {
                $prompt = strtolower(trim($_POST['prompt']));
                $productFound = false;

                foreach ($config['products'] as $key => $product) {
                    if (my_str_contains(strtolower($product['name']), $prompt) || my_str_contains(strtolower($key), $prompt)) {
                        echo '<div class="product">';
                        echo '<p class="suche_name">' . $product['name'] . '</p>';
                        echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '" . class="product-img">';
                        echo '<p>' . $product['description'] . '</p>';
                        echo '<p>Preis: ' . $product['price'] . '</p>';
                        echo '<p>Verpackung: ' . $product['packaging'] . '</p>';
                        echo '</div>';
                        $productFound = true;
                        break;
                    }
                }

                if (!$productFound) {
                    $payload = createPayload($_POST['prompt']);
                    $result = ollama_api_call($payload);
                    echo '<p>' . nl2br($result['response']) . '</p>';
                }
            }
            ?>
        </div>
        <?php
        include('view/bottom.php');
        ?>
    </div>
</body>

</html>