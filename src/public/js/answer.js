
const seeAnswer = document.querySelectorAll('.seeAnswer');
console.log(seeAnswer);

seeAnswer.forEach((btn) => {
  btn.addEventListener('click', (e) => {
    // 兄弟要素のanswerを表示する
    const answer = e.target.nextElementSibling;
    answer.classList.toggle('hidden');
    // seeAnswerのテキストを変更
    if (e.target.textContent === '解答を表示') {
      e.target.textContent = '解答を非表示';
    } else {
      e.target.textContent = '解答を表示';
    }
  }
  );
});
