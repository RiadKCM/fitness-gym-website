@extends('admin.baseAdmin')



@section('content')
    <form action="#">
        <!-- <input type="text" placeholder="Name">
       <input type="text" placeholder="Email">
        <input type="text" placeholder="Website">
        <textarea placeholder="Comment"></textarea> -->
       <form action="">
            <button style="width: 150px;"><a href="{{ route('admin.EditCoach') }}" class="text-white">Coach</a></button>
            <button style="width: 150px;"><a href="{{ route('admin.ListAbonnement') }}"class="text-white">Abonnement</a></button>
    </form>
@endsection


