<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="mt-5">Список всех постов</h1> 
            <?php 
            if (isset($alert)) echo $alert;
            foreach ($posts as $key => $value) {
                echo "<div class='card'>
                  <div class='card-body'>
                  <h5 class='card-title'>".$value['title']." <p class='card-text'><small class='text-muted'>".$value['created_at']."</small></p></h5>
                    ".substr($value['content'], 0, 300)."... <a href='/post?id=".$value['id']."'>Показать полностью</a><div class='float-sm-right'><a href='/edit?id=".$value['id']."'>Редактировать </a> <a href='/remove?id=".$value['id']."'>Удалить </a></div>
                  </div>
                </div>
                <br/>";
            }
            ?>
        </div>
    </div>
</div>