@props(['countries','attorneys', 'paralegals'])

<div class="accordion accordion-bordered" id="accordion-4" role="tablist">
    <div class="card">
        <div class="card-header mb-2" role="tab" id="heading-10">
            <h6 class="font-weight-bold mb-0">
                <a data-bs-toggle="collapse" href="#collapse-10" aria-expanded="true"
                    aria-controls="collapse-10">
                    <center>Add Design</center>
                </a>
            </h6>
        </div>
        <div id="collapse-10" class="collapse hidden" role="tabpanel" aria-labelledby="heading-10"
            data-bs-parent="#accordion-4">
            <div class="card">
                <div class="card-body row">
                    <form class="row card-body" id="design-form"
                        action="{{ route('applicant-crud.store') }}" method="POST">
                        @csrf

                        <div class="col-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Case No: </label>
                                    <div class="col-md-2">
                                        <input name="title" type="title" class="form-control"
                                            placeholder=" Cost No"
                                            value="{{ old('title') ?? ($user->name ?? (app()->environment('local') ? '' : '')) }}" required>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="col-sm-2 col-form-label text-right">Country: </label>
                                    <div class="col-md-2">
                                        <select name="Country"
                                            class="form-control @error('Country') is-invalid @enderror text-black"
                                                    required>
                                            <option value="">Country</option>
                                                    @foreach ($countries as $country)
                                            <option value="{{ $country->id }}"
                                                {{ old('primary_attorney') == $country->id ? 'selected' : '' }}>
                                                {{ $country->name }}</option>
                                                    @endforeach
                                        </select>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="col-sm-2 col-form-label text-right">Primary Attorney: </label>
                                    <div class="col-md-2">
                                        <select name="secondary_paralegal"
                                            class="form-control @error('secondary_paralegal') is-invalid @enderror text-dark" required>
                                            <option value="">Primary Attorney</option>
                                            @foreach ($attorneys as $attorneys)
                                            <option value="{{ $attorneys->id }}"
                                            {{ old('secondary_paralegal') == $attorneys->id ? 'selected' : '' }}>
                                            {{ $attorneys->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Internal Title: </label>
                                    <div class="col-sm-6">
                                        <input name="applicant_ID" type="applicant_ID" class="form-control"
                                            placeholder=" Internal Title"
                                            value="{{ old('applicant_ID') ?? ($applicant->applicant_ID ?? (app()->environment('local') ? '' : '')) }}"
                                            required>
                                        @error('applicant_ID')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                <label class="col-sm-2 col-form-label text-right">Secondary Attorney: </label>
                                    <div class="col-md-2">
                                        <select name="agreement_in_place"
                                            class="form-control @error('agreement_in_place') is-invalid @enderror text-black" required>
                                            <option selected>Select option</option>
                                            <option value="Design">Sample-1</option>
                                            <option value="Design">Sample-2</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Formal Title: </label>
                                    <div class="col-sm-6">
                                        <input name="applicant_ID" type="applicant_ID" class="form-control"
                                            placeholder=" Formal Title"
                                            value="{{ old('applicant_ID') ?? ($applicant->applicant_ID ?? (app()->environment('local') ? '' : '')) }}"
                                            required>
                                        @error('applicant_ID')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                <label class="col-sm-2 col-form-label text-right">Primary Paralegal: </label>
                                    <div class="col-md-2">
                                        <select name="agreement_in_place"
                                            class="form-control @error('agreement_in_place') is-invalid @enderror text-black" required>
                                            <option selected>Select option</option>
                                            <option value="Design">Sample-1</option>
                                            <option value="Design">Sample-2</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Type Of Filing: </label>
                                    <div class="col-md-2">
                                        <select name="agreement_in_place"
                                            class="form-control @error('agreement_in_place') is-invalid @enderror text-black" required>
                                            <option selected>Select option</option>
                                            <option value="Design">Design</option>
                                        </select>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="col-sm-2 col-form-label text-right">Cost Center / Business Unit: </label>
                                    <div class="col-md-2">
                                        <select name="agreement_in_place"
                                            class="form-control @error('agreement_in_place') is-invalid @enderror text-black" required>
                                            <option selected>Select option</option>
                                            <option value="Design">Sample-1</option>
                                            <option value="Design">Sample-2</option>
                                        </select>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="col-sm-2 col-form-label text-right">Secondary Paralegal: </label>
                                    <div class="col-md-2">
                                        <select name="agreement_in_place"
                                            class="form-control @error('agreement_in_place') is-invalid @enderror text-black" required>
                                            <option selected>Select option</option>
                                            <option value="Design">Sample-1</option>
                                            <option value="Design">Sample-2</option>
                                        </select>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Sub Filing Type: </label>
                                    <div class="col-md-2">
                                        <select name="agreement_in_place"
                                            class="form-control @error('agreement_in_place') is-invalid @enderror text-black" required>
                                            <option selected>Select option</option>
                                            <option value="Design">Registered</option>
                                            <option value="Design">Un-Registered</option>
                                        </select>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="col-sm-2 col-form-label text-right">Cost Center Code: </label>
                                    <div class="col-md-2">
                                        <input name="title" type="title" class="form-control"
                                            placeholder=" Cost Center Code"
                                            value="{{ old('title') ?? ($user->name ?? (app()->environment('local') ? '' : '')) }}" required>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="col-sm-2 col-form-label text-right">Agent: </label>
                                    <div class="col-md-2">
                                        <select name="agreement_in_place"
                                            class="form-control @error('agreement_in_place') is-invalid @enderror text-black" required>
                                            <option selected>Select option</option>
                                            <option value="Design">Sample-1</option>
                                            <option value="Design">Sample-2</option>
                                        </select>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Status: </label>
                                    <div class="col-md-2">
                                        <select name="agreement_in_place"
                                            class="form-control @error('agreement_in_place') is-invalid @enderror text-black" required>
                                            <option selected>Select option</option>
                                            <option value="Open">Open</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Filed">Filed</option>
                                            <option value="Allowed">Allowed</option>
                                            <option value="Granted(Live)">Granted(Live)</option>
                                            <option value="Abandoned">Abandoned</option>
                                            <option value="Granted(DEA)">Granted(DEA)</option>
                                            <option value="Conuerted">Conuerted</option>
                                            <option value="Expired">Expired</option>
                                            <option value="Published">Published</option>
                                        </select>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="col-sm-2 col-form-label text-right">Licence: </label>
                                    <div class="col-md-2">
                                        <select name="agreement_in_place"
                                            class="form-control @error('agreement_in_place') is-invalid @enderror text-black" required>
                                            <option selected>Select option</option>
                                            <option value="Design">Yes</option>
                                            <option value="Design">No</option>
                                        </select>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="col-sm-2 col-form-label text-right">Agent Ref: </label>
                                    <div class="col-md-2">
                                        <select name="agreement_in_place"
                                            class="form-control @error('agreement_in_place') is-invalid @enderror text-black" required>
                                            <option selected>Select option</option>
                                            <option value="Design">Sample-1</option>
                                            <option value="Design">Sample-2</option>
                                        </select>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Sub Status: </label>
                                    <div class="col-md-2">
                                        <select name="agreement_in_place"
                                            class="form-control @error('agreement_in_place') is-invalid @enderror text-black" required>
                                            <option selected>Select option</option>
                                            <option value="Licenced In">Licenced In</option>
                                            <option value="Licenced Out">Licenced Out</option>
                                            <option value="Opposition For">Opposition For</option>
                                            <option value="Opposition Against">Opposition Against</option>
                                        </select>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="col-sm-2 col-form-label text-right">Next Tax Date: </label>
                                    <div class="col-md-2">
                                        <input name="file_open_date" type="date"
                                            class="form-control @error('file_open_date') is-invalid @enderror"
                                            placeholder=" 72"
                                            value="{{ old('file_open_date') ?? ((isset($sow->file_open_date) ? $sow->file_open_date->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}"
                                            required>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="col-sm-2 col-form-label text-right">Agent-2: </label>
                                    <div class="col-md-2">
                                        <select name="agreement_in_place"
                                            class="form-control @error('agreement_in_place') is-invalid @enderror text-black" required>
                                            <option selected>Select option</option>
                                            <option value="Design">Sample-1</option>
                                            <option value="Design">Sample-2</option>
                                        </select>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Taxs Paid By: </label>
                                    <div class="col-md-2">
                                        <input name="title" type="title" class="form-control"
                                            placeholder=" Taxs Paid By"
                                            value="{{ old('title') ?? ($user->name ?? (app()->environment('local') ? '' : '')) }}" required>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="col-sm-2 col-form-label text-right">Next Annualy No: </label>
                                    <div class="col-md-2">
                                        <input name="title" type="title" class="form-control"
                                            placeholder=" Next Annualy No"
                                            value="{{ old('title') ?? ($user->name ?? (app()->environment('local') ? '' : '')) }}" required>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="col-sm-2 col-form-label text-right">Agent-2 Ref: </label>
                                    <div class="col-md-2">
                                        <select name="agreement_in_place"
                                            class="form-control @error('agreement_in_place') is-invalid @enderror text-black" required>
                                            <option selected>Select option</option>
                                            <option value="Design">Sample-1</option>
                                            <option value="Design">Sample-2</option>
                                        </select>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Expired Date: </label>
                                    <div class="col-md-2">
                                        <input name="file_open_date" type="date"
                                            class="form-control @error('file_open_date') is-invalid @enderror"
                                            placeholder=" 72"
                                            value="{{ old('file_open_date') ?? ((isset($sow->file_open_date) ? $sow->file_open_date->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}"
                                            required>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="col-sm-2 col-form-label text-right">No Of Drawings: </label>
                                    <div class="col-md-2">
                                        <select name="agreement_in_place"
                                            class="form-control @error('agreement_in_place') is-invalid @enderror text-black" required>
                                            <option selected>Select option</option>
                                            <option value="Design">1</option>
                                            <option value="Design">2</option>
                                            <option value="Design">3</option>
                                            <option value="Design">4</option>
                                            <option value="Design">5</option>
                                            <option value="Design">6</option>
                                            <option value="Design">7</option>
                                            <option value="Design">8</option>
                                            <option value="Design">9</option>
                                            <option value="Design">10</option>
                                        </select>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <label class="col-sm-2 col-form-label text-right">No Of View: </label>
                                    <div class="col-md-2">
                                        <select name="agreement_in_place"
                                            class="form-control @error('agreement_in_place') is-invalid @enderror text-black" required>
                                            <option selected>Select option</option>
                                            <option value="Design">1</option>
                                            <option value="Design">2</option>
                                            <option value="Design">3</option>
                                            <option value="Design">4</option>
                                            <option value="Design">5</option>
                                            <option value="Design">6</option>
                                            <option value="Design">7</option>
                                            <option value="Design">8</option>
                                            <option value="Design">9</option>
                                            <option value="Design">10</option>
                                        </select>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="footer">
                            <div class="float-right">
                                <button form="design-form" type="submit" class="btn btn-primary">
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
