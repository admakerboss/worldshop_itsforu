<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <br/>
            <?php if (isset($alert)) echo $alert; ?>
            <div class="card">
                <div class="card-body">
                    <center><h4 class='card-title'><?=$post[0]['title'];?></h4> </center>
                    <p class="card-text"><?=$post[0]['content'];?></p>
                </div>
                <div class="card-footer text-muted">
                    Last update: <?=$post[0]['updated_at'];?>
                </div>
            </div>
            <br/>
            <hr>
            <h3>Добавить комментарий </h3><div id="result_ajax"><div>

            <div class="col-lg-6">
            <form id="form" method="post" action="">
                <input type="hidden" id="id" name="id" value="<?=$_GET['id']?>">
                <div class="form-group">
                    <label>Имя *</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" maxlength="64" required>
                </div>
                <div class="form-group">
                    <label>Email *</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter EMail" maxlength="64" required>
                </div>
                <div class="form-group">
                    <label>Комментарий *</label>
                    <textarea class="form-control" rows="3" id="comment" name="comment" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" id='sendbtn'>Добавтить комментарий</button>
            </form>
            </div>

            <h3>Комментарии (<?=$comments_am;?>):</h3>
            <div id="comments"><div>
            <br/><br/>
        </div>
    </div>
</div>