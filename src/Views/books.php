<h2>
    Страница с книгами
</h2>
<?php foreach($allbooks as $index):    ?>
<div>
    <h1><?php echo $index['title']?></h1>
    <p><?php echo $index['description']?></p>
    <p><?php echo $index['page_count']?></p>
    <a href="/books/show/<?php echo $index['id']; ?>">Подробная информация </a>
</div>
<?php endforeach;?>