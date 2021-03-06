<div class="modal interface animated bounceIn" id="Interface">
	<div class="modal-dialog modal-lg">
		<div class="clearfix">
			<button type="button" class="close pull-right text-white" data-dismiss="modal" aria-hidden="true">&times;</button>
		</div>
		<div class="container-fluid">
			<div class="row text-center">
				<div class="col-sm-4">
					<a href="<?= $this->Url->build(['controller' => 'admin', 'action' => 'home']);?>">
						<div class="element padded">
							<i class="fa fa fa-dashboard fa-4x"></i>
							<h5><?= __("Dashboard");?></h5>
						</div>
					</a>
				</div>

				<div class="col-sm-4">
					<a href="<?= $this->Url->build(['controller' => 'articles', 'action' => 'index']);?>">
						<div class="element padded">
							<i class="fa fa fa-newspaper-o fa-4x"></i>
							<h5><?= __("Articles");?></h5>
						</div>
					</a>
				</div>

				<div class="col-sm-4">
					<a href="<?= $this->Url->build(['controller' => 'categories', 'action' => 'index']);?>">
						<div class="element padded">
							<i class="fa fa fa-tag fa-4x"></i>
							<h5><?= __("Categories");?></h5>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
