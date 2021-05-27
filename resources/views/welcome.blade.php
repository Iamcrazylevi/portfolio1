@extends('base.header')
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    
                    @endauth
                </div>
            @endif
@extends('base.base')