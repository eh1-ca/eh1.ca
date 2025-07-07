# Site Web Statique de eh1.ca

Ce dépôt contient le site statique de [eh1.ca](https://eh1.ca), la page d’accueil d’un réseau social canadien. Il inclut des informations de base sur le projet et prend en charge plusieurs langues avec des pages d’accueil en anglais et en français.

## Pages

- `/index-en.html` – Page d’accueil en anglais  
- `/index-fr.html` – Page d’accueil en français (Canada)  
- `/index.php` – Détection automatique de la langue et redirection vers la version française si elle est préférée  
- `/send.php` – Script qui envoie un courriel avec les informations d’abonnement  

- `/error-en.html` – Page d’erreur en anglais  
- `/error-fr.html` – Page d’erreur en français (Canada)  

- `/thank-you-en.html` – Page de remerciement en anglais  
- `/thank-you-fr.html` – Page de remerciement en français (Canada)  

- `/eh.png` – Logo temporaire (sera remplacé ultérieurement)

## Déploiement

Le site est déployé à l’adresse [https://eh1.ca](https://eh1.ca). Vous pouvez forker et adapter ce modèle pour d’autres projets Web bilingues canadiens.

## Contributions

Les contributions sont les bienvenues ! Si vous souhaitez aider à la traduction ou à l’accessibilité, n’hésitez pas à forker et à soumettre une PR.

### Pour ajouter ou améliorer le contenu :
1. Modifiez les fichiers HTML concernés (`index-en.html`, `index-fr.html`)
2. Assurez-vous d’utiliser du HTML sémantique avec des métadonnées appropriées
3. Pour ajouter de nouvelles langues, créez un fichier avec le code ISO 639-1 correspondant (ex. : `index-es.html` pour l’espagnol)

## Licence

Ce site Web est open source et disponible sous la [licence MIT](LICENSE).