<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <h1 class="mt-5">Редактировать пост</h1>   
        <?php if (isset($alert)) echo $alert; ?>
        <form method="post">
  			<div class="form-group">
    			<label>Заголовок</label>
    			<input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" maxlength="64" value="<?=$post[0]['title']?>" required>
  			</div>
  			<div class="form-group">
    			<label>Контент</label>
    			<textarea class="form-control" rows="5" id="content" name="content" required><?=$post[0]['content']?></textarea>
  			</div>
  			<button type="submit" class="btn btn-primary">Редактировать пост</button>
		</form>

        </div>
    </div>
</div>