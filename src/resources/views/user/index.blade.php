<x-user-layout>
  <table>
    <tr>
      <th>名前</th>
      <th>メールアドレス</th>
    </tr>
    @foreach ($users as $user)
    <tr>
      <td>
        {{ $user->name }}
      </td>
      <td>
        {{ $user->email }}
      </td>
    </tr>
    @endforeach
  </table>
</x-user-layout>
