<!-- This contains the display in which the subjects appear -->

<section class="subject-display">
    <?php
        $subjects = $db->query("SELECT * FROM subjects;", [])->fetchAll();
    ?>

    <?php foreach ($subjects as $sub) : ?>
        <section class="subject-card">
            <figure class="subject-icon">
                <img src=<?= "public\\media\\{$sub['icon']}" ?> alt=<?= $sub['icon-alt'] ?>>
            </figure>
            
            <h3 class="subject-title">
                <?= $sub['name'] ?> 
            </h3>
            <p class="subject-description">
                <?= $sub['description'] ?>
            </p>
        </section>
    <?php endforeach ?>
</section>