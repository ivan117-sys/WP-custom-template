<?php
get_header();
?>

<main>
  <h1>
    Podcast Broadcast
  </h1>
  <p>
    <?php
    echo do_shortcode('[ai_playlist id="10"]');
    ?>

  </p>
  <section>
    <h2>Latest Episodes</h2>
    <?php echo do_shortcode('[ss_podcast]'); // Seriously Simple 
    ?>
  </section>
</main>


<?php
get_footer();
