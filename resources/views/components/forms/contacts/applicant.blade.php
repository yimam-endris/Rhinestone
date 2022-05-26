@props(['countries'])

<div class="accordion accordion-bordered" id="accordion-4" role="tablist">
    <div class="card">
        <div class="card-header" role="tab" id="heading-10">
            <h6 class="font-weight-bold mb-0">
                <a data-bs-toggle="collapse" href="#collapse-10" aria-expanded="true"
                    aria-controls="collapse-10">
                    <center> Add Applicant </center>
                </a>
            </h6>
        </div>
        <div id="collapse-10" class="collapse hidden" role="tabpanel" aria-labelledby="heading-10"
            data-bs-parent="#accordion-4">
            <div class="card">
                <div class="card-body row">
                    <form class="row card-body" id="applicant-form"
                        action="{{ route('applicant-crud.store') }}" method="POST">
                        @csrf
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Applicant ID: </label>
                                <div class="col-sm-9">
                                    <input name="applicant_ID" type="applicant_ID" class="form-control"
                                        placeholder=" Applicant ID"
                                        value="{{ old('applicant_ID') ?? ($applicant->applicant_ID ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('applicant_ID')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Applicant Name </label>
                                <div class="col-sm-9">
                                    <input name="applicant_name" type="applicant_name" class="form-control"
                                        placeholder=" Applicant Name"
                                        value="{{ old('applicant_name') ?? ($applicant->applicant_name ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('applicant_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Applicant's Address</label>
                                <div class="col-sm-9">
                                    <input name="applicant_address" type="text"
                                        class="form-control @error('applicant_address') is-invalid @enderror"
                                        placeholder=" Applicant's Address"
                                        value="{{ old('applicant_address') ?? ($applicant->applicant_address ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('applicant_address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Applicant's Phone</label>
                                <div class="col-sm-9">
                                    <input name="applicant_phone" type="number"
                                        class="form-control @error('applicant_phone') is-invalid @enderror"
                                        placeholder=" Applicant's Address"
                                        value="{{ old('applicant_phone') ?? ($applicant->applicant_phone ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('applicant_phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nationality</label>
                                <div class="col-sm-9">
                                    <select name="applicant_nationality"
                                        class="form-control @error('applicant_nationality') is-invalid @enderror"
                                        required>
                                        <option value="">Select a country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->name }}"
                                                {{ old('applicant_nationality') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('applicant_nationality')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Country of Registration</label>
                                <div class="col-sm-9">
                                    <select name="country_of_registration"
                                        class="form-control @error('country_of_registration') is-invalid @enderror"
                                        required>
                                        <option value="">Select a country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->name }}"
                                                {{ old('country_of_registration') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('country_of_registration')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date of Incorporation</label>
                                <div class="col-sm-9">
                                    <input name="date_of_incorporation" type="date"
                                        class="form-control @error('date_of_incorporation') is-invalid @enderror"
                                        placeholder=" "
                                        value="{{ old('date_of_incorporation') ?? ((isset($applicant->date_of_incorporation) ? $applicant->date_of_incorporation->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('date_of_incorporation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Notes </label>
                                <div class="col-sm-9">
                                    <textarea cols="600" rows="3" class="form-control" id="note"
                                        placeholder="notes" name="note"
                                        placeholder="Enter value here">{{ $applicant->note ?? '' }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Applicant's e-Mail</label>
                                <div class="col-sm-9">
                                    <input name="applicant_email" type="email"
                                        class="form-control @error('applicant_email') is-invalid @enderror"
                                        placeholder=" Applicant's Address"
                                        value="{{ old('applicant_email') ?? ($sow->applicant_email ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('applicant_email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Applicant Status:
                                </label>
                                <div class="col-sm-9">
                                    <select name="applicant_status"
                                        class="form-control @error('applicant_status') is-invalid @enderror"
                                        required>
                                        <option value="">Select option</option>
                                        <option value="Active">Active</option>
                                        <option value="Deactive">Deactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="float-right">
                                <button form="applicant-form" type="submit" class="btn btn-primary">
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
