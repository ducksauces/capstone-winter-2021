
<?php
            try {
                $dbh = new PDO 
                ("mysql:host=localhost;dbname=instruments","root","");
            }
            catch (Exception$e) {
                die("Error, cannot connect. {$e -> getmessage()}");
            }

            ?>