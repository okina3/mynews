@extends('layouts.profile')
@section('title', 'プロフィールの編集')

@section('content')
   <div class="container">
      <div class="row">
         <div class="col-md-8 mx-auto">
            <h2>プロフィールの編集</h2>
            <form action="{{ route('admin.profile.update') }}" method="post">

               @if (count($errors) > 0)
                  <ul>
                     @foreach ($errors->all() as $e)
                        <li>{{ $e }}</li>
                     @endforeach
                  </ul>
               @endif
               <div class="form-group row">
                  <label class="col-md-2">氏名</label>
                  <div class="col-md-10">
                     <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                  </div>
               </div>

               <div class="form-group row">
                  <label class="col-md-2">性別</label>
                  <div class="col-md-10">
                     <input id="gender_male" type="radio" name="gender" value="male" checked>
                     <label for="gender_male">男性</label>
                     <input id="gender_female" type="radio" name="gender" value="female">
                     <label for="gender_female">女性</label>
                  </div>
               </div>

               <div class="form-group row">
                  <label class="col-md-2">趣味</label>
                  <div class="col-md-10">
                     <textarea class="form-control" name="hobby" rows="8">{{ old('hobby') }}</textarea>
                  </div>
               </div>

               <div class="form-group row">
                  <label class="col-md-2">自己紹介欄</label>
                  <div class="col-md-10">
                     <textarea class="form-control" name="introduction" rows="8">{{ old('introduction') }}</textarea>
                  </div>
               </div>

               @csrf
               <input type="submit" class="btn btn-primary" value="更新">
            </form>
         </div>
      </div>
   </div>
@endsection