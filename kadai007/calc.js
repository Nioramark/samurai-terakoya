// Step1: 変数numを定義
const num = 15; // 好きな数値に変更して試せます

// Step2: if文で条件をチェック
if (num % 3 === 0 && num % 5 === 0) {
  console.log("3と5の倍数です");
} else if (num % 3 === 0) {
  console.log("3の倍数です");
} else if (num % 5 === 0) {
  console.log("5の倍数です");
} else {
  console.log(num);
}
