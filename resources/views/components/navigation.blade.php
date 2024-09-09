<?php
    //TODO: move to/get from somewhere else
    $links = [
        'Home' => '/',
        'Contact' => '/contact',
        'Jobs' => '/jobs',
        'New Job' => '/jobs/create',
        'Login' => '/login',
        'Register' => '/register'
    ];
?>

<div id="navigation">
    <small><pre>components/navigation</pre></small>

    |&nbsp;
    @foreach($links as $name => $url)
        <x-nav-link href="{{ $url }}" :active="request()->is(trim($url,'/'))">{{ $name }}</x-nav-link>&nbsp;|&nbsp;
    @endforeach
</div>
