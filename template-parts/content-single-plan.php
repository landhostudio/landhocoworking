<article class="plan">

  <header class="plan__header">
    <h2 class="h1"><?php the_title(); ?></h2>

    <?php if (get_field('plan_lead')): ?>
      <p class="lead"><?php the_field('plan_lead'); ?></p>
    <?php endif; ?>
  </header>

  <div class="plan__content">
    
    <?php
      $form_object = get_field('plan_form');
      if ($form_object):
    ?>
      <div class="contact__form">
        <p class="h3"><?php the_title(); ?></p>
        <p class="h6 normalized"><?php the_field('plan_price'); ?></p>
        <?php echo do_shortcode('[gravityform id="' . $form_object['id'] . '" title="false" description="false" ajax="true"]'); ?>
      </div>
    <?php endif; ?>

    <div class="plan__body">

      <?php the_field('plan_text'); ?>
      
      <?php if (have_rows('plan_features')): ?>
        <hr>

        <h3 class="hidden"><?php esc_html_e('Caratteristiche', 'landhocoworking'); ?></h3>

        <ul>
          <?php while (have_rows('plan_features')) : the_row(); ?>
            <li>
              <h4><?php the_sub_field('plan_features_title'); ?></h4>
              <p><?php the_sub_field('plan_features_text'); ?></p>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
      
    </div>
    
  </div>

</article>
