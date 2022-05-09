@extends('portal.layouts.app')

@section('content')
    <div class="card">
        <x-forms.disclosure :status="$status" :attorneys="$attorneys" :paralegals="$paralegals" />
        <div class="card-body">
            <h4 class="card-title">Invention Disclosures</h4>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Reference Number</th>
                                    <th>Title</th>
                                    <th>Date File Opened</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ayu7687/t767/21</td>
                                    <td>Invention Disclosure</td>
                                    <td>2022/04/25</td>
                                    <td>
                                        <label class="badge badge-info">Pending</label>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-primary btn-sm"
                                            href="{{ route('invention-disclosures.show', ['invention_disclosure' => 1]) }}">
                                            View
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Reference Number</th>
                                    <th>Title</th>
                                    <th>Date File Opened</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
