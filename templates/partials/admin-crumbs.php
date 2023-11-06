<?php

/**
 * Framework Title: PhpStrike Framework
 * Creator: Celio natti
 * version: 1.0.0
 * Year: 2023
 * 
 * 
 * This view page start name{style,script,content} 
 * can be edited, base on what they are called in the layout view
 */

?>


<h1 class="mt-4 h2"><?= $title ?></h1>
<nav aria-label="breadcrumb" class="d-flex justify-content-center align-items-center border-bottom border-secondary mb-2">
    <ol class="breadcrumb">
        <?php $count = count($navigations); ?>
        <?php foreach ($navigations as $index => $navigation) : ?>
            <?php if ($index === $count - 1) : ?>
                <li class="breadcrumb-item <?= ($index === $count - 1) ? 'active' : '' ?>"><?= $navigation['label'] ?></a></li>
            <?php else : ?>
                <li class="breadcrumb-item"><a href="<?= URL_ROOT . $navigation['url'] ?>"><?= $navigation['label'] ?></a></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ol>
</nav>