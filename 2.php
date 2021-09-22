    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
      <body>
      <div class="context">
        <h1>Traductor Lengua De Se&ntilde;as</h1>

        <br>

       
    </div>


<div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>

                    <form action="" method="POST" >
        <table>
            <tr>
                <td> ingrese una palabra :  </td>
                <td> <input type="text" name="palabra" required> </td>

            </tr>
            <tr>
            <td>
                <input type="submit" value="buscar">
            </td>
            </tr>

        </table>

    </form>

                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >
   
        <?php
        if (isset($_POST["palabra"])) {  //consultar
            $srt = ($_POST["palabra"]);
            $arr1 = str_split($srt);

            if ($srt=="a"){        //llamar imagenes 
                echo "<img src='media/a.png'>";
            }

            if ($srt=="b"){
                echo "imagen_B";
            }

    
        }
        ?>
    
    </body>

    

    </html>
