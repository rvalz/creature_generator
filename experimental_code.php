<?php 
    $errors = [];
    $missing = [];
    if (isset($_POST['send'])) {
        $expected = ['name', 'creature_type'];
        $required = ['name', 'creature_type'];
    }
?>

    <?php if ($missing && in_array('creature_type', $missing)) : ?>
        <span class="warning">Please select a creature type</span>
        <?php endif; ?>

            <?php if ($missing && in_array('name', $missing)) : ?>
                <span class="warning">Please enter your name</span>
                <?php endif; ?>

                    foreach ($_POST as $key => $value) { $value = is_array($value) ? $value : trim($value); if (empty($value) && in_array($key, $required)) { $missing[] = $key; $$key = ''; } elseif (in_array($key, $expected)) { $$key = $value; } }