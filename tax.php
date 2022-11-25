<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>w03-tex</w03-tax></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php
        $income = $_REQUEST["income"];
        echo "<span>Income : $income</span>";
        if($income <= 150000){
            $tax = 0;
        }else if($incoe <= 300000){
            $tax = ($income-150000)*0.05;
        }else if($income <= 500000){
            $tax = (Sincome-300000)*0.1+7500;
        }else if($income <= 750000){
            $tax = (Sincome-500000)*0.15+27500;
        }else if($income <= 1000000){
            $tax = (Sincome-750000)*0.20+65000;
        }else if($income <= 2000000){
            $tax = (Sincome-1000000)*0.25+115000;
        }else if($income <= 5000000){
            $tax = (Sincome-2000000)*0.30+365000;
        }else if($income <= 6000000){
            $tax = (Sincome-5000000)*0.35+1265000;
        };
        echo "<b>Tax : $tax</b>"
    ?>
</body>
</html>