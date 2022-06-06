@extends('layouts.master')

@section('content')
  <!--start content-->
  <main class="page-content">


    <div class="card">
        <div class="card-header py-3">
            <div class="row g-3">
                <div class="col-lg-3 col-md-6 me-auto">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" >
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Book Title</th>
                            <th>Author</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>  <img class="img-fluid rounded-4 shadow-2-strong" src="{{ asset("storage/$book->image") }}" style="width:150px;height:200px;"></td>
                                <td><a id="book-list" href="{{ route('borrower.show-catalog',$book->id) }}">{{ $book->title }}</a></td>
                                <td>{{ $book->writer }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

  </main>
<!--end page main-->

@endsection
