<?php
/**
 * Template header, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<!-- ********** HEADER ********** -->
    <?php tpl_includeFile('header.html') ?>

	<!-- ナビゲーションバー -->
	<nav class="navbar navbar-expand-md navbar-light">

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

				<!-- ドロップダウン(ユーザメニュー) -->
				<li class="nav-item mx-2 dropdown">
					<a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php if ($conf['useacl']): ?>
							<?php
							if (!empty($_SERVER['REMOTE_USER'])) {
								echo $_SERVER['REMOTE_USER'];
							}else{
								echo 'N/A';
							}
							?>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<?php
						$items = (new \dokuwiki\Menu\UserMenu())->getItems();
						foreach($items as $item) {
							echo '<a class="nav-item mx-2" href="'.$item->getLink().'" title="'.$item->getTitle().'">'
							   . $item->getLabel()
							   . '</a>';
						}
						?>
					</div>
				</li>
						<?php endif ?>

						<!-- ページメニュー -->
						<li class="nav-item mx-2 dropdown">
							<a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Page</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<?php
								$items = (new \dokuwiki\Menu\PageMenu())->getItems();
								foreach($items as $item) {
									echo '<a class="nav-item mx-2" href="'.$item->getLink().'" title="'.$item->getTitle().'">'
									   . $item->getLabel()
									   . '</a>';
								}
								?>
							</div>
						</li>

						<!-- モバイルツール -->
						<li class="nav-item mx-2">
							<a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Mobile</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<?php
								$items = (new \dokuwiki\Menu\MobileMenu())->getItems();
								foreach($items as $item) {
									echo '<a class="nav-item mx-2" href="'.$item->getLink().'" title="'.$item->getTitle().'">'
									   . $item->getLabel()
									   . '</a>';
								}
								?>
						</li>

						<!-- 検索 -->
						<li class="nav-item mx-2">
							<?php /*tpl_searchform();*/ ?>
							<form action="/dokuwiki/doku.php?id=start" method="get" role="search" class="search doku_form" id="dw__search" accept-charset="utf-8"><input type="hidden" name="do" value="search" />
								<input type="hidden" name="id" value="start" /><div class="no">
									<input name="q" type="text" class="edit" title="[F]" accesskey="f" placeholder="" autocomplete="on" id="qsearch__in" value="" />
									<button value="1" type="submit" title="検索" class="btn">検索</button>
									</div>
								</div>
							</form>
						</li>

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
<!-- /header -->
