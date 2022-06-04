$(document).ready(function(){

    $(document).on('click', '.select_ans', function(){  
        var flag = 'selectedans';
        var que_id = $(this).attr("qid");
        var ans_id = $(this).attr("ansid");
        $.ajax({  
            url:"reg_script.php",  
            method:"POST",  
            data:{flag:flag,que_id: que_id, ans_id: ans_id},  
            success:function(data){
                console.log(data);
            }
        });
    });

    $(document).on('click','#submit_data',function(){
         $('#show_result1').css('display', 'block');
        $('#question_paper').css('display', 'none');
        $.ajax({  
            url:"reg_script.php",  
            method:"POST",  
            data:{flag:"submit_data"},  
            success:function(data){
                console.log(data);
                $('#show_result1').html(data); 
            }
        });
    });
}); 