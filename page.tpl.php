<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!--page.tpl.php-->
<?php } ?>

<?php print $mothership_poorthemers_helper; ?>

<div id="container">
  <?php if ($page['top_links_left']): ?>
    <div id="top-links-left" class="top-links">
      <?php print render($page['top_links_left']); ?>
    </div>
  <?php endif; ?>

  <?php if ($page['top_links_right']): ?>
    <div id="top-links-right" class="top-links">
      <?php print render($page['top_links_right']); ?>
    </div>
  <?php endif; ?>

  <!-- Head -->
  <div id="head">
    <div class="clear-float"></div>

    <!-- Site logo -->
    <a href="<?php print $front_page; ?>">
      <img src="<?php print $logo; ?>" class="site_logotype"/>
    </a>

    <!-- SU logo -->
    <a href="http://www.su.se">
      <img src="<?php print $base_path . path_to_theme(); ?>/img/logo_su.gif" class="su_logotype"/>
    </a>

    <!-- Main menu -->
    <?php if ($main_menu): ?>
      <div id="main-menu" class="navigation">

        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>

        <!-- Search -->
        <?php if ($page['search']): ?>
          <div id="main-menu-search">
            <?php print render($page['search']); ?>
          </div>
        <?php else: ?>
          <div id="main-menu-search" class="not-showing"></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>

  <div id="breadcrumbs">
    <?php print $breadcrumb; ?> » <?php print $title; ?>
  </div>

  <div id="content">
    <?php if ($page['highlights']): ?>
      <div class="highlights">
        <?php print render($page['highlights']); ?>
      </div>
    <?php endif; ?>

    <!-- Sidebar first -->
    <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first">
        <?php print render($page['sidebar_first']); ?>
      </div>
    <?php endif; ?>

    <!-- Main content -->
    <div id="main-content">
      <?php if ($page['content_middle_top']): ?>
        <div id="content-middle-top">
          <?php print render($page['content_middle_top']); ?>
        </div>
      <?php endif; ?>

      <!-- Title -->
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <!-- Tabs -->
      <?php if ($tabs): ?>
        <div class="tabs"><?php print render($tabs); ?></div>
      <?php endif; ?>

      <!-- Action links -->
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>

      <!-- Content -->
      <?php print render($page['content']); ?>
    </div>

    <!-- Sidebar second -->
    <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second">
       <?php print render($page['sidebar_second']); ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<!-- Footer -->
<div id="footer">
  <?php print render($page['footer']); ?>
  <div class="footer-right">
    <?php if ($page['footer_links']): ?>
      <?php print render($page['footer_links']); ?>
    <?php endif; ?>
  </div>
</div>