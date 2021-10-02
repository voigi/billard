<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="ajout.css">
    <title>Suivant</title>
</head>

<body>
    <script>
        function date_heure(id) {
            date = new Date;
            annee = date.getFullYear();
            moi = date.getMonth();
            mois = new Array('Janvier', 'F&eacute;vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao&ucirc;t', 'Septembre', 'Octobre', 'Novembre', 'D&eacute;cembre');
            j = date.getDate();
            jour = date.getDay();
            jours = new Array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
            h = date.getHours();
            if (h < 10) {
                h = "0" + h;
            }
            m = date.getMinutes();
            if (m < 10) {
                m = "0" + m;
            }
            s = date.getSeconds();
            if (s < 10) {
                s = "0" + s;
            }
            resultat = '<table><tr><td style=\"width:300px; font-family:arial;text-align:center;font-size:12pt;font-weight:bold; \">' + jours[jour] + ' ' + j + ' ' + mois[moi] + ' ' + annee + '</td></tr><tr><td  style=\"font-family:arial;text-align:center;font-size:22pt;font-weight:bold; \">' + h + ':' + m + ':' + s + '</ts></tr></table>';
            document.getElementById(id).innerHTML = resultat;
            setTimeout('date_heure("' + id + '");', '1000');
            return true;
        };
    </script>
    <span id="date_heure"></span>
    <script type="text/javascript">
        window.onload = date_heure('date_heure');
    </script>
    <h1 class="text-center">Liste des joueurs de billard</h1>


    <div class="container mt-4">

        <input class="form-control mb-3 text-center" id="text" type="text" name="nom" value="" placeholder="Entrez votre joueur" onkeypress=" if(event.which < 97 || event.which > 122) return 'pas de chiffre svp'">
        <div class="text-center">
            <button id="submit" type="submit" class="btn btn-primary mb-3" data-toggle="tooltip" data-placement="bottom" title="Ajouter un joueur">Ajouter</button>
            <input id="reset" type="reset" class="btn btn-danger mb-3" value="Annuler" data-toggle="tooltip" data-placement="bottom" title="Je modifie ma saisie">
            <input id="reset" type="button" class="btn btn-danger mb-3" value="Tout effacer" onclick="history.go(0)" data-toggle="tooltip" data-placement="bottom" title="Supprimer tous les joueurs">
        </div>
        <ol id="list">

        </ol>

    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript" src="ajout.js">





    </script>

</body>

</html>