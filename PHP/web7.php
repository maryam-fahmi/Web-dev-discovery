<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<style>
 @import url('https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap');

.morning {
    background-image: url("https://cdn.dynamicwallpaper.club/wallpapers/a9q1jiy0cu/thumbs/1600/3.jpg");
    color: black;

}

.afternoon {
    background-image: url("https://cdn.dynamicwallpaper.club/wallpapers/a9q1jiy0cu/thumbs/1600/2.jpg");
    color: black;
}


p {
    padding: 300px 0;
    text-align: center;
    font-size: 200px;
    background-repeat: no-repeat;
    height:400px;
    background-size:cover;

}

.evening {
    background-image: url("https://cdn.dynamicwallpaper.club/wallpapers/a9q1jiy0cu/thumbs/1600/1.jpg");
    color: white;
}

.night {
    background-image: url("https://cdn.dynamicwallpaper.club/wallpapers/a9q1jiy0cu/thumbs/1600/5.jpg");
    color: white;
}

body {
    position: relative;
    font-family: 'Patrick Hand', cursive;
}

.prob3 {
    position: fixed;
    bottom: 0;
    font-size: 30px;
    color: cornflowerblue;
}

.prob4 {
    position: absolute;
    right:0;
    top:0;
}

.prob2 {
    position: absolute;
    right:0;
    bottom:0;
    font-size: 50px;
    color: white;
}

.title {
font-size: 60px;
}

</style>

</head>
<body>
    <div>
<?php
$hour = date('H');
if ($hour >=4 && $hour < 12)
echo '<div> <p class="morning">Good Morning</p> </div>';
elseif ($hour >= 12 && $hour < 17)
echo '<div> <p class="afternoon">Good Afternoon</p> </div>';
elseif ($hour >= 17 && $hour < 21)
echo '<div> <p class="evening">Good Evening</p> </div>';
else
echo '<div> <p class="night">Good Night</p> </div>';
?>
</div>

<div>
<?php
$total_count = 1;
if(isset($_COOKIE['count'])){
$total_count = $_COOKIE['count'];
$total_count ++;
}
if(isset($_COOKIE['last_visit'])){
$last_visit = $_COOKIE['last_visit'];
}
setcookie('count', $total_count);
 setcookie('last_visit', date("H:i:s"));
if($total_count == 1){
echo "<div class='prob3'> This your first visit! Your visit number is 1 </div>";
} 
else {
echo "<div class='prob3'> Your hitcounter is: $total_count </div>";
}
?>
</div>

<div>
<?php
        $query_img = $_GET["image"];
        $images = ['pumpkin.gif', 'broom.gif', 'house.gif'];
        if (in_array($query_img, $images)) {
            echo "<img class='prob4' src='$query_img'/></div>";
        }
        ?>

<form action="lab08b.php" method="post" class="prob2">
Rows: <input type="number" name="rows"><br>
Columns: <input type="number" name="columns"><br>
<input type="submit">
    </div>

</body>



</html>