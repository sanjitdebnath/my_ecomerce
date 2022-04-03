$(document).ready(function(){
    // $("#load_data").click(function () {
        
    //   });
    $(document).on("click",".edit",function() {
        let shoes_id = $(this).data("eid");
        $(".edit_sec").show();

        
        console.log(shoes_id);
        $.ajax({
            url:"edit.php",
            type:"POST",
            data : {id : shoes_id},
            success: function(data)
            {
                $(".edit_box form").html(data);
            } 
        });     
    });
     $(document).on("click", ".add_btn",function() {
        $(".add_sec").show();
    });

    $(".add_close").click(function()
    {
        $(".add_sec").hide();
    });
    $(".edit_close").click(function()
    {
        $(".edit_sec").hide();
    });




    
});

