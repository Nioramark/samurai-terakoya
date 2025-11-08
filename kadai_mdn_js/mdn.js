// 今日の日付を取得
const today = new Date();

// 年を取得
const year = today.getFullYear();

// 月を取得 (0-11で返されるため、1を足す)
const month = today.getMonth() + 1;

// 日を取得
const day = today.getDate();

// 月と日が1桁の場合に、前に '0' を付けて2桁にする関数
const formatTwoDigits = (num) => {
  return num < 10 ? '0' + num : num;
};

// フォーマットされた日付の文字列を作成
const formattedDate = `${year}年${formatTwoDigits(month)}月${formatTwoDigits(day)}日`;

// コンソールに出力
console.log(formattedDate);