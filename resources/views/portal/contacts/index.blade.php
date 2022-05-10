@extends('portal.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Address Book</h4>
        <ul class="nav nav-tabs nav-tabs-success" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link text active" id="pills-investor-tab" data-bs-toggle="pill" href="#pills-investor"
                    role="tab" aria-controls="pills-investor" aria-selected="false"><b> Investor(s) </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-applicant-tab" data-bs-toggle="pill" href="#pills-applicant" role="tab"
                    aria-controls="pills-applicant" aria-selected="true"><b> Applicant </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-owner-tab" data-bs-toggle="pill" href="#pills-owner" role="tab"
                    aria-controls="pills-owner" aria-selected="false"><b> Prior Art/owner Doc(s) </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-licensor-tab" data-bs-toggle="pill" href="#pills-licensor" role="tab"
                    aria-controls="pills-licensor" aria-selected="false"><b> licensor(s) </b></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" id="pills-licensee-tab" data-bs-toggle="pill" href="#pills-licensee"
                    role="tab" aria-controls="pills-licensee" aria-selected="false"><b> Licensee(s) </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-consultant-tab" data-bs-toggle="pill" href="#pills-consultant"
                    role="tab" aria-controls="pills-consultant" aria-selected="false"><b> Consultant(s) </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-agent-tab" data-bs-toggle="pill" href="#pills-agent"
                    role="tab" aria-controls="pills-agent" aria-selected="false"><b> Agent/External Counsel </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-paralegal-tab" data-bs-toggle="pill" href="#pills-paralegal"
                    role="tab" aria-controls="pills-paralegal" aria-selected="false"><b> Paralegal(s) </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-attorney-tab" data-bs-toggle="pill" href="#pills-attorney"
                    role="tab" aria-controls="pills-attorney" aria-selected="false"><b> Attorney(s) </b></a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-investor" role="tabpanel" aria-labelledby="pills-investor-tab">
                <x-forms.contacts.investor
                    id="create-investor-modal"
                    class="btn btn-primary btn-sm"
                    :countries="$countries"
                    title="Create Investor"
                />
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Investor ID</th>
                                <th>Surname</th>
                                <th>Given Name(s)</th>
                                <th>Nationality</th>
                                <th>Employment Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-applicant" role="tabpanel"
                aria-labelledby="pills-applicant-tab">
                <x-forms.contacts.applicant
                    id="create-contact-modal"
                    class="btn btn-primary btn-sm"
                    :countries="$countries"
                    title="Create Applicant"
                />
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Nationality</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>john@doe.test</td>
                                <td>+1 77322 728 32</td>
                                <td>Canada</td>
                                <td>Approved</td>
                                <td class="text-center">
                                    <a class="btn btn-outline-primary btn-sm"
                                        href="#">
                                        View
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-owner" role="tabpanel" aria-labelledby="pills-owner-tab">
                <h5>Sorry, no owners are available</h5>
            </div>
            <div class="tab-pane fade" id="pills-licensor" role="tabpanel" aria-labelledby="pills-licensor-tab">
                <x-forms.contacts.licensor
                    id="create-licensor-modal"
                    class="btn btn-primary btn-sm"
                    :countries="$countries"
                    title="Create Licensor"
                />
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Nationality</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>john@doe.test</td>
                                <td>+1 77322 728 32</td>
                                <td>Canada</td>
                                <td>Approved</td>
                                <td class="text-center">
                                    <a class="btn btn-outline-primary btn-sm"
                                        href="#">
                                        View
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-licensee" role="tabpanel" aria-labelledby="pills-licensee-tab">
                <x-forms.contacts.licensee
                    id="create-licensor-modal"
                    class="btn btn-primary btn-sm"
                    :countries="$countries"
                    title="Create Licensor"
                />
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Nationality</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>john@doe.test</td>
                                <td>+1 77322 728 32</td>
                                <td>Canada</td>
                                <td>Approved</td>
                                <td class="text-center">
                                    <a class="btn btn-outline-primary btn-sm"
                                        href="#">
                                        View
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-consultant" role="tabpanel" aria-labelledby="pills-consultant-tab">
                <div class="media">
                    <h5>Sorry, no consultants are available</h5>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-agent" role="tabpanel" aria-labelledby="pills-agent-tab">
                <x-forms.contacts.agent
                    id="create-licensor-modal"
                    class="btn btn-primary btn-sm"
                    :countries="$countries"
                    title="Create Licensor"
                />
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Nationality</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>john@doe.test</td>
                                <td>+1 77322 728 32</td>
                                <td>Canada</td>
                                <td>Approved</td>
                                <td class="text-center">
                                    <a class="btn btn-outline-primary btn-sm"
                                        href="#">
                                        View
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-paralegal" role="tabpanel" aria-labelledby="pills-paralegal-tab">
                    <h5>Sorry, no paralegals are available</h5>
            </div>
            <div class="tab-pane fade" id="pills-paralegal" role="tabpanel" aria-labelledby="pills-paralegal-tab">
                    <h5>Sorry, no attorneys are available</h5>
            </div>
        </div>
    </div>
</div>
@endsection