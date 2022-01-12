<x-guest-layout>

    <x-slot name="logo">
        <a href="/">

        </a>
    </x-slot>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>

        </div>
    </nav>
    <!-- Validation Errors -->

    <div class="conatiner mt-5" style="display: flex;justify-content: center">
        <div class="col-md-4">
            <h3>Register Here</h3>
            <x-auth-validation-errors class="mb-4" role="alert" :errors="$errors" />
            <form method="POST" action="{{ route('register') }}">
                @csrf

                {{-- <!-- Name -->
                    <div>
                        <x-label for="name" :value="__('Name')" />
        
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    </div>
        
                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')" />
        
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>
        
                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />
        
                        <x-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
                    </div>
        
                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />
        
                        <x-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required />
                    </div>
        
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
        
                        <x-button class="ml-4">
                            {{ __('Register') }}
                        </x-button>
                    </div> --}}
                <div>
                    <div class="form-group mt-2">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                            placeholder="Name" name="name">
                    </div>
                    <div class="form-group mt-2">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                            placeholder="Enter email" name="email">

                    </div>
                    <div class="form-group mt-2">
                        <label for="">Mobile No</label>
                        <input type="tel" class="form-control" id="phone" aria-describedby="emailHelp"
                            placeholder="Enter Mobile No" name="phone">

                    </div>
                    <div class="form-group mt-2">
                        <label for="">State</label>
                        <select class="form-select" aria-label="Default select example" name="state" id="state">
                            <option selected>Select State</option>
                            @foreach ($states as $state)
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach


                        </select>

                    </div>
                    <div class="form-group mt-2">
                        <label for="">City</label>
                        <select class="form-select" aria-label="Default select example" name="city" id="city">
                            <option selected>Select City</option>
                        </select>

                    </div>
                    <div class="form-group mt-2">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                            id="password" name="password">
                    </div>
                    <div class="form-group mt-2">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" placeholder="Password"
                            name="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </div>
            </form>
        </div>

    </div>


</x-guest-layout>
