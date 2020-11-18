<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Prompt', sans-serif;">
    <div class="container mt-3 mb-3">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">BMX49 DANCER CONTEST</h2>
                    <p class="text-success text-center">Voting Score</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
            <form method="POST">
            <input type="text" name="ans">
            </div>
            <div class="col-md-2">
                <button type="submit" name="submit" class=" btn btn-primary">summit</button>
            </div>
            </form>
        </div>
<?php 
    if(isset($_POST['submit']))
    {
        $url = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";    
        $response = file_get_contents($url);
        $result = json_decode($response);
        $sele = $_POST['name'];
        $track = $result->tracks;
        foreach ($track->items as $trak){
            
                // echo $trak->album->name;
                // echo $trak->album->artists[0]->name;
            
            if($trak->album->name == $sele){
                echo "<div class='row mt-5'>
            <div class='col-md-1'></div>
            <div class='col-md-10'>

                <div class='card' style='width: 60%; float:none; margin: 0 auto;'>
                    <div class='row'>
                        <div class='col-md-12'>
                            <img src='"+ $trak->album->images[0]->url + "' class='card-img-top mx-auto d-block' style='width:100%'>
                        </div>
                    </div>
                    <div class='card-body'>
                        <div class='row'>
                            <div class='col-md-12 p-2'>
                                <b><p style='font-size: 22px';>"+ $trak->album->name+"</p></b>
                                <p style='color: red'>Artist : "+ $trak->album->artists[0]->name+ "</p>
                                <p>Release date : "+ $trak->album->album.$release_date+"</p>
                                <p>Avaliable : "+strlen($trak->album->album.$available_markets)+"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-1'></div>
        </div> ";}
        
            //     $pic =  $findnumber->img;
            //     $name = $findnumber->name;
            //     $score = $findnumber->score;
             
            }
        }
       
        
            
?>
                  
</div>
</body>
</html>