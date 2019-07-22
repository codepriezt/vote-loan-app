<?php

include('tconnect.php');


if(isset($_POST["vote_option"]))
{
    $query = "
    INSERT into tbl_heroku_077fa93d6720c55
    (vote_candidates) VALUES (:vote_candidates)
    ";

    $data = array(
        ':vote_candidates' => $_POST["vote_option"]
    );
    $statement = $connect->prepare($query);
    $statement->execute($data);
}

?>