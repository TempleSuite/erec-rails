<?php
/**
 * Image row for the carousel
 *
 * @param string 'id'      The zero-initial slide id to give this item.
 * @param string 'src'     The complete path to the image.
 * @param string 'caption' The caption to display.
 *
 * @author Katelyn Sievert <katelyn.sievert@gmail.com
 */

  $this->requireLocals(array(
    'id',
    'src',
    'caption'
  ));

?>

<div class="item <?php echo $this->get('active') == true ? 'active' : ''; ?>"
     data-slide-id="<?php echo $this->get('id'); ?>"
>
  <img src="<?php echo $this->get('src'); ?>" alt="The bridge">
  <div class="carousel-caption caption-right">
    <h4>
      The bridge
    </h4>

    <p>
      <?php echo $this->get('caption'); ?>
    </p>
  </div>
</div>
