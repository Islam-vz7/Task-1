
<?php

if(isset($_COOKIE['mindset_user']) && !empty($_COOKIE['mindset_user'])) {
    $user = json_decode($_COOKIE['mindset_user'] , true);

    // echo 'Hello, ' . $user['name'];

} else {
    header('location: ./Views/login.php');
    exit();
}

require_once "./Views/header.php"; 






?>
        <div>

            <span  onclick="history.back()">Classes</span> / <span>Update classes</span>
        
        </div>

        <div>

            <form action="../update_class_back?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">

                <h1>
                    Update class
                </h1>

                <label>
                    Class Name
                </label>
            
                <input type="text" name="name" placeholder="Enter Class Name" value="<?php echo $class['name']; ?>">
                
                <label>
                    Class Image
                </label>

                <img src="<?php  echo $class['image_url'];?>" width="100" />
                
                <input type="file" name="image"/>
                
                <input type="submit" value="Update">
            
            </form>

        </div>

<?php require_once "./Views/footer.php"; ?>