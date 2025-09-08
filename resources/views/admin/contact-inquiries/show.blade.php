@extends('admin.master')

@section('title','View Message')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Message Details</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.contact-inquiries.index') }}">Contact Inquiries</a></li>
                <li class="breadcrumb-item active">View</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">From {{ $inquiry->first_name }} {{ $inquiry->last_name }}</h5>

                        <table class="table table-borderless w-auto">
                            <tr><th>Email</th><td>{{ $inquiry->email }}</td></tr>
                            <tr><th>Phone</th><td>{{ $inquiry->phone ?: '-' }}</td></tr>
                            <tr><th>Subject</th><td>{{ $inquiry->subject }}</td></tr>
                            <tr><th>Received</th><td>{{ optional($inquiry->created_at)->format('M d, Y H:i') }}</td></tr>
                        </table>

                        <div class="mt-3">
                            <h6>Message</h6>
                            <p class="mb-0">{{ $inquiry->message }}</p>
                        </div>

                        <div class="mt-4">
                            <a href="mailto:{{ $inquiry->email }}?subject=Re: {{ urlencode($inquiry->subject) }}" class="btn btn-primary"><i class="bi bi-reply"></i> Reply</a>
                            <a href="{{ route('admin.contact-inquiries.index') }}" class="btn btn-secondary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection


