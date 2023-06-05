<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Puskesmas Tempu Rejo</title>
    <style>
        /* General CSS Setup */
        body{
            ;
            font-family: "Ubuntu-Italic", "Lucida Sans", helvetica, sans;
        }

        /* container */
        .container {
            padding: 5% 5%;
        }

        /* CSS talk bubble */
        .talk-bubble {
            margin: 10px 20px;
            display: inline-block;
            position: relative;
            width: auto;
            max-width:450px;
            height: auto;
            background-color: lightgreen;
        }
        .border{
            border: 12px solid #666 ;
        }
        .round{
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;

        }

        /* Right triangle placed top left flush. */
        .tri-right.border.left-top:before {
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            left: -40px;
            right: auto;
            top: -8px;
            bottom: auto;
            border: 32px solid;
            border-color: #666 transparent transparent transparent;
        }
        .tri-right.left-top:after{
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            left: -20px;
            right: auto;
            top: 0px;
            bottom: auto;
            border: 22px solid;
            border-color: lightgreen transparent transparent transparent;
        }

        /* Right triangle, left side slightly down */
        .tri-right.border.left-in:before {
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            left: -40px;
            right: auto;
            top: 0px;
            bottom: auto;
            border: 20px solid;
            border-color: #666 #666 transparent transparent;
        }
        .tri-right.left-in:after{
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            left: -20px;
            right: auto;
            top: 10px;
            bottom: auto;
            border: 12px solid;
            border-color: lightgreen lightgreen transparent transparent;
        }

        /*Right triangle, placed bottom left side slightly in*/
        .tri-right.border.btm-left:before {
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            left: -8px;
            right: auto;
            top: auto;
            bottom: -40px;
            border: 32px solid;
            border-color: transparent transparent transparent #666;
        }
        .tri-right.btm-left:after{
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            left: 0px;
            right: auto;
            top: auto;
            bottom: -20px;
            border: 22px solid;
            border-color: transparent transparent transparent lightgreen;
        }

        /*Right triangle, placed bottom left side slightly in*/
        .tri-right.border.btm-left-in:before {
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            left: 30px;
            right: auto;
            top: auto;
            bottom: -40px;
            border: 20px solid;
            border-color: #666 transparent transparent #666;
        }
        .tri-right.btm-left-in:after{
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            left: 38px;
            right: auto;
            top: auto;
            bottom: -20px;
            border: 12px solid;
            border-color: lightgreen transparent transparent lightgreen;
        }

        /*Right triangle, placed bottom right side slightly in*/
        .tri-right.border.btm-right-in:before {
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            left: auto;
            right: 30px;
            bottom: -40px;
            border: 20px solid;
            border-color: #666 #666 transparent transparent;
        }
        .tri-right.btm-right-in:after{
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            left: auto;
            right: 38px;
            bottom: -20px;
            border: 12px solid;
            border-color: lightgreen lightgreen transparent transparent;
        }
        /*
            left: -8px;
          right: auto;
          top: auto;
            bottom: -40px;
            border: 32px solid;
            border-color: transparent transparent transparent #666;
            left: 0px;
          right: auto;
          top: auto;
            bottom: -20px;
            border: 22px solid;
            border-color: transparent transparent transparent lightgreen;

        /*Right triangle, placed bottom right side slightly in*/
        .tri-right.border.btm-right:before {
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            left: auto;
            right: -8px;
            bottom: -40px;
            border: 20px solid;
            border-color: #666 #666 transparent transparent;
        }
        .tri-right.btm-right:after{
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            left: auto;
            right: 0px;
            bottom: -20px;
            border: 12px solid;
            border-color: lightgreen lightgreen transparent transparent;
        }

        /* Right triangle, right side slightly down*/
        .tri-right.border.right-in:before {
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            left: auto;
            right: -40px;
            top: 30px;
            bottom: auto;
            border: 20px solid;
            border-color: #666 transparent transparent #666;
        }
        .tri-right.right-in:after{
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            left: auto;
            right: -20px;
            top: 10px;
            bottom: auto;
            border: 12px solid;
            border-color: lightgreen transparent transparent lightgreen;
        }

        /* Right triangle placed top right flush. */
        .tri-right.border.right-top:before {
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            left: auto;
            right: -40px;
            top: -8px;
            bottom: auto;
            border: 32px solid;
            border-color: #666 transparent transparent transparent;
        }
        .tri-right.right-top:after{
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
            left: auto;
            right: -20px;
            top: 0px;
            bottom: auto;
            border: 20px solid;
            border-color: lightgreen transparent transparent transparent;
        }

        /* talk bubble contents */
        .talktext{
            padding: 1em;
            text-align: left;
            line-height: 1.5em;
        }
        .talktext p{
            /* remove webkit p margins */
            -webkit-margin-before: 0em;
            -webkit-margin-after: 0em;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@livewireStyles
</head>
<body style="background-color: lightblue">
<div class="container">
    <livewire:chat-certainty-factor/>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@livewireScripts
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>