Installation
============

- git clone https://github.com/pepszo/gaminguniverse

- Editer le fichier models/db.php. Modifier le login/pass pour la connexion à la db en ligne 5 (par défaut: login: 'root', password: 'password').
```
$bdd = new PDO('mysql:host=localhost;dbname=gaminguniverse;charset=utf8', 'root', 'password', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
```

- importer le base de donnée qui se trouve à la racine du répertoire (gaminguniverse.sql).

- Créer un nouveau host dans /etc/hosts.
```
127.0.0.1 projet.local
```

- Aller sur cet emplacement : "C:\xampp\apache\conf\extra"
- Créer un fichier : "gameshop.conf" et y copier les lignes suivantes
```
    #####
    ## gameshop.local
    ## DOMAINE de gameshop
    #####
    NameVirtualHost gameshop.local

    <Directory "C:\EXEMPLE CHEMIN VERS\gaminguniverse">
    AllowOverride All
    Options Indexes MultiViews FollowSymLinks
    Require all granted
    </Directory>

    <VirtualHost gaminguniverse.local>
    DocumentRoot "C:\EXEMPLE CHEMIN VERS\gaminguniverse"
    ServerName gaminguniverse.local
    </VirtualHost>
```

Test
====

User de test 'Admin':
- login: admin
- password: admin

User de test 'Client':
- login: toto
- password: tata
