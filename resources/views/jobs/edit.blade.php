<x-layout>
    <x-slot:headline>
        Edit Job: {{ $job->title }}
    </x-slot:headline>

    <div>
        <small><pre>jobs/edit</pre></small>
        <form action="/jobs/{{ $job->id }}" method="post">
            @csrf
            @method('PATCH')

            <div>
                <x-form-label for="title">Job title</x-form-label>
                <br>
                <x-form-input name="title" placeholder="COO of Bullshit" value="{{ $job->title }}" />
                <br>
                <x-form-error name="title" />
            </div>

            <div>
                <x-form-label for="salary">Job title</x-form-label>
                <br>
                <x-form-input name="salary" placeholder="12345" value="{{ $job->salary }}"/>
                <br>
                <x-form-error name="salary" />
            </div>

            <a href="/jobs/{{ $job->id }}">Cancel</a> | <x-form-button form="delete-form">Delete</x-form-button> | <x-form-button>Update</x-form-button>
        </form>
        <form id="delete-form" action="/jobs/{{ $job->id }}" method="post" hidden>
            @csrf
            @method('DELETE')
        </form>
    </div>
</x-layout>
