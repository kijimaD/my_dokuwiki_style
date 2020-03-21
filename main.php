<?php
/**
 * DokuWiki Default Template 2012
 *
 * @link     http://dokuwiki.org/template
 * @author   Anika Henke <anika@selfthinker.org>
 * @author   Clarence Lee <clarencedglee@gmail.com>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

if (!defined('DOKU_INC')) die(); /* must be run from within DokuWiki */
header('X-UA-Compatible: IE=edge,chrome=1');

$hasSidebar = page_findnearest($conf['sidebar']);
$showSidebar = $hasSidebar && ($ACT=='show');
?><!DOCTYPE html>
<html lang="<?php echo $conf['lang'] ?>" dir="<?php echo $lang['direction'] ?>" class="no-js">
	<head>
		<meta charset="utf-8" />
		<title><?php tpl_pagetitle() ?> [<?php echo strip_tags($conf['title']) ?>]</title>
		<script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />

		<?php tpl_metaheaders() ?>
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<?php echo tpl_favicon(array('favicon', 'mobile')) ?>
		<?php tpl_includeFile('meta.html') ?>
	</head>

	<body>
		<?php include('tpl_header.php') ?>
		<div class="container">
			<div class="row">

				<!-- コンテンツ -->
				<div class="col-lg-5 shadow pt-2 pb-4 order-lg-1">
					<!-- ********** CONTENT ********** -->
					<div id="dokuwiki__content"><div class="pad group">
						<?php html_msgarea() ?>

						<!-- <div class="pageId text-secondary"><?php echo hsc($ID) ?></div> -->
						<div class="page group">
							<?php tpl_flush() ?>
							<?php tpl_includeFile('pageheader.html') ?>
							<!-- wikipage start -->
							<?php tpl_content(false) ?>
							<!-- wikipage stop -->
							<?php tpl_includeFile('pagefooter.html') ?>
						</div>

						<div class="docInfo text-right text-secondary">
							<small><?php tpl_pageinfo() ?></small>
						</div>

						<?php tpl_flush() ?>
					</div></div><!-- /content -->
				</div>

				<!-- tools -->
				<div class="col-lg-1 order-lg-2">
					<div id="dokuwiki__pagetools">
						<div class="tools">
							<ul>
								<?php echo (new \dokuwiki\Menu\PageMenu())->getListItems(); ?>
							</ul>
						</div>
					</div>
				</div>

				<!-- サイドバー -->
				<div class="col-lg-3 order-lg-0">
					<?php if($showSidebar): ?>
						<!-- ********** ASIDE ********** -->
						<div id="dokuwiki__aside"><div class="pad aside include group">
							<!-- <h3 class="toggle"><?php echo $lang['sidebar'] ?></h3> -->
							<div class="content"><div class="group">
								<?php tpl_flush() ?>
								<?php tpl_includeFile('sidebarheader.html') ?>
								<?php tpl_include_page($conf['sidebar'], true, true) ?>
								<?php tpl_includeFile('sidebarfooter.html') ?>
							</div></div>
						</div></div><!-- /aside -->
					<?php endif; ?>
				</div>

				<!-- PAGE ACTIONS -->
				<div class="col-lg-2 order-lg-3">
					<?php /*tpl_toc()*/ ?>
				</div>
			</div><!-- row -->
		</div><!-- container -->
		<?php include('tpl_footer.php') ?>
		</div></div><!-- /site -->

		<div class="no"><?php tpl_indexerWebBug() /* provide DokuWiki housekeeping, required in all templates */ ?></div>
		<div id="screen__mode" class="no"></div><?php /* helper to detect CSS media query in script.js */ ?>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</body>
</html>
