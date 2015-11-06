<?php
//include_once 'header.php';
?>

<style> 
    .reg_form{
        margin: 0 auto;
    }
    td{
       text-align: left;    
    }
    
</style>

<form method="post" action="register_succes.php" class="form">
    <legend>Registratie formulier</legend>
    <table width="400" border="0" cellpadding="10" cellspacing="10" class="reg_form"> 
        <tr>
            <td style="font-weight: bold"><div align="right"><label for="name">Naam*</label></div></td>
            <td><input name="username" type="text" class="input" size="25" required /></td>
        </tr>
        <tr>
            <td style="font-weight: bold"><div align="right"><label for="email">Email*</label></div></td>
            <td><input name="email" type="email" class="input" size="25" required /></td>
        </tr>
        <tr>
            <td height="23" style="font-weight: bold"><div align="right"><label for="password">Wachtwoord*</label></div></td>
            <td><input name="password" type="password" class="input" size="25" required /></td>
        </tr>
        <tr>
            <td height="23" style="font-weight: bold"><div align="right"><label for="password_check">Wachtwoord herhaal*</label></div></td>
            <td><input name="password_check" type="password" class="input" size="25" required /></td>
        </tr>
        <tr>
            <td height="23"></td>
            <td>
                <div align="right">
                    <input type="submit" name="submit" value="Register!" />
                </div>
            </td>
        </tr>
    </table>
</form>