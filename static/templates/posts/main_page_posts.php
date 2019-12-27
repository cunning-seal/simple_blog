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
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <p>
                <?echo $post['created']; ?>
            </p>
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
                <button class="btn btn-primary btn-like <?if ($enabled){echo 'active';} else {echo 'disabled';}; ?>"><?echo $post['likes'];?> tuks</button>
            </div>
        </div>
    </div>
</div>