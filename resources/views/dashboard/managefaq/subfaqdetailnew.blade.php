@if (isset($messageerror) && $messageerror != '')
<span class='red bold'>{!!$messageerror!!}</span><br/><br/>
@endif
@if (isset($messagesuccess) && $messagesuccess != '')
<span class='green bold'>{!!$messagesuccess!!}</span><br/><br/>
@endif
<form method="post" class="horizontal-form" enctype="multipart/form-data">
	<div class="form-body">
		<div class="row">
			<fieldset class='fieldset'><legend class='legend' rel="stylesheet">{{explode(' / ', $pagename)[count(explode(' / ', $pagename)) - 1]}} Information</legend>
				<div class="col-md-6">
					<div class="form-group">
						<div class="@if ($errorFaqSubID != '') has-error @endif">
							<label class="control-label input-sm marlm10">{{$alias['FaqSubID'][0]}} <span class="red">*</span></label>
							<select class="form-control input-sm select2me" name="FaqSubID">
								<option value=''>Select {{$alias['FaqSubID'][0]}}</option>
								@foreach ($arrfaqsub as $obj)
									<option value="{{$obj['ID']}}" @if ($obj['ID'] == $FaqSubID) selected @endif>{{$obj['FaqName'].' - '.$obj['Name']}}</option>
								@endforeach
							</select>
							<span class="help-block">{{$errorFaqSubID}}</span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<div class="@if ($errorTitle != '') has-error @endif">
							<label class="control-label input-sm marlm10">{{$alias['Title'][0]}} <span class="red">*</span></label>
							<input type="text" class="form-control input-sm" name="Title" value="{{$Title}}">
							<span class="help-block">{{$errorTitle}}</span>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<div class="@if ($errorDescription != '') has-error @endif">
							<label class="control-label input-sm marlm10">{{$alias['Description'][0]}} <span class="red">*</span></label>
							<textarea type="text" class="ckeditor form-control input-sm" name="Description">{{$Description}}</textarea>
							<span class="help-block">{{$errorDescription}}</span>
						</div>
					</div>
				</div>
			</fieldset>
		</div>
	</div>
	<div class="form-actions right">
		<input type="text" class="hide" name="action" value="{{$action}}">
		<a class="btn btn-sm default" href="{{$basesite}}{{$config['backend']['aliaspage']}}{{$extlink}}">Cancel</a>
		@if ($action == 'edit')
		<button type="submit" class="btn btn-sm blue" name="edit">Edit <i class="fa fa-arrow-circle-right"></i></button>
		@else
		<button type="submit" class="btn btn-sm blue" name="addnew">Save <i class="fa fa-arrow-circle-right"></i></button>
		@endif
	</div>
</form>
