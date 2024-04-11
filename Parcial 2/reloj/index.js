const hour = document.querySelector('.hour');
const minute = document.querySelector('.minute');
const second = document.querySelector('.second');

function time()
{
    const now = new Date();
    const getsecond = now.getSeconds();
    const getminute = now.getMinutes();
    const gethour = now.getHours(); 

    const seconddeg = getsecond/60*360;
    const minutedeg = getminute/60*360;
    const hourdeg = gethour/12*360;

    second.style.transform = `rotate(${seconddeg}deg)`;
    minute.style.transform = `rotate(${minutedeg}deg)`;
    hour.style.transform = `rotate(${hourdeg}deg)`;
}

setInterval(time,1000);