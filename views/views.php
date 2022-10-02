<?php
// require "../config/db.php";

// create a query that connects select all testimony

function viewTestimonies($table, $connection, $limit){
    $sql = "SELECT * FROM $table  LIMIT $limit";
    $query = mysqli_query($connection, $sql);

    $total =  mysqli_num_rows($query);

    if ($total > 0){
        while($row = mysqli_fetch_assoc($query)) {

            echo "<div class='item'>
									<div class='bible-verse-slide active text-center'>
										<h2 class='Testimony'>Recent Testimonies</h2>
										<b>I will declare thy name unto my brethren: in the midst of the congregation
											will I praise thee - (Psalm 22:22)</b>
										<blockquote>
											<p>&ldquo; " .$row["testimony"]. "  .&rdquo;</p>
											<span>".$row["testifier_name"]."</span>
										</blockquote>
									</div>
								</div>";


          }
        } else {
          echo "No Testimonies Please tell us what God have done!";
        }

      }
    

      function viewEvents($table, $connection, $limit, $image){
        $sql = "SELECT * FROM $table LIMIT $limit";
        $query = mysqli_query($connection, $sql);
    
        $total =  mysqli_num_rows($query);
    
        if ($total > 0){
            while($row = mysqli_fetch_assoc($query)) {
    
                if ($image == false) {
                  echo "<div class='col-md-4 animate-box'>
                <div class='events-entry'>
                  <span class='date'> " .$row["event_date"]." </span>
                  <h3><ahref='events.php?id=".$row["id"]."'>" .$row["event_title"]."</a></h3>
                  <p class='hidetext'>" .$row["event_description"]."</p>
                  <a href='events.php?id=".$row["id"]."'>Read More <i class='icon-arrow-right3'></i></a>
                </div>
              </div>";
                } else {
                  echo "<div class='col-md-4 animate-box'>
                <div class='events-entry'>
                <a href='events.php?id=".$row["id"]."' class='img-holder'><img class='img-responsive' src='img/".$row["event_image"]."'
                          alt='".$row["event_description"]."'></a>
                  <span class='date'> " .$row["event_date"]." </span>
                  <h3><a href='events.php?id=".$row["id"]."'>" .$row["event_title"]."</a></h3>
                  <p  class='hidetext'>" .$row["event_description"]."</p>
                  <a href='events.php?id=".$row["id"]."'>Read More <i class='icon-arrow-right3'></i></a>
                </div>
              </div>";
                }

              }
            } else {
              echo "No up coming Events";
            }
    
          }



          function viewAnouncement($table, $connection, $limit){
            $sql = "SELECT * FROM $table LIMIT $limit";
            $query = mysqli_query($connection, $sql);
        
            $total =  mysqli_num_rows($query);
        
            if ($total > 0){
                while($row = mysqli_fetch_assoc($query)){
        
                    echo " 
                    <div class='col-md-3 animate-box'>
                    <div class='news'>
                      <a href='#' class='img-holder'><img class='img-responsive' src='img/".$row["images"]."'
                          alt='".$row["a_description"]."'></a>
                      <div class='desc'>
                        <span class='date'>".$row["a_date"]."</span>
                        <h3><a href='#'>".$row["a_title"]."</a></h3>
                        <p>".$row["a_description"]."</p>
                        <a href='#'>Read More <i class='icon-arrow-right3'></i></a>
                      </div>
                    </div>
                  </div>
                    ";
    
                  }
                } else {
                  echo "NO ANOUNCEMENT TO SHOW!";
                }
        
              }
?>