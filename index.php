<?php

/* 
 * Written by: Abubakar Abdusalam
 * Email: abdusalam@bynalab.com
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
<title>Title</title>
    <h1>H1 header if any</h1>
    <form action="" method="post">
        <input type="text" id='To_Email' name='recipient' class="longtext" value="example@github.com"><br/><br/>
        <textarea id='To_Email' name='senders' class="widelongtext" placeholder="Sender's Email Addresses..."></textarea><br/><br/>
        <button type="submit" name="send" id="submit">Vote</button>
    </form>
    <br/>

<!-- This is really not neccessary...
    <p class="message"><span style="color: red">Message format:</span></p>
    <p class="message"><span style="color: red">Subject:</span> Subject</p>
    <p class="message"><span style="color: red">Body:</span> Message Body</p>
-->    

    <?php
    if(isset($_POST['send'])){
    $sender = $_POST['senders'];
    $array = explode("\n", $sender);
    //print_r($array);
    foreach($array as $emails){
        $to = $_POST['recipient'];
    $subject = "Subject";
    $message = "Message Body";
    $headers = "From: $emails";
    
    $send = mail($to, $subject, $message, $headers);
    if($send){
        echo 'Email Successfully Sent! ';
    }
 else {
        echo 'Failed... Retry!';
    }
    sleep(rand(10, 20)); //This delays the loop by random secs from 10sec to 20sec before another email is sent...
    }
    }
