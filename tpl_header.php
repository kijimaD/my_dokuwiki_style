<?php
/**
 * Template header, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<!-- ********** HEADER ********** -->
<div id="dokuwiki__header"><div class="pad group">
    <?php tpl_includeFile('header.html') ?>

	<!-- ナビゲーションバー -->
	<nav class="navbar navbar-expand-md navbar-light sticky-top">

		<!-- サブコンポーネント -->
		<div class="container headings group">

				<!-- brand -->
				<h1 class="navbar-brand"><?php
										 // get logo either out of the template images folder or data/media folder
										 $logoSize = array();
										 /* $logo = tpl_getMediaFile(array(':wiki:logo.png', ':logo.png', 'images/tree.png'), false, $logoSize); */

										 // display logo and wiki title in a link to the home page
										 tpl_link(
											 wl(),
											 '<img src="'.$logo.'" '.$logoSize[3].' alt="" style="width:100px;"/> <span>'.$conf['title'].'</span>',
											 'accesskey="h" title="[H]"'
										 );
										 ?></h1>

				<!-- タグライン？ -->
				<?php if ($conf['tagline']): ?>
					<p class="claim"><?php echo $conf['tagline']; ?></p>
				<?php endif ?>

	<!-- ハンバーガーボタン -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- <ul class="a11y skip">
         <li><a href="#dokuwiki__content"><?php echo $lang['skip_to_content']; ?></a></li>
		 </ul> -->

	<!-- ナビゲーション -->
	<div class="collapse navbar-collapse" id="navbar-content">

		<ul class="navbar-nav mr-auto">
		</ul>

		<!-- トップメニュー -->
		<ul class="navbar-nav py-3">
				<!-- USER TOOLS -->
				<?php if ($conf['useacl']): ?>
							<?php
							if (!empty($_SERVER['REMOTE_USER'])) {
								echo '<li class="nav-item mx-2">';
								tpl_userinfo(); /* 'Logged in as ...' */
								echo '</li>';
							}
							echo (new \dokuwiki\Menu\UserMenu())->getListItems('action ');
							?>
				<?php endif ?>

				<!-- SITE TOOLS -->
				<div id="dokuwiki__sitetools">
					<?php tpl_searchform(); ?>
					<div class="mobileTools">
						<?php echo (new \dokuwiki\Menu\MobileMenu())->getDropdown($lang['tools']); ?>
					</div>
					<ul>
						<?php echo (new \dokuwiki\Menu\SiteMenu())->getListItems('action ', false); ?>
					</ul>
				</div>

			<!-- BREADCRUMBS -->
			<?php if($conf['breadcrumbs'] || $conf['youarehere']): ?>
				<!-- <div class="breadcrumbs">
					 <?php if($conf['youarehere']): ?>
					 <div class="youarehere"><?php tpl_youarehere() ?></div>
					 <?php endif ?>
					 <?php if($conf['breadcrumbs']): ?>
					 <div class="trace"><?php tpl_breadcrumbs() ?></div>
					 <?php endif ?>
					 </div> -->
			<?php endif ?>



			<hr class="a11y" />
		</ul>
	</div>
	</div>
</nav>
</div></div><!-- /header -->
