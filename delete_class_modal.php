		<!-- Modal -->
		<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
<div id="<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		<h3 id="myModalLabel">Kaldır Class</h3>
	</div>
		<div class="modal-body">
		<div class="alert alert-danger">
			Are you sure you want to Kaldır this class?
		</div>
		</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> kapat</button>
		<button id="<?php echo $id; ?>" class="btn btn-danger remove" name="change"><i class="icon-check icon-large"></i> evet</button>
	</div>
</div>
				