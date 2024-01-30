<?php
    include "logic.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL PHP Blog</title>
<style>
    body{
        background-color: grey;
        text-align: center;  
    }
    .btn{
            background-color: ;
            color: white;
            transition: 1.5s;
            
        }
        .btn :hover{
            cursor: pointer;
            opacity: 0.7;
        }
        .btn :action{
            color:aqua;
            opacity:0.5;
        }

</style>
</head>
<body>
      

    <div class="container">
      <?php foreach($query as $q){?>
        <div>
            <h1><?php echo $q["Title"];?></h1>
        </div>
           <div>
              <a href="edit.php?ID=<?php echo $q['ID'];?>">Edit</a>
              <form method="POST">
                <input type="text" hidden name="ID" value="<?php echo $q["ID"];?>">
                <button class="btnn" name="delete">Delete</button>
              </form>
           </div>
        <p><?php echo $q["Content"];?></p>

        <?php }?>
    </div>  
</body>
</html>