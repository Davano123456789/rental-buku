<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <table class="table my-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>User</th>
                <th>Book</th>
                <th>Rent Date</th>
                <th>Return Date</th>
                <th>Actual Rent Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rentlog as $item)
                <tr
                    class="{{ $item->actual_return_date == null ? '' : ($item->return_date < $item->actual_return_date ? 'bg-danger text-white' : 'bg-success text-white') }}">
                    <td>
                        {{ $loop->iteration }}

                    </td>
                    <td>
                        {{ $item->user->username }}
                    </td>
                    <td>
                        {{ $item->book->title }}
                    </td>
                    <td>
                        {{ $item->rent_date }}
                    </td>
                    <td>
                        {{ $item->return_date }}
                    </td>
                    <td>
                        @if ($item->actual_return_date == null)
                            Belum dikembalikan
                        @else
                            {{ $item->actual_return_date }}
                        @endif

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
