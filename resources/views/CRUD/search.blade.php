<h1>Kết quả tìm kiếm cho "{{ $searchTerm }}"</h1>

@if ($products->isEmpty())
    <p>Không tìm thấy sản phẩm nào.</p>
@endif
<table >
    <thead>
        <tr>
            <th>ID</th>
            <th>FullName</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
    @foreach($products as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->fullName}}</td>
            <td>{{$row->email}}</td>
        </tr>
        @endforeach
    </tbody>
</table>