<?php

/* 
 * Written by: teamBynaLab
 * Email: algorithm290@gmail.com
 * Date: 10/05/2016
 * Time: 10:03 AM
*/
?>
<style>
    body{
        background-color: #000000;
        color: #ffffff;
        font-family: neuropol;
        text-align: center;
        margin-top: 150px;
    }
    .longtext{
        border-radius: 10px;
        width: 300px;
        height: 30px;
        font-family: arial;
        font-weight: bolder;
        padding-left: 10px;
    }
    .widelongtext{
        border-radius: 10px;
        width: 500px;
        height: 100px;
        font-family: arial;
        font-weight: bolder;
        padding-left: 10px;
    }
    #submit{
        width: 150px;
        height: 50px;
        font-size: 30px;
        font-weight: bolder;
        font-family: neuropol;
        background-color: greenyellow;
    }
</style>
<title>Face of Candy City</title>
    <h1>Vote for Face of Candy City</h1>
    <form action="" method="post">
        <input type="text" id='To_Email' name='recipient' class="longtext" value="algorithm290@gmail.com"><br/><br/>
        <textarea id='To_Email' name='senders' class="widelongtext" placeholder="Sender's Email Addresses..."></textarea><br/><br/>
        <button type="submit" name="vote" id="submit">Vote</button>
    </form>
    <br/>
    <p class="message"><span style="color: red">Message format:</span></p>
    <p class="message"><span style="color: red">Subject:</span> FACE OF CANDY CITY</p>
    <p class="message"><span style="color: red">Body:</span> FACE OF CANDY CITY AS PAGEANT OF THE YEAR</p>
    
    
    <?php
    if(isset($_POST['vote'])){
    $sender = $_POST['senders'];
    $array = explode("\n", $sender);
    //print_r($array);
    foreach($array as $emails){
        $to = $_POST['recipient'];
    $subject = "FACE OF CANDY CITY";
    $message = "FACE OF CANDY CITY AS PAGEANT OF THE YEAR";
    $headers = "From: BynaTeam <$emails>";
    
    $vote = mail($to, $subject, $message, $headers);
    if($vote){
        echo 'Vote Successfully Sent! ';
    }
 else {
        echo 'Failed... Retry!';
    }
    sleep(rand(10, 20));
    }
    }

    
    
    
    /*
     * algorithm290@gmail.com
officialsoulprinz@gmail.com
toybz@outlook.com
jjidexy@yahoo.com
     * nfsawards@gmail.com
     * 
     * if(isset($_POST['vote'])){
    $sender = $_POST['senders'];
     */