<x-app-layout>
    <h1 class="text-center mb-5">Create Agent</h1>

    <div class="container w-50">
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-row mb-3">
                <div class="col">
                    <input type="text" class="form-control" name="first_name" id="first_name" required placeholder="First Name" value="{{ old('first_name') }}">
                    @error('first_name')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Last name" name="last_name" id="last_name" required value="{{ old('last_name') }}">
                    @error('last_name')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-row mb-3">
                <div class="col">
                    <textarea style="resize: none;" class="form-control" name="description" id="description" rows="3" placeholder="Bio...">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-row mb-3">
                <div class="col">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="role">Role</label>
                        </div>
                        <select name="role" class="custom-select form-control" id="role">
                          <option selected disabled></option>
                          <option value="Agent">Agent</option>
                          <option value="Office Manager">Office Manager</option>
                          <option value="CEO">CEO</option>
                        </select>
                    </div>
                    @error('role')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <div class="input-group mb-3">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="profile" name="profile">
                          <label class="custom-file-label" for="profile">Choose file</label>
                        </div>
                    </div>
                    @error('profile')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-row mb-3">
                <div class="col">
                    <input type="tel" class="form-control" name="mobile" id="mobile" required placeholder="Mobile" value="{{ old('mobile') }}">
                    @error('mobile')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <input type="url" class="form-control" name="fb_link" id="fb_link" required placeholder="Facebook Url" value="{{ old('fb_link') }}">
                    @error('fb_link')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-row mb-3">
                <div class="col">
                    <input type="url" class="form-control" name="insta_link" id="insta_link" required placeholder="Instagram Url" value="{{ old('insta_link') }}">
                    @error('insta_link')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="col">
                    <input type="email" class="form-control" name="email" id="email" required placeholder="Email" value="{{ old('email') }}">
                    @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-row mb-3">
                <div class="col">
                    <input type="password" class="form-control" name="password" id="password" required placeholder="Password">
                    @error('password')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required placeholder="Confirm Password">
                    @error('password_confirmation')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-success px-4 py-2 bg-b text-white">Create</button>
        </form>
    </div>

</x-app-layout>
