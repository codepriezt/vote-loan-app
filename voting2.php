<!DOCTYPE html>
<html>

<head>
    <title>live voting app</title>
    <link rel="stylesheet" type="type\css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


</head>

<body>
    <div class="container">
        <br />
        <br />
        <br />
        <h2 align="center"> Live voting System </h2>
        <h4> Vote for your staff of the week
        </h4>
        <div class="row">
            <div class="col-md-6">
                <form method="POST" method="polling.php">

                    <div>
                        <label>
                            <h4>
                                Vote for O J : <input type="submit" name="oj" value="vote for oj" class="btn btn-primary">

                            </h4>
                        </label>

                    </div>
                    <div>
                        <label>
                            <h4>
                                Vote for Bamz : <input type="submit" name="bams" value="vote for bams" class="btn btn-primary">
                            </h4>
                        </label>

                    </div>

                    <div>
                        <label>
                            <h4>
                                Vote for Ebuka : <input type="submit" name="ebuka" value="vote for ebuka" class="btn btn-primary">
                            </h4>
                        </label>

                    </div>
                    <div>
                        <label>
                            <h4>
                                Vote for ziks : <input type="submit" name="ziks" value="vote for zik" class="btn btn-primary">
                            </h4>
                        </label>
                    </div>
                </form>
            </div>

            <hr>
            <hr>
            <div>
                <h3 align="center"><a href="voting2.php?result">See Result</a></h3>
            </div>


            </form>
            <?php


            $con = mysqli_connect("localhost", "root", "", "vote");

            if (isset($_POST['oj'])) {
                $vote_oj = "update voting set oj = oj+1";
                $run_oj = mysqli_query($con, $vote_oj);

                if ($run_oj) {
                    echo "<h2 align= 'center'> Your Vote  has been casted for O j!</h2>";

                    echo "<h2 align ='center'><a href='voting2.php?results'>View Results</a></h2>";
                }
            }
            if (isset($_POST['bams'])) {
                $vote_bams = "update voting set bams = bams+1";
                $run_bams = mysqli_query($con, $vote_bams);

                if ($run_bams) {
                    echo "<h2 align= 'center'> Your Vote  has been casted for Bams!</h2>";

                    echo "<h2 align ='center'><a href='voting2.php?results'>View Results</a></h2>";
                }
            }

            if (isset($_POST['ebuka'])) {
                $vote_ebuka = "update voting set ebuka = ebuka+1";
                $run_ebuka = mysqli_query($con, $vote_ebuka);

                if ($run_ebuka) {
                    echo "<h2 align= 'center'> Your Vote  has been casted for ebuka !</h2>";

                    echo "<h2 align ='center'><a href='polling2.php?results'>View Results</a></h2>";
                }
            }

            if (isset($_POST['ziks'])) {
                $vote_ziks = "update voting set ziks = ziks+1";
                $run_ziks = mysqli_query($con, $vote_ziks);

                if ($run_ziks) {
                    echo "<h2 align= 'center'> Your Vote  has been casted for ziks!</h2>";

                    echo "<h2 align ='center'><a href='voting2.php?results'>View Results</a></h2>";
                }
            }


            //Outputting result 


            if (isset($_GET['results'])) {
                $get_votes = "select * from votes";
                $run_votes = mysqli_query($con, $get_votes);
                $row_votes = mysqli_fetch_array($run_votes);

                $oj = $row_votes['oj'];
                $bams = $row_votes['bams'];
                $ebuka = $row_votes['ebuka'];
                $ziks = $row_votes['ziks'];

                $count = $oj + $bams + $ebuka + $ziks;

                $per_oj = round($oj * 100 / $count) . "%";
                $per_bams = round($bams * 100 / $count) . "%";
                $per_ebuka = round($ebuka * 100 / $count) . "%";
                $per_ziks = round($ziks * 100 / $count) . "%";

                echo  "
                            <h2>Updated result:</h2>
                            <p><b>Oj:</b> $oj ($per_oj)</p>
                            <p><b>Oj:</b> $bams ($per_bams)</p>
                            <p><b>Oj:</b> $ebuka ($per_ebuka)</p>
                            <p><b>Oj:</b> $ziks ($per_ziks)</p>



                    ";
            }

            ?>

        </div>
    </div>
    </div>
</body>

</html>