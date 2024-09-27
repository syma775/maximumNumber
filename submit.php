<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        /* h4{
            background-color:red;
        } */
    </style>
</head>
<body>
<div class="container-fluid whole" style="background: linear-gradient(#e66465, #9198e5);;width:100%;height:900px">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="height:300px;padding-top:120px;width:400px;background-color:white;color:blue;text-align:center;margin-top:100px;margin-left:200px">
                <?php

                    $a = $_POST['firstnumber'];
                    $b = $_POST['secondnumber'];
                    $c = $_POST['thirdnumber'];

                    if($a>$b && $a >$c){
                        // echo("<h4 style='background-color:red'>");
                        echo($a.' , '.$b.' , '.$c." among all that ".$a .' is the maximum number.</h4>');
                        // echo("</h4>");
                    }
                    else if($b>$c && $b>$c){
                        echo($a.' , '.$b.' , '.$c." among all that ".$b .' is the maximum number.');
                    }
                    else if($c>$a && $c>$b){
                        echo($a.' , '.$b.' , '.$c." among all that ".$c.' is the maximum number.');
                    }
                    else if($a==$b || $a==$c || $b==$c){
                        echo($a.' , '. $b.' , '.$c.' three values are same number.');
                    }
                    else{
                        echo('please take the valid number .');
                    }


                ?>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>   
</body>
</html>