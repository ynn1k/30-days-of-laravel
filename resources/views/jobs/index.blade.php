<x-layout>
    <x-slot:headline>Jobs</x-slot:headline>

    <div id="jobs">
        <small><pre>jobs/index</pre></small>

        <ul>
            @foreach($jobs as $job)
                <li class="mb-2">
                    <div>
                        <a href="/jobs/{{$job['id']}}">
                            <small>{{$job->employer->name}}</small> <br>
                            {{$job['title']}} pays {{$job['salary']}}
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
