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
                    <form class="row card-body" id="licensee-form"
                        action="{{ route('licensee-crud.store') }}" method="POST">
                        @csrf
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Licensee ID: </label>
                                <div class="col-sm-9">
                                    <input name="Licensee_ID" type="Licensee_ID" class="form-control" placeholder=" Licensee ID" 
                                    value="{{ old('Licensee_ID') ?? ( $investor->Licensee_ID ?? ( app()->environment('local') ? '' : '' ) ) }}" required>
                                    @error('Licensee_ID')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Licensee Name </label>
                                <div class="col-sm-9">
                                    <input name="Licensee_Name" type="Licensee_Name" 
                                    class="form-control" placeholder=" Licensee Name" 
                                    value="{{ old('Licensee_Name') ?? ( $licencee->Licensee_Name ?? ( app()->environment('local') ? '' : '' ) ) }}" required>
                                    @error('Licensee_Name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Licensee's Address</label>
                                <div class="col-sm-9">
                                    <input name="Licensee_Address" type="text"
                                        class="form-control @error('Licensee_Address') is-invalid @enderror"
                                        placeholder=" Licensee's Address"
                                        value="{{ old('Licensee_Address') ?? ($licensee->Licensee_Address ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('Licensee_Address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Licensee's e-Mail</label>
                                <div class="col-sm-9">
                                    <input name="Licensee_Email" type="email"
                                        class="form-control @error('Licensee_Email') is-invalid @enderror"
                                        placeholder=" Licensee's e-Mail"
                                        value="{{ old('Licensee_Email') ?? ($licensee->Licensee_Email ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('Licensee_Email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Phone Number</label>
                                <div class="col-sm-9">
                                    <input name="Licensee_Phone" type="text"
                                        class="form-control @error('Licensee_Phone') is-invalid @enderror"
                                        placeholder=" Phone Number"
                                        value="{{ old('Licensee_Phone') ?? ($licensee->Licensee_Phone ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('Licensee_Phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nationality</label>
                                <div class="col-sm-9">
                                    <select name="Nationality"
                                        class="form-control @error('Nationality') is-invalid @enderror"
                                        required>
                                        <option value="">Select a country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->name }}"
                                                {{ old('country') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('Nationality')
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
                                    <select name="Country_of_Registration"
                                        class="form-control @error('Country_of_Registration') is-invalid @enderror"
                                        required>
                                        <option value="">Select a country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->name }}"
                                                {{ old('Country_of_Registration') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('Country_of_Registration')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date of Incorporation</label>
                                <div class="col-sm-9">
                                    <input name="Date_of_Incorporation" type="date"
                                        class="form-control @error('Date_of_Incorporation') is-invalid @enderror"
                                        placeholder=""
                                        value="{{ old('Date_of_Incorporation') ?? ((isset($licensee->Date_of_Incorporation) ? $licensee->Date_of_Incorporation->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('Date_of_Incorporation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Notes </label>
                                <div class="col-sm-9">
                                    <textarea cols="600" rows="3" class="form-control" id="Notes"
                                        placeholder="Notes" name="Notes"
                                        placeholder="Enter value here">{{ $licensee->Notes ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="float-right">
                                <button form="licensee-form" type="submit" class="btn btn-primary">
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
