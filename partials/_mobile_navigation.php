<?php $nav = wp_get_menu_array('mobile_navigation'); ?>

<?php if($nav): ?>
<ul id="menu-mobile" class="flex flex-col space-y-6 text-lg pb-12">
    <?php foreach($nav as $link): ?>
    <li class="transition-all ml-0 text-xl relative <?php if(count($link['children'])): ?> menu-item-has-children<?php endif; ?>">
        <a href="<?= $link['url']; ?>"><?= $link['title']; ?></a>

        <?php if(count($link['children'])): ?>
                <ul class="mob-sub">
                    <?php foreach($link['children'] as $sublink): ?>
                    <li class="text-lg"><a href="<?= $sublink['url']; ?>"><?= $sublink['title']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>

    </li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>