@extends('layouts.app') @section('title', 'お問合せ一覧') @section('content')
<table>
  <thead>
    <tr>
      <th>お問い合わせ部署名</th>
      <th>お名前</th>
      <th>メールアドレス</th>
      <th>お問い合わせ内容</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contacts as $contact)
      <tr>
        <td>部署{{ $contact->department_id }}</td>
        <td>{{ $contact->name }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->content }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
<div class="contact_link_wrap"><a href="{{ route('contacts.create') }}">お問合せフォームへ</a></div>
@endsection
@section('footer')
@endsection