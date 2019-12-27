<div class="well post" id="<?echo $post['id']?>" style="margin-top: 20px; width: 50%;">
    <div class="row">
        <div class="container-fluid">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-6">
                    <img src="static/images/logo.svg" style="width: 50px; height:50px;" class="img-circle">
                </div>
                <div class="col-md-6">            
                    <h4>
                        <?echo $post['username'];?>
                    </h4>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <p>
                <?echo $post['created']; ?>
            </p>
        </div>
        <div class="col-md-2">
            <button type="button" class="btn btn-danger delete" >Удалить</button>
            
        </div>
        </div>
    </div>
    <div class="row">
        <h3>
            <? echo $post['title'];?>
        </h3>
    </div>
    <div class="row">
        <p>
            <?echo $post['text'];?>
        </p>
    </div>
    <div class="row">
        <div class="container-fluid">
            <div class="col-md-8">
            </div>
            <div class="col-md-4">
                <p>
                    Всего tuks: <?echo $post['likes'];?>
                </p>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Удаление поста</h4>
      </div>
      <div class="modal-body">
        <p>Вы действительно хотите удалить этот пост?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="btn-delete-confirm" data-dismiss="modal">Да</button> 
        <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
      </div>
    </div>

  </div>
</div>