<!-- This contains the display in which the subjects appear -->
<?php
    $subjects = $db->query("SELECT * FROM subjects;", [])->fetchAll();
?>
<section class="subject-display">
    <?php foreach ($subjects as $sub) : ?>
        <a href=<?= $sub['redirect'] ?>><section class="subject-card">
            <figure class="subject-icon">
                <img src=<?= "public\\media\\{$sub['icon']}" ?> alt=<?= $sub['icon-alt'] ?>>
            </figure>
            
            <h3 class="subject-title">
                <?= $sub['name'] ?> 
            </h3>
            <p class="subject-description">
                <?= $sub['description'] ?>
            </p>
        </section></a>
    <?php endforeach ?>
</section>