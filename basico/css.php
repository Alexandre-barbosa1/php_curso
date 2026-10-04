<div class="titulo">integraçao css</div>

<h1 center>
<?php
echo "ola ";
echo '<small>';
echo 'mundo!';
echo '</small>' 
?>
</h1>


<?= "<div center azul> outra forma de me expressar </div>" ?>

<br>
<div center><button dobro><?="legal"?></button></div>

<style>
    button{
        padding: 5px <?= 2 * 10 ?>px;
        background-color: blue;
        font-weight: bold;
        border-radius: 10px;

    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul]{
        color: blue;
    }

    [dobro] { 
        font-size: <?= 10 - 8 ?>rem;
    }
</style>