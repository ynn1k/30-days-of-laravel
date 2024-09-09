<x-layout>
    <x-slot:headline>
        Create Job
    </x-slot:headline>

    <div>
        <small><pre>jobs/create</pre></small>
        <form action="/jobs" method="post">
            @csrf

            <div>
                <x-form-label for="title">Job title</x-form-label>
                <br>
                <x-form-input name="title" placeholder="COO of Bullshit" />
                <br>
                <x-form-error name="title" />
            </div>

            <div>
                <x-form-label for="salary">Job title</x-form-label>
                <br>
                <x-form-input name="salary" placeholder="12345" />
                <br>
                <x-form-error name="salary" />
            </div>

            <x-form-button>Create</x-form-button>
        </form>
    </div>

</x-layout>
