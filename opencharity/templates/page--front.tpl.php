<?php
/**
* Open Charity Front Page Template.
*/
?>
  <!-- START HEADER -->
  <header>
    <div class="container">
    <!-- LOGO -->
    <?php if ($logo): ?>
      <h1 class="logo">
        <a href="<?php print $front_page; ?>" title="<?php print t('Open Charity'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Open Charity logo'); ?>"/></a>
      </h1>
      <?php endif; ?>

     <!--  Main Menu -->
      <?php if ($page['main_menu']): ?>
      <nav>
      <a href="#" class="toggle-nav"><i class="fa fa-bars"></i></a>  
      <?php print render($page['main_menu']);?>       
      </nav>
      <?php endif; ?>

    </div><!-- CONTAINER -->
  </header>
  <!-- End HEADER -->

  <!-- START BANNER -->
  <?php if ($page['banner']): ?>
  <section class="banner">
    <div class="container">
     <?php print render($page['banner']); ?>
    </div><!-- CONTAINER -->
  </section>
   <?php endif; ?>
  <!-- End Banner -->

  <!-- START EVENT SECTION -->
  <?php if ($page['upcoming_event']): ?>
  <section class="event-section">  
    <div class="container">
    <?php print render($page['upcoming_event']); ?>
    </div><!-- CONTAINER -->
  </section>
  <?php endif; ?>
  <!-- End EVENT SECTION -->

  <!-- START GET INVOLVED -->
   <?php if ($page['our_groups']): ?>
  <section class="get-involved section">  
    <div class="container">
      <h2>Get Involved</h2>
      <div class="row">
      <?php print render($page['our_groups']); ?>
      </div>
    </div><!-- CONTAINER -->
  </section>
  <?php endif; ?>
  <!-- End GET INVOLVED -->

  <!-- START OUR MISSON -->
  <section class="section even">  
    <div class="container">
    <?php if ($page['our_mission']): ?>
        <div class="our-mission">
          <?php print render($page['our_mission_d']); ?>
          <div class="row">
            <?php print render($page['our_mission']); ?>
          </div>
        </div>
        <?php endif; ?>
        <!-- our-mission -->
        <?php
      $query_member = new EntityFieldQuery();
      $result_member = $query_member->entityCondition('entity_type', 'node')
        ->entityCondition('bundle', 'members')
        ->execute();
      $nodes_member = node_load_multiple(array_keys($result_member['node']));

      
      ?>

      <?php if (!empty($nodes_member)) : ?>   
        <div class="our-members">
            <h2>Our Members</h2>
            <div id="members" class="owl-carousel owl-theme">
            <?php foreach($nodes_member as $member): ?>
              <div class="item text-center"><img src="<?php echo file_create_url($member->field_member_logo['und'][0]['uri']); ?>" /></div>
            <?php endforeach; ?>
              
            </div>
        </div>
        <?php endif;?><!-- our-members -->
        
    </div><!-- CONTAINER -->
  </section>
  <!-- End Our mission -->

  <!-- START  BLOG-->
  <?php

  $query = new EntityFieldQuery();
  $result = $query->entityCondition('entity_type', 'node')
    ->entityCondition('bundle', 'blog')
    ->execute();
  $nodes = node_load_multiple(array_keys($result['node']));
  
  ?>

  <?php if (!empty($nodes)) : ?>     
  <section class="section">  
    <div class="container">
        <h2>Blog</h2>
        <div id="blogs" class="owl-carousel owl-theme blog" >
        <?php foreach($nodes as $blog): ?>
            <div class="item">
                <h4 class="blog__title"><a href="<?php echo $blogUrl = drupal_get_path_alias('node/' . $blog->nid);?>" class="blog__title-link"><?php echo $blog->title;?></a></h4>
                <p class="blog__text"><?php echo $blog->body['und'][0]['value']; ?></p>

                <span class="blog__date"><?php echo date('d M Y', strtotime($blog->field_blog_date['und'][0]['value'])) ?></span>
            </div>
  <?php endforeach; ?>

        
            
        </div><!-- blogs -->        
    </div><!-- CONTAINER -->
  </section>
<?php endif;?>
  <!-- End BLOG -->
  <!-- START FOOTER -->
  <footer class="footer">
    <div class="container">
    <?php  print render($page['footer']); ?>
    </div><!-- CONTAINER -->
  </footer>
  <!-- End FOOTER -->


