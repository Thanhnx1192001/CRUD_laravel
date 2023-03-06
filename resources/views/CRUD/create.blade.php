<form method="post" action="/CRUD/store">
    @method('PATCH')
    @csrf
    <p>
        <label for="fullName">fullName</label><br>
        <input type="text" name="fullName" value="">
    </p>

    <p>
        <label for="email">Email</label><br>
        <input type="text" name="email" value="">
    </p>

    <p>
        <label for="position">position</label><br>
        <input type="text" name="position" value="">
    </p>

    <p>
        <button type="submit">Submit</button>
    </p>
</form>