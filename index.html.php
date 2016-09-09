<html><body>
 <? if (!isset($_REQUEST['GO']))
{?>
    <form action="<?=$_SERVER['SCRIPT_NAME']?>">
        <p>Login</p><input type="text" name = "LOGIN" value=""/><br>
        <p>Password</p><input type="password" name = "PASS" value=""/><br>
            <input type="submit" name="GO" value="Enter">
    </form>
<?}
   else {
        if ($_REQUEST['LOGIN']=="root"&&$_REQUEST['PASS'] == "111")
        {
            echo "Succes for user $_REQUEST[LOGIN]";
        }
        else
        {
            echo "Acces denied";
        }
      }
    ?>

</body></html>