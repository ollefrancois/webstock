## Procédure installation webstock

1. Récupérer le dossier de l'application 'webstock' depuis github : https://github.com/WizzerOmega/webstock
2. Effectuer un 'composer install' en ligne de commande dans le dossier afin d'installer la bibliothèque vendor 
3. Mettre ce dossier dans le dossier www de wamp
4. Créer le vhost 
	4.1 Modifier le fichier de conf de apache -> C:\wamp\bin\apache\apache2.4.9\conf\hhtpd.conf
		Ajouter à la fin du fichier :
			NameVirtualHost webstock
			<VirtualHost webstock>
			    DocumentRoot C:/wamp/www/webstock/public/
			    ServerName webstock
			</VirtualHost>
	4.2 Redémarrer apache
5. Modifier le host de Windows -> C:\Windows\System32\drivers\etc\hosts
	5.1 Ajouter :
		127.0.0.1       webstock
6. Dans le navigateur aller à l'adresse suivante : http://webstock
