<?php
/**
* Testimonial Block Template.
*
* @param   array $block The block settings and attributes.
* @param   string $content The block inner HTML (empty).
* @param   bool $is_preview True during AJAX preview.
* @param   (int|string) $post_id The post ID this block is saved to.
*/
?>
<section class="testimonial-block">
  <h1>{{ get_field("name") }}</h1>
  <h2>{{ get_field("description") }}</h2>
</section>
