$(document).ready(function(){
    $("#btn-create-post").click(function() {
        window.location.href = "create_post.php";
    });

    // $("#btn-delete-confirm").on( 'click', (function() {

    //     window.location.href = "delete_post.php?id=" + ;
    // }));

    $(".delete").on( 'click', (function() {
            let post_id = $(this).parents('.post').get(0).id;

            $('#myModal').modal();

            function post_del(event)
            {
                window.location.href = `delete_post.php?id=${event.data.post_id}`;
            }

            $('#btn-delete-confirm').on('click',{"post_id": post_id}, post_del)
        
    }));

    
});