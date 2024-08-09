<div class="btn-group d-flex" role="group" aria-label="Actions">
    <a href="{{ route('members.show', $row->id) }}" class="btn btn-info btn-sm px-2">View</a>
    <a href="{{ route('members.edit', $row->id) }}" class="btn btn-warning btn-sm px-2">Edit</a>
    <div class="ms-2">
        <form action="{{ route('members.destroy', $row->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this member?')">Delete</button>
        </form>
    </div>
</div>