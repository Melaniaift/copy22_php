<html>
    <head>
        <meta charset="UTF-8">
        <title>Ex1</title>
    </head>
    <body>
        <form>
            <input type="text" align="left" name="text1" size="12" maxlength="13"/>
            <input type="submit" value="->" name="bau"/>
            <textarea  name="textarea" cols="13" rows="3"" ><?php echo($_POST["text1"]);?></textarea>
        </form>
    </body>
</html>