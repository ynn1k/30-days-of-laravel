<?php
    //TODO: move to/get from somewhere else
    $links = [
        'Home' => '/',
        'Contact' => '/contact',
        'Jobs' => '/jobs',
    ];

    $authLinks = [
        'New Job' => '/jobs/create',
    ];

    $guestLinks = [
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

    @auth
        @foreach($authLinks as $name => $url)
            <x-nav-link href="{{ $url }}" :active="request()->is(trim($url,'/'))">{{ $name }}</x-nav-link>&nbsp;|&nbsp;
        @endforeach
        <form action="/logout" method="post" class="inline">
            @csrf
            <button>Log out</button>
        </form>
    @endauth

    @guest
        @foreach($guestLinks as $name => $url)
            <x-nav-link href="{{ $url }}" :active="request()->is(trim($url,'/'))">{{ $name }}</x-nav-link>&nbsp;|&nbsp;
        @endforeach
    @endguest
</div>
