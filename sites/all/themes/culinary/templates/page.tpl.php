<div id="wrapper">
  <div id="header">
    <div id="logo">
      <h1><a href="#">Culinary</a></h1>
      <h2><span>Template By Free CSS Templates</span></h2>
    </div>
    <!-- end div#logo -->
  </div>
  <!-- end div#header -->
  <div id="menu">
	<?php print render($page['menu']);?>
  </div>
  <div id="help">
	<?php print render($page['help']);?>
  </div>
  <!-- end div#menu -->
  <div id="page">
    <div id="page-bgtop">
      <div id="content">
              <?php if ($page['content_top']): ?>
          <div id="content-top">
            <?php print render($page['content_top']); ?>
          </div>
        <?php endif; ?><!-- end content top -->

        <div id="main">
          <?php print $breadcrumb; ?>
          <?php if($page['content_inner']): ?>
            <div id="content-inner">
              <?php print render($page['content_inner']); ?>
              <div class="clear"> </div>
            </div>
          <?php endif; ?><!-- end content inner -->

          <?php if ($page['highlight']): ?>
            <div id="highlight">
              <?php print render($page['highlight']); ?>
            </div>
          <?php endif; ?> <!-- end highlight -->
          <a name="main-content" id="main-content"></a>
          <?php if ($title): ?>
            <h1 class="title"><?php print $title; ?></h1>
          <?php endif; ?> <!-- end title -->

          <?php if ($tabs): ?>
            <div id="tabs">
            <?php if ($tabs): ?>
              <?php print render($tabs) ?>
            <?php endif; ?>
            </div> <!-- end tabs -->
          <?php endif; ?>
          
      
       		 <?php print render($page['content']);?>
          </div>
      </div>
      <!-- end div#content -->
      <div id="sidebar">
        <?php print render($page['sidebar_first']);?>
      </div>
      <!-- end div#sidebar -->
      <div style="clear: both; height: 1px"></div>
    </div>
  </div>
  <!-- end div#page -->
  <div id="footer">
	<?php print render($page['footer']);?>
  </div>
  <!-- end div#footer -->
</div>