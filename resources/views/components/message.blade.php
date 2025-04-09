<?php
/**
 * Created by PhpStorm.
 * User: Yves
 * Date: 15/11/2020
 * Time: 10:12
 */
?>

@if(\Illuminate\Support\Facades\Session::has('success'))
    <div class="alert alert-success">{{\Illuminate\Support\Facades\Session::get('success')}}</div>
@endif

@if(\Illuminate\Support\Facades\Session::has('error'))
    <div class="alert alert-danger">{{\Illuminate\Support\Facades\Session::get('error')}}</div>
@endif

@if ($errors->any())
    <div class='flash alert-danger'>
        <ul class="panel-body">
            @foreach ( $errors->all() as $error )
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif
