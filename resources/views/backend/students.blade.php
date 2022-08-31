@extends('frontend.layouts.app')

{{-- Site title  --}}
@section('title') @endsection

{{-- Meta Description --}}
@section('meta_description') @endsection

{{-- Meta Keywords  --}}
@section('meta_keywords') @endsection

{{-- Meta facebook type --}}
@section('fb_type') @endsection

{{-- Meta facebook url  --}}
@section('fb_url') @endsection

{{-- Meta facebook title --}}
@section('fb_title') @endsection

{{-- Meta facebook Description --}}
@section('fb_description') @endsection

{{-- Meta Twitter card  --}}
@section('twitter_card') @endsection

{{-- Meta Twitter url  --}}
@section('twitter_url') @endsection

{{-- Meta Twitter title  --}}
@section('twitter_title') @endsection

{{-- Meta Twitter description  --}}
@section('twitter_desciption') @endsection

{{-- Footer border --}}
{{-- @section('footer_border', ' border-top-0') --}}

{{-- Menu Active --}}
@section('YieldName', 'active')

{{-- Stye  --}}
@push('css')
<style>
    
</style>
@endpush

{{-- Main Content --}}
@section('content')
<div class="container min-vh-100 py-5">
    <h2>All Student List </h2> 
    <div class="table-responsive"> 
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th> 
                    <th scope="col">Email</th> 
                    <th scope="col">Phone</th> 
                    <th scope="col">status</th> 
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                    <tr>
                        <th> {{ $loop->iteration }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->status }}</td>
                        <td><div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu">   
                                @if ($student->status == 'pending')
                                    <button class="dropdown-item" type="button" data-toggle="modal" data-target="#approveModal{{ $student->id }}">Approve</button>
                                    <button class="dropdown-item" type="button" data-toggle="modal" data-target="#rejectModal{{ $student->id }}">Reject</button>
                                @elseif($student->status == 'rejected')
                                    <button class="dropdown-item" type="button" data-toggle="modal" data-target="#approveModal{{ $student->id }}">Approve</button>
                                    <button class="dropdown-item" type="button" data-toggle="modal" data-target="#pendingModal{{ $student->id }}">Pending</button>
                                @else
                                    <button class="dropdown-item" type="button" data-toggle="modal" data-target="#pendingModal{{ $student->id }}">Pending</button>
                                @endif
                            </div>
                        </div>
                        </td>
                    </tr>
                    @push('all_modals')
                        <!-- Approve Modal -->
                        <div class="modal fade" id="approveModal{{ $student->id }}" tabindex="-1" aria-labelledby="approvedModalLabel{{ $student->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="approvedModalLabel{{ $student->id }}">Make Approved</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('admin.student.approve') }}" method="POST">
                                    <div class="modal-body"> 
                                        @csrf 
                                        <div class="form-group">
                                            <label for="message">Batch</label> 
                                            <input type="hidden" name="id" value="{{ $student->id }}">
                                            <select name="batch_id" class="form-control" required>
                                                <option disabled value="" selected>Select Batch*</option>
                                                <option value="0">Batch 1</option>
                                            </select> 
                                        </div>  
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>

                        <!-- Reject Modal -->
                        <div class="modal fade" id="rejectModal{{ $student->id }}" tabindex="-1" aria-labelledby="rejectModalLabel{{ $student->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="rejectModalLabel{{ $student->id }}">Make Rejected</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('admin.student.reject') }}" method="POST">
                                    <div class="modal-body"> 
                                        @csrf 
                                        <div class="form-group">
                                            <label for="message">Why Reject??</label> 
                                            <input type="hidden" name="id" value="{{ $student->id }}">
                                            <textarea name="mail_body" id="message" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>

                        <!-- Pending Modal -->
                        <div class="modal fade" id="pendingModal{{ $student->id }}" tabindex="-1" aria-labelledby="pendingModalLabel{{ $student->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="pendingModalLabel{{ $student->id }}">Make Pending</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('admin.student.pending') }}" method="POST">
                                    <div class="modal-body"> 
                                        @csrf 
                                        <div class="form-group">
                                            <label for="message">Why Pending??</label> 
                                            <input type="hidden" name="id" value="{{ $student->id }}">
                                            <textarea name="mail_body" id="message" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    @endpush
                @empty
                    <tr>
                        <td colspan="100">
                            <h2 class="text-center">No Record Found</h2>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div> 
@endsection

@push('js')
<script>
    $(document).ready(function(){

    });
</script>
@endpush
