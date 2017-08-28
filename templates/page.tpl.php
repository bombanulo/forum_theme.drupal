<?php

/**
 * @file
 */
?>
<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <!-- ______________________ HEADER _______________________ -->

  <header id="header">
    <div class="container">

      <!-- ______________________ ИМЯ _______________________ -->
        <?php if ($site_name || $site_slogan): ?>
            <?php if ($site_name): ?>
                <div id="site-name"><a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home"><?php print $site_name; ?></a></div>
            <?php endif; ?>
      
            <?php if ($site_slogan): ?>
                <div id="site-slogan"><?php print $site_slogan; ?></div>
            <?php endif; ?>
        <?php endif; ?>

      <div class="left">

        <!-- ______________________ ЛОГО _______________________ -->
        <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home" id="logo">
              <img src="/sites/all/themes/forumtheme/images/forum_logo.svg" alt="<?php print $site_name; ?>"/>
        </a>
      </div>

      <div class="right">

          <!-- ______________________ СОЦСЕТИ _______________________ -->
          <div id="socialbittons">
                  <?php print render($page['social_block']);?>
          </div>

      </div>

    <!-- ______________________ Блок основного меню_______________________ -->
      <a href="#" class="menu-trigger"><i class="fa fa-bars" aria-hidden="true"></i> МЕНЮ</a>
      <nav>
         <?php print render($page['rootmenu']); ?>
      <nav>
    </div>
  </header><!-- /header -->

<!-- navigation-block -->
<div id="navigation">
  <div class="container">
    <?php if ($page['navblock']): ?>
        <div class="navblock"><?php print render($page['navblock']);?></div>
    <?php endif; ?>
  </div>
</div>
<!-- /navigation-block -->


<!-- ______________________ СЛАЙДЕР _______________________ -->
<div class="sliderglav">
  <div class="container">
  <?php if ($page['header']): ?><div id="header-region"><?php print render($page['header']);?></div><?php endif; ?>
  </div>
</div>

<!-- ______________________ MAIN _______________________ -->
  <div id="main">
    <div class="container">
      <section id="content">
        <?php if ($breadcrumb || $title|| $messages || $tabs || $action_links): ?>
          <!-- <div id="content-header"> -->

            <?php print $breadcrumb; ?>

            <?php if ($page['highlighted']): ?>
              <div id="highlighted"><?php print render($page['highlighted']) ?></div>
            <?php endif; ?>

<!--             <?php print render($title_prefix); ?>

            <?php if ($title): ?>
              <h1 class="title"><?php print $title; ?></h1>
            <?php endif; ?>

            <?php print render($title_suffix); ?> -->


            <?php print $messages; ?>
            <?php print render($page['help']); ?>

            <?php if (render($tabs)): ?>
              <div class="tabs"><?php print render($tabs); ?></div>
            <?php endif; ?>

            <?php if ($action_links): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>

          <!-- </div> /#content-header -->
        <?php endif; ?>


        <div id="content-area">
           <?php print render($title_prefix); ?>
            <?php if ($title): ?>
            <h1 class="title"><?php print $title; ?></h1>
            <?php endif; ?>
          <?php print render($title_suffix); ?>

          <?php print render($page['content']) ?>

        </div>
      </section><!-- /content -->

      <?php if ($page['sidebar_first']): ?>
        <aside id="sidebar-first">
          <?php print render($page['sidebar_first']); ?>
        </aside>
      <?php endif; ?><!-- /sidebar-first -->

      <?php if ($page['sidebar_second']): ?>
        <aside id="sidebar-second">
          <?php print render($page['sidebar_second']); ?>
        </aside>
      <?php endif; ?><!-- /sidebar-second -->
    </div>
  </div><!-- /main -->



  <!-- ______________________ FOOTER _______________________ -->

  <?php if ($page['footer']): ?>
    <footer id="footer">
      <div class="container">

          <div class="flaxfooter">


            <div class="row">
                <div id="socialbittons_foter">
                      <?php print render($page['social_block']);?>
                </div>
            </div>

            <div class="row">

                                
            </div>

            <div class="row last">
                      <?php print render($page['footer']); ?>
            </div>
          </div>

      </div>
    </footer><!-- /footer -->
  <?php endif; ?>

</div><!-- /page -->

