@extends('portal.layouts.app')

@section('content')   
    <x-forms.disclosure :status="$status" :attorneys="$attorneys" :paralegals="$paralegals" />

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Title: Invention Disclosure | Reference Number: ayu7687/t767/21</h4>
            <ul class="nav nav-tabs nav-tabs" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-action-tab" data-bs-toggle="pill" href="#pills-action" role="tab"
                        aria-controls="pills-action" aria-selected="true">Action</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-cited-tab" data-bs-toggle="pill" href="#pills-cited" role="tab"
                        aria-controls="pills-cited" aria-selected="false">Prior Art/Cited Doc(s)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-related-tab" data-bs-toggle="pill" href="#pills-related" role="tab"
                        aria-controls="pills-related" aria-selected="false">Related Link(s)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-investor-tab" data-bs-toggle="pill" href="#pills-investor"
                        role="tab" aria-controls="pills-investor" aria-selected="false">Investor(s)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-compensation-tab" data-bs-toggle="pill" href="#pills-compensation"
                        role="tab" aria-controls="pills-compensation" aria-selected="false">Inventor Compensation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-document-tab" data-bs-toggle="pill" href="#pills-document"
                        role="tab" aria-controls="pills-document" aria-selected="false">Document(s)</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-action" role="tabpanel"
                    aria-labelledby="pills-action-tab">
                    <div class="media">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Action Code</th>
                                        <th>Action Spellout</th>
                                        <th>Due Date</th>
                                        <th>Taken Date</th>
                                        <th>Completed Date</th>
                                        <th>Responsible Person</th>
                                        <th>Notes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
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
                </div>
                <div class="tab-pane fade" id="pills-cited" role="tabpanel" aria-labelledby="pills-cited-tab">
                    <div class="media">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Patentee/Applicant</th>
                                        <th>Country</th>
                                        <th>Applicant No.</th>
                                        <th>Application Date</th>
                                        <th>Publication No.</th>
                                        <th>Publication Date</th>
                                        <th>Granted No.</th>
                                        <th>Granted Date</th>
                                        <th>Publication/Author</th>
                                        <th>Kind code</th>
                                        <th>Include in IDS</th>
                                        <th>Submitted as an IDS</th>
                                        <th>Case of ref submitted on</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>Country</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Yes</td>
                                        <td>Yes</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-related" role="tabpanel" aria-labelledby="pills-related-tab">
                    <div class="media">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Reference Number</th>
                                        <th>Country</th>
                                        <th>Application Number</th>
                                        <th>Application Date</th>
                                        <th>Inventors</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>23456121</td>
                                        <td>UK</td>
                                        <td>rt4523I2</td>
                                        <td>12/06/2022</td>
                                        <td>Inventor</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-investor" role="tabpanel" aria-labelledby="pills-investor-tab">
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
                <div class="tab-pane fade" id="pills-compensation" role="tabpanel"
                    aria-labelledby="pills-compensation-tab">
                    <div class="media">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Investor Name</th>
                                        <th>Contribution</th>
                                        <th>Compensation Calculation</th>
                                        <th>Compensation Towards</th>
                                        <th>Compensation Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>mm/dd/yyyy</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-document" role="tabpanel" aria-labelledby="pills-document-tab">
                    <div class="media">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Document</th>
                                        <th>Name of Document</th>
                                        <th>Upload Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>mm/dd/yyyy</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
