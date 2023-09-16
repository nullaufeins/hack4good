<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Hack for Good Leipzig</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Join the hackathon and give back to NGOs - Oct 7th - 9th 2022" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Hack for good" />
    <meta name="twitter:description" content="Join the hackathon and give back to NGOs - Oct 7th - 9th 2022" />
    <meta name="twitter:image" content="https://hack-for-good.de/assets/hackforgood-twitter-share-2022_1200.jpg" />
    <meta property="og:image" content="https://hack-for-good.de/assets/hackforgood-twitter-share-2022_1200.jpg" />
    <meta property="og:title" content="Hack for good" />
    <meta property="og:description" content="Join the hackathon and give back to NGOs - Oct 7th - 9th 2022" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://hack-for-good.de/" />
    <link rel="shortcut icon" type="image/x-icon" href="./assets/favicon.ico" />
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
            <div class="participate-line">
                <a href="https://www.meetup.com/opentechschool-leipzig/events/288270934/" target="_blank" rel="noopener noreferer">participate</a>
            </div>
        </header>
        
        <main>
            <?php require_once "content.php"; ?>
        </main>

        <footer>
            the footer is yet to come
        </footer>
    </div>
</body>

</html>