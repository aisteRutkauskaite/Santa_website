
<h1 class="tittle"><?php print $data['tittle'] ?></h1>

<section class="wish_container">

    <?php foreach ($data['wishes'] as $id => $wish): ?>
        <?php if (App\App::$session->getUser()): ?>

            <?php if (App\App::$session->getUser()['email'] === 'santa@claus.com') : ?>

                <div class="wish_box">
                    <?php if ($wish['source'] != ''): ?>
                        <img class="product-img" src="<?php print $wish['source']; ?>" alt="">
                    <?php endif; ?>
                    <p><?php print $wish['wish']; ?></p>
                    <p><?php print $wish['price']; ?> Eur</p>

                    <?php if ($wish['fulfilled'] === 'false') : ?>
                        <form method="POST">
                            <input type="hidden" name="id" value="<?php print $id; ?>">
                            <button type="submit">Fulfill</button>
                        </form>
                    <?php endif; ?>
                </div>

            <?php elseif ($wish['option'] == 'public'): ?>

                <div class="wish_box">
                    <?php if ($wish['source'] != ''): ?>
                        <img class="product-img" src="<?php print $wish['source']; ?>" alt="">
                    <?php endif; ?>
                    <p><?php print $wish['wish']; ?></p>
                    <p><?php print $wish['price']; ?> Eur</p>
                    <p>Fulfilled: <?php print $wish['fulfilled']; ?></p>
                </div>

            <?php endif; ?>

        <?php elseif ($wish['option'] == 'public'): ?>

            <div class="wish_box">
                <?php if ($wish['source'] != ''): ?>
                    <img class="product-img" src="<?php print $wish['source']; ?>" alt="">
                <?php endif; ?>
                <p><?php print $wish['wish']; ?></p>
                <p><?php print $wish['price']; ?> Eur</p>
                <p>Fulfilled: <?php print $wish['fulfilled']; ?></p>
            </div>

        <?php endif; ?>

    <?php endforeach; ?>

</section>