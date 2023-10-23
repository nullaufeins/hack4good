<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Hack for Good Leipzig - Hackolaus 2023</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Join the hackolaus and give back to the good: 2024" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Hack for Good - Hackolaus Edition" />
    <meta name="twitter:description" content="Join the hackolaus and give back to the good: 2024" />
    <meta name="twitter:image" content="<?= BASE_URL ?>/assets/social-media/sharing-1200x630.jpg" />
    <meta property="og:image" content="<?= BASE_URL ?>/assets/social-media/sharing-1080x1080-community.jpg" />
    <meta property="og:title" content="Hack for Good - Hackolaus Edition" />
    <meta property="og:description" content="Join the hackolaus and give back to the good: 2024" />
    <meta property="og:image:height" content="1080" />
    <meta property="og:image:width" content="1080" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://hack-for-good.de/" />
    <link rel="shortcut icon" type="image/x-icon" href="<?= BASE_URL ?>/assets/favicon.ico" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/stylesheets/fonts.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/stylesheets/styles.css" />
</head>

<body>
    <div class="site-wrapper">

        <header>
            <div class="logo-line">
                <img src="<?= BASE_URL ?>/assets/logos/logo.svg" alt="Hackolaus" />
            </div>
            <nav>
                <?php require_once "../menu.inc.php"; ?>
            </nav>
        </header>

        <main>
            <?php require_once "content.php"; ?>
        </main>
    </div>

    <footer>
        <div class="footer-content">
            <?php require_once "footer.inc.php"; ?>
        </div>
    </footer>
</body>

</html>