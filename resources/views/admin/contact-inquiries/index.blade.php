@extends('admin.master')

@section('title','Contact Inquiries')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Contact Inquiries</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Contact Inquiries</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Recent Messages</h5>
                        <div class="table-responsive">
                            <table class="table table-striped align-middle">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Received</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($inquiries as $inq)
                                        <tr>
                                            <td>{{ $inq->id }}</td>
                                            <td>{{ $inq->first_name }} {{ $inq->last_name }}</td>
                                            <td>{{ $inq->email }}</td>
                                            <td>{{ $inq->subject }}</td>
                                            <td>{{ $inq->created_at->diffForHumans() }}</td>
                                            <td>
                                                <a href="{{ route('admin.contact-inquiries.show', $inq) }}" class="btn btn-sm btn-info"><i class="bi bi-eye"></i></a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="6" class="text-center">No messages yet.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center">{{ $inquiries->links('pagination::bootstrap-4') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection


