
$(document).ready(function(){
    //start of show cars car form function
   setInterval(function(){
        update_questions();
    } , 1000);
    
    function update_questions(){
        $.ajax({
           url:'show_questions.php',
           type:'POST',
           success:function(show_questions){
               if(!show_questions.error){
                   $("#show-questions").html(show_questions);
               }
           }    
        });
    }
    
    //start of add car form function 
    
    $('#add_question_form').submit(function(e){
                              
        e.preventDefault();
        
        var postData = $(this).serialize();
        
        var url = $(this).attr('action');
         
        $.post(url , postData , function(show_questions){
           
            $("#show-cars").html(show_questions);
        });
                              
    });
    //end of add car form function 
}