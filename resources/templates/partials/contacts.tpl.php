<div id="contacts" class="contacts"> 
  <div class='grid-container'>
  <div class="grid-x grid-margin-x align-top">
    <div class="cell small-12 medium-6 map">
    <iframe src="https://snazzymaps.com/embed/400829" width="100%" height="600px" style="border:none;"></iframe> 

      <!--
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.9131772037636!2d9.734561315561297!3d45.73283597910512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4781575ca3de80fb%3A0x75635327cd8b0c3!2sCartiere+Paolo+Pigna+S.p.A.!5e0!3m2!1sit!2sit!4v1554376710111!5m2!1sit!2sit" width="570" height="570" frameborder="0" style="border:0" allowfullscreen></iframe>
    
      <img class="mappa"  src="<?= get_stylesheet_directory_uri() ?>/public/images/map.png">
      <img class="pin" width='280' src="<?= get_stylesheet_directory_uri() ?>/public/images/pin.svg">
    -->
      </div>
    <div class="cell small-12 medium-6 text-left form">

      <img class="logo" width='280' src="<?= get_stylesheet_directory_uri() ?>/public/images/logo_pigna.svg">

      <?php
      $langs = icl_get_languages('skip_missing=0&orderby=id&order=asc');
      $active = 'it';
     foreach($langs as $lang) {
        if($lang['active']) $active = $lang['code'];
     }
       if ($active === 'it') {
        $shortcode = __('[wpforms id="11" title="false" description="false"]', $textdomain);
       }else{
        $shortcode = __('[wpforms id="23" title="false" description="false"]', $textdomain);
       }
      ?>
      <?= do_shortcode($shortcode); ?>
    </div>
  </div>
  </div>
</div>