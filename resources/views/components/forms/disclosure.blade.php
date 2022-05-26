@props(['status', 'attorneys', 'paralegals'])

<div class="card">
    <div class="card-body">
        <div class="mt-4">
            <div class="accordion accordion-bordered" id="accordion-4" role="tablist">
                <div class="card">
                    <div class="card-header" role="tab" id="heading-10">
                        <h6 class="font-weight-bold mb-0">
                            <a data-bs-toggle="collapse" href="#collapse-10" aria-expanded="true"
                                aria-controls="collapse-10">
                                @if (Route::is('invention-disclosures.index'))
                                    <center><b> Create an Invention Disclosure </b></center>
                                @else
                                    <center><b> Update Invention Disclosure ayu7687/t767/21 </b></center>
                                @endif
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
                                    <div class="col-4">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">IDs Ref. No.: </label>
                                            <div class="col-sm-9">
                                                <input name="reference_number" type="text"
                                                    class="form-control @error('reference_number') is-invalid @enderror"
                                                    placeholder=" IDs Ref. No"
                                                    value="{{ old('reference_number') ?? ($sow->reference_number ?? (app()->environment('local') ? '' : '')) }}"
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
                                                <input name="title" type="title" class="form-control"
                                                    placeholder=" Title"
                                                    value="{{ old('title') ?? ($user->name ?? (app()->environment('local') ? '' : '')) }}"
                                                    required>
                                            </div>
                                            @error('reference_number')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Status: </label>
                                            <div class="col-sm-9">
                                                <select name="status"
                                                    class="form-control @error('status') is-invalid @enderror" required>
                                                    <option value="">Select application status</option>
                                                    @foreach ($status as $status)
                                                        <option value="{{ $status }}"
                                                            {{ old('status') == $status ? 'selected' : '' }}>
                                                            {{ $status }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Is there an Agreement in place?:
                                            </label>
                                            <div class="col-sm-9">
                                                <select name="agreement_in_place"
                                                    class="form-control @error('agreement_in_place') is-invalid @enderror"
                                                    required>
                                                    <option value="">Select option</option>
                                                    <option value="YES">YES</option>
                                                    <option value="NO">NO</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Date File Opened: </label>
                                            <div class="col-sm-9">
                                                <input name="file_open_date" type="date"
                                                    class="form-control @error('file_open_date') is-invalid @enderror"
                                                    placeholder=" 72"
                                                    value="{{ old('file_open_date') ?? ((isset($sow->file_open_date) ? $sow->file_open_date->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Date of Invention: </label>
                                            <div class="col-sm-9">
                                                <input name="date_of_invention" type="date"
                                                    class="form-control @error('date_of_invention') is-invalid @enderror"
                                                    placeholder=" 72"
                                                    value="{{ old('date_of_invention') ?? ((isset($sow->date_of_invention) ? $sow->date_of_invention->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Keyword: </label>
                                            <div class="col-sm-9">
                                                <input name="keyword" type="text"
                                                    class="form-control @error('keyword') is-invalid @enderror"
                                                    placeholder=" Keywords"
                                                    value="{{ old('keyword') ?? ($sow->keyword ?? (app()->environment('local') ? '' : '')) }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Business Unit: </label>
                                            <div class="col-sm-9">
                                                <input name="cost_center" type="cost_center" class="form-control"
                                                    placeholder=" Center 1"
                                                    value="{{ old('cost_center') ?? ($user->cost_center ?? (app()->environment('local') ? '' : '')) }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Joint Venture: </label>
                                            <div class="col-sm-9">
                                                <select name="joint_venture"
                                                    class="form-control @error('joint_venture') is-invalid @enderror"
                                                    required>
                                                    <option value="">Select option</option>
                                                    <option value="YES">YES</option>
                                                    <option value="NO">NO</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Primary Attorney: </label>
                                            <div class="col-sm-9">
                                                <select name="primary_attorney"
                                                    class="form-control @error('primary_attorney') is-invalid @enderror"
                                                    required>
                                                    <option value="">Select a primary attorney</option>
                                                    @foreach ($attorneys as $attorney)
                                                        <option value="{{ $attorney->id }}"
                                                            {{ old('primary_attorney') == $attorney->id ? 'selected' : '' }}>
                                                            {{ $attorney->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Secondary Attorney: </label>
                                            <div class="col-sm-9">
                                                <select name="primary_attorney"
                                                    class="form-control @error('primary_attorney') is-invalid @enderror"
                                                    required>
                                                    <option value="">Select a secondary attorney</option>
                                                    @foreach ($attorneys as $attorney)
                                                        <option value="{{ $attorney->id }}"
                                                            {{ old('primary_attorney') == $attorney->id ? 'selected' : '' }}>
                                                            {{ $attorney->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Primary Paralegal: </label>
                                            <div class="col-sm-9">
                                                <select name="primary_attorney"
                                                    class="form-control @error('primary_attorney') is-invalid @enderror"
                                                    required>
                                                    <option value="">Select a primary paralegal</option>
                                                    @foreach ($attorneys as $attorney)
                                                        <option value="{{ $attorney->id }}"
                                                            {{ old('primary_attorney') == $attorney->id ? 'selected' : '' }}>
                                                            {{ $attorney->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Secondary Attorney: </label>
                                            <div class="col-sm-9">
                                                <select name="primary_attorney"
                                                    class="form-control @error('primary_attorney') is-invalid @enderror"
                                                    required>
                                                    <option value="">Select a secondary attorney</option>
                                                    @foreach ($attorneys as $attorney)
                                                        <option value="{{ $attorney->id }}"
                                                            {{ old('primary_attorney') == $attorney->id ? 'selected' : '' }}>
                                                            {{ $attorney->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Business Unit Code: </label>
                                            <div class="col-sm-9">
                                                <input name="center_code" type="center_code" class="form-control"
                                                    placeholder=" 100"
                                                    value="{{ old('center_code') ?? ($user->center_code ?? (app()->environment('local') ? '' : '')) }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Invention Description: </label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="invention_notes"
                                                    placeholder="Invention description" name="invention_notes"
                                                    placeholder="Invention description">{{ $evaluation->suggestion ?? '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">General Notes: </label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="invention_notes"
                                                    placeholder="Invention description" name="invention_notes"
                                                    placeholder="Invention description">{{ $evaluation->suggestion ?? '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Confirmed Inventors: </label>
                                            <div class="col-sm-9">
                                                <textarea cols="600" rows="3" class="form-control"
                                                    id="proposed_investors" name="proposed_investors"
                                                    placeholder="Proposed Investor">{{ $evaluation->suggestion ?? '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Approved for Filing: </label>
                                            <div class="col-sm-9">
                                                <select name="approved_for_filing"
                                                    class="form-control @error('approved_for_filing') is-invalid @enderror"
                                                    required>
                                                    <option value="">Select option</option>
                                                    <option value="YES">YES</option>
                                                    <option value="NO">NO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Reasons of Approval or Rejection:
                                            </label>
                                            <div class="col-sm-9">
                                                <textarea cols="600" rows="3" class="form-control" id="reason"
                                                    name="reason"
                                                    placeholder="Reasons of Approval or Rejection">{{ $evaluation->suggestion ?? '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Approved By: </label>
                                            <div class="col-sm-9">
                                                <textarea cols="600" rows="3" class="form-control" id="reason"
                                                    name="reason"
                                                    placeholder="Reasons of Approval or Rejection">{{ $evaluation->suggestion ?? '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Approval Date: </label>
                                            <div class="col-sm-9">
                                                <input name="date_of_invention" type="date"
                                                    class="form-control @error('date_of_invention') is-invalid @enderror"
                                                    placeholder=""
                                                    value="{{ old('date_of_invention') ?? ((isset($sow->date_of_invention) ? $sow->date_of_invention->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Proposed Inventors: </label>
                                            <div class="col-sm-9">
                                                <textarea cols="600" rows="3" class="form-control" id="reason"
                                                    name="reason"
                                                    placeholder="Reasons of Approval or Rejection">{{ $evaluation->suggestion ?? '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="float-right">
                                            <button form="disclosure-form" type="submit" class="btn btn-primary">
                                                Create Patent Disclosure
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
