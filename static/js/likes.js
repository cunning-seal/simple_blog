$(document).ready( () => {
    $(".btn-like").on('click', function(){
        let ob = $(this);
        let post_id = $(this).parents('.post').get(0).id;
        let likes = parseInt($(this).text().split(" ")[0]);
        
        $.ajax({
            type: 'GET',
            url: `add_like.php?id=${post_id}`,
            success: function(data){
                console.log(data);
                if (data == "True"){
                    likes += 1;
                    ob.html(`${likes} tuks`);
                }
            }
          });
        
        
    })
})