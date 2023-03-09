<form method="post" action="/CRUD/store">
    @method('PATCH')
    @csrf
    <p>
        <label for="fullName">fullName</label><br>
        <input type="text" name="fullName" value="">
    </p>
    @error('fullName')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <p>
        <label for="email">Email</label><br>
        <input type="text" name="email" value="">
    </p>
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <p>
        <label for="position">position</label><br>
        <input type="text" name="position" value="">
    </p>
    @error('position')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <p>
        <button type="submit">Submit</button>
    </p>
  
</form>

