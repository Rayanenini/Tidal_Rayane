<?php require_once(PATH_VIEWS . 'header.php'); ?>
<h1 class="title">Inscription</h1>
<div class="card">
    <form method="post" action="index.php?page=inscription">
        Prenom : <input type="text" name="prenom" placeholder="Entrez votre prenom" required /><br />
        Nom : <input type="text" name="nom" placeholder="Entrez votre nom" required /><br />
        Email : <input type="email" name="email" placeholder="Entrer votre Email" required /><br />
        Mot de passe : <input type="password" name="mdp" placeholder="Entrez votre mdp" required /><br />
        <input type="submit" value="Submit" />
    </form>
    <a href="index.php?page=connexion">Connectez-vous</a>
</div>
<?php require_once(PATH_VIEWS . 'footer.php');