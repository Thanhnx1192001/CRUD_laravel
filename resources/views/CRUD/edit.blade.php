<form method="post" action="/CRUD/update/{{ $StaffList->id }}">
    @method('PATCH')
    @csrf
    <input type="hidden" name="id" value="{{ $StaffList->id }}">
    <p>
        <label for="fullName">FullName</label><br>
        <input type="text" name="fullName" value="{{ $StaffList->fullName }}">
    </p>

    <p>
        <label for="email">Email</label><br>
        <input type="text" name="email" value="{{ $StaffList->email }}">
    </p>

    <p>
        <label for="position">Position</label><br>
        <input type="text" name="position" value="{{ $StaffList->position }}">
    </p>

    <p>
        <button type="submit">Submit</button>
    </p>
</form>