<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My php web Site </title>
</head>

<body>

    <?php
        $roll = 9;
        echo "My roll number is $roll";
          
        $city = 'Dhaka';
    
        echo '<h1>'.$city.'is the capital city of bangladesh</h1>'
    ?>

        <h1><?php echo $city; ?> is the capital city of bangladesh</h1>



        <?php 
        
        $beautiful ='Rajshahi';
        $beautiful2 ='Dhaka';
        
        $citys = array('Dhaka','Rajshahi','Khulna','Kustia');
        
        ?>

            <?php if($beautiful == 'Rajshahi') : ?>
                <h1>Most Beautiful city is Rajshahi</h1>
                <?php else : ?>
                    <h1>We don't know</h1>
                    <?php endif; ?>

                        <?php 
     
            if($beautiful == 'Rajshahi'){
                echo '<h1>Most Beautiful city is Rajshahi</h1>';
            }
            else{
                echo '<h1>We don\'t know</h1>';
            }
    
        ?>

                            <?php 
        echo '<h1>3rd city is '.$citys[2].' </h1>';
    
        if($citys[3] == 'Kustia'){
            
        }else
            
            
        ?>
                                <?php 
     
            if($beautiful == $beautiful2){
                echo '<h1>Most Beautiful city is Rajshahi</h1>';
            }
            else{
                echo '<h1>We don\'t know</h1>';
            }?>
</body>

</html>