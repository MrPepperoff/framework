<div id="content" class="col-sm-12 item-article">
    <div class="row box-1-about">
        <div class="col-md-9 welcome-about-us">
            <div class="title-about-us">
                <h1 style="margin:0;background: #fff;display: inline-block;font-size: 22px;padding: 0 25px 6px 0;font-weight: 300;color: #333;">
                    <?php echo (is_null($data["name"]))? $data['title'] : $data['name']; ?>
                </h1>
            </div>
            
            <?php echo $data['content']; ?>
