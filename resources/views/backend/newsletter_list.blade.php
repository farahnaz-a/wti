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
        <h2>All Subscriber List </h2>
        <button data-toggle="modal" data-target="#sendMailModal" type="button" class="btn btn-outline-primary"> Send Mail</button>
        <div class="table-responsive"> 
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th> 
                        <th scope="col">status</th> 
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($subscribers as $subscriber)
                        <tr>
                            <th> {{ $loop->iteration }}</th>
                            <td>{{ $subscriber->email }}</td>
                            <td>{{ $subscriber->status }}</td>
                            <td><div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu">  
                                    <form action="{{ route('subscriber.status.change') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $subscriber->id }}">
                                        <button class="dropdown-item" type="submit">Change Status</button>
                                    </form>

                                    <form action="{{ route('subscriber.destroy') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $subscriber->id }}">
                                        <button class="dropdown-item" type="submit">Delete</button>
                                    </form>

                                </div>
                              </div>
                            </td>
                        </tr>
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
    
    <!-- Modal -->
    <div class="modal fade" id="sendMailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Send mail</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body"> 
                <form action="{{ route('admin.subscriber.mail.send') }}" id="mailForm" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="subject">Subject</label> 
                      <input type="text" name="subject" id="subject" class="form-control">
                    </div>  
                    <div class="form-group">
                      <label for="message">Message</label> 
                      <textarea name="mail_body" id="message" class="form-control"></textarea>
                    </div>  
                  </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" form="mailForm" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>
@endsection

@push('js')
<script>
    $(document).ready(function(){

    });
</script>
@endpush
