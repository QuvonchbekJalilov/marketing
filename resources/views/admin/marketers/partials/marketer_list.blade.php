@if ($marketers->count() > 0)
    @foreach($marketers as $marketer)
    <tr class="single-item">
        <td>#{{ $loop->iteration }}</td>
        <td>
            <a href="{{ route('marketers.show', $marketer->id) }}" class="d-flex align-items-center mb-1">
                {{ $marketer->name }}
            </a>
        </td>
        <td>
            {{ $marketer->email }}
        </td>
        <td>
            <div class="hstack gap-2 justify-content-end">
                <a href="{{ route('marketers.show', $marketer->id) }}" class="avatar-text avatar-md">
                    <i class="feather feather-eye"></i>
                </a>
                {{-- <a href="{{ route('marketers.edit', $marketer->id) }}" class="avatar-text avatar-md">
                    <i class="feather feather-edit"></i>
                </a> --}}
                <form class="avatar-text avatar-md" method="POST" onsubmit="confirmDelete(event)" action="{{ route('marketers.destroy', $marketer->id) }}">
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
        <td colspan="7" class="text-center">
            <div class="alert alert-warning" role="alert">
                <i class="feather icon-info"></i> 
                <strong>Marketerlar topilmadi!</strong> Iltimos, keyinroq qaytib ko'ring.
            </div>
        </td>
    </tr>
@endif
