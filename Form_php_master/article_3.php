<?php
   require('functions.php');
   
   // On active la session
   session_start();
   
   ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
      <link rel="stylesheet" type="text/css" href="styles.css">
      <title>Positionnement CSS</title>
   </head>
   <body bgcolor="#C5D87F">
      <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" >
         <tr>
            <td>
               <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" >
                  <tr>
                     <td>
                        <table align="center" class="cMonTableau3">
                           <tr>
                              <td align="center">
                                 <table width="100%" cellspacing="0" cellpadding="0" border="0" >
                                    <tr>
                                       <th align="center" width="350px"><a href="index.php"><img class="displayed ho"  src="logo-petit-journal-2016.gif" width="50%" alt=""></a></th>
                                       <th align="left" style="font-size:50px;"> &nbsp Le Petit Journal</th>
                                       <th width="100px">
                                          <?php
                                             if($_SESSION['login'] == null)
                                             { 
                                              ?>
                                              <fieldset>
                                             <legend>
                                                Connexion
                                             </legend>
                                             <form method='post' action='connexion.php'>
                                                <input type='text' placeholder='Login' name='login'>
                                                <input type='password' placeholder='Mot de passe' name='pwd'>
                                                <input type='submit' value='Connexion'>
                                             </form>
                                             <?php
                                                if(isset($_GET['error']) && !empty($_GET['error'])){
                                                  showErrorMessage($_GET['error']);
                                                }   ?>  
                                          </fieldset>
                                          <?php
                                             }
                                             else
                                             {
                                             	// On affiche une phrase résumant les infos sur l'utilisateur courant
                                               echo "connecté en tant que : "; echo $_SESSION['login']; echo "<br />";
                                                echo '<form method="post" action="deconnexion.php">
                                             	  <input type="submit" value="Déconnexion">
                                             	 </form>';
                                             }
                                             ?>
                                          
                                       </th>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                           <tr>
                              <td align="center">
                                 <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" >
                                    <tr>
                                       <td align="center" >
                                          <table cellspacing="0" cellpadding="0" border="0" align="center" >
                                             <tr>
                                                <td align="center"><img class="displayed" src="riri.jpg" width="75%" alt=""></td>
                                             </tr>
                                             <tr>
                                                <td class="pad" align="center"><br>Le passage de Lorem Ipsum standard, utilisé depuis 1500
                                                   "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                                   Section 1.10.32 du "De Finibus Bonorum et Malorum" de Ciceron (45 av. J.-C.)
                                                   "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
                                                </td>
                                             </tr>
                                          </table>
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                           
                        </table>
                     </td>
                  </tr>
               </table>
            </td>
         </tr>
      </table>
   </body>
</html>