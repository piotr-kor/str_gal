<?php
$projects = [
    [
        "nazwa" => "Prawdziwy projekt by PK",
        "data" => "2024-10-10",
        "opis" => "Projekt responsywnej strony internetowej z menu, galerią i przykładowymi danymi",
        "link" => "/projekt1"
    ],
    [
        "nazwa" => "Strona dla restauracji",
        "data" => "2024-10-12",
        "opis" => "Projekt responsywnej strony internetowej z menu, rezerwacjami online i galerią zdjęć dla lokalnej restauracji.",
        "link" => "https://example.com/restauracja"
    ],
    [
        "nazwa" => "Strona dla doradcy finansowego",
        "data" => "2024-10-18",
        "opis" => "Umożliwiająca śledzenie wydatków, planowanie budżetu oraz generowanie raportów finansowych.",
        "link" => "https://example.com/finanse"
    ],
    [
        "nazwa" => "Platforma zestawiająca zalety i wady kursów online",
        "data" => "2024-11-13",
        "opis" => "Kompleksowa platforma e-learningowa, umożliwiająca prowadzenie kursów online z wbudowanymi testami i certyfikatami.",
        "link" => "https://example.com/elearning"
    ]
];
function formatDateInPolish($date) {
    $months = [
        'January' => 'stycznia', 'February' => 'lutego', 'March' => 'marca', 
        'April' => 'kwietnia', 'May' => 'maja', 'June' => 'czerwca', 
        'July' => 'lipca', 'August' => 'sierpnia', 'September' => 'września', 
        'October' => 'października', 'November' => 'listopada', 'December' => 'grudnia'
    ];
    $formattedDate = date("d F", strtotime($date));
    $englishMonth = date("F", strtotime($date));
    return str_replace($englishMonth, $months[$englishMonth], $formattedDate);
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Projektów</title>
    <style>
        /* Ogólny styl strony */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Styl kontenera projektów */
        .portfolio-container {
            max-width: 1200px;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        /* Styl bloku projektu */
        .project {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 350px;
            text-align: center;
            transition: transform 0.3s;
        }
        
        .project:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        /* Styl daty projektu */
        .project-date {
            font-size: 1.5em;
            font-weight: bold;
            color: #1b6f3a;
            margin-bottom: 15px;
        }

        /* Styl tytułu projektu */
        .project-title {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        /* Styl opisu projektu */
        .project-description {
            font-size: 1em;
            color: #555;
            margin-bottom: 15px;
        }

        /* Styl linku do projektu */
        .project-link {
            display: inline-block;
            padding: 10px 15px;
            background-color: #1b6f3a;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .project-link:hover {
            background-color: #357ab7;
        }

        /* Responsywność */
        @media (max-width: 768px) {
            .portfolio-container {
                flex-direction: column;
                align-items: center;
            }

            .project {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

<h1>Moje Projekty - QuasiBLOG</h1>
<div class="portfolio-container">
    <?php foreach ($projects as $project): ?>
        <div class="project">
            <div class="project-date">
                <?php echo formatDateInPolish($project["data"]); ?>
            </div>
            <div class="project-title">
                <?php echo htmlspecialchars($project["nazwa"]); ?>
            </div>
            <div class="project-description">
                <?php echo htmlspecialchars($project["opis"]); ?>
            </div>
            <a href="<?php echo htmlspecialchars($project["link"]); ?>" class="project-link" target="_blank">
                Zobacz projekt
            </a>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
