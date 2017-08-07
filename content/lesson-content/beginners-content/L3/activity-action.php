<article>
    <div class="entry-content clearfix">
        <?php
            $NoOfQs = 3;

            $UserAns = array();


            for ($i = 1; $i <= $NoOfQs; $i++) {
                var_dump($_POST["answer-$i"]);
                //$UserAns[$i--] = strtolower($_POST["answer-$i"]);
            }

            $Outcome = array();

            $results = 0;

            if ( $UserAns[0] == "annabel") {
                $Outcome[0] = "Correct!"; $results++;
            } else {
                $Outcome[0] = "Incorrect!"; $results--;
            }

            if ( $UserAns[1] == "19") { $Outcome[1] = "Correct!"; $results++;} else {$Outcome[1] = "Incorrect!";$results--;}
            if ( $UserAns[2] == "red") { $Outcome[2] = "Correct!"; $results++;} else {$Outcome[2] = "Incorrect!";$results--;}

            echo "<div id=results> $results </div>";
            for ($i=0; $i < $NoOfQs; $i++) {;
                $QNo = $i+1;
                echo "<div id=exact-results> Question $QNo : $Outcome[$i] </div>";
            }
        ?>
    </div>
</article>
