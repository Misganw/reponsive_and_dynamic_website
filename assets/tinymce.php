<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced text Editor</title>
</head>
<body>
    <h3>Advanced Text Editor</h3>
    <form action="tinymce.php" method="post">
        <textarea name="post" id="default"  ></textarea>
        <button type="submit" name="posting" >Submit</button>
    </form>
    <?php 
    if(isset($_POST['posting']))
    {
        $conn=mysqli_connect('localhost','root','r00tme1221') or die("Server does not connected");
        mysqli_select_db($conn,'tinymce')or die("Database does not connected");
        if(isset($_POST['post']) && !empty($_POST['post']))
        {
            $post=$_POST['post'];
        }
        else
        {
            echo "content is not posted";
        }
        if(isset($post) && !empty($post))
        {
            $qry = mysqli_query($conn,"INSERT INTO tinymce (post) values ('$post')");
            if($qry)
            {
                $sele= mysqli_query($conn,"SELECT * FROM tinymce");
                while ($row=mysqli_fetch_assoc($sele)) 
                {
                    echo $row['post'];
                }
            }
        }
    }
    ?>
    <script src="tinymce/js/tinymce/tinymce.min.js"></script>
    <script src="script.js"></script>

</body>
</html>