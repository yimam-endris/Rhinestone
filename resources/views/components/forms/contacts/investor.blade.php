@props(['countries'])

<div class="accordion accordion-bordered" id="accordion-4" role="tablist">
    <div class="card">
        <div class="card-header" role="tab" id="heading-10">
            <h6 class="font-weight-bold mb-0">
                <a data-bs-toggle="collapse" href="#collapse-10" aria-expanded="true"
                    aria-controls="collapse-10">
                    <center> Add Investor </center>
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
                                <label class="col-sm-3 col-form-label">Investor ID: </label>
                                <div class="col-sm-9">
                                    <input name="reference_number" type="text"
                                        class="form-control @error('reference_number') is-invalid @enderror"
                                        placeholder=" ayu7687/t767/21"
                                        value="{{ old('reference_number') ?? ($sow->reference_number ?? (app()->environment('local') ? 'ayu7687/t767/21' : '')) }}"
                                        required>
                                    @error('reference_number')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title: </label>
                                <div class="col-sm-9">
                                    <select name="title"
                                        class="form-control @error('title') is-invalid @enderror"
                                        required>
                                        <option value="">Select title</option>
                                        <option value="Mr,">Mr.</option>
                                        <option value="Mrs.">Mrs.</option>
                                        <option value="Miss.">Miss.</option>
                                        <option value="Prof.">Prof.</option>
                                        <option value="Dr.">Dr.</option>
                                    </select>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Last name </label>
                                <div class="col-sm-9">
                                    <input name="name" type="name" class="form-control"
                                        placeholder=" Sample Invention Disclosure"
                                        value="{{ old('name') ?? ($investor->name ?? (app()->environment('local') ? 'Name' : '')) }}"
                                        required>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Given name
                                </label>
                                <div class="col-sm-9">
                                    <input name="given_name" type="given_name" class="form-control"
                                        placeholder=" Given name"
                                        value="{{ old('given_name') ?? ($investor->given_name ?? (app()->environment('local') ? 'Given name' : '')) }}"
                                        required>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date of Termination </label>
                                <div class="col-sm-9">
                                    <input name="date_of_termination" type="date"
                                        class="form-control @error('date_of_termination') is-invalid @enderror"
                                        placeholder=" 72"
                                        value="{{ old('date_of_termination') ?? ((isset($investor->date_of_termination) ? $investor->date_of_termination->format('Y-m-d') : null) ?? (app()->environment('local') ? '2022-01-01' : '')) }}"
                                        required>
                                    @error('date_of_termination')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Contractor </label>
                                <div class="col-sm-9">
                                    <input name="contractor" type="text"
                                        class="form-control @error('contractor') is-invalid @enderror"
                                        placeholder=" investor's contractor"
                                        value="{{ old('contractor') ?? ($investor->contractor ?? (app()->environment('local') ? 'contractor' : '')) }}"
                                        required>
                                    @error('contractor')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Type of Contractor </label>
                                <div class="col-sm-9">
                                    <input name="type_contractor" type="text"
                                        class="form-control @error('type_contractor') is-invalid @enderror"
                                        placeholder=" investor's type_contractor"
                                        value="{{ old('type_contractor') ?? ($investor->type_contractor ?? (app()->environment('local') ? 'A type of ontract' : '')) }}"
                                        required>
                                    @error('type_contractor')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date of Termination </label>
                                <div class="col-sm-9">
                                    <input name="date_of_contract" type="date"
                                        class="form-control @error('date_of_contract') is-invalid @enderror"
                                        placeholder=" 72"
                                        value="{{ old('date_of_contract') ?? ((isset($investor->date_of_contract) ? $investor->date_of_contract->format('Y-m-d') : null) ?? (app()->environment('local') ? '2022-01-01' : '')) }}"
                                        required>
                                    @error('date_of_contract')
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
                        <div class="col-6">
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
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Home </label>
                                <div class="col-sm-9">
                                    <input name="home" type="text"
                                        class="form-control @error('home') is-invalid @enderror"
                                        placeholder=" Home"
                                        value="{{ old('home') ?? ($investor->home ?? (app()->environment('local') ? 'Home' : '')) }}"
                                        required>
                                    @error('home')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Country </label>
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
                                <label class="col-sm-3 col-form-label">Zip/Postal Code </label>
                                <div class="col-sm-9">
                                    <input name="address" type="text"
                                        class="form-control @error('address') is-invalid @enderror"
                                        placeholder=" investor's address"
                                        value="{{ old('address') ?? ($investor->address ?? (app()->environment('local') ? 'licensors address' : '')) }}"
                                        required>
                                    @error('address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Employer </label>
                                <div class="col-sm-9">
                                    <input name="employer_name" type="text"
                                        class="form-control @error('employer_name') is-invalid @enderror"
                                        placeholder=" investor's employer_name"
                                        value="{{ old('employer_name') ?? ($investor->employer_name ?? (app()->environment('local') ? 'licensors employer name' : '')) }}"
                                        required>
                                    @error('employer_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Date of Commencement </label>
                                    <div class="col-sm-9">
                                        <input name="date_of_contract" type="date"
                                            class="form-control @error('date_of_contract') is-invalid @enderror"
                                            placeholder=" 72"
                                            value="{{ old('date_of_contract') ?? ((isset($investor->date_of_contract) ? $investor->date_of_contract->format('Y-m-d') : null) ?? (app()->environment('local') ? '2022-01-01' : '')) }}"
                                            required>
                                        @error('date_of_contract')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Employer Address </label>
                                <div class="col-sm-9">
                                    <input name="employer_address" type="text"
                                        class="form-control @error('employer_address') is-invalid @enderror"
                                        placeholder=" investor's employer_address"
                                        value="{{ old('employer_address') ?? ($investor->employer_address ?? (app()->environment('local') ? 'licensors employer address' : '')) }}"
                                        required>
                                    @error('employer_address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nationality </label>
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
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date of Commencement </label>
                                <div class="col-sm-9">
                                    <input name="date_of_contract" type="date"
                                        class="form-control @error('date_of_contract') is-invalid @enderror"
                                        placeholder=" 72"
                                        value="{{ old('date_of_contract') ?? ((isset($investor->date_of_contract) ? $investor->date_of_contract->format('Y-m-d') : null) ?? (app()->environment('local') ? '2022-01-01' : '')) }}"
                                        required>
                                    @error('date_of_contract')
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