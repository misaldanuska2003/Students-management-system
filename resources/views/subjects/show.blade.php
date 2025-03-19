@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0 rounded-lg">
                <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
                    <h3 class="mb-0 py-2">Subject Details</h3>
                    <a href="{{ route('subjects.index') }}" class="btn btn-light btn-sm">
                        <i class="fas fa-arrow-left me-1"></i> Back to List
                    </a>
                </div>
                <div class="card-body p-4">
                    <h2 class="display-6 fw-bold text-primary mb-4">{{ $subject->name }}</h2>
                    
                    <div class="mb-4">
                        <h5 class="text-muted mb-3">Description</h5>
                        <div class="p-3 bg-light rounded">
                            @if($subject->description)
                                <p class="mb-0">{{ $subject->description }}</p>
                            @else
                                <p class="text-muted mb-0"><em>No description provided</em></p>
                            @endif
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-between mt-5">
                        <a href="{{ route('subjects.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-list me-1"></i> All Subjects
                        </a>
                        <div>
                            <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-warning me-2">
                                <i class="fas fa-edit me-1"></i> Edit
                            </a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                <i class="fas fa-trash me-1"></i> Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Delete Modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-danger text-white">
                            <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete <strong>{{ $subject->name }}</strong>?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

