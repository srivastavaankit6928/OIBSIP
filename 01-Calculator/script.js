'use strict'

const result = document.querySelector('.answer');
const history = document.querySelector('.historyValue');
const numBtn = document.querySelectorAll('.number-button');
const operatorBtn = document.querySelectorAll('.opeartor')
const allClearBtn = document.getElementById('All-Clear');
const escapeBtn = document.getElementById('escape');
const enterBtn = document.getElementById('enter');
const rootBtn = document.getElementById('root');

let lastKeyDownEvent = false;

numBtn.forEach(button =>{
    button.addEventListener('click',()=>{
        const number = button.getAttribute('data-number');
        (lastKeyDownEvent) && ((result.value = '' )|| (history.value = ''));
        result.value += number;
        lastKeyDownEvent = false;
    });
});

operatorBtn.forEach(btn => {
    btn.addEventListener('click',()=>{
        const operator = btn.getAttribute('data-operator');
        if(lastKeyDownEvent){
            history.value = '';
            history.value = `${result.value}${operator}` ;
            result.value = '';
            lastKeyDownEvent = false;
            return;
        }

        history.value += `${result.value}${operator}`;
        result.value ='';
    });
});

allClearBtn.addEventListener('click',()=>{
    result.value ='';
    history.value='';
});

escapeBtn.addEventListener('click',()=>{
    result.value = result.value.toString().slice(0,-1);
});

rootBtn.addEventListener('click',()=>{
    if(result.value === '') return;
    history.value = `√${result.value}`;

    const inputRoot = history.value.slice(1);

    if(isNaN(inputRoot)){
        history.value = '';
        result.value = '';
        return;
    }
    result.value = Math.sqrt(inputRoot);
});

enterBtn.addEventListener('click',()=>{
    lastKeyDownEvent = true;
    history.value += `${result.value}`;
    result.value = eval(history.value);
    history.value += '';
});



function handleKeydown(event) {
    const allowedKeys = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '.'];
    const operatorKeys = ['+', '-', '/', '*'];

    if(event.key === 'Enter'){
        lastKeyDownEvent = true;
        history.value += `${result.value}`;
        result.value = eval(history.value);
        history.value += '';
    }

    if (allowedKeys.includes(event.key)) {
        (lastKeyDownEvent) && ((result.value = '' )|| (history.value = ''));
        result.value += event.key;
        lastKeyDownEvent = false;
    }

    if(operatorKeys.includes(event.key)){
        if(lastKeyDownEvent){
            history.value = '';
            history.value = `${result.value}${event.key}` ;
            result.value = '';
            lastKeyDownEvent = false;
            return;
        }

        history.value += `${result.value}${event.key}`;
        result.value ='';
    }

    if(event.key === 'Backspace')
    result.value = result.value.toString().slice(0,-1);

    if(event.key === 'Escape'){
        result.value ='';
        history.value='';
    }
}

document.addEventListener('keydown',handleKeydown);

