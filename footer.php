	<div class="bcgfooter">
		<div id="footer" class="container">
			<div class="row">
				<!-- area widget -->
				<div class="col-sm-4">
				    <?php dynamic_sidebar("Footer-sx"); ?>
				</div>
				<div class="col-sm-4">
				    <?php dynamic_sidebar("Footer-cx"); ?>
				</div>
				<div class="col-sm-4">
				    <?php dynamic_sidebar("Footer-dx"); ?>
				</div>
			</div>
			<div class="row">
			    <div class="col-md-12 text-center mycredits">
			        <?php dynamic_sidebar("Footer-last"); ?>
			    </div>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>

	</body>
</html>
