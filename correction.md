# Itération 1
 * Sur la page de jeu : lorsque le titre d'un jeu est trop long, la structure de la page est cassé. Ceci est dû à l'utilisation d'une classe CSS `col-1.5`, qui n'est pas un nom valide (le `.` étant un symbole réservé en CSS, tu ne peux pas t'en servir comme nom de classe).
 * Note pour `search.js` : puisque tu as défini une fonction séparée pour gérer la réponse de la requête AJAX de recherche, tu peux simplifier l'appel à AJAX en `$.ajax(settings).done(displayResult);` pour plus de lisibilité. JavaScript autorise l'utilisation d'un nom de fonction comme s'il s'agissait d'un nom de variable, qui peut donc être passé en paramètre directement.

# Itération 2
 * Tu n'utilises qu'une classe de modèle `Home` à cause de la nécessité d'utiliser le mot-clé `require_once` (Discuté lors de la défense orale , non pénalisé)
 * Dans la page de recherche : tu utilises la valeur `$_GET["query"]` comme valeur par défaut dans la barre de recherche, ce qui cause une erreur si la page est accédée sans entrer de terme de recherche au préalable (pense à utiliser `isset` de façon similaire à ce qui est fait dans le `Router`).
 * (Non pénalisé) Ta requête SQL de recherche utilise un critère `WHERE GAMES.GAME_NAME LIKE "' . $query .'%"';` ; par conséquent le terme de recherche fonctionne uniquement s'il s'agit du début du titre d'un jeu. Tu aurais pu ajouter un `%` avant le début du critère de recherche (donc `WHERE GAMES.GAME_NAME LIKE "%' . $query .'%"';`) pour pouvoir recherche à tout endroit dans le titre d'un jeu (cela permet par exemple d'obtenir des résultats avec le terme "Mario").

# Défense
 * Très bonne défense.
 
# Evaluation
| Critère              | Sur | Cote |
| :------------------- | :-: |:---: |
| Itération 1             | 20 | 19 |
| Itération 2             | 30 | 29 |
| Défense : modification  | 20 | 20 |
| Défense orale           | 30 | 28 |
| __Total__      | __100__ | ____ |
