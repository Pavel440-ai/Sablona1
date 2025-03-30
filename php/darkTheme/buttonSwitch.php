<?php global$theme ?>
<div class="theme-switcher">
    <?php if($theme === 'light') : ?>
        <a href="?theme=dark" class="theme-btn dark-theme-btn">
            🌙 Tmavý
        </a>
    <?php else : ?>
        <a href="?theme=light" class="theme-btn light-theme-btn">
            ☀️ Svetlý
        </a>
    <?php endif; ?>
</div>