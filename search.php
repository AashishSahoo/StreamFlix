<?php
require_once("includes/header.php");

?>

<div class="textboxContainer">
    <input type="text" class="searchInput" placeholder="Search for Something">
</div>
<div class="results">

</div>

<script>

  var username='<?php echo $userLoggedIn; ?>';
  var timer;

  // when button is pressed this function will execute
  $(".searchInput").keyup(function(){
    clearTimeout(timer);

    timer=setTimeout(function(){
       var val=$(".searchInput").val();

        if(val!=""){
          $.post("ajax/getSearchResults.php",{term:val,username:username},function(data){
            $(".results").html(data);
          })
        }
        else{
          $(".results").html("");
        }

    },500);
  })

</script>  