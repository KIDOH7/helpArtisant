<?php require('header.php') ?>
  

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            width: 70%;
            max-width: 1200px;
            margin-right: 50px;
        }
        .package {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 45%;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin: 10px;
        }
        .package:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .package h2 {
            color: #333;
            margin-bottom: 15px;
            transition: color 0.3s ease;
        }
        .package:hover h2 {
            color: #4CAF50;
        }
        .package ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        .package li {
            margin: 10px 0;
            font-size: 16px;
            color: #555;
            transition: color 0.3s ease;
        }
        .package:hover li {
            color: #333;
        }
        .package button {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .package button:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }
        @media (max-width: 768px) {
            .package {
                width: 100%;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Pack Gratuit -->
        <div class="package" id="free-package">
            <h2>Pack Gratuit</h2>
            <ul>
                <li><strong>Nom:</strong> standard</li>
                <li><strong>Espace de Stockage:</strong> Illimité</li>
                <li><strong>Bande Passante:</strong> Illimitée</li>
                <li><strong>Base de Données:</strong> MySQL illimité</li>
                <!-- <li><strong>Support:</strong> Forum communautaire</li> -->
                <li><strong>Publicité:</strong> Aucune publicité</li>
                <li><strong>Publication d'article:</strong> Au plus 10</li>
            </ul>
            <button onclick="window.location.href='https://infinityfree.net/'">En savoir plus</button>
        </div>

        <!-- Pack Payant -->
        <div class="package" id="paid-package">
            <h2>Pack Payant</h2>
            <ul>
                <li><strong>Nom:</strong> Premium</li>
                <li><strong>Espace de Stockage:</strong> illimité</li>
                <li><strong>Bande Passante:</strong> Illimitée</li>
                <li><strong>Base de Données:</strong> MySQL Illimitée</li>
                <li><strong>Support:</strong> Support client 24/7 via chat, téléphone, et tickets</li>
                <li><strong>Publicité:</strong> publicité sur toutes les reseaux-socio</li>
                <li><strong>Fonctionnalités Supplémentaires:</strong> Suivi , sécurité et performance de vos reseaux</li>
            </ul>
            <button onclick="window.location.href='https://www.siteground.com/'">En savoir plus</button>
        </div>
    </div>
    <script>
        // JavaScript for dynamic content updates if needed
        document.getElementById('free-package').addEventListener('mouseenter', function() {
            this.style.backgroundColor = '#f1f1f1';
        });

        document.getElementById('free-package').addEventListener('mouseleave', function() {
            this.style.backgroundColor = '#ffffff';
        });

        document.getElementById('paid-package').addEventListener('mouseenter', function() {
            this.style.backgroundColor = '#f1f1f1';
        });

        document.getElementById('paid-package').addEventListener('mouseleave', function() {
            this.style.backgroundColor = '#ffffff';
        });
    </script>
</body>
</html>
