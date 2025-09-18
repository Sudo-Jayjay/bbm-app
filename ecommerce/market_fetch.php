<style>
    .like{
        padding: 4px;
        margin-right: 5px;
        float: right;
        border-radius: 50%;
        vertical-align: middle;   
        color:red;
    }

    .dislike{
        padding: 4px;
        margin-right: 5px;
        float: right;
        border-radius: 50%;
        vertical-align: middle;   
        color:gray;
    }

</style>


<?php
    include("../config.php");
    error_reporting(0);  
    session_start();


    $query = "SELECT * FROM market ORDER BY market_id";
    

    $user_id = $_SESSION['usr_unique_ID']; 
    $output = '';
    if(isset($_POST["query"]))
    {
        $search = mysqli_real_escape_string($conn, $_POST["query"]);
        $query = "
        SELECT * FROM market 
        WHERE m_region LIKE '%".$search."%'
        OR m_province LIKE '%".$search."%' 
        OR m_city LIKE '%".$search."%' 
        OR m_brgy LIKE '%".$search."%' 
        OR m_title LIKE '%".$search."%'
        ";

       
    }
    else
    {
       
    }

    $result = mysqli_query($conn, $query);  
    $query1 = "SELECT * FROM favorite WHERE user_unique_id = '$user_id'";

    if(mysqli_num_rows($result) > 0)
    {  
        $output .= '
            <div class="myflex">';
        while($rows = mysqli_fetch_array($result))
        { 

            $result1 = mysqli_query($conn, $query1); 
            while($rows1 = mysqli_fetch_array($result1)) 
            {  
                 if($rows1['market_id'] == $rows['market_id']){ 
                     $output .= ' 
                     <div class="myitem"><div class="div_circle_heart"><i class="fas fa-heart faz-heart heart_icon" style="color:red;" data-id="'.$rows['market_id'].'"></i></div><a href="buyer_view_market.php?id='.$rows['market_id'].'"> <img src="images/'.$rows['m_photo'].'" alt=""><p class="protitle">'.$rows['m_city'].'</p><br><p class="price">'.$rows['m_title'].'</p></a></div>
                    ';

                    $title = $rows['m_title'];
                   
                 }

            }

            if ($rows['m_title'] != $title){
                $output .= ' 
                <div class="myitem"><div class="div_circle_heart"><i class="fas fa-heart faz-heart heart_icon" data-id="'.$rows['market_id'].'"></i></div><a href="buyer_view_market.php?id='.$rows['market_id'].'"> <img src="images/'.$rows['m_photo'].'" alt=""><p class="protitle">'.$rows['m_city'].'</p><br><p class="price">'.$rows['m_title'].'</p></a></div>
               '; 
            }

  
        }

        $output .='</div>';
        echo $output;
    }


    else
    {
        echo 'Data Not Found';
    }

?>


<script>

    $(document).ready(function(){
        $('.heart_icon').on('click', function(){
            var postid = $(this).data('id');
            $post = $(this);                    
          
          
            //  var liked = $(this).hasClass("like");    
            if($(this).css("color") == "red"){
                alert("you have already added this market to favorites");
            }else{
                $(this).addClass("like");
                // alert("like");
                // $(this).css("color", "red");
                var change = 'true';
                $.ajax({
                    url:"fave_market.php",
                    method: "POST",
                    data:{
                        postid: postid,
                        change: change
                    },
                    success:function(data){
                        // alert('like');
                    }
                });            
            }
                
            
        });
    });    

</script>

<script>
  

</script>

