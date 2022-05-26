@props(['countries'])

<div class="accordion accordion-bordered" id="accordion-4" role="tablist">
    <div class="card">
        <div class="card-header" role="tab" id="heading-10">
            <h6 class="font-weight-bold mb-0">
                <a data-bs-toggle="collapse" href="#collapse-10" aria-expanded="true" aria-controls="collapse-10">
                    <center> Add Licensor </center>
                </a>
            </h6>
        </div>
        <div id="collapse-10" class="collapse hidden" role="tabpanel" aria-labelledby="heading-10"
            data-bs-parent="#accordion-4">
            <div class="card">
                <div class="card-body row">
                    <form class="row card-body" id="licensor-form"
                        action="{{ route('licensor-crud.store') }}" method="POST">
                        @csrf
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Licensor ID: </label>
                                <div class="col-sm-9">
                                    <input name="Licensor_ID" type="Licensor_ID" class="form-control"
                                        placeholder=" Licensor ID"
                                        value="{{ old('Licensor_ID') ?? ($licensor->Licensor_ID ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('Licensor_ID')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Surname </label>
                                <div class="col-sm-9">
                                    <input name="Last_Name" type="Last_Name" class="form-control"
                                        placeholder=" Surname"
                                        value="{{ old('Last_Name') ?? ($licensor->Last_Name ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('Last_Name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Given Name</label>
                                <div class="col-sm-9">
                                    <input name="Given_Name" type="Given_Name" class="form-control"
                                        placeholder=" Given Name"
                                        value="{{ old('Given_Name') ?? ($licensor->Given_Name ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('Given_Name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Phone Number</label>
                                <div class="col-sm-9">
                                    <input name="Phone_Number" type="Phone_Number" class="form-control"
                                        placeholder=" Phone Number"
                                        value="{{ old('Phone_Number') ?? ($licensor->Phone_Number ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('name')
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
                                        class="form-control @error('Nationality') is-invalid @enderror" required>
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
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Home Address</label>
                                <div class="col-sm-9">
                                    <input name="Home_Address" type="text"
                                        class="form-control @error('Home_Address') is-invalid @enderror"
                                        placeholder=" Home Address"
                                        value="{{ old('Home_Address') ?? ($licensor->Home_Address ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('Home_Address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Employer Name</label>
                                <div class="col-sm-9">
                                    <input name="Employer" type="text"
                                        class="form-control @error('Employer') is-invalid @enderror"
                                        placeholder=" Licensors Employer Name"
                                        value="{{ old('Employer') ?? ($licensor->Employer ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('Employer')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Employer Address </label>
                                <div class="col-sm-9">
                                    <select name="Employer_Address"
                                        class="form-control @error('Employer_Address') is-invalid @enderror" required>
                                        <option value="">Select a country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}"
                                                {{ old('country') == $country->id ? 'selected' : '' }}>
                                                {{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('Employer_Address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date of Termination </label>
                                <div class="col-sm-9">
                                    <input name="Date_of_Termination" type="date"
                                        class="form-control @error('Date_of_Termination') is-invalid @enderror"
                                        placeholder=""
                                        value="{{ old('Date_of_Termination') ?? ((isset($licensor->Date_of_Termination) ? $licensor->Date_of_Termination->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('Date_of_Termination')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date of Commencement </label>
                                <div class="col-sm-9">
                                    <input name="Date_of_Commencement" type="date"
                                        class="form-control @error('Date_of_Commencement') is-invalid @enderror"
                                        placeholder=""
                                        value="{{ old('Date_of_Commencement') ?? ((isset($licensor->Date_of_Commencement) ? $licensor->Date_of_Commencement->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('Date_of_Commencement')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Contractor </label>
                                <div class="col-sm-9">
                                    <input name="Contractor" type="text"
                                        class="form-control @error('Contractor') is-invalid @enderror"
                                        placeholder=" Applicant's Contractor"
                                        value="{{ old('Contractor') ?? ($licensor->Contractor ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('Contractor')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Contractor Type</label>
                                <div class="col-sm-9">
                                    <input name="ContractorType" type="text"
                                        class="form-control @error('ContractorType') is-invalid @enderror"
                                        placeholder=" Applicant's Contractor Type"
                                        value="{{ old('ContractorType') ?? ($licensor->ContractorType ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('ContractorType')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date of Contract </label>
                                <div class="col-sm-9">
                                    <input name="Date_of_Contract" type="date"
                                        class="form-control @error('Date_of_Contract') is-invalid @enderror"
                                        placeholder=""
                                        value="{{ old('Date_of_Contract') ?? ((isset($licensor->Date_of_Contract) ? $licensor->Date_of_Contract->format('Y-m-d') : null) ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('Date_of_Contract')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email of Future Contact </label>
                                <div class="col-sm-9">
                                    <input name="Email_of_Future_Contact" type="email"
                                        class="form-control @error('Email_of_Future_Contact') is-invalid @enderror"
                                        placeholder=" Licensors Employer Name"
                                        value="{{ old('Email_of_Future_Contact') ?? ($licensor->Email_of_Future_Contact ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('Email_of_Future_Contact')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Notes </label>
                                <div class="col-sm-9">
                                    <textarea cols="600" rows="3" class="form-control" id="Notes" placeholder="Notes"
                                        name="Notes"
                                        placeholder="Enter value here">{{ $licensor->notes ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="float-right">
                                <button form="licensor-form" type="submit" class="btn btn-primary">
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
