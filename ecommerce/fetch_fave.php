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

    }
</style>

<?php
    include("../config.php");
    session_start();
    error_reporting(0);  

    $usr_unique_ID = $_SESSION['usr_unique_ID'];
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
        $query = "SELECT * FROM favorite WHERE user_unique_ID = '$usr_unique_ID'";
    }

    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    { 


        $output .= '
            <div class="myflex">';
        while($rows = mysqli_fetch_array($result))
        { 
            if($rows['is_liked'] == "true"){
                $output .= ' 
                <div class="myitem"><div class="div_circle_heart"><i class="fas fa-heart faz-heart heart_icon" style="color:red;" data-id="'.$rows['market_id'].'"></i></div><a href="buyer_view_market.php?id='.$rows['market_id'].'"> <img src="images/'.$rows['m_photo'].'" alt=""><p class="protitle">'.$rows['m_city'].'</p><br><p class="price">'.$rows['m_title'].'</p></a></div>
                ';
            }else{            
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
        echo 'No markets to display.';
    }

?>

<script>

    $(document).ready(function(){
        $('.heart_icon').on('click', function(){
            var postid = $(this).data('id');
            
            $post = $(this);                    
          
            //  var liked = $(this).hasClass("like");    

                //  $(this).addClass("like");
                // alert("like");
                // $(this).css("color", "red");
                var dlike = 'false';
                $.ajax({
                    url:"remove_fave.php",
                    method: "POST",
                    data:{
                        postid: postid,
                        dlike: dlike
                    },
                    success:function(data){
                        location.reload()
                    }
                });            
            
        });
    });    

</script>

<script>
  

</script>

