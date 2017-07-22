<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>
    <meta charset="UTF-8">
    <meta name=description content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col col-lg-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Message From {{$name}}</h3>
                </div>
                <div class="panel-body">
                    <p>{{$contactMessage}}</p>
                    <br>
                    <p>
                        {{$name}}
                        <br>
                        {{$email}}
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

