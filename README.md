# Projet de base pour créer un site web en PHP avec une architecture MVC

## Architecture du projet

```plaintext
.
├── controller                  // Dossier contenant les contrôleurs
│   └── HomeController.php
├── css                         // Dossier contenant les fichiers CSS
│   └── style.css
├── model                       // Dossier contenant les modèles : chaque fichier correspond à une table de la base de données
│   ├── DatabaseConnection.php  // Classe permettant de se connecter à la base de données
│   └── db_connection.php       // Fichier contenant les informations de connexion à la base de données (à ne pas versionner)
├── view                        // Dossier contenant les vues
│   ├── layout                  // Dossier contenant le layout du site (header, footer, etc.)
│   │   └── layout.php
│   └── home.php
└── index.php                   // Routeur du site
```
