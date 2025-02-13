@section("footer")
<!-- Begin footer section -->
<!-- Delete Modal-->
<br>
<div class="modal fade confirm-delete-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;</button>
				<h4 class="modal-title" id="myModalLabel">
					<span class="glyphicon glyphicon-trash"></span>
					{{ trans('messages.confirm-delete-title') }}
				</h4>
			</div>
			<div class="modal-body">
				<p>{{ trans('messages.confirm-delete-message') }}</p>
				<p>{{ trans('messages.confirm-delete-irreversible') }}</p>
				<input type="hidden" id="delete-url" value="" />
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger btn-delete">
					{{ trans('messages.delete') }}</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">
					{{ trans('messages.cancel') }}</button>
			</div>
		</div>
	</div>
</div>
<hr>
<footer class="footer">
	<div class="col-md-12 row">
		<div class="col-md-12">
			<a href="https://www.theglobalfund.org/en/" target="_blank">
				<img src="{{ config('kblis.cdc-logoo') }}">
			</a>
		</div>
	</div>

	<div class="col-md-12 row">
		<a href="https://moh.gov.gm/" target="_blank">
			GAHLC / MOH Gambia - NPHL &copy; 2023
			<!-- date("Y") -->
		</a>
	</div>
</footer>

<!-- End footer section-->
@show