# RandomOre
[Télécharger le plugin](https://github.com/nephelia-shop/RandomOre/raw/main/RandomOre.phar)

## Description
**RandomOre**: personnaliser les drops d'un bloc. 

## Configuration
Le fichier de configuration `config.yml` vous permet de définir les drops des blocs. Voici un exemple de configuration :
```yaml
block: "end_stone"

drops:
  - item: "diamond"
    chance: 1   # 1 chance sur 100 de dropper un diamant
    count: 1
  - item: "dirt"
    chance: 5   # 5 chances sur 100 de dropper de la dirt
    count: 1
  - item: "cobblestone"
    chance: 94  # 94 chances sur 100 de dropper du cobblestone
    count: 1
```

### Paramètres
- **blocks**: Bloc servant de RandomOre, devra être l'identifier du block _(par exemple, stone ou grass_block)._
- **drops**: Liste des items qui peuvent être droppés par le random ore.
- *item*: Nom de l'item qui sera droppé.
- **chance**: La probabilité en pourcentage que cet item soit droppé.
- **count**: Nombre de l'item.

## Support
Pour toute question ou problème, veuillez nous contacter sur discord https://discord.gg/JTcefgZMd3.
