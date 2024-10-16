@if ($sectors->count() > 0)
    @foreach($sectors as $sector)
    <tr class="single-item">
        <td>#{{ $loop->iteration }}</td>
        <td>{{ $sector->name_uz }}</td>
        <td>{{ $sector->name_ru }}</td>
        <td>{{ $sector->name_en }}</td>
        <td>
            <div class="hstack gap-2 justify-content-end">
                <a href="{{ route('sectors.show', $sector->id) }}" class="avatar-text avatar-md">
                    <i class="feather feather-eye"></i>
                </a>
                <a href="{{ route('sectors.edit', $sector->id) }}" class="avatar-text avatar-md">
                    <i class="feather feather-edit"></i>
                </a>
                <form class="avatar-text avatar-md" method="POST" onsubmit="confirmDelete(event)" action="{{ route('sectors.destroy', $sector->id) }}">
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
                <strong>Sektorlar topilmadi!</strong> Iltimos, keyinroq qaytib ko'ring.
            </div>
        </td>
    </tr>
@endif
