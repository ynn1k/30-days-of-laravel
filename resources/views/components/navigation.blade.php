<div id="navigation">
    <small><pre>components/navigation</pre></small>
    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
    <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
    <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
    <x-nav-link href="/jobs/create" :active="request()->is('jobs/create')">New Job</x-nav-link>
</div>
