@if ($categories->count() > 0)
    @foreach($categories as $category)
    <tr class="single-item">
        <td>#{{ $loop->iteration }}</td>
        <td>{{ $category->name_uz }}</td>
        <td>{{ $category->name_ru }}</td>
        <td>{{ $category->name_en }}</td>
        <td>{{ $category->code }}</td>
        <td>
            <div class="hstack gap-2 justify-content-end">
                <a href="{{ route('categories.show', $category->id) }}" class="avatar-text avatar-md">
                    <i class="feather feather-eye"></i>
                </a>
                <a href="{{ route('categories.edit', $category->id) }}" class="avatar-text avatar-md">
                    <i class="feather feather-edit"></i>
                </a>
                <form class="avatar-text avatar-md" method="POST" onsubmit="confirmDelete(event)" action="{{ route('categories.destroy', $category->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn text-dark p-0 border-0" style="background: none;">
                        <i class="feather feather-trash-2"></i>
                    </button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
@else
    <tr>
        <td colspan="6" class="text-center">
            <div class="alert alert-warning" role="alert">
                <i class="feather icon-info"></i> 
                <strong>Kategoriyalar topilmadi!</strong> Iltimos, keyinroq qaytib ko'ring.
            </div>
        </td>
    </tr>
@endif
