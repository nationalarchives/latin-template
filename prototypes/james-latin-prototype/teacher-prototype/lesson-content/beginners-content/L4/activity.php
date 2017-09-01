    <?php

    $latinArray = array("voco", "oro", "edificat", "dat", "laborat", "confirmat", "edificant", "vocamus", "damus");

    function checkAnswer ($answer, $correctAnswer){
            $answer = strtolower($answer);
            if ($answer == $correctAnswer){
                echo ($answer . " ✔ ");
            }
            else {
                echo ($answer . " ✘ ");
            }
     }

     function revealAnswer ($answer, $correctAnswer){
            $answer = strtolower($answer);
            if ($answer != $correctAnswer){
                echo ($correctAnswer);
            }
     }

?>
            
            <article>
                <div class="entry-content">
                    <h2>Activity</h2>
                    <form action="" method="post">
                            <table class="table text-center">
                                <thead>
                                    <th class="text-center">English</th>
                                    <th class="text-center">Latin</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <div>
                                            <td>
                                                <label for="name">I call</label>
                                            </td>
                                            <td>
                                                <input type="text" id="answer1" name="I_call"/>
                                            </td>
                                        </div>
                                    </tr>    
                                    <tr>
                                        <div>
                                            <td>
                                                <label for="age">I pray</label>
                                            </td>
                                            <td>
                                                <input type="text" id="answer2" name="I_pray"/>
                                            </td>
                                        </div>
                                    </tr>    
                                    <tr>
                                        <div>
                                            <td>
                                                <label for="name">It builds</label>
                                            </td>
                                            <td>
                                                <input type="text" id="answer3" name="It_builds"/>
                                            </td>
                                        </div>
                                    </tr>    
                                    <tr>
                                        <div>
                                            <td>
                                                <label for="age">He gives</label>
                                            </td>
                                            <td>
                                                <input type="text" id="answer4" name="He_gives"/>
                                            </td>
                                        </div>
                                    </tr>    
                                    <tr>
                                        <div>
                                            <td>
                                                <label for="name">It works</label>
                                            </td>
                                            <td>
                                                <input type="text" id="answer5" name="It_works"/>
                                            </td>
                                        </div>
                                    </tr>    
                                    <tr>
                                        <div>
                                            <td>
                                                <label for="age">She confirms</label>
                                            </td>
                                            <td>
                                                <input type="text" id="answer6" name="She_confirms"/>
                                            </td>
                                        </div>
                                    </tr>    
                                    <tr>
                                        <div>
                                            <td>
                                                <label for="name">They build</label>
                                            </td>
                                            <td>
                                                <input type="text" id="answer7" name="They_build"/>
                                            </td>
                                        </div>
                                    </tr>    
                                    <tr>
                                        <div>
                                            <td>
                                                <label for="age">We call</label>
                                            </td>
                                            <td>
                                                <input type="text" id="answer8" name="We_call"/>
                                            </td>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div>
                                            <td>
                                                <label for="age">We give</label>
                                            </td>
                                            <td>
                                                <input type="text" id="answer9" name="We_give"/>
                                            </td>
                                        </div>
                                    </tr>
                                </tbody>                                    
                            </table>    
                            <div>
                                <input type="submit" value="Submit"/>
                            </div>
                        </form>
                    </div>    
            </article>

        <article>
                <div class="entry-content">
                    <h2>Results</h2>
                        <table class="table text-center">
                            <thead>
                                <th class="text-center">English</th>
                                <th class="text-center">Your answer</th>
                                <th class="text-center">Correct answer</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $answer = $_POST["I_call"]; ?>
                                    <td>I call</td>
                                    <td><?php checkAnswer ($answer, $latinArray[0])?></td>
                                    <td><?php revealAnswer ($answer, $latinArray[0])?></td>
                                </tr>
                                <tr>
                                    <?php $answer = $_POST["I_pray"]; ?>
                                    <td>I pray</td>
                                    <td><?php checkAnswer ($answer, $latinArray[1])?></td>
                                    <td><?php revealAnswer ($answer, $latinArray[1])?></td>
                                </tr>
                                <tr>
                                    <?php $answer = $_POST["It_builds"]; ?>
                                    <td>It builds</td>
                                    <td><?php checkAnswer ($answer, $latinArray[2])?></td>
                                    <td><?php revealAnswer ($answer, $latinArray[2])?></td>
                                </tr>
                                <tr>
                                    <?php $answer = $_POST["He_gives"]; ?>
                                    <td>He gives</td>
                                    <td><?php checkAnswer ($answer, $latinArray[3])?></td>
                                    <td><?php revealAnswer ($answer, $latinArray[3])?></td>
                                </tr>
                                <tr>
                                    <?php $answer = $_POST["It_works"]; ?>
                                    <td>It works</td>
                                    <td><?php checkAnswer ($answer, $latinArray[4])?></td>
                                    <td><?php revealAnswer ($answer, $latinArray[4])?></td>
                                </tr>
                                <tr>
                                    <?php $answer = $_POST["She_confirms"]; ?>
                                    <td>She confirms</td>
                                    <td><?php checkAnswer ($answer, $latinArray[5])?></td>
                                    <td><?php revealAnswer ($answer, $latinArray[5])?></td>
                                </tr>
                                <tr>
                                    <?php $answer = $_POST["They_build"]; ?>
                                    <td>They build</td>
                                    <td><?php checkAnswer ($answer, $latinArray[6])?></td>
                                    <td><?php revealAnswer ($answer, $latinArray[6])?></td>
                                </tr>
                                <tr>
                                    <?php $answer = $_POST["We_call"]; ?>
                                    <td>We call</td>
                                    <td><?php checkAnswer ($answer, $latinArray[7])?></td>
                                    <td><?php revealAnswer ($answer, $latinArray[7])?></td>
                                </tr>
                                <tr>
                                    <?php $answer = $_POST["We_give"]; ?>
                                    <td>We give</td>
                                    <td><?php checkAnswer ($answer, $latinArray[8])?></td>
                                    <td><?php revealAnswer ($answer, $latinArray[8])?></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </article>


            