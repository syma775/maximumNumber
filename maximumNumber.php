<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maximum Number </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        .box{
            height: 500px;
            width:80%;
            background-color:white;
            margin:auto;
            margin-top:100px;
            border:2px solid white;
            border-radius:10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid" style="background: linear-gradient(#e66465, #9198e5);;width:100%;height:900px;margin-left:auto;">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8" style="">
                    <div class="box">
                        <h3 style="text-align:center">Maximum Number</h3>
                    <form action="submit.php" method="POST">
                        <div class="mb-3" style="margin-top:70px;margin-left:20px;margin-right:20px">
                            <label for="exampleInputEmail1" class="form-label">First Number</label>
                            <input type="number" name="firstnumber" class="form-control" placeholder="Give me First number"id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                        </div>
                        <div class="mb-3" style="margin-top:30px;margin-left:20px;margin-right:20px">
                            <label for="exampleInputPassword1" class="form-label">Second Number</label>
                            <input type="number" name="secondnumber" placeholder="Give me Second number" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3" style="margin-top:30px;margin-left:20px;margin-right:20px">
                            <label for="exampleInputPassword1"  class="form-label">Third Number</label>
                            <input type="number" name="thirdnumber"  placeholder="Give me Third number" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" style="margin-top:30px;margin-left:20px;margin-right:20px;padding:10px 30px"class="btn btn-primary">Submit</button>
                    </form>
                </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</body>
</html>