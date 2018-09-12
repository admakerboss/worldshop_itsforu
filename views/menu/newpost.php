<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <h1 class="mt-5">Добавить новый пост</h1>   
        <?php if (isset($alert)) echo $alert; ?>
        <form method="post">
  			<div class="form-group">
    			<label>Заголовок</label>
    			<input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" maxlength="64" required>
  			</div>
  			<div class="form-group">
    			<label>Контент</label>
    			<textarea class="form-control" rows="5" id="content" name="content" required></textarea>
  			</div>
  			<button type="submit" class="btn btn-primary">Добавить пост</button>
		</form>

        </div>
    </div>
</div>