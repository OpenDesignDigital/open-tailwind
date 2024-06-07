          <div class="container mx-auto pt-6 border-t-2 border-white">
            <div class="flex flex-col md:flex-row md:justify-between">
            <?php $legalNav = wp_get_menu_array('legal'); ?>
            <?php if($legalNav): ?>
            <ul class="flex flex-col md:flex-row gap-6">
                <?php foreach($legalNav as $link): ?>
                <li class="transition-all text-white text-base hover:text-orange-600">
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
            <p class="text-white text-base">Website by <a href="https://www.weareopen.ie" target="_blank">Open</a></p>
            </div>
          </div>