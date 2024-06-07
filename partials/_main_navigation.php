
<?php $nav = wp_get_menu_array('main_navigation'); ?>

<?php if($nav): ?>
<ul data-nav class="flex space-x-10 text-lg transition-colors ease-in-out duration-300">
    <?php foreach($nav as $link): ?>
    <li <?php if(count($link['children'])): ?>data-with-dropdown<?php endif; ?> class="relative group/navlink">
        <a href="<?= $link['url']; ?>" class="nav-link is-parent">
            <?= $link['title']; ?>
            <?php if(count($link['children'])): ?>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/dist/img/Chevron_Down.svg" alt="" class="chev " />
            <?php endif; ?>
        </a>
        <?php if(count($link['children'])): ?>
        <ul class="dropdown-menu" data-dropdown-menu>
            <?php foreach($link['children'] as $sublink): ?>
            <li><a href="<?= $sublink['url']; ?>"><?= $sublink['title']; ?></a></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>