<!DOCTYPE html>

<html>
    <head>
    </head>
    <body>
        <h1>test</h1>

        <form action="" method="post">
            <?php
                session_start();
                require('config.php');

                $query = "SELECT * FROM tutor";
                $results=mysqli_query($connection,$query);
                $row_count=mysqli_num_rows($results);
                

                echo "welcome!".$_SESSION['username'];
                echo "<table>";
                while ($row = mysqli_fetch_array($results)) {
                    $tid = $row['tid'];
                    echo "<tr><td>".($row['tname'])."</td>".
                    "<td>".$row['tarea']."<td>".
                    "<td>".$row['experience']."<td>".
                    "<td>";
                    echo "<button class='btn btn-primary btn-lg btn-block' type='submit' name='tid' value='$tid'>view</button>";
                    
                    
                    
                    echo "</tr>";
                }
                echo "</table>";

                if(isset($_POST['tid'])) {
                    $_SESSION['tutorviewid'] = $_POST['tid'];
                    header('Location: viewtutor.php');
                    exit();
                
                }


                        
                        
            
             
            ?>
        </form>
    </body>
</ehtml>

    


