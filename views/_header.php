<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>DziennikLogin</title>
    <style type="text/css">
        /* just for the demo */
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 10px;
        }
        label {
            position: relative;
            vertical-align: middle;
            bottom: 1px;
        }
        input[type=text],
        input[type=password],
        input[type=submit],
        input[type=email] {
            display: block;
            margin-bottom: 15px;
        }
        input[type=checkbox] {
            margin-bottom: 15px;
        }
        /*<![CDATA[*/
        div.c7 {margin-top:50px;}
        div.c6 {padding-top:30px}
        div.c5 {border-top: 1px solid#888; padding-top:15px; font-size:85%}
        div.c4 {margin-top:10px}
        div.c3 {margin-bottom: 25px}
        div.c2 {display:none}
        div.c1 {float:right; font-size: 80%; position: relative; top:-10px}
        /*]]>*/
    </style>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>
