<!DOCTYPE html>
<html>
    <style>
        .texto{
            color:blue ;
            font-size:50px;
        }
    </style>
    <body>
        <p class = texto>
            <?php
            function myMessage() {
                echo "Hello World! <br>";
            }


            myMessage();
            myMessage();

            function Soma($n1, $n2){
                echo $n1 + $n2, "<br>";
            }

            Soma(8, 4);
            Soma(19, 56);
            ?>
            </p>
    </body>
</html>