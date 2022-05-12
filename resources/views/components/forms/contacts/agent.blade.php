@props(['countries'])

<div class="accordion accordion-bordered" $="accordion-4" role="tablist">
	<div class="card">
		<div class="card-header" role="tab" id="heading-10">
			<h6 class="font-weight-bold mb-0">
				<a data-bs-toggle="collapse" href="#collapse-10" aria-expanded="true"
					aria-controls="collapse-10">
					<center> Add Agent </center>
				</a>
			</h6>
		</div>
		<div id="collapse-10" class="collapse hidden" role="tabpanel" aria-labelledby="heading-10"
			data-bs-parent="#accordion-4">
			<div class="card">
				<div class="card-body row">
					<form class="row card-body" id="disclosure-form"
						action="{{ route('invention-disclosures.store') }}" method="POST">
						@csrf
						<div class="col-6">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Foreign Associate ID </label>
								<div class="col-sm-9">
									<input name="applicant_id" type="applicant_id" class="form-control"
										placeholder=" Sample Invention Disclosure"
										value="{{ old('applicant_id') ?? ($investor->applicant_id ?? (app()->environment('local') ? 'Investor ID' : '')) }}"
										required>
									@error('applicant_id')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Agent Name </label>
								<div class="col-sm-9">
									<input name="name" type="name" class="form-control"
										placeholder=" Sample Invention Disclosure"
										value="{{ old('name') ?? ($applicant->name ?? (app()->environment('local') ? 'Name' : '')) }}"
										required>
									@error('name')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Foreign Associate Address</label>
								<div class="col-sm-9">
									<input name="address" type="text"
										class="form-control @error('address') is-invalid @enderror"
										placeholder=" applicant's address"
										value="{{ old('address') ?? ($sow->address ?? (app()->environment('local') ? 'applicants address' : '')) }}"
										required>
									@error('address')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Nationality</label>
								<div class="col-sm-9">
									<select name="country_id"
										class="form-control @error('country_id') is-invalid @enderror"
										required>
										<option value="">Select a country</option>
										@foreach ($countries as $country)
											<option value="{{ $country->id }}"
												{{ old('country') == $country->id ? 'selected' : '' }}>
												{{ $country->name }}</option>
										@endforeach
									</select>
									@error('country_id')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Contact Person</label>
								<div class="col-sm-9">
									<input name="phone_number" type="text"
										class="form-control @error('contact_person') is-invalid @enderror"
										placeholder=" Contact person"
										value="{{ old('contact_person') ?? ($agent->contact_person ?? (app()->environment('local') ? 'contact person' : '')) }}"
										required>
									@error('contact_person')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>
						</div>
						<div class="col-6">

							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Telephone Number</label>
								<div class="col-sm-9">
									<input name="phone_number" type="number"
										class="form-control @error('phone_number') is-invalid @enderror"
										placeholder=" Phone"
										value="{{ old('phone_number') ?? ($agent->phone_number ?? (app()->environment('local') ? '79213892372' : '')) }}"
										required>
									@error('phone_number')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Email Address</label>
								<div class="col-sm-9">
									<input name="email" type="text"
										class="form-control @error('email') is-invalid @enderror"
										placeholder=" agent's email"
										value="{{ old('email') ?? ($sow->email ?? (app()->environment('local') ? 'agent@demo.com' : '')) }}"
										required>
									@error('email')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Fax Number </label>
								<div class="col-sm-9">
								<input name="fax_number" type="number"
									class="form-control @error('fax_number') is-invalid @enderror"
									placeholder=" agent's fax_number"
									value="{{ old('fax_number') ?? ($agent->fax_number ?? (app()->environment('local') ? '7238-337-3843' : '')) }}"
									required>
								@error('fax_number')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Nationality</label>
								<div class="col-sm-9">
									<select name="country_of_registration"
										class="form-control @error('country_of_registration') is-invalid @enderror"
										required>
										<option value="">Select a country</option>
										@foreach ($countries as $country)
											<option value="{{ $country->id }}"
												{{ old('country_of_registration') == $country->id ? 'selected' : '' }}>
												{{ $country->name }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Office Contact</label>
								<div class="col-sm-9">
									<input name="office_contact" type="phone"
										class="form-control @error('office_contact') is-invalid @enderror"
										placeholder=" agent's office_contact"
										value="{{ old('office_contact') ?? ($agent->office_contact ?? (app()->environment('local') ? '7238373843' : '')) }}"
										required>
									@error('office_contact')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Email of Future Contact </label>
								<div class="col-sm-9">
									<input name="email_of_future_contact" type="text"
										class="form-control @error('email_of_future_contact') is-invalid @enderror"
										placeholder=" investor's email_of_future_contact"
										value="{{ old('email_of_future_contact') ?? ($investor->email_of_future_contact ?? (app()->environment('local') ? 'licensors employer name' : '')) }}"
										required>
									@error('email_of_future_contact')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>
						</div>
						<div class="footer">
							<div class="float-right">
								<button form="disclosure-form" type="submit" class="btn btn-primary">
									Save Details
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
