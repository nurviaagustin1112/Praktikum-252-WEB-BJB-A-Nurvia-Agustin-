<a href="{{ route('kategori.edit',$kategori) }}" class="btn btn-warning btn-sm">
    <i class="fas fa-edit"></i>
</a>

<button
class="btn btn-danger btn-sm"
onclick="deleteData('{{ route('kategori.destroy',$kategori) }}')">
<i class="fas fa-trash"></i>
</button>
