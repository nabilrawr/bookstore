@extends('layouts.master')

<style>
    .boxShadowCatalog:hover {
  box-shadow: 0 0 11px rgba(33,33,33,.2);
}
.text-ellipsis {
  width: 160px;
  overflow: hidden;
  display: inline-block;
  text-overflow: ellipsis;
  white-space: nowrap;
}
</style>

@section('content')

   <!--start content-->
   <main class="page-content">

      <div class="card">
        <form method="POST" action="{{  route('borrower.find-catalog') }}">
            @csrf
        <div class="card-header py-3">
            <div class="row g-3 align-items-center">
              <div class="col-lg-3 col-5 col-md-3">
                <select class="form-select" name="category_id">
                  <option value="">Please Choose Category</option>
                  @foreach ( $categories as $category )
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-lg-2 col-5 col-md-3">
                  <input type="submit" class="btn btn-dark px-5 " value="Search">
                </div>

            </div>
           </div>
        </form>
        @if (!empty($breadcumb))
        <div style="white-space: nowrap ;">&emsp;<a style="text" href="{{ route('borrower.index-catalog') }}">All Categories</a> -> {{ $breadcumb->name }}</div>
        @endif
         <div class="card-body">
           <div class="product-grid">
             <div class="row row-cols-1 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-3">

                @foreach ($books as $book)
                <div class="col">
                    <div class="boxShadowCatalog">
                        <div class="card border shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body text-center">

                                <img class="img-fluid rounded-4 shadow-2-strong" src="{{ asset("storage/$book->image") }}" style="width:150px;height:200px;">
                                <hr>
                                    <span class="text-ellipsis"><a href="{{ route('borrower.show-catalog',$book->id) }}">{{ $book->title }}</a></span>
                                    <span class="text-ellipsis">By :{{ $book->writer }}</span>
                                <hr>
                                <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3">
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
</div><!--end row-->
</div>
<nav class="float-end mt-4" aria-label="Page navigation">
<ul class="pagination">
<li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
<li class="page-item active"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>
</nav>

</div>
</div>

</main>
<!--end page main-->

@endsection

