<div class="PageTitle">
    <?php if(isset($args['not_h1'])): ?>
    <p class="PageTitle__text"><?php echo $args['en']; ?></p>
    <?php else: ?>
    <h1 class="PageTitle__text"><?php echo $args['en']; ?></h1>
    <?php endif; ?>
    <p class="PageTitle__ja"><?php echo $args['ja']; ?></p>
</div>