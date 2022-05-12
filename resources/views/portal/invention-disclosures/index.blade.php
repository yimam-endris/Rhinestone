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
                                @foreach ($inventionDisclosures as $Disitem)
                                <tr>
                                    <td>{{$Disitem->reference_number}}</td>
                                    <td>{{$Disitem->title}}</td>
                                    <td>{{$Disitem->file_open_date}}</td>
                                    <td>
                                        <label class="badge badge-info">{{$Disitem->status}}</label>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-primary btn-sm"
                                            href="{{ route('invention-disclosures.show', ['invention_disclosure' => 2]) }}">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
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
