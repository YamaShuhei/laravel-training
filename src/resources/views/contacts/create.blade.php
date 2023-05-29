@extends('layouts.app') @section('title', 'お問合せフォーム')
@section('content')

<form method="POST" action="{{ route('contacts.store') }}">
  @csrf

  <div>
    <label for="department_id">お問合せ先部署名</label>
    <select id="department_id" name="department_id">
      @foreach ($departments as $id => $name)
          <option value="{{ $id }}">{{ $name }}</option>
      @endforeach
  </select>
  </div>

  <div>
      <label for="name">お名前</label>
      <input type="text" name="name" value="{{ old('name') }}">
      @error('name')
          <div>{{ $message }}</div>
      @enderror
  </div>

  <div>
      <label for="email">メールアドレス</label>
      <input type="email" name="email" value="{{ old('email') }}">
      @error('email')
          <div>{{ $message }}</div>
      @enderror
  </div>

  <div>
      <label for="content">お問い合わせ内容</label>
      <textarea name="content" cols="30" rows="5">{{ old('content') }}</textarea>
      @error('content')
          <div>{{ $message }}</div>
      @enderror
  </div>

  <div>
      <label for="age">年齢</label>
      <input type="number" name="age" value="{{ old('age') }}">
      @error('age')
          <div>{{ $message }}</div>
      @enderror
  </div>

  <div>
      <label for="gender">性別</label>
      <select name="gender">
          <option value="">選択してください</option>
          <option value="1" {{ old('gender') === '1' ? 'selected' : '' }}>男性</option>
          <option value="2" {{ old('gender') === '2' ? 'selected' : '' }}>女性</option>
          <option value="3" {{ old('gender') === '3' ? 'selected' : '' }}>その他</option>
      </select>
      @error('gender')
          <div>{{ $message }}</div>
      @enderror
  </div>
  
  <button type="submit">送信</button>
</form>
<div class="contact_link_wrap"><a href="{{ route('contacts.index') }}">お問合せ一覧へ</a></div>
@endsection
@section('footer')
@endsection