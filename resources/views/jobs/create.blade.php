<x-layout>
    <x-slot:headline>
        Create Job
    </x-slot:headline>

    <div>
        <small><pre>jobs/create</pre></small>
        <form action="/jobs" method="post">
            @csrf

            <div>
                <label for="title">Job title</label><br>
                <input type="text" name="title" placeholder="COO of Bullshit">
                @error('title')
                <small class="text-red-400 italic">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="salary">Salary</label><br>
                <input type="text" name="salary" placeholder="12345">
                @error('salary')
                <small class="text-red-400 italic">{{ $message }}</small>
                @enderror
            </div>
            <button>Create</button>
            {{--        --}}
            {{--        @if($errors->any())--}}
            {{--            <ul class="italic text-red-400">--}}
            {{--                @foreach($errors->all() as $error)--}}
            {{--                    <li>{{ $error }}</li>--}}
            {{--                @endforeach--}}
            {{--            </ul>--}}
            {{--        @endif--}}
        </form>
    </div>

</x-layout>
