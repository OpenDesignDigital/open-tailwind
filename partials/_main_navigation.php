<?php $nav = wp_get_menu_array('main_navigation'); ?>

<?php if($nav): ?>
<ul data-nav class="flex lg:space-x-3 xl:space-x-5 2xl:space-x-10 text-lg transition-colors ease-in-out duration-300">
    <?php foreach($nav as $link): ?>
    <li <?php if(count($link['children'])): ?>data-with-dropdown datata-expanded="false" <?php endif; ?> class="relative group/navlink <?php if(count($link['children'])): ?>has-sub-menu<?php endif; ?>">
        <a href="<?= $link['url']; ?>" class="nav-link is-parent">
            <?= $link['title']; ?>
        </a>
        <?php if(count($link['children'])): ?>
            <button class="inline has-sub-items" aria-label="Submenu of <?= $link['title'];?>" aria-expanded="false">
            
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/dist/img/Chevron_Down.svg" class="chev" alt="Sub menu closed"  aria-label="Sub menu closed" />
            
            </button>
            <?php endif; ?>
        <?php if(count($link['children'])): ?>
        <ul class="dropdown-menu" data-dropdown-menu aria-hidden="true">
            <?php foreach($link['children'] as $sublink): ?>
            <li><a href="<?= $sublink['url']; ?>"><?= $sublink['title']; ?></a></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>