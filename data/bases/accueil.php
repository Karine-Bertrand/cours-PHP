<?php


$articles = [
    '1' => 
        [
        'title' => 'Titre du premier article',
        'content'   =>  'Contenu du premier article'
        ],
    '2' =>  
        [
        'title' => 'Titre du second article',
        'content'   => 'Contenu du second article'
        ],
    '3' =>  
        [
        'title' => 'Titre du troisième article',
        'content'   => 'Contenu du troisième article'
        ]
];



?>


<div>

    <h1> <a href="#">Article</a></h1>
    <small>auteur</small>
    <?php
        foreach ($articles as $article => $element) {?>
        <p><a href="article.php?id=<?= $article ?>"><?= $element['title'] ?></a></p>
    <?php } ?>

</div>

<?php


?>