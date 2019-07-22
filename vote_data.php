<?php

//fetching vote_data

include('tconnect.php');


$vote_candidates = array("O J","ziks","bams","ebuka"); 

$total_vote_row = total_rows($connect);

foreach ($vote_candidates as $row){

    $query = "
    SELECT * FROM tbl_vote WHERE vote_candidates = ' ".$row. "'
    ";
    $statement = $connect->prepare($query);
    $statement->execute();
    $total_row= $statement->rowCount();
    $percentage_vote = round($total_row/$total_vote_row) * 100;

    $progress_bar_class = '';
    if($percentage_vote >= 40){
        $progress_bar_class = 'progress-bar-success'; 
    }
    elseif($percentage_vote == 25 && $percentage_vote <= 40){
        $progress_bar_class = 'progress-bar-info';
    }
    elseif($percentage_vote >= 10 && $percentage_vote <= 25){
        $propgress_bar_class = "progress-bar-warning";
    }
    else{
         $progress_bar_class = "progress-bar-danger";     
    }

    //oputput on the screen showing thw percentage of each votes

    $output .= '
            <div class = "row">
            <div class = "col-md-2" align = "right">
            <label> '.$row.'</label>
            </div>
            <div class = "col-md-10">
                <div class = "progress '.$progress_bar_class.'" aria-valuenow= "'.$percentage_vote.'"
                aria-valuemin = "0" aria-valuemax="100"
                 style = "width:'.$percentage_vote.'%">'.$percentage_vote.'% voters like<b> '.$row.'</b> VOTE CANDIDATES
                   
                </div>
            </div>
        </div>
    
    ';

}

echo $output;


function  total_rows($connect)
{
    $query = "SELECT * FROM  tbl_vote";
    $statement =$connect->prepare($query);
    $statement->execute();
    return $statement->rowCount();

}





?>