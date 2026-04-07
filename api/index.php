<?php
// On regroupe les exercices pour avoir le code et le PDF sur la même carte
$projects = [
    ["title" => "Exercice 1", "code" => "exercice1.php", "pdf" => "Rapport Exercice1.pdf", "atelier" => "1"],
    ["title" => "Exercice 2", "code" => "exercice2.php", "pdf" => "Rapport Exercice2.pdf", "atelier" => "1"],
    ["title" => "TD 1", "code" => "td1_Atelier1.php", "pdf" => "Rapport Exercice2.pdf", "atelier" => "1"],
    ["title" => "TD 2", "code" => "td2_Atelier1.php", "pdf" => "Rapport Exercice2.pdf", "atelier" => "1"],
    // ... Ajoute le reste ici avec la même structure
    ["title" => "Exercice 3", "code" => "exercice3.php", "pdf" => "Rapport Exercice3.pdf", "atelier" => "2"],
    ["title" => "Exercice 4", "code" => "exercice4.php", "pdf" => "Rapport Exercice4.pdf", "atelier" => "2"]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basma Elmaimouni | Portfolio</title>
    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
       :root {
        --primary: #92487A;   /* متوسط */
        --secondary: #E49BA6; /* وردي */
        --dark: #540863;      /* غامق */
        --bg: #FFD3D5;        /* background */
        --card-bg: rgba(255, 255, 255, 0.85);
        }


        body {
            margin: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg);
            background-image: radial-gradient(at 0% 0%, rgba(37, 99, 235, 0.05) 0px, transparent 50%), 
                              radial-gradient(at 100% 100%, rgba(37, 99, 235, 0.05) 0px, transparent 50%);
            color: var(--dark);
            min-height: 100vh;
        }

        /* NAVIGATION / HEADER */
        header {
            text-align: center;
            padding: 60px 20px;
        }

        header h1 {
            font-size: 3rem;
            font-weight: 800;
            background: linear-gradient(to right, #9cf6ce, #FF8383);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        .badge {
            background: #ffbef7;
            color: var(--primary);
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        /* FILTERS */
        .filters {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 40px;
        }

        .filter-btn {
            background: white;
            border: 1px solid #e2e8f0;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 12px;
            font-weight: 500;
            transition: 0.3s all cubic-bezier(0.4, 0, 0.2, 1);
            color: var(--secondary);
        }

        .filter-btn:hover {
            border-color: var(--primary);
            color: var(--primary);
        }

        .filter-btn.active {
            background: var(--dark);
            color: white;
            border-color: var(--dark);
            box-shadow: 0 10px 20px rgba(15, 23, 42, 0.1);
        }

        /* GRID */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
            padding: 0 20px 80px;
        }

        /* CARD DESIGN */
        .card {
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 24px;
            padding: 25px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
            border-color: var(--primary);
        }

        .card-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .icon-box {
            width: 45px;
            height: 45px;
            background: #eff6ff;
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            font-size: 1.2rem;
        }

        .card h3 {
            margin: 0;
            font-size: 1.25rem;
            font-weight: 700;
        }

        .actions {
            display: flex;
            gap: 10px;
        }

        .btn {
            flex: 1;
            text-align: center;
            text-decoration: none;
            padding: 12px;
            border-radius: 12px;
            font-size: 0.85rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: 0.2s;
        }

        .btn-primary {
            background: var(--dark);
            color: white;
        }

        .btn-outline {
            background: transparent;
            border: 1.5px solid #e2e8f0;
            color: var(--secondary);
        }

        .btn:hover {
            opacity: 0.8;
        }

        .btn-outline:hover {
            border-color: #ef4444;
            color: #ef4444;
        }

        /* ANIMATION */
        .fade-in {
            animation: fadeIn 0.6s ease forwards;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

<header>
    <span class="badge">Portfolio de Projets</span>
    <h1>Basma Elmaimouni</h1>
    <p style="color: var(--secondary)">Développement Digital</p>
</header>

<div class="filters">
    <button class="filter-btn active" onclick="filterAtelier('all')">Tous les projets</button>
    <button class="filter-btn" onclick="filterAtelier('1')">Atelier 1</button>
    <button class="filter-btn" onclick="filterAtelier('2')">Atelier 2</button>
</div>

<div class="container" id="projectGrid">
    <?php foreach($projects as $p): ?>
        <div class="card project-card fade-in" data-atelier="<?= $p['atelier'] ?>">
            <div class="card-header">
                <div class="icon-box">
                    <i class="fas fa-folder-open"></i>
                </div>
                <div>
                    <small style="color: var(--secondary); font-size: 0.7rem;">ATELIER <?= $p['atelier'] ?></small>
                    <h3><?= htmlspecialchars($p['title']) ?></h3>
                </div>
            </div>
            
            <div class="actions">
                <a href="<?= $p['code'] ?>" class="btn btn-primary">
                    <i class="fas fa-code"></i> Code Source
                </a>
                <a href="<?= $p['pdf'] ?>" target="_blank" class="btn btn-outline">
                    <i class="fas fa-file-pdf"></i> Rapport
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<script>
    function filterAtelier(atelier) {
        const cards = document.querySelectorAll('.project-card');
        const buttons = document.querySelectorAll('.filter-btn');

        buttons.forEach(btn => {
            btn.classList.remove('active');
            if((atelier === 'all' && btn.innerText.includes('Tous')) || btn.innerText.includes(atelier)) {
                btn.classList.add('active');
            }
        });

        cards.forEach(card => {
            if (atelier === 'all' || card.getAttribute('data-atelier') === atelier) {
                card.style.display = 'block';
                card.style.animation = 'none';
                card.offsetHeight; 
                card.style.animation = 'fadeIn 0.5s ease forwards';
            } else {
                card.style.display = 'none';
            }
        });
    }
</script>

</body>
</html>