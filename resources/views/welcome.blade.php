@if(session('success'))
    <div style="background:green; color:white; padding:10px;">
        {{ session('success') }}
        <script>
            setTimeout(function() {
                window.location.href = "{{ route('index') }}";
            }, 2000);
        </script>
    </div>
@endif
<!-- Form Tambah -->
<form action="{{ route('store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nama Kelas" required>
    <button type="submit">Tambah Kelas</button>
</form>

<hr>

<!-- Tabel Data -->
<table border="1">
    <tr>
        <th>kelas</th>
    </tr>
    @foreach($kelas as $k)
    <tr>
        <td>{{ $k->name }}</td>
        <td>
            <!-- Form Hapus -->
            <form action="{{ route('delete', $k->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
            <a href="{{ route('edit', $k->id)}}" 
                           class="text-amber-600 hover:bg-amber-50 px-3 py-1 rounded-md text-sm font-medium transition border border-amber-200">
                           Edit
                        </a>
        </td>
    </tr>
    @endforeach
</table>