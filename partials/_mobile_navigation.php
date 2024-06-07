<?php $nav = wp_get_menu_array('mobile_navigation'); ?>

<?php if($nav): ?>
<ul class="flex flex-col space-y-2 text-lg">
    <?php foreach($nav as $link): ?>
    <li class="transition-all ml-0  hover:text-orange-600">
        <a href="<?= $link['url']; ?>"><?= $link['title']; ?></a>
        <?php if(count($link['children'])): ?>
        <?php foreach($link['children'] as $sublink): ?>
    <li><a href="<?= $sublink['url']; ?>"><?= $sublink['title']; ?></a></li>
    <?php endforeach; ?>
    <?php endif; ?>
    </li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>