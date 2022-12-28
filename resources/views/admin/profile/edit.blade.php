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
                     <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
                  </div>
               </div>

               <div class="form-group row">
                  <label class="col-md-2">性別</label>
                  <div class="col-md-10">

                     <input id="gender_male" type="radio" name="gender" value="{{ $profile_form->gender }}"
                        {{ $profile_form->gender === 'male' ? 'checked' : '' }}>
                     <label for="gender_male">男性</label>

                     <input id="gender_female" type="radio" name="gender" value="{{ $profile_form->gender }}"
                        {{ $profile_form->gender === 'female' ? 'checked' : '' }}>
                     <label for="gender_female">女性</label>

                  </div>
               </div>

               <div class="form-group row">
                  <label class="col-md-2">趣味</label>
                  <div class="col-md-10">
                     <textarea class="form-control" name="hobby" rows="8">{{ $profile_form->hobby }}</textarea>
                  </div>
               </div>

               <div class="form-group row">
                  <label class="col-md-2">自己紹介欄</label>
                  <div class="col-md-10">
                     <textarea class="form-control" name="introduction" rows="8">{{ $profile_form->introduction }}</textarea>
                  </div>
               </div>
               <div class="col-md-10">
                  <input type="hidden" name="id" value="{{ $profile_form->id }}">
                  @csrf
                  <input type="submit" class="btn btn-primary" value="更新">
                  <a href="{{ route('admin.profile.index') }}" class="btn btn-primary">戻る</a>
               </div>
            </form>
            {{-- 以下を追記 --}}
            <div class="row mt-5">
               <div class="col-md-4 mx-auto">
                  <h2>編集履歴</h2>
                  <ul class="list-group">
                     @if ($profile_form->p_histories != null)
                        @foreach ($profile_form->p_histories as $p_history)
                           <li class="list-group-item">{{ $p_history->edited_at }}</li>
                        @endforeach
                     @endif
                  </ul>
               </div>
            </div>
            {{-- 以上を追記 --}}
         </div>
      </div>
   </div>
@endsection
