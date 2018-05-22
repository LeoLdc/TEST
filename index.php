<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="bootstrap.css">
  <meta charset="utf-8">
  <title>
      Formulaire De Contact.
  </title>
</head>

<body>
  <div align="center" id="sexe">
  <div align="left">homme</div></td>
  <td colspan="2"><input type="radio" name="sexe" size="45" maxlength="100"></td>
  <div align="left">femme</div></td>
  <td colspan="2"><input type="radio" name="sexe" size="45" maxlength="100"></td>
</div>
  <p align="center"><strong><u>Contact</u></strong></p>
  <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <form action="envoi.php" method="post" enctype="application/x-www-form-urlencoded" name="formulaire">
  <tr>
  <td colspan="3"><strong><div class="strong"><u>Envoyer un message</u></div></strong></td>
  </tr>
  <hr/>
  <tr>
  <td><div align="left">Votre nom :</div></td>
  <td colspan="2"><input type="text" name="nom" size="45" maxlength="100"></td>
  </tr>
  <tr>
  <td width="17%"><div align="left">Votre mail :</div></td>
  <td colspan="2"><input type="text" name="mail" size="45" maxlength="100"></td>
  </tr>
  <tr>
  <td><div align="left">Sujet : </div></td>
  <td colspan="2"><input type="text" name="objet" size="45" maxlength="120"></td>
  </tr>
  <tr>
  <td><div align="left">Message: </div></td>
  <td colspan="2"><textarea name="message" cols="50" rows="10"></textarea></td>
  </tr>
  <tr>
  <td></td>
  <td width="42%"><center>
  <input type="reset" name="Submit" value="Réinitialiser le formulaire">
  </center></td>
  <td width="41%"><center>
  <input type="submit" name="Submit" value="Envoyer">
  </center></td>
  </tr>
  </form>
  </table>
</body>

<footer>

</footer>
</html>
