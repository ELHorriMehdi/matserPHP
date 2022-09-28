<?php

$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
    ],
];

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => '',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];
function getUserbyEmail( string $Email, array $users):string
{
    for($i=0;$i<count($users);$i++){
        $author=$users[$i];

        if($Email ===$users['email']){
            return $author['full_name'].'('.$author['age'].'ans)';
        }
    }
}
function isValide(array $recipe):bool
{
    if(array_key_exists('is_enabled',$recipe))
    {
        $isEnabled=$recipe['is_enabled']; //true
    }
    else
    {
        $isEnabled=false; //false
    }
    return $isEnabled;
}
function getDataValide(array $recipes):array
{
    foreach ($recipes as $recipe)
    {
        $valid_recipes = [];
        if(isValide($recipe))
        {
            $valid_recipes[]=$recipe;
        }
    }
    return $valid_recipes;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Recettes de cuisine</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>
<body>
<div class="container">
    <h1> Liste des recettes de cuisine</h1>

    <?php foreach(getDataValide($recipes) as $recipe) : ?>
        <article>
            <h3><?php echo $recipe['title'] ?></h3>
            <div><?php echo $recipe['recipe'] ?></div>
            <i> <?php echo displayAuthor($recipe['author'],$users);?></i>
           
        </article>
    <?php endforeach ?>
</div>
</body>
</html>