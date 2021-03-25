// 引入该引入的包
import Echo from 'laravel-echo';
window.io = require('socket.io-client');

window.Echo = new Echo({
broadcaster: 'socket.io',
host: 't2payment.com:8080'
});


window.Echo.channel('push')
.listen('.push.msg', (e) => {
    console.log(e.msg);
    alert( e.msg );  // 这里只是弹出弹幕消息，滚动的效果就不做了
});
