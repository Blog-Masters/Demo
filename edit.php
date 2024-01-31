<?php
    include "logic.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog</title>
    <style>
        body{
            font-family: Arial,sans-serif;
            line-height:  1.6;
            margin: 20px;
            background-color: black;
            align-content: center;
        }
        header,footer{
            background-color: grey;
            text-align: center;

            padding: 10px;
        }
        .btn{
            background-color: aquamarine;
            color: black;
            transition: 1.5s;
            margin-left: 650px;
            
        }
        .btn:hover{
            cursor: pointer;
            opacity: 0.7;
        }
        .btn:action{
            color: white;
            opacity:0.5;
        }

        .form-control{
            width:400px ;
            height: 200px;
            margin-left: 500px;
        }
        .frm{
            display: inline;
            margin-left: 600px;
        }

    </style>
</head>
<body>
    <header>
        <h1>BLOGS</h1>
        <p><i>Welcome to Blogger</i></p>
    </header>
    <?php foreach($query as $q){?>
        <div>
        <form  method="UPDATE" class="frm">
            <input name="ID" hidden name="ID" type="text"  value="<?php echo $q["ID"]?>">
            <input type="text" name="Title" placeholder="Blog Title" class="form-control-f"  value="<?php echo $q["Title"]?>"><br><br>
            <textarea name="Content" class="form-control" value="<?php echo $q["Content"]?>"></textarea><br><br>
            <button name="update" class="btn">update</button><br>
        </form>
    </div>  
    <?php }?> 

    <footer>
        <p>&copy; 2024 <i>blogs</i>. All rights reserved</p>
    </footer>
</body>
</html>