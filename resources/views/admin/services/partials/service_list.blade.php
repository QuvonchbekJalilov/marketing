@if ($services->count() > 0)
    @foreach($services as $service)
    <tr class="single-item">
        <td>#{{ $loop->iteration }}</td>
        <td>{{ $service->category->name_uz ?? 'kategoriya yoq'}}</td>
        <td>{{ $service->name_uz }}</td>
        <td>{{ $service->name_ru }}</td>
        <td>{{ $service->name_en }}</td>
        <td>
            <div class="hstack gap-2 justify-content-end">
                <a href="{{ route('services.show', $service->id) }}" class="avatar-text avatar-md">
                    <i class="feather feather-eye"></i>
                </a>
                <a href="{{ route('services.edit', $service->id) }}" class="avatar-text avatar-md">
                    <i class="feather feather-edit"></i>
                </a>
                <form class="avatar-text avatar-md" method="POST" onsubmit="confirmDelete(event)" action="{{ route('services.destroy', $service->id) }}">
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
                <strong>Servislar topilmadi!</strong> Iltimos, keyinroq qaytib ko'ring.
            </div>
        </td>
    </tr>
@endif
