<form action="{{ route('contact.store') }}" method="POST" class="text-dark">
    <input type="hidden" name="my_name" id="my_name" value="">
    <input type="hidden" name="my_title" id="my_title" value="">
    <input type="checkbox" name="contact_me_by_fax_only" id="contact_me_by_fax_only" value="1" tabindex="-1" autocomplete="off" class="d-none">
    <div class="form-group my-3 row d-flex align-items-center justify-content-sm-start">
        <label class="col-sm-4" for="name">Name</label>
        <div class="col-sm-8">
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
        </div>
        <div>{{ $errors->first('name') }}</div>
    </div>
    <div class="form-group my-3 row d-flex align-items-center justify-content-sm-start">
        <label class="col-sm-4" for="email">Email</label>
        <div class="col-sm-8">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
        </div>
        <div>{{ $errors->first('email') }}</div>
    </div>
    <div class="form-group my-3 row d-flex align-items-center justify-content-sm-start">
        <label class="col-sm-4" for="phone">Phone Number</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}" required>
        </div>
        <div>{{ $errors->first('phone') }}</div>
    </div>
    <div class="form-group my-3 row d-flex align-items-center justify-content-sm-start">
        <label class="col-sm-4" for="studentName">Student Name</label>
        <div class="col-sm-8">
            <input id="studentName" type="text" class="form-control" name="studentName" value="{{ old('studentName') }}">
        </div>
        <div>{{ $errors->first('parentName') }}</div>
    </div>
    <div class="form-group my-3 row d-flex align-items-center justify-content-sm-start">
        <label class="col-sm-4" for="birthdate">Student Birthdate</label>
        <div class="col-sm-8">
            <input type="date" class="form-control" name="birthdate" id="birthdate" required>
        </div>
    </div>
    <div class="form-group my-3 row d-flex align-items-center">
        <label class="col-sm-4" for="description">What Are You Looking For?</label>
        <div class="col-sm-8">
            <textarea class="form-control" name="description" id="description" rows="3">{{ old('description') }}</textarea>
        </div>
        <div>{{ $errors->first('description') }}</div>
    </div>
    @csrf
    <div class="d-flex justify-content-center mb-4">
        <button type="submit" class="btn btn-lg btn-kapa-teal shadow">Enroll Now!</button>
    </div>
</form>
