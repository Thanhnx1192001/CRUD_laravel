<form method="post" action="/CRUD/update/{{ $StaffList->id }}">
    @method('PATCH')
    @csrf
    <input type="hidden" name="id" value="{{ $StaffList->id }}">
    <p>
        <label for="fullName">FullName</label><br>
        <input type="text" name="fullName" value="{{ $StaffList->fullName }}">
    </p>
    @error('fullName')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <p>
        <label for="email">Email</label><br>
        <input type="text" name="email" value="{{ $StaffList->email }}">
    </p>
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <p>
        <label for="position">Position</label><br>
        <input type="text" name="position" value="{{ $StaffList->position }}">
    </p>
    @error('position')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <p>
        <button type="submit">Submit</button>
    </p>
</form>