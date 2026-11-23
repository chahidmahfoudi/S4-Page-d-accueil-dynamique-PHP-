<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZANKA Marketplace</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="hero">
        <div class="hero-content">
            <span class="small-title">
                LE MARCHÉ DES CRÉATEURS INDÉPENDANTS
            </span>
            <h1>
                Le talent mérite<br>
                d'être <span>découvert.</span>
            </h1>
            <p class="description">
                ZANKA est l'espace où les créateurs partagent
                leur univers et où les passionnés découvrent
                des pièces singulières, faites avec intention.
            </p>
            <div class="search-box">
                <input type="text" placeholder="Un produit, une idée, un créateur...">
                <button>Rechercher ↗</button>
            </div>
            <div class="hero-buttons">
                <a href="#categories" class="btn-dark">
                    Explorer les créations ↗
                </a>
                <a href="#join" class="btn-light">
                    Rejoindre ZANKA
                </a>
            </div>
        </div>
        <div class="hero-image">
            <img src="images/zanka.jpg" alt="Boutique ZANKA">
            <div class="image-note">
                Good things<br>take time.
            </div>
        </div>
    </section>
    <header class="navbar">
        <div class="nav-container">
            <a href="#home" class="logo">ZANKA</a>
            <nav>
                    <?php foreach ($menu as $nom => $lien): ?>
                        <a href="<?= htmlspecialchars($lien) ?>">
                            <?= htmlspecialchars($nom) ?>
                        </a>
                    <?php endforeach; ?>

            </nav>
            <div class="nav-search">
                <span>⌕</span>
                <input type="text" placeholder="Rechercher un produit, un créateur...">
            </div>
            <div class="nav-actions">
                <a href="#" class="icon">♡</a>
                <a href="#" class="icon">♧</a>
                <a href="#login" class="login-btn">
                    Se connecter
                </a>
                <a href="#join" class="creator-btn">
                    Devenir créateur
                </a>
            </div>
        </div>
    </header>
    <main>
        <section class="categories" id="categories">
            <div class="section-header">
                <div>
                    <h2>Explorer par univers</h2>
                    <p>
                        Des idées uniques, pour des goûts qui le sont aussi.
                    </p>
                </div>
                <a href="#categories" class="all-categories">
                    Toutes les catégories ↗
                </a>
            </div>
            <div class="category-grid">
                <?php foreach ($categories as $categorie) : ?>
                <a href="#" class="category-card <?= htmlspecialchars($categorie['class']) ?>">
                    <span>
                        <?= htmlspecialchars($categorie['nom']) ?>
                    </span>
                </a>
                <?php endforeach ; ?>
            </div>
        </section>
    </main>
    <footer>
        <p>© 2026 ZANKA Marketplace.</p>
    </footer>
</body>

</html>