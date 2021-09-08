<?php

function get_header()
{
    include 'templates/header.php';
}

function get_footer()
{
    include 'templates/footer.php';
}

function writeMessage()
{
    print "This is the writeMessage function.<br />";
}

//writeMessage();

function whatIsToday()
{
    $datenow = "Todays date is: " . date('D d M, Y');

    return $datenow;
}

//$datenow = whatIsToday();
//print $datenow;
