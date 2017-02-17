<article class="contact">

  <?php
    get_template_part('template-parts/content', 'hero');
    get_template_part('template-parts/content', 'heading');
  ?>

  <div class="contact__content">
    <div class="container">
      <div class="layout__row">
        <?php
          $form_object = get_field('contact_form');
          if ($form_object):
        ?>
          <div class="layout__xs__12 layout__sm__4 layout__md__4 layout__lg__4">

            <div class="form">
              <?php echo do_shortcode('[gravityform id="' . $form_object['id'] . '" title="true" description="true" ajax="true"]'); ?>
            </div>

          </div>
        <?php endif; ?>
        
        <div class="layout__xs__12 layout__sm__8 layout__md__8 layout__lg__8">
            
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

          <div class="contact__body">
            <?php the_field('contact_body'); ?>
          </div>
          
          <?php if (have_rows('contact_information')): ?>

            <hr>

            <div class="contact__information">
              <ul class="contact__information__items layout__row">
                <?php while (have_rows('contact_information')): the_row(); ?>
                  <li class="contact__information__item layout__xs__12 layout__sm__6 layout__md__6 layout__lg__6">
                    <h4 class="h3"><?php the_sub_field('contact_information_title'); ?></h4>
                    <?php the_sub_field('contact_information_body'); ?>
                  </li>
                <?php endwhile; ?>
              </ul>
            </div>

          <?php endif; ?>

        </div>
        
      </div>
    </div>
  </div>

</article>
