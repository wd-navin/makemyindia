$(document).ready(function () {

   
     $('.SubmitForm').submit(function () {
        
        var league = $('.SubmitForm')[0];
        var league_data = new FormData(league);
      $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
                enctype     : 'multipart/form-data',
                url         : webUrl + '/add-users',                
                data        : league_data,               
                type        : 'post',
                contentType : false,
                processData : false,
                dataType    : 'json',                      
                                          
                success: function (data) {
                    if(data.msg == 'Post done successfully')
                {
                     window.location.href = webUrl + '/show-users';
                    $('.SubmitForm input').val('');
                    
                }
            }
        });
    });
    

    $(".deleteData").click(function () {
        var id = $(this).attr("id");
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "delete",
            type: 'DELETE',
            data: {ids: id},
            dataType: 'json',
            context: this,
            success: function (data) {
                if (data.message == 'success') {
                    $(this).parents('tr').remove();
                } else {
                    alert(data.message)
                }

            }
        });

    });

      $(".D_Del").click(function(){
        var id = $(this).attr('d-id');
         $.ajax({
             headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "donation_delete",
            type: 'DELETE',
            data: {ids: id},
            dataType: 'json',
            context: this,
            success: function (data){
                if (data.message == 'success'){
                    $(this).parents('tr').remove();
                }else{
                    alert(data.message)
                }
            }
        });
        
    });
    
     $('.UploadImage').submit(function () {
        
        var league = $('.UploadImage')[0];
        var league_data = new FormData(league);
      $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
                enctype     : 'multipart/form-data',
                url         : webUrl + '/ajax_images',                
                data        : league_data,               
                contentType : false,
                processData : false,
                dataType    : 'json',                      
                type        : 'post',                          
                success: function (data) {
                    if(data.msg == 'Post done successfully')
                {
                    alert('data saved')
                     $('.UploadImage input').val('');
                }
            }
        });
    });
    
    ////////////////////////////////////

});

