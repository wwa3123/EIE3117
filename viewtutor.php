<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icon CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<?php
    session_start();
    require('config.php');
    $tid = $_SESSION['tutorviewid'];
    $query = "SELECT * FROM tutor WHERE tid ='$tid'";
    $results=mysqli_query($connection,$query);
    $row_count=mysqli_num_rows($results);
    $row = mysqli_fetch_array($results);
    $tname=$row['tname'];
    
?>

<body>
    
    <div class="container mt-5">
        
        <div class="row d-flex justify-content-center">
            
            <div class="col-md-7">
                
                <div class="card p-3 py-4">
                    
                    <div class="text-center">
                        <img src="https://i.imgur.com/bDLhJiP.jpg" width="100" class="rounded-circle">
                    </div>
                    
                    <div class="text-center mt-3">
                        <span class="bg-secondary p-1 px-4 rounded text-white"><?php echo $tname;?></span>
                        <h5 class="mt-2 mb-0"></h5>
                        <span><?php echo $row['tarea']?></span>
                        
                        <div class="px-4 mt-1">
                            <p class="fonts"> <?php echo $row['tdesciption']?></p>
                        
                        </div>

                        
                        <div class="card-body p-5 text-center">
                            <form action="sendmessage.php" method="post" id="messageform">
                                <h5 class="mb-5">send the message to tutor</h5>

                                <div class="form-floating mb-4">
                                    <textarea id="message" name="message" class="form-control form-control-lg" row="3" form="messageform"></textarea>
                                    <label class="form-label" for="description">description</label>
                                </div>

                                


                                <button class="btn btn-primary btn-lg btn-block" type="submit">message</button>
                            </form>
                         </div>
                        
                    </div>
                    
                
                    
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
    
</body>
