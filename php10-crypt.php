<?php 
//cryptage des mots de passe
// suite à un formulaire, vous recuperez les données saisies

$nom = "osef";
$identifiant ="crevard59";
$pass = "salut123";

// On ne stock jamais les mots de passe en clair dans  la BDD
// 1 - admin mal intentionné pourrait les recuperer
// 2 - vos systemes se font pirater et on vous vole vos données, les pirates connaissent
//les mots de passe de tous vos utilisateurs
		// (qui potentiellement les utiliseent sur plusieur sites)

$pass = crypt($pass);
$pass = md5($pass);
$pass = sha1($pass);
echo $pass;

$sql ="INSERT INTO user( nom, identifiant, passeword)
		VALUES(:nom,:identifiant,:pass)";

/*formulaire de connexion sur une page*/

$identifiant ="crevard59";
$pass = "salut123"; // different de 6v46887RG4EGHR5484f654h6<REH4R6H4+R
$pass =  sha1($pass);

// avant de connecter une personne, on recrypte le mdp
// selon le même systeme de cryptage pour pouvoir comparer
// le mot de passe crypté à la donnée en base cruptée



 ?>