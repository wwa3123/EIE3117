<!DOCTYPE html>
<html>
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Bootstrap Icon CSS-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <style>
            body{background:#f5f5f5}
            .text-white-50 { color: rgba(255, 255, 255, .5); }
            .bg-blue { background-color:#66ccff; }
            .border-bottom { border-bottom: 1px solid #e5e5e5; }
            .box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
        </style>
	</head>
            
    <?php
        session_start();
        require('config.php');

        $tid=$_SESSION['userid'];
        $query = "SELECT user.uname,message.message, message.sendtime FROM user,message where user.uid=message.uid and tid= '$tid'";
        $results=mysqli_query($connection,$query);
    ?>

    <body>

   

        <main role="main" class="container bootdey.com">
            <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-blue rounded box-shadow">
                <img class="mr-3" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" width="48" height="48">
                <div class="lh-100">
                <h6 class="mb-0 text-white lh-100">
                <?php echo $_SESSION['username']?>
                </h6>
                <small>Messages</small>
                </div>
            </div>
            <?php
            while ($row = mysqli_fetch_array($results)) {
                echo '<div class="my-3 p-3 bg-white rounded box-shadow">'.
                    '<h6 class="border-bottom border-gray pb-2 mb-0">'.'message from @'.$row['uname'].'</h6>'.
                    '<div class="media text-muted pt-3">'.
                        
                        '<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">'.
                            '<strong class="d-block text-gray-dark">'.'</strong>'.$row['sendtime'].'<br>'.
                            $row['message'].
                        '</p>'.
                    '</div>'.
               '</div>';
            }
            ?>
        </main>
    </body>
</html>
