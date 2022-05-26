@props(['users', 'countries', 'paralegals'])

<div class="accordion accordion-bordered" id="accordion-4" role="tablist">
    <div class="card">
        <div class="card-header" role="tab" id="heading-10">
            <h6 class="font-weight-bold mb-0">
                <a data-bs-toggle="collapse" href="#collapse-10" aria-expanded="true"
                    aria-controls="collapse-10">
                    <center>Add Patent</center>
                </a>
            </h6>
        </div>
        <div id="collapse-10" class="collapse hidden" role="tabpanel" aria-labelledby="heading-10"
            data-bs-parent="#accordion-4">
            <div class="card">
                <div class="card-body row">
                    <form class="row card-body" id="patent"
                        action="{{ route('applicant-crud.store') }}" method="POST">
                        @csrf
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right">Family No: </label>
                                <div class="col-sm-9">
                                    <input name="applicant_ID" type="applicant_ID" class="form-control"
                                        placeholder=" Family No."
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
                                <label class="col-sm-3 col-form-label text-right">Status:</label>
                                <div class="col-sm-9">
                                    <select name="agreement_in_place"
                                        class="form-control @error('agreement_in_place') is-invalid @enderror text-black" required>
                                        <option selected>Select option</option>
                                        <option value="Open">Open</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Filed">Filed</option>
                                        <option value="Abandoned">Abandoned</option>
                                        <option value="Sold">Sold</option>
                                        <option value="Licenced">Licenced</option>
                                        <option value="OnHold">OnHold</option>
                                        <option value="Opposed">Opposed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right">Sub-Status:</label>
                                <div class="col-sm-9">
                                    <select name="agreement_in_place"
                                        class="form-control @error('agreement_in_place') is-invalid @enderror text-black" required>
                                        <option selected>Select option</option>
                                        <option value="Open">Open</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Filed">Filed</option>
                                        <option value="Abandoned">Abandoned</option>
                                        <option value="Sold">Sold</option>
                                        <option value="Licenced">Licenced</option>
                                        <option value="OnHold">OnHold</option>
                                        <option value="Opposed">Opposed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right">Type of Filing:</label>
                                <div class="col-sm-9">
                                    <select name="agreement_in_place"
                                        class="form-control @error('agreement_in_place') is-invalid @enderror text-black" required>
                                        <option selected>Select option</option>
                                        <option value="Open">Patent</option>
                                        <option value="Pending">Design</option>
                                        <option value="Filed">Trademark</option>
                                        <option value="Abandoned">Copyright</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right">Sub-Type of Filing:</label>
                                <div class="col-sm-9">
                                    <select name="agreement_in_place"
                                        class="form-control @error('agreement_in_place') is-invalid @enderror text-black" required>
                                        <option selected>Select option</option>
                                        <option value="Open">Sample-1</option>
                                        <option value="Pending">Sample-2</option>
                                        <option value="Filed">Sample-3</option>
                                        <option value="Abandoned">Sample-4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right">Licenced :</label>
                                <div class="col-sm-9">
                                    <select name="agreement_in_place"
                                        class="form-control @error('agreement_in_place') is-invalid @enderror text-black" required>
                                        <option selected>Select option</option>
                                        <option value="Open">Sample-1</option>
                                        <option value="Pending">Sample-2</option>
                                        <option value="Filed">Sample-3</option>
                                        <option value="Abandoned">Sample-4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right">Licensor:</label>
                                <div class="col-sm-9">
                                    <select name="primary_attorney"
                                        class="form-control @error('primary_attorney') is-invalid @enderror text-dark" required>
                                        <option value="">Select a Licensor</option>
                                        @foreach ($users as $userslist)
                                        <option value="{{ $userslist->id }}"
                                        {{ old('primary_attorney') == $userslist->id ? 'selected' : '' }}>
                                        {{ $userslist->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right">Internal Title : </label>
                                    <div class="col-sm-9">
                                        <input name="title" type="title" class="form-control"
                                            placeholder=" Internal Title"
                                            value="{{ old('title') ?? ($user->name ?? (app()->environment('local') ? '' : '')) }}" required>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right">Formal Title : </label>
                                    <div class="col-sm-9">
                                        <input name="title" type="title" class="form-control"
                                            placeholder=" Formal Title"
                                            value="{{ old('title') ?? ($user->name ?? (app()->environment('local') ? '' : '')) }}" required>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right">Attorney-1:</label>
                                <div class="col-md-5">
                                    <select name="primary_attorney"
                                        class="form-control @error('primary_attorney') is-invalid @enderror text-dark" required>
                                        <option value="">Select a Attorney-1</option>
                                        @foreach ($users as $userslist)
                                        <option value="{{ $userslist->id }}"
                                        {{ old('primary_attorney') == $userslist->id ? 'selected' : '' }}>
                                        {{ $userslist->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right">Attorney-2:</label>
                                <div class="col-md-5">
                                    <select name="primary_attorney"
                                        class="form-control @error('primary_attorney') is-invalid @enderror text-dark" required>
                                        <option value="">Select a Attorney-2</option>
                                        @foreach ($users as $userslist)
                                        <option value="{{ $userslist->id }}"
                                        {{ old('primary_attorney') == $userslist->id ? 'selected' : '' }}>
                                        {{ $userslist->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right">Paralegal-1:</label>
                                <div class="col-md-5">
                                    <select name="primary_attorney"
                                        class="form-control @error('primary_attorney') is-invalid @enderror text-dark" required>
                                        <option value="">Select a Paralegal-1</option>
                                        @foreach ($users as $userslist)
                                        <option value="{{ $userslist->id }}"
                                        {{ old('primary_attorney') == $userslist->id ? 'selected' : '' }}>
                                        {{ $userslist->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right">Paralegal-2:</label>
                                <div class="col-md-5">
                                    <select name="primary_attorney"
                                        class="form-control @error('primary_attorney') is-invalid @enderror text-dark" required>
                                        <option value="">Select a Paralegal-2</option>
                                        @foreach ($users as $userslist)
                                        <option value="{{ $userslist->id }}"
                                        {{ old('primary_attorney') == $userslist->id ? 'selected' : '' }}>
                                        {{ $userslist->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right">Cost Center No: </label>
                                    <div class="col-md-3">
                                        <input name="title" type="title" class="form-control"
                                            placeholder=" Cost No"
                                            value="{{ old('title') ?? ($user->name ?? (app()->environment('local') ? '' : '')) }}" required>
                                    </div>
                                @error('reference_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="col-sm-3 col-form-label text-right">Cost Center Code: </label>
                                    <div class="col-md-3">
                                        <input name="title" type="title" class="form-control"
                                            placeholder=" Cost Code"
                                            value="{{ old('title') ?? ($user->name ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                <button form="patent" type="submit" class="btn btn-primary">
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
