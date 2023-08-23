<x-user-layout>
  <table>
    <tr>
      <th>id</th>
      <th>設問</th>
      <th>選択肢①</th>
      <th>選択肢②</th>
      <th>選択肢③</th>
    </tr>
    @foreach ($quiz->question as $question)
    <tr>
      <td>
        {{ $question->id }}
      </td>
      <td>
        {{ $question->text }}
      </td>
      @foreach ($question->choice as $choice)
      <td>
        {{ $choice->text }}
      </td>
      @endforeach
    </tr>
    @endforeach
  </table>
</x-user-layout>
