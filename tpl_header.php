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

			<!-- ブランド ..ルートの指定方法がわからないのでphpを使う意味がない状態になっている。-->
			<?php
				echo '<a class="navbar-brand" style="font-weight:900;" href="'
					 .'/doku.php?id=start">'
                     .$conf['title'].'</a>';
			?>

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
					/* echo str_replace($_SERVER['REMOTE_USER'], '::marker', ''); */
					echo $_SERVER['REMOTE_USER'];
					echo '</li>';
				}
				/* echo (new \dokuwiki\Menu\UserMenu())->getListItems('action '); */
				/* foreachが効かない
				   $items = (new \dokuwiki\Menu\UserMenu())->getListItems('action ');
				   foreach ($items as $item) {
				   echo '<li>'
				   .'<a href="'.$item->getLink().'">'
				   .'</a></li>';
				   }
				 */
				?>

				<!-- ドロップダウン(ユーザメニュー) -->
				<li class="nav-item mx-2 dropdown">
					<a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="action recent nav-item mx-2" href="/doku.php?id=start&amp;do=recent" title="最近の変更 [r]" rel="nofollow" accesskey="r">最近の変更</a>
						<a class="action media nav-item mx-2" href="/doku.php?id=start&amp;do=media&amp;ns=" title="メディアマネージャー" rel="nofollow">メディアマネージャー</a>
						<a class="action index nav-item mx-2" href="/doku.php?id=start&amp;do=index" title="サイトマップ [x]" accesskey="x">サイトマップ</a>
					</div>
				</li>
			<?php endif ?>

			<!-- SITE TOOLS -->
			<!-- <div id="dokuwiki__sitetools">
				 <?php tpl_searchform(); ?>
				 <?php echo (new \dokuwiki\Menu\MobileMenu())->getDropdown($lang['tools']); ?>
				 <ul>
				 <?php echo (new \dokuwiki\Menu\SiteMenu())->getListItems('action ', false); ?>
				 </ul>
				 </div> -->

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
