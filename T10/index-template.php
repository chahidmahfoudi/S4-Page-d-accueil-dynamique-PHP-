
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($article['titre']) ?></title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            color: #1f2937;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .container {
            max-width: 750px;
            width: 100%;
            background: white;
            padding: 45px;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        }

        .label {
            display: inline-block;
            background: #dbeafe;
            color: #2563eb;
            padding: 8px 14px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #111827;
        }

        .contenu {
            font-size: 17px;
            line-height: 1.8;
            color: #4b5563;
            margin-bottom: 30px;
        }

        .meta {
            border-top: 1px solid #e5e7eb;
            padding-top: 20px;
            color: #6b7280;
            font-size: 14px;
        }

        .meta strong {
            color: #2563eb;
        }
    </style>
</head>

<body>

    <main class="container">

        <span class="label">ARTICLE DU BLOG</span>

        <h1>
            <?= htmlspecialchars($article['titre']) ?>
        </h1>

        <p class="contenu">
            <?= htmlspecialchars($article['contenu']) ?>
        </p>

        <div class="meta">
            Auteur : <strong><?= htmlspecialchars($article['auteur']) ?></strong>
            <br><br>
            Date : <?= htmlspecialchars($article['date']) ?>
        </div>

    </main>

</body>
</html>
