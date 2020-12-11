<h1 class="tittle"><?php print $data['title'] ?></h1>
<section class="introduction_container">
    <h2 class="introduction_name">Green Santa for green gifts</h2>
    <img class="about-photo" src="<?php print $data['img']; ?>" alt="photo">
    <p class="introduction_text">Green Santa brings green gifts for green people. People call me Eco Santa. I bring Eco-Friendly Gifts for a
        Totally Green Holiday Season </p>
    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
            src="https://maps.google.com/maps?width=720&amp;height=600&amp;hl=en&amp;q=Rowaniemi+(Santa's%20house)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
    <h3>Contacts</h3>
    <div class="contact-container">
        <p>Address: <?php print $data['address']; ?></p>
        <p>Email: <?php print $data['email']; ?></p>
</section>
