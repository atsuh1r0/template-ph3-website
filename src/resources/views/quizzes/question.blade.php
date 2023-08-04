<x-user-layout>
  <table>
    <tr>
      <th>ID</th>
      <th>画像</th>
      <th>設問</th>
      <th>設問補足</th>
      <th>クイズID</th>
      <th>作成日</th>
      <th>更新日</th>
    </tr>
    @foreach ($questions as $question)
    <tr>
      <td>
        {{ $question->id }}
      </td>
      <td>
        {{ $question->image }}
      </td>
      <td>
        {{ $question->text }}
      </td>
      <td>
        {{ $question->supplement }}
      </td>
      <td>
        {{ $question->quiz_id }}
      </td>
      <td>
        {{ $question->created_at }}
      </td>
      <td>
        {{ $question->updated_at }}
      </td>
    </tr>
    @endforeach
  </table>
</x-user-layout>
