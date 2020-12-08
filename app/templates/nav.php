
<header>
    <nav>
        <ul>
            <?php foreach ($data as $title => $link): ?>
                <li><a href="<?php print $link; ?>"><?php print $title; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>
