<?php
$news = [
    [
        'id' => 1,
        'title' => 'BBC news',
        'description' => 'go flex 1',
        'image' => 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg',
        'date' => '2020-03-01',
        'active' => true
    ],
    [
        'id' => 2,
        'title' => 'CNN',
        'description' => 'go flex 2',
        'image' => 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg',
        'date' => '2020-03-01',
        'active' => true
    ],
    [
        'id' => 3,
        'title' => 'news 1',
        'description' => 'go flex 3',
        'image' => 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg',
        'date' => '2020-03-01',
        'active' => false
    ]
];
foreach ($news as $item){
    echo $item['title'], PHP_EOL;
}

/**
 * @param  array $news список новостей.
 * @return array список отфильтрованных новостей
 */
function findActive($news){
    $result = [];
    foreach($news as $item){
        if($item['active']){
            $result[] = $item;
        }
    }
    return $result;
}



/**
 * Поиск новости по id
 * @param array $news
 * @param $id
 * @return array|bool
 */
function findById($news, $id){
    $result = [];
    foreach($news as $item){
        if($item['id'] == $id){
            return $item;
        }
    }
}



/**
 * Поиск новостей по сегодняшней дате
 * @param $news
 * @param array
 */

function findNow($news){
    $result = [];
    $now = date('Y-m-d');
    foreach ($news as $item){
        if($item['date'] == $now){
            $result[] = $item;
        }
    }
    return $result;
}
$news = findActive($news);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <main class="d-flex">
            <?php foreach($news as $item):?>
                <article>
                    <h1><?= $item['title'] ?></h1>
                    <img src="<?= $item['image']?>" style = "width: 150px">
                    <p><?= $item['description']?></p>
                    <p><?= $item['date']?></p>
                </article>
            <?php endforeach; ?>
        </main>
    </body>
</html>
