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
        .card-text{
            border: blue;
        }

</style>
</head>
<body>
      

    <div class="container">
        <?php if(isset($_REQUEST['info'])){?>
            <?php if($_REQUEST['info']=='added'){?>
                <div class="alert" role="alert">
                    <i>Post has added been successfully</i>
                </div>
            <?php } else if($_REQUEST['info']=='updated'){?>
            <div class="alert" role="alert">
                    <i>Post has updated been successfully</i>
                </div>   

            <?php } else if($_REQUEST['info']=='deleted'){?>
            <div class="alert" role="alert">
                    <i>Post has deleted been successfully</i>
                </div>
            <?php }?>
        
        <?php }?>
        
        <div class="text center">
            <a href="create.php" class="btn"><button>Create New Post</button></a>
          
        </div>

        <div class="row">

            <?php foreach ($query as $q){?>
                <div class="col4">
                    <div class="card-text">
                        <div class="card-body" style= "width: 18rem;">
                            <h5 class="card-title"><?php echo $q['Title']?></h5>
                            <p class="card-title"><?php echo $q['Content']?></p>
                            <a href="view.php?ID=<?php echo $q['ID'];?>" class="btn">Read More <span class=" text danger">&rarr;</span></a>
                    </div>
                </div>
            <?php  } ?>
            </div>
        </div>
    </div>  
</body>
</html>