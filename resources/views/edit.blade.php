<!-- edit.blade.php -->
<form action="{{ route('update', $kelas->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <label>Nama Kelas</label>
    <input type="text" name="name" value="{{ $kelas->name }}" required>
    
    <button type="submit">Update</button>
    <a href="{{ route('index') }}">Kembali</a>
</form>