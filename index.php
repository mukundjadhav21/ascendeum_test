<?php
class calculate
{

    public $cssb7;
    public $css7;
public $cssa7;
public $selected;
public $statement;
public $bid;
public $win;
public $dice_1_value;
public $dice_2_value;
public $total;
    public function __construct()
    {
        $cssb7 = 'style="color:red"';
        $css7 = 'style="color:red"';
        $cssa7 = 'style="color:red"';
        $selected = 0;
        $statement = "";
        $bid = 10;
        $win = 0;

        $dice_1_value = 0;
        $dice_2_value = 0;

        $total = 0;
    }

    function calculate_values($selected)
    {
        $win = 0;
        $dice_1_value = rand(1,6);
        $dice_2_value = rand(1,6);

        $total = $dice_1_value + $dice_2_value;
        if($selected == 1)
        {
            if($total < 7)
            {
                $win = 20;
            }
            else {
                $win = 0;
            }
        }
        if($selected == 2)
        {
            if($total == 7)
            {
                $win = 30;
            }
            else {
                $win = 0;
            }
        }
        if($selected == 3)
        {
            if($total > 7)
            {
                $win = 20;
            }
            else {
                $win = 0;
            }
        }
        $statement = "Sorry! You lost!";
        if($win > 0)
        {
            $statement = "Congratulations! You Win! ";
        }
    }
}
?>
<?php


$cssb7 = 'style="color:red"';
$css7 = 'style="color:red"';
$cssa7 = 'style="color:red"';
$selected = 0;
$statement = "";
$bid = 0;
$win = 0;

$dice_1_value = 0;
$dice_2_value = 0;

$total = 0;


if(count($_REQUEST) <= 0){
    $balance = 100;
}
if(isset($_REQUEST['play'])){

    if(!isset($balance))
        $balance = 100;

    $selected = 1;

    $win = 0;
    $dice_1_value = rand(1,6);
    $dice_2_value = rand(1,6);

    $total = $dice_1_value + $dice_2_value;
    if($selected == 1)
    {
        if($total < 7)
        {
            $win = 20;
        }
        else {
            $win = 0;
        }
    }
    if($selected == 2)
    {
        if($total == 7)
        {
            $win = 30;
        }
        else {
            $win = 0;
        }
    }
    if($selected == 3)
    {
        if($total > 7)
        {
            $win = 20;
        }
        else {
            $win = 0;
        }
    }
    $statement = "Sorry! You lost!";
    if($win > 0)
    {
        $statement = "Congratulations! You Win! ";
    }
}

if(isset($_REQUEST['b7'])){
    $selected = 1;

    $bid = 10;    $cssb7 = 'style="color:Green"';
    if(!isset($balance))
        $balance = 100;
//    $calculate = new calculate();
//    $calculate->calculate_values($selected);

    $win = 0;
    $dice_1_value = rand(1,6);
    $dice_2_value = rand(1,6);

    $total = $dice_1_value + $dice_2_value;
    if($selected == 1)
    {
        if($total < 7)
        {
            $win = 20;
        }
        else {
            $win = 0;
        }
    }
    if($selected == 2)
    {
        if($total == 7)
        {
            $win = 30;
        }
        else {
            $win = 0;
        }
    }
    if($selected == 3)
    {
        if($total > 7)
        {
            $win = 20;
        }
        else {
            $win = 0;
        }
    }
    $statement = "Sorry! You lost!";
    if($win > 0)
    {
        $statement = "Congratulations! You Win! ";
    }
}
if(isset($_REQUEST['7'])){
    $selected = 2;
    $bid = 10;
    $css7 = 'style="color:Green"';
    if(!isset($balance))
        $balance = 100;

    $win = 0;
    $dice_1_value = rand(1,6);
    $dice_2_value = rand(1,6);

    $total = $dice_1_value + $dice_2_value;
    if($selected == 1)
    {
        if($total < 7)
        {
            $win = 20;
        }
        else {
            $win = 0;
        }
    }
    if($selected == 2)
    {
        if($total == 7)
        {
            $win = 30;
        }
        else {
            $win = 0;
        }
    }
    if($selected == 3)
    {
        if($total > 7)
        {
            $win = 20;
        }
        else {
            $win = 0;
        }
    }
    $statement = "Sorry! You lost!";
    if($win > 0)
    {
        $statement = "Congratulations! You Win! ";
    }
}
if(isset($_REQUEST['a7'])){
    $selected = 3;
    $bid = 10;
    $cssa7 = 'style="color:Green"';

    if(!isset($balance))
        $balance = 100;

    $win = 0;
    $dice_1_value = rand(1,6);
    $dice_2_value = rand(1,6);

    $total = $dice_1_value + $dice_2_value;
    if($selected == 1)
    {
        if($total < 7)
        {
            $win = 20;
        }
        else {
            $win = 0;
        }
    }
    if($selected == 2)
    {
        if($total == 7)
        {
            $win = 30;
        }
        else {
            $win = 0;
        }
    }
    if($selected == 3)
    {
        if($total > 7)
        {
            $win = 20;
        }
        else {
            $win = 0;
        }
    }
    $statement = "Sorry! You lost!";
    if($win > 0)
    {
        $statement = "Congratulations! You Win! ";
    }
}

?>

<html>
<title>
    Lucky 7 Game
</title>
<body>

<div>
    <h2>Welcome to Lucky 7 Game</h2>
</div><br/><br/>

<div>
    Your current balance is Rs.<?php echo $balance; ?>, Place your bet (Rs.10):
</div>
<form method="post" action="index.php">
    <div>
        <button id="b7" name="b7" <?php echo $cssb7; ?> type="submit">Below 7</button>
        <button id="7" name="7" <?php echo $css7; ?> type="submit">Lucky 7</button>
        <button id="a7" name="a7" <?php echo $cssa7; ?> type="submit">Above 7</button>
    </div><br/>
    <div hidden="">
        Selected Bet : Below 7 | <button type="submit" id="play" name="play">Play</button>
    </div>
</form>
<div>
    <h3>Game Results</h3>
</div>

<div>
    Dice 1: <?php echo $dice_1_value; ?>
</div>
<div>
    Dice 2: <?php echo $dice_2_value; ?>
</div>
<div>
    Total: <?php echo $total; ?>
</div>
<br/><br/>
<div>
    <?php echo $statement ?> balance is now Rs.<?php echo ($balance - $bid + $win) ?>.
</div>

</body>
</html>

