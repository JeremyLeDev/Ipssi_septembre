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
               <table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#C5D87F" align="center" >
                  <tr>
                     <td>
                        <table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#123456" align="center" >
                           <tr>
                              <td>
                              </td>
                           </tr>
                        </table>
                     </td>
                     <td>
                       <table align="center" border="0" class=" cMonTableau3">
                        <div class="sticky">
                           <tr>
                              <td align="center">
                                 <table width="100%" cellspacing="0" cellpadding="0" border="0" >
                                    <tr>
                                       <th align="center" width="350px"><a href="index.php"><img class="displayed ho" src="logo-petit-journal-2016.gif" width="50%" alt=""></a></th>
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
                        </div> 
                           <tr>
                              <td align="center">
                                 <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" >
                                    <tr>
                                       <td align="center" >
                                          <table cellspacing="0" cellpadding="0" border="0" align="center" >
                                             <tr>
                                                <td align="center"><img class="displayed" src="lorem-ipsum.jpg" width="75%" alt=""></td>
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
                           <tr>
                              <td align="center">
                                 <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" >
                                    <tr>
                                       <td align="center" >
                                          <table cellspacing="0" cellpadding="0" border="0" align="center" >
                                             <tr>
                                                <td align="center" class="hei"><a href="article_1.php"><img class="displayed ho"  src="ri.jpg" width="30%" alt=""></a></td>
                                             </tr>
                                             <tr>
                                                <td class="pad" align="center"><br>Rihanna, de son vrai nom Robyn Rihanna Fenty, née le 20 février 1988 à Saint Michael, est une chanteuse, parolière, actrice, designer et mannequin barbadienne. Rihanna compte au total huit albums studios et deux albums de remixes.</td>
                                             </tr>
                                          </table>
                                       </td>
                                       <td align="center" >
                                          <table cellspacing="0" cellpadding="0" border="0" align="center" >
                                             <tr>
                                                <td align="center" class="hei"><a href="article_2.php"><img class="displayed ho"  src="mario.png" width="30%" alt=""></a></td>
                                             </tr>
                                             <tr>
                                                <td  class="pad" align="center"><br>Rihanna, de son vrai nom Robyn Rihanna Fenty, née le 20 février 1988 à Saint Michael, est une chanteuse, parolière, actrice, designer et mannequin barbadienne. Rihanna compte au total huit albums studios et deux albums de remixes.</td>
                                             </tr>
                                          </table>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td height="30px" align="center"></td>
                                       <td height="30px" align="center"></td>
                                    </tr>
                                    <tr>
                                       <td align="center" >
                                          <table cellspacing="0" cellpadding="0" border="0" align="center" >
                                             <tr>
                                                <td align="center" class="hei"><a href="article_3.php"><img class="displayed ho"  src="ri.jpg" width="30%" alt=""></a></td>
                                             </tr>
                                             <tr>
                                                <td  class="pad" align="center"><br>Rihanna, de son vrai nom Robyn Rihanna Fenty, née le 20 février 1988 à Saint Michael, est une chanteuse, parolière, actrice, designer et mannequin barbadienne. Rihanna compte au total huit albums studios et deux albums de remixes.</td>
                                             </tr>
                                          </table>
                                       </td>
                                       <td align="center" >
                                          <table cellspacing="0" cellpadding="0" border="0" align="center" >
                                             <tr>
                                                <td align="center" class="hei"><a href="article_4.php"><img class="displayed ho"  src="ri.jpg" width="30%" alt=""></a></td>
                                             </tr>
                                             <tr>
                                                <td  class="pad" align="center"><br>Rihanna, de son vrai nom Robyn Rihanna Fenty, née le 20 février 1988 à Saint Michael, est une chanteuse, parolière, actrice, designer et mannequin barbadienne. Rihanna compte au total huit albums studios et deux albums de remixes.</td>
                                             </tr>
                                          </table>
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                        </table>
                     </td>
                     <td>
                        <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="1" bgcolor="#000000" align="center" >
                           <tr>
                              <td>
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