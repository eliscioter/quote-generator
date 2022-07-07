<?php include './config/curlget.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote generator</title>

    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
<section class="quote-section">
            <?php if (empty($quote)): ?>
                <p>No quote available.</p>
            <?php endif; ?>
        <div class="quote-container">
            <?php if(isset($_POST['new-quote'])): ?>
                <?php echo '<p>' . $value_quote . '</p>' ?>
                <?php echo '<span>' . '- '. $value_author . '</span>' ?> 
            <?php else: ?>
                <?php echo '<p>' . $value_quote . '</p>' ?>
                <?php echo '<span>' . '- '. $value_author . '</span>' ?> 
            <?php endif; ?>

            <div class="new-quote">
                <form method="post">
                    <input type="submit" name="new-quote" value="New quote">
                </form>
            </div>
        </div>   
    </section>
</body>
</html>