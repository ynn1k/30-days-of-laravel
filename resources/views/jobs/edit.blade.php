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
                <label for="title">Job title</label><br>
                <input type="text" name="title" placeholder="COO of Bullshit" value="{{ $job->title }}">
                @error('title')
                <small class="text-red-400 italic">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="salary">Salary</label><br>
                <input type="text" name="salary" placeholder="12345" value="{{ $job->salary }}">
                @error('salary')
                <small class="text-red-400 italic">{{ $message }}</small>
                @enderror
            </div>
            <a href="/jobs/{{ $job->id }}">Cancel</a> | <button form="delete-form">Delete</button> | <button>Update</button>
        </form>
        <form id="delete-form" action="/jobs/{{ $job->id }}" method="post" hidden>
            @csrf
            @method('DELETE')
        </form>
    </div>

</x-layout>
