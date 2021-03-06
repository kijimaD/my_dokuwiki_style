<?php
/**
 * Template footer, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<div class="py-4 mt-4 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-2">
			</div>
			<!-- ********** FOOTER ********** -->
			<div class="col-8">
				<div id="dokuwiki__footer" class="float-center text-secondary"><div class="pad">
					<small>
						<?php tpl_license(''); // license text ?>
						<!-- <div class="buttons">
							 <?php
							 tpl_license('button', true, false, false); // license button, no wrapper
							 $target = ($conf['target']['extern']) ? 'target="'.$conf['target']['extern'].'"' : '';
							 ?>
							 <a href="https://www.dokuwiki.org/donate" title="Donate" <?php echo $target?>><img
							 src="<?php echo tpl_basedir(); ?>images/button-donate.gif" width="80" height="15" alt="Donate" /></a>
							 <a href="https://php.net" title="Powered by PHP" <?php echo $target?>><img
							 src="<?php echo tpl_basedir(); ?>images/button-php.gif" width="80" height="15" alt="Powered by PHP" /></a>
							 <a href="//validator.w3.org/check/referer" title="Valid HTML5" <?php echo $target?>><img
							 src="<?php echo tpl_basedir(); ?>images/button-html5.png" width="80" height="15" alt="Valid HTML5" /></a>
							 <a href="//jigsaw.w3.org/css-validator/check/referer?profile=css3" title="Valid CSS" <?php echo $target?>><img
							 src="<?php echo tpl_basedir(); ?>images/button-css.png" width="80" height="15" alt="Valid CSS" /></a>
							 <a href="https://dokuwiki.org/" title="Driven by DokuWiki" <?php echo $target?>><img
							 src="<?php echo tpl_basedir(); ?>images/button-dw.png" width="80" height="15" alt="Driven by DokuWiki" /></a>
							 </div> -->
					</small>
				</div></div><!-- /footer -->
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php
tpl_includeFile('footer.html');
