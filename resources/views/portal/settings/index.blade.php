@extends('portal.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Address Book</h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                        <th>Nationality</th>
                        <th>Employment Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($settings as $settings)
                        <tr>
                            <td>{{ $setting->name }}</td>
                            <td>{{ $setting->description }}</td>
                            @if ($setting->type == 'multiple')
                                {{-- @can('view', \App\Models\Setting::class) --}}
                                    <a href="{{ route('settings.show', [ 'setting' => $setting ]) }}" class="btn btn-primary btn-sm" title="Open Setting">
                                        View
                                    </a>
                                {{-- @endcan --}}
                            @else
                                {{-- @can('update', \App\Models\Setting::class) --}}
                                    <x-modals.forms.settings.value
                                        id="value-modal-{{ $setting->values[0]['id'] }}"
                                        class="btn btn-primary btn-sm"
                                        :value="$setting->values[0]"
                                        title="Edit Setting"
                                    >
                                        <x-slot:buttonText>
                                            Edit
                                        </x-slot>
                                    </x-modals.forms.value>
                                {{-- @endcan --}}
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection