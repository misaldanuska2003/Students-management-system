@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0 rounded-lg">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0 py-2">Add New Subject</h3>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('subjects.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name" class="form-label fw-bold">Subject Name</label>
                            <input type="text" name="name" class="form-control form-control-lg" required placeholder="Enter subject name">
                        </div>
                        <div class="form-group mb-4">
                            <label for="description" class="form-label fw-bold">Description</label>
                            <textarea name="description" class="form-control" rows="4" placeholder="Enter subject description"></textarea>
                            <small class="text-muted">Provide a detailed description of this subject</small>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('subjects.index') }}" class="btn btn-outline-secondary me-md-2">Cancel</a>
                            <button type="submit" class="btn btn-primary px-4">
                                <i class="fas fa-save me-2"></i>Save Subject
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

