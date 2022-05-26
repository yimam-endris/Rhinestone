@props(['buttonText', 'title', 'value', 'setting'])

<!-- Button trigger modal -->
<button type="button" class="{{ $attributes->get('class') }}" data-bs-toggle="modal" data-bs-target="#{{ $id = $attributes->get('id') }}" required>
    {{ $buttonText ?? ( isset($value) ? 'Update value' : 'Create a value' ) }}
</button>

  <!-- Modal -->
<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{  $id }}-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      	<div class="modal-content">
            <form id="values-form-{{ $id }}" action="{{ isset($value) ? route('portal.staff.values.update', [ 'settingValue' => $value ]) : route('portal.staff.values.store', [ 'setting' => $setting ]) }}" method="POST">
				@csrf
				@bag($id)
				@isset($value)
					@method('PATCH')
				@endisset
				<div class="modal-header">
					<h5 class="modal-title" id="{{  $id }}-label">
						{{ $title ?? ( isset($value) ? "Update this value" : 'Create a new value' ) }}
					</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body text-start">
					<div class="row">
						<div class="col-lg-12 mb-3">
                            <label for="">Name</label>
                            <br>
							<input name="name" type="text" class="form-control @error('name', $id) is-invalid @enderror" placeholder="e.g New Value" value="{{ old('name') ?? ( $value->name ?? ( app()->environment('local') ? 'New Value' : '' ) ) }}" required>
							@error('name', $id)
								<div class="invalid-feedback">
									{{ $message }}
								</div>
							@enderror
                        </div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
					<button form="values-form-{{ $id }}" type="submit" class="btn btn-success">
						{{ $submitText ?? 'Submit' }}
					</button>
				</div>
			</form>
      	</div>
    </div>
</div>
@if($errors->hasBag($id))
	@push('js')
		<script>
			var modal = new bootstrap.Modal(document.getElementById(`{{ $id }}`));
			modal.show();
		</script>
	@endpush
@endif
