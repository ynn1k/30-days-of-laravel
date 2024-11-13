<x-layout>
    <x-slot:headline>
        Job
    </x-slot:headline>

    <div id="job">
        <small><pre>jobs/show</pre></small>

        <h2>{{$job['title']}} pays {{$job['salary']}}</h2>

        @can('edit', $job)
            <p>
                <a href="/jobs/{{ $job['id'] }}/edit">Edit</a>
            </p>
        @endcan
    </div>
</x-layout>
