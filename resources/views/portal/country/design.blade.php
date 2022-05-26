@extends('portal.layouts.app')

@section('content')
<div class="card">
    <x-forms.country.design :countries="$countries" :attorneys="$attorneys" :paralegals="$paralegals" />
    <div class="card-body">
        <h4 class="card-title">Design Record's</h4>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-design" role="tabpanel" aria-labelledby="pills-patent-tab">
                <div class="table-responsive">
                    <table id="Devrodesign" class="table table-striped table-bordered" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Info-1</th>
                                <th>Info-2</th>
                                <th>Info-3</th>
                                <th>Info-4</th>
                                <th>Info-5</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>Info-1</td>
                                <td>Info-2</td>
                                <td>Info-3</td>
                                <td>Info-4</td>
                                <td>Info-5</td>
                                <td>
                                    <a class="btn btn-outline-primary btn-sm"
                                        href="#">
                                        View
                                    </a>
                                    <a class="btn btn-outline-warning btn-sm"
                                        href="#">
                                        Edit
                                    </a>
                                    <a class="btn btn-outline-danger btn-sm"
                                        href="#">
                                        Delete
                                    </a>
                                </td>
                            </tr>
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
        $('#Devrodesign').DataTable();
    });
</script>