<table class="table table-striped">
    <thead>
        <tr>
            <th class="text-center" style="width:5%">No</th>
            <th class="text-center" style="width:10%">Borrower</th>
            <th class="text-center" style="width:10%">Book Title</th>
            <th class="text-center" style="width:10%">Author</th>
            <th class="text-center" style="width:10%">Rent Duration</th>
            <th class="text-center" style="width:10%">Staff In charge</th>
            <th class="text-center" style="width:10%">Status</th>
            <th class="text-center" style="width:10%">Fees</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rentals as $rental)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $rental->user->name }}</td>
                <td>{{ $rental->book->title }}</td>
                <td>{{ $rental->book->writer }}</td>
                <td>day</td>
                <td>{{ $rental->user->name }}</td>
                <td>{{ $rental->status->name }}</td>
                <td>fee</td>
            </tr>
        @endforeach
    </tbody>
</table>
