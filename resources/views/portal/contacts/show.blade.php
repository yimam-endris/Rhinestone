@extends('portal.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Address Book</h4>
        <ul class="nav nav-pills nav-pills-success" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="pills-investor-tab" data-bs-toggle="pill" href="#pills-investor"
                    role="tab" aria-controls="pills-investor" aria-selected="false">Investor(s)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" id="pills-applicant-tab" data-bs-toggle="pill" href="#pills-applicant" role="tab"
                    aria-controls="pills-applicant" aria-selected="true">Applicant</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-owner-tab" data-bs-toggle="pill" href="#pills-owner" role="tab"
                    aria-controls="pills-owner" aria-selected="false">Prior Art/owner Doc(s)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-licensor-tab" data-bs-toggle="pill" href="#pills-licensor" role="tab"
                    aria-controls="pills-licensor" aria-selected="false">licensor(s)</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" id="pills-licensee-tab" data-bs-toggle="pill" href="#pills-licensee"
                    role="tab" aria-controls="pills-licensee" aria-selected="false">Licensee(s)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-consultant-tab" data-bs-toggle="pill" href="#pills-consultant"
                    role="tab" aria-controls="pills-consultant" aria-selected="false">Consultant(s)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-agent-tab" data-bs-toggle="pill" href="#pills-agent"
                    role="tab" aria-controls="pills-agent" aria-selected="false">Agent/External Counsel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-paralegal-tab" data-bs-toggle="pill" href="#pills-paralegal"
                    role="tab" aria-controls="pills-paralegal" aria-selected="false">Paralegal(s)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-attorney-tab" data-bs-toggle="pill" href="#pills-attorney"
                    role="tab" aria-controls="pills-attorney" aria-selected="false">Attorney(s)</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-investor" role="tabpanel" aria-labelledby="pills-investor-tab">
                <div class="media">
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
                                    <td>Employer</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-applicant" role="tabpanel"
                aria-labelledby="pills-applicant-tab">
                <div class="media">
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
            </div>
            <div class="tab-pane fade" id="pills-owner" role="tabpanel" aria-labelledby="pills-owner-tab">
                <div class="media">
                    <h5>Sorry, no owners are available</h5>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-licensor" role="tabpanel" aria-labelledby="pills-licensor-tab">
                <div class="media">
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
            </div>
            <div class="tab-pane fade" id="pills-licensee" role="tabpanel" aria-labelledby="pills-licensee-tab">
                <div class="media">
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
            </div>
            <div class="tab-pane fade" id="pills-consultant" role="tabpanel" aria-labelledby="pills-consultant-tab">
                <div class="media">
                    <h5>Sorry, no consultants are available</h5>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-agent" role="tabpanel" aria-labelledby="pills-agent-tab">
                <div class="media">
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
            </div>
            <div class="tab-pane fade" id="pills-paralegal" role="tabpanel" aria-labelledby="pills-paralegal-tab">
                <div class="media">
                    <h5>Sorry, no paralegals are available</h5>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-paralegal" role="tabpanel" aria-labelledby="pills-paralegal-tab">
                <div class="media">
                    <h5>Sorry, no attorneys are available</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection