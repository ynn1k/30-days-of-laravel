<x-layout>
    <x-slot:headline>
        Register
    </x-slot:headline>

    <div>
        <small><pre>auth/register</pre></small>
        <form action="/register" method="post">
            @csrf

            <div>
                <x-form-label for="name">Name</x-form-label>
                <br>
                <x-form-input name="name" placeholder="Your Name" required />
                <br>
                <x-form-error name="name" />
            </div>

            <div>
                <x-form-label for="email">Email</x-form-label>
                <br>
                <x-form-input name="email" placeholder="mail@example.org" required />
                <br>
                <x-form-error name="email" />
            </div>

            <div>
                <x-form-label for="password">Password</x-form-label>
                <br>
                <x-form-input name="password" type="password" placeholder="********" required />
                <br>
                <x-form-error name="password" />
            </div>

            <div>
                <x-form-label for="password_confirmation">Confirm password</x-form-label>
                <br>
                <x-form-input name="password_confirmation" type="password" placeholder="********" required />
                <br>
                <x-form-error name="password_confirmation" />
            </div>

            <x-form-button>Register</x-form-button>
        </form>
    </div>

</x-layout>
