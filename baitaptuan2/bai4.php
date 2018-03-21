<!DOCTYPE html>
<html lang="en">
    <head
        <meta charset="UTF-8" >
    </head>

    <body>        

        <h4>Bai 4</h4>
        
        <form method="post" action="res.php">
            S? 1 : <input type="text" name="n1">;
            S? 2 : <input type="text" name="n2">;
            </br>
            <input type="radio" name="cal" value="-"> Tru 
            <input type="radio" name="cal" value="+"> Cong
            </br>
            <input type="radio" name="cal" value="*"> Nhân
            <input type="radio" name="cal" value="/"> Chia
            </br>
            </br>

            <input type="submit" name="submit" value="submit">
        </form>
            </br>
            </br>
            </br>
            </br>        
        <form method="post" action="bai4.php">
            <input type="submit" name="back" value="Back">
        </form>
    </body>
    
</html>