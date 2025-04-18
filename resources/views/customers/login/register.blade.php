<x-guest-layout >
    <x-auth-card>
        <x-slot name="logo" >
            <a href="/">
                <img src="{{asset('/management/images/load.png')}}"  class="w-20 h-20 fill-current text-gray-500"  alt="">

                {{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-label for="email" :value="__('Address')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="mt-4">
                <x-label for="email" :value="__('Phone ')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div> <div class="mt-4">
                <x-label for="email" :value="__('Country')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />




        {{--                <div class="mt-4">--}}
        {{--                    <x-label for="typee" :value="__('User Type')" />--}}
        {{--                    <select name="user_type" id=""  class="block mt-1 w-full" >--}}
        {{--                        <option value="researcher">Researcher</option>--}}
        {{--                        <option value="writer">Writer</option>--}}
        {{--                        <option value="proofreader">Proofreader</option>--}}
        {{--                        <option value="reviewer">Reviewer</option>--}}
        {{--                        <option value="academic_writer">Academic writer</option>--}}
        {{--                    </select>--}}
        {{--                </div>--}}
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

             <a href="{{asset('/customer_dashboard')}}">   <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
             </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
