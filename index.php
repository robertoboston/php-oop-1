<?php

class Movie{
    public $title;
    public $year;
    public $genere;

    public function __construct($title,$year,$genere){
        $this->title = $title;
        $this->year = $year;
        $this->genere = $genere;
        
    }

    public function printAllData(){
        return $this->title." - ".$this->year." - ".$this->genere;
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                
                $topolino = new Movie ("topolino","1989","fantasy");
                $harry_potter = new Movie ("harry-potter","2010","fantasy");
                echo "<pre>";
                echo $topolino -> printAllData();
                echo "</pre>";

                echo "<pre>";
                echo $harry_potter -> printAllData();
                echo "</pre>"
                ?>
            </div>
        </div>
    </div>
</body>
</html>