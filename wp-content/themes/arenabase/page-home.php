<?php
/*
Template Name: Home Page
Description: No container wrapping this page, so you can have full width elements.
*/

get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

<section id="signup" class=" bg main" style="background-image:url(<?php the_post_thumbnail_url( 'full' ); ?>);" />
    <div class="container text-center">
<h1>Excellence. Purity.</h1>

    </div>
</section>


<div class="container padder">
  Kielbasa bacon boudin swine cow tri-tip shankle. Ham hock flank landjaeger porchetta, strip steak t-bone short loin beef chuck tri-tip kielbasa bresaola prosciutto hamburger bacon. Cow t-bone bresaola, swine ham bacon shankle ground round. Turkey pancetta sirloin, beef spare ribs boudin biltong pork frankfurter meatloaf jerky meatball bacon porchetta jowl.

Kielbasa bacon boudin swine cow tri-tip shankle. Ham hock flank landjaeger porchetta, strip steak t-bone short loin beef chuck tri-tip kielbasa bresaola prosciutto hamburger bacon. Cow t-bone bresaola, swine ham bacon shankle ground round. Turkey pancetta sirloin, beef spare ribs boudin biltong pork frankfurter meatloaf jerky meatball bacon porchetta jowl.


  <figure class='full-width padder_sm'>
      <img src="http://f.cl.ly/items/1v1E170h0a2c1U1c1I2o/panorama.jpg">
      <figcaption>Some text.</figcaption>
    </figure>
    Kielbasa bacon boudin swine cow tri-tip shankle. Ham hock flank landjaeger porchetta, strip steak t-bone short loin beef chuck tri-tip kielbasa bresaola prosciutto hamburger bacon. Cow t-bone bresaola, swine ham bacon shankle ground round. Turkey pancetta sirloin, beef spare ribs boudin biltong pork frankfurter meatloaf jerky meatball bacon porchetta jowl.

Kielbasa bacon boudin swine cow tri-tip shankle. Ham hock flank landjaeger porchetta, strip steak t-bone short loin beef chuck tri-tip kielbasa bresaola prosciutto hamburger bacon. Cow t-bone bresaola, swine ham bacon shankle ground round. Turkey pancetta sirloin, beef spare ribs boudin biltong pork frankfurter meatloaf jerky meatball bacon porchetta jowl.


</div>




<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
