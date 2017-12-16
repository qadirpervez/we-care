<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Its a 404 | we-care</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Slabo+27px" rel="stylesheet">
    <style>
      body{
        background-image: url({{ URL::asset('images/errors/ERROR_404.jpg') }});
      }
      h1{
        font-family: 'Slabo 27px', serif;
        color: #fff;
        font-weight: bold;
        text-shadow: 3px 3px 4px #000;
      }
      .top-height{
        margin-top: 560px;
      }
      p{
        color: #fff;
        font-family: 'Open Sans', sans-serif;
        font-size: 17px;
        margin-top: 15px;
        text-shadow: 2px 2px 3px #000;
      }
      .glyphicon{
        top: 4px;
      }
      .btn{
        border-radius: 0px;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <div class="container top-height">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">Oh no, you have found our junior developer's hompage!</h1>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
          <p class="text-center">Despite sleeping on the couch most of the day, our junior web developer still finds time to do some coding...</p>
        </div>
        <div class="text-center">
          <a href="{{ route('home') }}" class="btn btn-success btn-lg">Back to Hompage &nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </body>
</html>
