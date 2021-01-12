# Laravel Carbon Icons

CarbonIcons module for Laravel Boilerplate

## Installation

You can install the package via composer:

``` bash
composer require akkurate/laravel-carbon-icons
```

The package will automatically register itself.

If you want to override the config with:
```bash
php artisan vendor:publish --provider="Akkurate\LaravelCarbonIcons\LaravelCarbonIconsServiceProvider" --tag="icons"
```

## Preview

Custom icons can be previewed to the following route : `../dev/guideline`

This is a DEV route so you need to be in `local` to view it.

## Commands
``` bash
php artisan carbon-icons:generate
```

## Integration

You juste have to import icons you need in the Icon.vue file.

``` javascript
import akkurate24 from './../icons/akkurate/24';
import scale24 from './../icons/scale/24';
import scooter24 from './../icons/scooter/24';
import circleGroup24 from './../icons/circle--group/24';
```

And add them to components' list.

## Production

**A traduire**

La production des icônes doit respecter un processus particulier :

### Création des icônes

La création des icônes se fait sous Illustrator dont les fichiers PDF (éditables) sont disponibles dans le dossier `elements/` du repository.

Celle-ci se fait en deux étapes :

1. A l'aide du fichier Design.pdf, il faut créer les icônes (sans fusionner les tracés)
2. Une fois les icônes validées, il faut le reprendre pour les insérer dans le fichier Production.pdf et fusionner les tracés et formes.

Les icônes sont placées dans des plans de travail distincts dont le nom doit respecter la convention suivante :

* Pas d'espace
* Pas de caractères spéciaux
* Si besoin de terme composé, utiliser l'apprche CamelCase (ex. : CircleGroup)

### Production des icones

Avec la fonctionnalité **Export pour les écrans**, il faut produire les SVG qui seront placés dans le dossier `resources/js/design/` du repository.

Une fois les nouvelles icônes placées dans le dossier, il faut lancer la commande suivante :

```bash
php artisan carbon-icons:generate
```

Si des icônes ont été modifiées, il convient d'ajouter l'argument `--force` pour rafraichir l'ensemble du set d'icônes, sinon, seules les nouvelles seront générées.

Les icônes produites sont des composants VueJS qui seront disponibles dans le dossier `resources/js/production/`. Chaque icône disposera alors d'un dossier dans lequel on pourra retrouver un fichier javacsript pour chaque taille souhaitée.
