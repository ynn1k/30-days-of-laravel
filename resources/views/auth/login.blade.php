<x-layout>
    <x-slot:headline>
        Login
    </x-slot:headline>

    <div>
        <small><pre>auth/login</pre></small>
        <form action="/login" method="post">
            @csrf

            <div>
                <x-form-label for="email">Email</x-form-label>
                <br>
                <x-form-input name="email" placeholder="mail@example.org" :value="old('email')" required />
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


            <x-form-button>Login</x-form-button>
        </form>
    </div>

</x-layout>
