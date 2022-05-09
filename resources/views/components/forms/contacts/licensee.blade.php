@props(['countries'])

<div class="accordion accordion-bordered" id="accordion-4" role="tablist">
    <div class="card">
        <div class="card-header" role="tab" id="heading-10">
            <h6 class="font-weight-bold mb-0">
                <a data-bs-toggle="collapse" href="#collapse-10" aria-expanded="true"
                    aria-controls="collapse-10">
                    <center> Add Licensee </center>
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
                                <label class="col-sm-3 col-form-label">Licensee ID: </label>
                                <div class="col-sm-9">
                                    <input name="licencee_id" type="licencee_id" class="form-control" placeholder=" Sample Invention Disclosure" value="{{ old('licencee_id') ?? ( $investor->licencee_id ?? ( app()->environment('local') ? 'Investor ID' : '' ) ) }}" required>
                @error('licencee_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Licencee Name </label>
                                <div class="col-sm-9">
                                    <input name="name" type="name" class="form-control" placeholder=" Sample Invention Disclosure" value="{{ old('name') ?? ( $licencee->name ?? ( app()->environment('local') ? 'Name' : '' ) ) }}" required>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Licencee's Address</label>
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
                                            <option value="{{ $country->id }}"
                                                {{ old('country_of_registration') == $country->id ? 'selected' : '' }}>
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
                                        placeholder=" 72"
                                        value="{{ old('date_of_incorporation') ?? ((isset($sow->date_of_incorporation) ? $sow->date_of_incorporation->format('Y-m-d') : null) ?? (app()->environment('local') ? '2022-01-01' : '')) }}"
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
                                    <textarea cols="600" rows="3" class="form-control" id="notes"
                                        placeholder="notes" name="notes"
                                        placeholder="Enter value here">{{ $investor->notes ?? 'notes' }}</textarea>
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
