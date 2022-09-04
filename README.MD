# Webup ⚡
##Webup est un framework français fait par refaltor, il à pour but de simplifier la programation sur le web.
## avec ce framework, vous aurez un gain de temps non negligible sur votre productivité !

---
# Prise en main 💡
####Installation du projet par default
````CMD
git clone https://github.com/refaltor77/webup
````
####Initialisation de composer (avoir installé composer avant)
````CMD
composer install
````

##Votre projet web est prêt !
Par defaulf, une page généré par le framework est présente en tant que index.php dans le dossier ``views/``

# Mise en production
> Conseil: utiliser apache est préférable, vous aurez moin de soucie

Tout d'abord il faut optimiser votre site web avant la mise en production !
````CMD
php scripts/website_starting_production_mode.php
````

Votre site est enfin prêt, vous avez plus cas y acceder via votre serveur web !

pour reload votre site et pour modifier le css et le js etc... effectuer cette commande après la mise en production:
````CMD
php scripts/website_reload_optimized_processus.php
````
> Le processus d'optimisation est important si vous avez de gros fichier de css et de js, mais il n'est en aucun cas obligatoire.