<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        /*commentaires*/
    </style>
    <title>Ma premi�re page web</title>
    <style>
        table{border-collapse:collapse;}
        th,td{border:1px solid#000;padding:5px;}
    </style>
    <title>Formulaires (1/2)</title>
</head>
<body>
    <h1>Mon site web pro</h1>
    <audio controls>

    </audio>
    <h2>Mon style de page avec css</h2>

    <p class="modif-p"> Adam connut Eve, sa femme; elle con�ut, et enfanta Ca�n et elle dit: J'ai form� un homme avec l'aide de l'�ternel.</p>

    <p>cette fois ci je pense que c'est termin� je ne supporte pas son mensonge. elle me sort par les pores</p>

    <img src="Images/images/38-3.jpg" alt="" width="600" height="auto">
    <form method="post" action="">
        <p><legend>Ma section</legend></p>
        <button type="button">Cliquez ici</button>
        <p><select name="ChoixOs">
            <option>Windows</option>
            <option>GNU/Linux</option>
            <option>MacOs</option>
        </select></p>
        Nom : <input type="text" name="username" placeholder="Entrez votre nom..."><br>
        <p><input type="submit" name="valid_form" value="Envoyer"></p>
        <p><textarea name="article_content" rows="10" cols="60" placeholder="votre texte ici..." minlength="10" maxlength="20"></textarea></p>
        <input type="reset" value="Effacer">
        <input type="submit" value="Se connecter">
        <p> Mot de passe : <input type="password"></p>
        Publier l'info ? <input type="checkbox">
        <p> Votre choix <input type="radio" name="choice"> oui <input type="radio" name="choice"> non</p>
        <input type="datetime-local" name="fieldform">
        <p><input type="month" name="fieldform"></p>
        <p><input type="week" name="fieldform"></p>
        <p><input type="search" name="fieldform" placeholder="Que recherchez-vous?"></p>
    </form>
    <h1>Mon Titre De Page</h1>
    <table>
        <caption>titre de mon tableau</caption>
        <tr>
            <th>Nom</th>
            <th>Genre</th>
            <th>Prix</th>
            <th>S�quence</th>
        </tr>
        <tr>
            <td>Grand turismo 5</td>
            <td>Rallye</td>
            <td>155,99f</td>
            <td>Double</td>
        </tr>
        <tr>
            <td>GTA 5</td>
            <td>Aventure</td>
            <td>200,99f</td>
            <td>Simple</td>
        </tr>
        <tr>
            <td>Fifa 23</td>
            <td>Sport</td>
            <td>500,99</td>
            <td>Double</td>
        </tr>
    </table>
    J�sus me tient jusqu'au bout
    <details>bla bla bla
        <summary>cliquez sur la fleche</summary>
    </details>
    <p><dfn>HTML</dfn> est un langage informatique utilis� pour r�aliser des sites web.</p>
    <ul>
        <li>un element</li>
        <li>un deuxieme element
            <ol type="a">
                <li>etape 1</li>
                <li>etape 2
                    <ul>
                        <li>bla bla bla</li>
                        <li>bla bla bla</li>
                        <li>bla bla bla</li>
                        <li>bla bla bla</li>
                    </ul>
                </li>
                <li>etape 3</li>
                <li>etape 4</li>
            </ol>
        </li>
        <li>le dernier element</li>
    </ul>
    <ul>
        <li>momo</li>
        <li>yann</li>
        <li>tite</li>
        <li>gad
            <ol reversed start="10">
                <li>poup�e</li>
                <li>makani</li>
                <li>zara</li>
            </ol>
        </li>
    </ul>

    <h2>Premi�re Partie</h2>
    J�sus me tient jusqu'au bout
    <p><a href="https://tbcenergie.com" target="blank">tbcenergie.com</a></p>
    <h2>Deuxi�me Partie</h2>
    <ol type="I">
        <li>un element</li>
        <li>deux elements</li>
        <li>trois elements</li>
    </ol>
    J�sus me tient jusqu'au bout
    <p>Etat du projet : <progress value="30" max="100"></progress></p>

     <p>Je me nomme <abbr title="kamara mohamed">KM</abbr></p>
     <hr>
     <mark>J�sus me tient jusqu'au bout</mark>
    <p>J�sus me tient jusqu'au bout</p>
    <form method="post" action="">
        Nom :<input name="username">
    </form>
    <section>
        <h1>Ma premi�re section</h1>
        <p>
            je suis le plus intelligent et le plus audacieux de mon entreprise TBC ENERGIE, la vie que je menais depuis<br> des ann�es a �t� tr�s difficile pour moi. <span class="text-red">Par la grace de Dieu aujourd'hui</span> je vais mieux aujourd'hui.
        </p>
    </section>
    <section>
        <h1>Ma seconde section</h1>
        <p>
            je suis le plus intelligent et le plus audacieux de mon entreprise TBC ENERGIE
        </p>
    </section>
    <nav>
        <ul>
            <li><a href="">Accueil</a></li>
            <li><a href="">Prestations</a></li>
            <li><a href="">A propos</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </nav>
</body>
</html>