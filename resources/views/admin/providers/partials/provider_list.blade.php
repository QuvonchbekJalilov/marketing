@if ($providers->count() > 0)
    @foreach($providers as $provider)
    <tr class="single-item">
        <td>#{{ $loop->iteration }}</td>
        <td>
            <a href="{{ route('providers.show', $provider->id) }}" class="d-flex align-items-center mb-1">
                {{ $provider->name }}
            </a>
        </td>
        <td>
            {{ $provider->email }}
        </td>
        <td>
            <div class="hstack gap-2 justify-content-end">
                <a href="{{ route('providers.show', $provider->id) }}" class="avatar-text avatar-md">
                    <i class="feather feather-eye"></i>
                </a>
                {{-- <a href="{{ route('providers.edit', $provider->id) }}" class="avatar-text avatar-md">
                    <i class="feather feather-edit"></i>
                </a> --}}
                <form class="avatar-text avatar-md" method="POST" onsubmit="confirmDelete(event)" action="{{ route('providers.destroy', $provider->id) }}">
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
                <strong>No provider found!</strong> Please check back later.
            </div>
        </td>
    </tr>
@endif






