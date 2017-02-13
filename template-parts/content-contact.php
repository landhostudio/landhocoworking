<article class="contact">

  <?php
    get_template_part('template-parts/content', 'hero');
    get_template_part('template-parts/content', 'heading');
  ?>

  <div class="contact__container">
  
    <div class="columns">
      <div class="column-4">

        <?php
          $form_object = get_field('contact_form');
          if ($form_object):
        ?>
          <div class="contact__form">
            <?php echo do_shortcode('[gravityform id="' . $form_object['id'] . '" title="true" description="true" ajax="true"]'); ?>
          </div>
        <?php endif; ?>

      </div>

      <div class="column-8">
        <?php
          $location = get_field('contact_map');
          if (!empty($location)):
        ?>
          <div class="contact__map">
            <div class="contact__map__object">
              <div class="contact__map__marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
            </div>
          </div>
        <?php endif; ?>
        
        <?php
          $content = get_field('contact_body');
          if ($content):
        ?>
          <div class="contact__content">
            <?php the_field('contact_body'); ?>
          </div>
        <?php endif; ?>
        
        <?php if (have_rows('contact_information')): ?>
          <div class="columns">
            <?php while (have_rows('contact_information')): the_row(); ?>
              <div class="column-6">

                <?php
                  $informationtitle = get_sub_field('contact_information_title');
                  if ($informationtitle):
                ?>
                  <h4 class="h3"><?php the_sub_field('contact_information_title'); ?></h4>
                <?php endif; ?>

                <?php the_sub_field('contact_information_body'); ?>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

      </div>
    </div>
</article>
