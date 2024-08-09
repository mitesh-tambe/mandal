@extends('layouts.layout')
 
@section('content')
    <div class="container">
        @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
        @endsession
        
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div>Manage Members</div>
                    
                    <div>
                        <a href="{{ route('members.create') }}" class="btn btn-primary ms-auto">Add Member</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

{{-- @push('styles')
<style>
    .custom-card-header {
        display: flex !important;
        justify-content: space-between !important;
        align-items: center !important;
    }
</style>
@endpush --}}
 
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush