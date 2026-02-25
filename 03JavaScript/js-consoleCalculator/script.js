const price = 1500;
const tax = 1.1;
const total = Math.round(price * tax);
// const total = (price * tax).toFixed(0);
console.log('税込み価格は' + total + '円です');
