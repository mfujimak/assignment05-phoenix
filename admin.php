<?php
// Initialize the session
// session_start();
 
// If session variable is not set it will redirect to login page
// if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
//   header("location: login.php");
//   exit;
// }
?>

<html>  
    <head>  
        <title>Administration Panel</title>  
        <?php 
        include 'includes/links.php'; 
        ?> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    </head>  
    <body class="admin2">  
        <header>
            <?php 
                include 'includes/nav.php'; 
           ?>  
         </header>
         <main>
        <div class="container">  
         
			<div class="table-responsive">  
				<h3 align="center">Survey Data Management</h3><br />
				<span id="result"></span>
				<div id="live_data"></div>                 
			</div>  
		</div>
    </main>
    </body>  
</html>  
<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
                $('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var vote = $('#vote').text();  
        if(vote == '')  
        {  
            alert("Enter your vote");  
            return false;  
        }  
        
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{vote:vote},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    
    function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
                $('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.vote', function(){  
        var id = $(this).data("id1");  
        var vote = $(this).text();  
        edit_data(id, vote, "vote");  
    });  
    
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id2");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>