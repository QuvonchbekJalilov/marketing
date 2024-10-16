@if ($languages->count() > 0)
    @foreach($languages as $language)
    <tr class="single-item">
        <td>#{{ $loop->iteration }}</td>
        <td>{{ $language->name_uz }}</td>
        <td>{{ $language->name_ru }}</td>
        <td>{{ $language->name_en }}</td>
        <td>{{ $language->code }}</td>
        <td>
            <div class="hstack gap-2 justify-content-end">
                <a href="{{ route('languages.show', $language->id) }}" class="avatar-text avatar-md">
                    <i class="feather feather-eye"></i>
                </a>
                <a href="{{ route('languages.edit', $language->id) }}" class="avatar-text avatar-md">
                    <i class="feather feather-edit"></i>
                </a>
                <form class="avatar-text avatar-md" method="POST" onsubmit="confirmDelete(event)" action="{{ route('languages.destroy', $language->id) }}">
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
                <strong>Tillar topilmadi!</strong> Iltimos, keyinroq qaytib ko'ring.
            </div>
        </td>
    </tr>
@endif
