<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دفع الفاتورة</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

<style>
    * {
        box-sizing: border-box;
    }
    body {
        width: 100vw;
        height: 100vh;
        overflow: hidden;
        font-size: 12px;
        background-image: linear-gradient(to right bottom, #a9347e, #4b32a7);
        font-family: 'Open Sans', sans-serif;
        letter-spacing: 0.2px;
        color: #fff;
    }
    .inspiration {
        position: fixed;
        bottom: 0;
        right: 0;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        font-family: 'Gill Sans', sans-serif;
        font-size: 14px;
        color: #ff487f;
    }
    .center {
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        transition: transform 0.5s;
        z-index: 1;
    }
    @media screen and (max-height: 600px) {
        .center {
            transform: translate(-50%, -50%) scale(0.75);
        }
    }
    @media screen and (max-width: 400px) {
        .center {
            transform: translate(-50%, -50%) scale(0.6);
        }
    }
    .star {
        position: absolute;
        z-index: 1;
    }
    .star:nth-child(1) {
        top: 39vh;
        left: 13vw;
    }
    .star:nth-child(1):before,
    .star:nth-child(1):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -1s;
        animation-delay: -1s;
    }
    .star:nth-child(1):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(1):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(2) {
        top: 39vh;
        left: 87vw;
    }
    .star:nth-child(2):before,
    .star:nth-child(2):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -2s;
        animation-delay: -2s;
    }
    .star:nth-child(2):before {
        top: 1px;
        left: -1px;
        width: 6px;
        height: 2px;
    }
    .star:nth-child(2):after {
        top: -1px;
        left: 1px;
        width: 2px;
        height: 6px;
    }
    .star:nth-child(3) {
        top: 52vh;
        left: 63vw;
    }
    .star:nth-child(3):before,
    .star:nth-child(3):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -3s;
        animation-delay: -3s;
    }
    .star:nth-child(3):before {
        top: 0.5px;
        left: -0.5px;
        width: 3px;
        height: 1px;
    }
    .star:nth-child(3):after {
        top: -0.5px;
        left: 0.5px;
        width: 1px;
        height: 3px;
    }
    .star:nth-child(4) {
        top: 65vh;
        left: 91vw;
    }
    .star:nth-child(4):before,
    .star:nth-child(4):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -4s;
        animation-delay: -4s;
    }
    .star:nth-child(4):before {
        top: 1px;
        left: -1px;
        width: 6px;
        height: 2px;
    }
    .star:nth-child(4):after {
        top: -1px;
        left: 1px;
        width: 2px;
        height: 6px;
    }
    .star:nth-child(5) {
        top: 52vh;
        left: 49vw;
    }
    .star:nth-child(5):before,
    .star:nth-child(5):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -5s;
        animation-delay: -5s;
    }
    .star:nth-child(5):before {
        top: 1px;
        left: -1px;
        width: 6px;
        height: 2px;
    }
    .star:nth-child(5):after {
        top: -1px;
        left: 1px;
        width: 2px;
        height: 6px;
    }
    .star:nth-child(6) {
        top: 13vh;
        left: 52vw;
    }
    .star:nth-child(6):before,
    .star:nth-child(6):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -6s;
        animation-delay: -6s;
    }
    .star:nth-child(6):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(6):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(7) {
        top: 53vh;
        left: 54vw;
    }
    .star:nth-child(7):before,
    .star:nth-child(7):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -7s;
        animation-delay: -7s;
    }
    .star:nth-child(7):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(7):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(8) {
        top: 67vh;
        left: 13vw;
    }
    .star:nth-child(8):before,
    .star:nth-child(8):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -8s;
        animation-delay: -8s;
    }
    .star:nth-child(8):before {
        top: 0.5px;
        left: -0.5px;
        width: 3px;
        height: 1px;
    }
    .star:nth-child(8):after {
        top: -0.5px;
        left: 0.5px;
        width: 1px;
        height: 3px;
    }
    .star:nth-child(9) {
        top: 66vh;
        left: 40vw;
    }
    .star:nth-child(9):before,
    .star:nth-child(9):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -9s;
        animation-delay: -9s;
    }
    .star:nth-child(9):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(9):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(10) {
        top: 91vh;
        left: 51vw;
    }
    .star:nth-child(10):before,
    .star:nth-child(10):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -10s;
        animation-delay: -10s;
    }
    .star:nth-child(10):before {
        top: 0.5px;
        left: -0.5px;
        width: 3px;
        height: 1px;
    }
    .star:nth-child(10):after {
        top: -0.5px;
        left: 0.5px;
        width: 1px;
        height: 3px;
    }
    .star:nth-child(11) {
        top: 40vh;
        left: 52vw;
    }
    .star:nth-child(11):before,
    .star:nth-child(11):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -11s;
        animation-delay: -11s;
    }
    .star:nth-child(11):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(11):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(12) {
        top: 35vh;
        left: 19vw;
    }
    .star:nth-child(12):before,
    .star:nth-child(12):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -12s;
        animation-delay: -12s;
    }
    .star:nth-child(12):before {
        top: 1px;
        left: -1px;
        width: 6px;
        height: 2px;
    }
    .star:nth-child(12):after {
        top: -1px;
        left: 1px;
        width: 2px;
        height: 6px;
    }
    .star:nth-child(13) {
        top: 46vh;
        left: 49vw;
    }
    .star:nth-child(13):before,
    .star:nth-child(13):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -13s;
        animation-delay: -13s;
    }
    .star:nth-child(13):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(13):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(14) {
        top: 89vh;
        left: 41vw;
    }
    .star:nth-child(14):before,
    .star:nth-child(14):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -14s;
        animation-delay: -14s;
    }
    .star:nth-child(14):before {
        top: 0.5px;
        left: -0.5px;
        width: 3px;
        height: 1px;
    }
    .star:nth-child(14):after {
        top: -0.5px;
        left: 0.5px;
        width: 1px;
        height: 3px;
    }
    .star:nth-child(15) {
        top: 75vh;
        left: 26vw;
    }
    .star:nth-child(15):before,
    .star:nth-child(15):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -15s;
        animation-delay: -15s;
    }
    .star:nth-child(15):before {
        top: 1px;
        left: -1px;
        width: 6px;
        height: 2px;
    }
    .star:nth-child(15):after {
        top: -1px;
        left: 1px;
        width: 2px;
        height: 6px;
    }
    .star:nth-child(16) {
        top: 27vh;
        left: 19vw;
    }
    .star:nth-child(16):before,
    .star:nth-child(16):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -16s;
        animation-delay: -16s;
    }
    .star:nth-child(16):before {
        top: 2px;
        left: -2px;
        width: 12px;
        height: 4px;
    }
    .star:nth-child(16):after {
        top: -2px;
        left: 2px;
        width: 4px;
        height: 12px;
    }
    .star:nth-child(17) {
        top: 44vh;
        left: 93vw;
    }
    .star:nth-child(17):before,
    .star:nth-child(17):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -17s;
        animation-delay: -17s;
    }
    .star:nth-child(17):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(17):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(18) {
        top: 80vh;
        left: 43vw;
    }
    .star:nth-child(18):before,
    .star:nth-child(18):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -18s;
        animation-delay: -18s;
    }
    .star:nth-child(18):before {
        top: 1px;
        left: -1px;
        width: 6px;
        height: 2px;
    }
    .star:nth-child(18):after {
        top: -1px;
        left: 1px;
        width: 2px;
        height: 6px;
    }
    .star:nth-child(19) {
        top: 32vh;
        left: 69vw;
    }
    .star:nth-child(19):before,
    .star:nth-child(19):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -19s;
        animation-delay: -19s;
    }
    .star:nth-child(19):before {
        top: 2px;
        left: -2px;
        width: 12px;
        height: 4px;
    }
    .star:nth-child(19):after {
        top: -2px;
        left: 2px;
        width: 4px;
        height: 12px;
    }
    .star:nth-child(20) {
        top: 50vh;
        left: 56vw;
    }
    .star:nth-child(20):before,
    .star:nth-child(20):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -20s;
        animation-delay: -20s;
    }
    .star:nth-child(20):before {
        top: 0.5px;
        left: -0.5px;
        width: 3px;
        height: 1px;
    }
    .star:nth-child(20):after {
        top: -0.5px;
        left: 0.5px;
        width: 1px;
        height: 3px;
    }
    .star:nth-child(21) {
        top: 7vh;
        left: 56vw;
    }
    .star:nth-child(21):before,
    .star:nth-child(21):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -21s;
        animation-delay: -21s;
    }
    .star:nth-child(21):before {
        top: 2px;
        left: -2px;
        width: 12px;
        height: 4px;
    }
    .star:nth-child(21):after {
        top: -2px;
        left: 2px;
        width: 4px;
        height: 12px;
    }
    .star:nth-child(22) {
        top: 26vh;
        left: 11vw;
    }
    .star:nth-child(22):before,
    .star:nth-child(22):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -22s;
        animation-delay: -22s;
    }
    .star:nth-child(22):before {
        top: 1px;
        left: -1px;
        width: 6px;
        height: 2px;
    }
    .star:nth-child(22):after {
        top: -1px;
        left: 1px;
        width: 2px;
        height: 6px;
    }
    .star:nth-child(23) {
        top: 7vh;
        left: 66vw;
    }
    .star:nth-child(23):before,
    .star:nth-child(23):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -23s;
        animation-delay: -23s;
    }
    .star:nth-child(23):before {
        top: 2px;
        left: -2px;
        width: 12px;
        height: 4px;
    }
    .star:nth-child(23):after {
        top: -2px;
        left: 2px;
        width: 4px;
        height: 12px;
    }
    .star:nth-child(24) {
        top: 56vh;
        left: 64vw;
    }
    .star:nth-child(24):before,
    .star:nth-child(24):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -24s;
        animation-delay: -24s;
    }
    .star:nth-child(24):before {
        top: 1px;
        left: -1px;
        width: 6px;
        height: 2px;
    }
    .star:nth-child(24):after {
        top: -1px;
        left: 1px;
        width: 2px;
        height: 6px;
    }
    .star:nth-child(25) {
        top: 19vh;
        left: 25vw;
    }
    .star:nth-child(25):before,
    .star:nth-child(25):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -25s;
        animation-delay: -25s;
    }
    .star:nth-child(25):before {
        top: 2px;
        left: -2px;
        width: 12px;
        height: 4px;
    }
    .star:nth-child(25):after {
        top: -2px;
        left: 2px;
        width: 4px;
        height: 12px;
    }
    .star:nth-child(26) {
        top: 59vh;
        left: 69vw;
    }
    .star:nth-child(26):before,
    .star:nth-child(26):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -26s;
        animation-delay: -26s;
    }
    .star:nth-child(26):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(26):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(27) {
        top: 91vh;
        left: 3vw;
    }
    .star:nth-child(27):before,
    .star:nth-child(27):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -27s;
        animation-delay: -27s;
    }
    .star:nth-child(27):before {
        top: 2px;
        left: -2px;
        width: 12px;
        height: 4px;
    }
    .star:nth-child(27):after {
        top: -2px;
        left: 2px;
        width: 4px;
        height: 12px;
    }
    .star:nth-child(28) {
        top: 53vh;
        left: 61vw;
    }
    .star:nth-child(28):before,
    .star:nth-child(28):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -28s;
        animation-delay: -28s;
    }
    .star:nth-child(28):before {
        top: 2px;
        left: -2px;
        width: 12px;
        height: 4px;
    }
    .star:nth-child(28):after {
        top: -2px;
        left: 2px;
        width: 4px;
        height: 12px;
    }
    .star:nth-child(29) {
        top: 12vh;
        left: 34vw;
    }
    .star:nth-child(29):before,
    .star:nth-child(29):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -29s;
        animation-delay: -29s;
    }
    .star:nth-child(29):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(29):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(30) {
        top: 82vh;
        left: 62vw;
    }
    .star:nth-child(30):before,
    .star:nth-child(30):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -30s;
        animation-delay: -30s;
    }
    .star:nth-child(30):before {
        top: 2px;
        left: -2px;
        width: 12px;
        height: 4px;
    }
    .star:nth-child(30):after {
        top: -2px;
        left: 2px;
        width: 4px;
        height: 12px;
    }
    .star:nth-child(31) {
        top: 33vh;
        left: 81vw;
    }
    .star:nth-child(31):before,
    .star:nth-child(31):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -31s;
        animation-delay: -31s;
    }
    .star:nth-child(31):before {
        top: 1px;
        left: -1px;
        width: 6px;
        height: 2px;
    }
    .star:nth-child(31):after {
        top: -1px;
        left: 1px;
        width: 2px;
        height: 6px;
    }
    .star:nth-child(32) {
        top: 30vh;
        left: 87vw;
    }
    .star:nth-child(32):before,
    .star:nth-child(32):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -32s;
        animation-delay: -32s;
    }
    .star:nth-child(32):before {
        top: 1px;
        left: -1px;
        width: 6px;
        height: 2px;
    }
    .star:nth-child(32):after {
        top: -1px;
        left: 1px;
        width: 2px;
        height: 6px;
    }
    .star:nth-child(33) {
        top: 12vh;
        left: 15vw;
    }
    .star:nth-child(33):before,
    .star:nth-child(33):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -33s;
        animation-delay: -33s;
    }
    .star:nth-child(33):before {
        top: 2px;
        left: -2px;
        width: 12px;
        height: 4px;
    }
    .star:nth-child(33):after {
        top: -2px;
        left: 2px;
        width: 4px;
        height: 12px;
    }
    .star:nth-child(34) {
        top: 33vh;
        left: 21vw;
    }
    .star:nth-child(34):before,
    .star:nth-child(34):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -34s;
        animation-delay: -34s;
    }
    .star:nth-child(34):before {
        top: 2px;
        left: -2px;
        width: 12px;
        height: 4px;
    }
    .star:nth-child(34):after {
        top: -2px;
        left: 2px;
        width: 4px;
        height: 12px;
    }
    .star:nth-child(35) {
        top: 87vh;
        left: 50vw;
    }
    .star:nth-child(35):before,
    .star:nth-child(35):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -35s;
        animation-delay: -35s;
    }
    .star:nth-child(35):before {
        top: 0.5px;
        left: -0.5px;
        width: 3px;
        height: 1px;
    }
    .star:nth-child(35):after {
        top: -0.5px;
        left: 0.5px;
        width: 1px;
        height: 3px;
    }
    .star:nth-child(36) {
        top: 75vh;
        left: 30vw;
    }
    .star:nth-child(36):before,
    .star:nth-child(36):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -36s;
        animation-delay: -36s;
    }
    .star:nth-child(36):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(36):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(37) {
        top: 41vh;
        left: 61vw;
    }
    .star:nth-child(37):before,
    .star:nth-child(37):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -37s;
        animation-delay: -37s;
    }
    .star:nth-child(37):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(37):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(38) {
        top: 66vh;
        left: 13vw;
    }
    .star:nth-child(38):before,
    .star:nth-child(38):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -38s;
        animation-delay: -38s;
    }
    .star:nth-child(38):before {
        top: 1px;
        left: -1px;
        width: 6px;
        height: 2px;
    }
    .star:nth-child(38):after {
        top: -1px;
        left: 1px;
        width: 2px;
        height: 6px;
    }
    .star:nth-child(39) {
        top: 10vh;
        left: 17vw;
    }
    .star:nth-child(39):before,
    .star:nth-child(39):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -39s;
        animation-delay: -39s;
    }
    .star:nth-child(39):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(39):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(40) {
        top: 19vh;
        left: 12vw;
    }
    .star:nth-child(40):before,
    .star:nth-child(40):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -40s;
        animation-delay: -40s;
    }
    .star:nth-child(40):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(40):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(41) {
        top: 19vh;
        left: 28vw;
    }
    .star:nth-child(41):before,
    .star:nth-child(41):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -41s;
        animation-delay: -41s;
    }
    .star:nth-child(41):before {
        top: 1px;
        left: -1px;
        width: 6px;
        height: 2px;
    }
    .star:nth-child(41):after {
        top: -1px;
        left: 1px;
        width: 2px;
        height: 6px;
    }
    .star:nth-child(42) {
        top: 21vh;
        left: 4vw;
    }
    .star:nth-child(42):before,
    .star:nth-child(42):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -42s;
        animation-delay: -42s;
    }
    .star:nth-child(42):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(42):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(43) {
        top: 90vh;
        left: 21vw;
    }
    .star:nth-child(43):before,
    .star:nth-child(43):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -43s;
        animation-delay: -43s;
    }
    .star:nth-child(43):before {
        top: 0.5px;
        left: -0.5px;
        width: 3px;
        height: 1px;
    }
    .star:nth-child(43):after {
        top: -0.5px;
        left: 0.5px;
        width: 1px;
        height: 3px;
    }
    .star:nth-child(44) {
        top: 2vh;
        left: 77vw;
    }
    .star:nth-child(44):before,
    .star:nth-child(44):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -44s;
        animation-delay: -44s;
    }
    .star:nth-child(44):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(44):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(45) {
        top: 91vh;
        left: 34vw;
    }
    .star:nth-child(45):before,
    .star:nth-child(45):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -45s;
        animation-delay: -45s;
    }
    .star:nth-child(45):before {
        top: 2px;
        left: -2px;
        width: 12px;
        height: 4px;
    }
    .star:nth-child(45):after {
        top: -2px;
        left: 2px;
        width: 4px;
        height: 12px;
    }
    .star:nth-child(46) {
        top: 44vh;
        left: 70vw;
    }
    .star:nth-child(46):before,
    .star:nth-child(46):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -46s;
        animation-delay: -46s;
    }
    .star:nth-child(46):before {
        top: 0.5px;
        left: -0.5px;
        width: 3px;
        height: 1px;
    }
    .star:nth-child(46):after {
        top: -0.5px;
        left: 0.5px;
        width: 1px;
        height: 3px;
    }
    .star:nth-child(47) {
        top: 31vh;
        left: 1vw;
    }
    .star:nth-child(47):before,
    .star:nth-child(47):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -47s;
        animation-delay: -47s;
    }
    .star:nth-child(47):before {
        top: 1px;
        left: -1px;
        width: 6px;
        height: 2px;
    }
    .star:nth-child(47):after {
        top: -1px;
        left: 1px;
        width: 2px;
        height: 6px;
    }
    .star:nth-child(48) {
        top: 28vh;
        left: 63vw;
    }
    .star:nth-child(48):before,
    .star:nth-child(48):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -48s;
        animation-delay: -48s;
    }
    .star:nth-child(48):before {
        top: 2px;
        left: -2px;
        width: 12px;
        height: 4px;
    }
    .star:nth-child(48):after {
        top: -2px;
        left: 2px;
        width: 4px;
        height: 12px;
    }
    .star:nth-child(49) {
        top: 0vh;
        left: 67vw;
    }
    .star:nth-child(49):before,
    .star:nth-child(49):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -49s;
        animation-delay: -49s;
    }
    .star:nth-child(49):before {
        top: 2px;
        left: -2px;
        width: 12px;
        height: 4px;
    }
    .star:nth-child(49):after {
        top: -2px;
        left: 2px;
        width: 4px;
        height: 12px;
    }
    .star:nth-child(50) {
        top: 21vh;
        left: 20vw;
    }
    .star:nth-child(50):before,
    .star:nth-child(50):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -50s;
        animation-delay: -50s;
    }
    .star:nth-child(50):before {
        top: 0.5px;
        left: -0.5px;
        width: 3px;
        height: 1px;
    }
    .star:nth-child(50):after {
        top: -0.5px;
        left: 0.5px;
        width: 1px;
        height: 3px;
    }
    .star:nth-child(51) {
        top: 91vh;
        left: 91vw;
    }
    .star:nth-child(51):before,
    .star:nth-child(51):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -51s;
        animation-delay: -51s;
    }
    .star:nth-child(51):before {
        top: 2px;
        left: -2px;
        width: 12px;
        height: 4px;
    }
    .star:nth-child(51):after {
        top: -2px;
        left: 2px;
        width: 4px;
        height: 12px;
    }
    .star:nth-child(52) {
        top: 82vh;
        left: 40vw;
    }
    .star:nth-child(52):before,
    .star:nth-child(52):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -52s;
        animation-delay: -52s;
    }
    .star:nth-child(52):before {
        top: 2px;
        left: -2px;
        width: 12px;
        height: 4px;
    }
    .star:nth-child(52):after {
        top: -2px;
        left: 2px;
        width: 4px;
        height: 12px;
    }
    .star:nth-child(53) {
        top: 10vh;
        left: 51vw;
    }
    .star:nth-child(53):before,
    .star:nth-child(53):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -53s;
        animation-delay: -53s;
    }
    .star:nth-child(53):before {
        top: 2px;
        left: -2px;
        width: 12px;
        height: 4px;
    }
    .star:nth-child(53):after {
        top: -2px;
        left: 2px;
        width: 4px;
        height: 12px;
    }
    .star:nth-child(54) {
        top: 62vh;
        left: 83vw;
    }
    .star:nth-child(54):before,
    .star:nth-child(54):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -54s;
        animation-delay: -54s;
    }
    .star:nth-child(54):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(54):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(55) {
        top: 44vh;
        left: 31vw;
    }
    .star:nth-child(55):before,
    .star:nth-child(55):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -55s;
        animation-delay: -55s;
    }
    .star:nth-child(55):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(55):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(56) {
        top: 59vh;
        left: 60vw;
    }
    .star:nth-child(56):before,
    .star:nth-child(56):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -56s;
        animation-delay: -56s;
    }
    .star:nth-child(56):before {
        top: 1px;
        left: -1px;
        width: 6px;
        height: 2px;
    }
    .star:nth-child(56):after {
        top: -1px;
        left: 1px;
        width: 2px;
        height: 6px;
    }
    .star:nth-child(57) {
        top: 98vh;
        left: 89vw;
    }
    .star:nth-child(57):before,
    .star:nth-child(57):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -57s;
        animation-delay: -57s;
    }
    .star:nth-child(57):before {
        top: 2px;
        left: -2px;
        width: 12px;
        height: 4px;
    }
    .star:nth-child(57):after {
        top: -2px;
        left: 2px;
        width: 4px;
        height: 12px;
    }
    .star:nth-child(58) {
        top: 30vh;
        left: 80vw;
    }
    .star:nth-child(58):before,
    .star:nth-child(58):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -58s;
        animation-delay: -58s;
    }
    .star:nth-child(58):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(58):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(59) {
        top: 65vh;
        left: 51vw;
    }
    .star:nth-child(59):before,
    .star:nth-child(59):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -59s;
        animation-delay: -59s;
    }
    .star:nth-child(59):before {
        top: 0.5px;
        left: -0.5px;
        width: 3px;
        height: 1px;
    }
    .star:nth-child(59):after {
        top: -0.5px;
        left: 0.5px;
        width: 1px;
        height: 3px;
    }
    .star:nth-child(60) {
        top: 90vh;
        left: 73vw;
    }
    .star:nth-child(60):before,
    .star:nth-child(60):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -60s;
        animation-delay: -60s;
    }
    .star:nth-child(60):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(60):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(61) {
        top: 63vh;
        left: 79vw;
    }
    .star:nth-child(61):before,
    .star:nth-child(61):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -61s;
        animation-delay: -61s;
    }
    .star:nth-child(61):before {
        top: 1px;
        left: -1px;
        width: 6px;
        height: 2px;
    }
    .star:nth-child(61):after {
        top: -1px;
        left: 1px;
        width: 2px;
        height: 6px;
    }
    .star:nth-child(62) {
        top: 24vh;
        left: 82vw;
    }
    .star:nth-child(62):before,
    .star:nth-child(62):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -62s;
        animation-delay: -62s;
    }
    .star:nth-child(62):before {
        top: 0.5px;
        left: -0.5px;
        width: 3px;
        height: 1px;
    }
    .star:nth-child(62):after {
        top: -0.5px;
        left: 0.5px;
        width: 1px;
        height: 3px;
    }
    .star:nth-child(63) {
        top: 46vh;
        left: 34vw;
    }
    .star:nth-child(63):before,
    .star:nth-child(63):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -63s;
        animation-delay: -63s;
    }
    .star:nth-child(63):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(63):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(64) {
        top: 87vh;
        left: 93vw;
    }
    .star:nth-child(64):before,
    .star:nth-child(64):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -64s;
        animation-delay: -64s;
    }
    .star:nth-child(64):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(64):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(65) {
        top: 15vh;
        left: 66vw;
    }
    .star:nth-child(65):before,
    .star:nth-child(65):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -65s;
        animation-delay: -65s;
    }
    .star:nth-child(65):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(65):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(66) {
        top: 44vh;
        left: 51vw;
    }
    .star:nth-child(66):before,
    .star:nth-child(66):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -66s;
        animation-delay: -66s;
    }
    .star:nth-child(66):before {
        top: 2px;
        left: -2px;
        width: 12px;
        height: 4px;
    }
    .star:nth-child(66):after {
        top: -2px;
        left: 2px;
        width: 4px;
        height: 12px;
    }
    .star:nth-child(67) {
        top: 21vh;
        left: 32vw;
    }
    .star:nth-child(67):before,
    .star:nth-child(67):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -67s;
        animation-delay: -67s;
    }
    .star:nth-child(67):before {
        top: 1px;
        left: -1px;
        width: 6px;
        height: 2px;
    }
    .star:nth-child(67):after {
        top: -1px;
        left: 1px;
        width: 2px;
        height: 6px;
    }
    .star:nth-child(68) {
        top: 67vh;
        left: 1vw;
    }
    .star:nth-child(68):before,
    .star:nth-child(68):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -68s;
        animation-delay: -68s;
    }
    .star:nth-child(68):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(68):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(69) {
        top: 2vh;
        left: 8vw;
    }
    .star:nth-child(69):before,
    .star:nth-child(69):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -69s;
        animation-delay: -69s;
    }
    .star:nth-child(69):before {
        top: 1px;
        left: -1px;
        width: 6px;
        height: 2px;
    }
    .star:nth-child(69):after {
        top: -1px;
        left: 1px;
        width: 2px;
        height: 6px;
    }
    .star:nth-child(70) {
        top: 64vh;
        left: 54vw;
    }
    .star:nth-child(70):before,
    .star:nth-child(70):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -70s;
        animation-delay: -70s;
    }
    .star:nth-child(70):before {
        top: 1px;
        left: -1px;
        width: 6px;
        height: 2px;
    }
    .star:nth-child(70):after {
        top: -1px;
        left: 1px;
        width: 2px;
        height: 6px;
    }
    .star:nth-child(71) {
        top: 17vh;
        left: 68vw;
    }
    .star:nth-child(71):before,
    .star:nth-child(71):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -71s;
        animation-delay: -71s;
    }
    .star:nth-child(71):before {
        top: 1px;
        left: -1px;
        width: 6px;
        height: 2px;
    }
    .star:nth-child(71):after {
        top: -1px;
        left: 1px;
        width: 2px;
        height: 6px;
    }
    .star:nth-child(72) {
        top: 48vh;
        left: 7vw;
    }
    .star:nth-child(72):before,
    .star:nth-child(72):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -72s;
        animation-delay: -72s;
    }
    .star:nth-child(72):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(72):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(73) {
        top: 24vh;
        left: 4vw;
    }
    .star:nth-child(73):before,
    .star:nth-child(73):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -73s;
        animation-delay: -73s;
    }
    .star:nth-child(73):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(73):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(74) {
        top: 4vh;
        left: 55vw;
    }
    .star:nth-child(74):before,
    .star:nth-child(74):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -74s;
        animation-delay: -74s;
    }
    .star:nth-child(74):before {
        top: 1.5px;
        left: -1.5px;
        width: 9px;
        height: 3px;
    }
    .star:nth-child(74):after {
        top: -1.5px;
        left: 1.5px;
        width: 3px;
        height: 9px;
    }
    .star:nth-child(75) {
        top: 42vh;
        left: 63vw;
    }
    .star:nth-child(75):before,
    .star:nth-child(75):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -75s;
        animation-delay: -75s;
    }
    .star:nth-child(75):before {
        top: 1px;
        left: -1px;
        width: 6px;
        height: 2px;
    }
    .star:nth-child(75):after {
        top: -1px;
        left: 1px;
        width: 2px;
        height: 6px;
    }
    .star:nth-child(76) {
        top: 22vh;
        left: 69vw;
    }
    .star:nth-child(76):before,
    .star:nth-child(76):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -76s;
        animation-delay: -76s;
    }
    .star:nth-child(76):before {
        top: 1px;
        left: -1px;
        width: 6px;
        height: 2px;
    }
    .star:nth-child(76):after {
        top: -1px;
        left: 1px;
        width: 2px;
        height: 6px;
    }
    .star:nth-child(77) {
        top: 27vh;
        left: 66vw;
    }
    .star:nth-child(77):before,
    .star:nth-child(77):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -77s;
        animation-delay: -77s;
    }
    .star:nth-child(77):before {
        top: 1px;
        left: -1px;
        width: 6px;
        height: 2px;
    }
    .star:nth-child(77):after {
        top: -1px;
        left: 1px;
        width: 2px;
        height: 6px;
    }
    .star:nth-child(78) {
        top: 16vh;
        left: 82vw;
    }
    .star:nth-child(78):before,
    .star:nth-child(78):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -78s;
        animation-delay: -78s;
    }
    .star:nth-child(78):before {
        top: 0.5px;
        left: -0.5px;
        width: 3px;
        height: 1px;
    }
    .star:nth-child(78):after {
        top: -0.5px;
        left: 0.5px;
        width: 1px;
        height: 3px;
    }
    .star:nth-child(79) {
        top: 56vh;
        left: 89vw;
    }
    .star:nth-child(79):before,
    .star:nth-child(79):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -79s;
        animation-delay: -79s;
    }
    .star:nth-child(79):before {
        top: 0.5px;
        left: -0.5px;
        width: 3px;
        height: 1px;
    }
    .star:nth-child(79):after {
        top: -0.5px;
        left: 0.5px;
        width: 1px;
        height: 3px;
    }
    .star:nth-child(80) {
        top: 21vh;
        left: 8vw;
    }
    .star:nth-child(80):before,
    .star:nth-child(80):after {
        position: absolute;
        content: '';
        background-color: #fff;
        border-radius: 10px;
        -webkit-animation: blink 1.5s infinite;
        animation: blink 1.5s infinite;
        -webkit-animation-delay: -80s;
        animation-delay: -80s;
    }
    .star:nth-child(80):before {
        top: 2px;
        left: -2px;
        width: 12px;
        height: 4px;
    }
    .star:nth-child(80):after {
        top: -2px;
        left: 2px;
        width: 4px;
        height: 12px;
    }
    .circle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
    }
    .circle--outer {
        width: 550px;
        height: 550px;
        background-image: linear-gradient(to right bottom, #802b89, #5631a1);
        box-shadow: 0px 0px 20px -8px #000;
    }
    .circle--inner {
        width: 355px;
        height: 355px;
        background-image: linear-gradient(to right bottom, #75278b, #5530a2);
        box-shadow: 0px 0px 20px -8px #000;
    }
    .four {
        position: absolute;
        font-size: 150px;
        font-weight: 900;
        text-shadow: 0px 2px 10px rgba(0,0,0,0.5);
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    .four--1 {
        top: 100px;
        left: 30px;
        z-index: 1;
    }
    .four--2 {
        top: 100px;
        left: 230px;
        z-index: 3;
    }
    .astronaut {
        position: absolute;
        top: -115px;
        left: -30px;
        transform: rotate(17deg);
    }
    .astronaut .astronaut-backpack {
        width: 100px;
        height: 100px;
        background-color: #e3e3e3;
        border-radius: 10px;
    }
    .astronaut .antena--left {
        left: 10px;
    }
    .astronaut .antena--right {
        right: 10px;
    }
    .astronaut .astronaut-antena {
        position: absolute;
        top: -7px;
    }
    .astronaut .astronaut-antena .ear-down {
        position: absolute;
        bottom: -5px;
        width: 15px;
        height: 20px;
        border-radius: 5px;
        background-color: #afafaf;
        z-index: 1;
    }
    .astronaut .astronaut-antena .ear-up {
        position: relative;
        width: 15px;
        height: 20px;
        border-radius: 5px;
        background-color: #c3c3c3;
        z-index: 2;
    }
    .astronaut .astronaut-antena .antena {
        position: absolute;
        top: -29px;
        width: 2px;
        height: 30px;
        border-radius: 5px;
        background-color: #c3c3c3;
    }
    .astronaut .astronaut-antena .antena-tip {
        position: absolute;
        top: -33px;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background-color: #c3c3c3;
    }
    .astronaut .antena--left .antena {
        left: 5px;
    }
    .astronaut .antena--right .antena {
        right: 5px;
    }
    .astronaut .antena--left .antena-tip {
        left: 3px;
    }
    .astronaut .antena--right .antena-tip {
        right: 3px;
    }
    .astronaut .astronaut-helmet {
        position: absolute;
        top: -30px;
        left: 50%;
        width: 66px;
        height: 66px;
        border-radius: 50%;
        background-color: #fff;
        box-shadow: 0px 5px 1px -3px #808080;
        transform: translateX(-50%);
        z-index: 3;
        overflow: hidden;
    }
    .astronaut .astronaut-glass {
        position: absolute;
        top: 13px;
        left: 5px;
        width: 56px;
        height: 56px;
        background: #00202e;
        border-radius: 10px;
    }
    .astronaut .glow {
        position: absolute;
        border-radius: 50%;
        background-color: #334d57;
    }
    .astronaut .glow--1 {
        top: 25px;
        left: 15px;
        width: 17px;
        height: 17px;
    }
    .astronaut .glow--2 {
        top: 44px;
        left: 13px;
        width: 7px;
        height: 7px;
    }
    .astronaut .astronaut-body {
        position: absolute;
        top: 30px;
        left: 50%;
        width: 50px;
        height: 50px;
        background-color: #c3c3c3;
        transform: translateX(-50%);
    }
    .astronaut-wire {
        position: absolute;
        top: -40px;
        left: -260px;
    }
    .astronaut-hands {
        position: absolute;
        top: -89px;
        left: -23px;
        width: 100px;
        transform: rotate(17deg);
        z-index: 3;
    }
    .astronaut-hands .astronaut-hand {
        position: absolute;
    }
    .astronaut-hands .hand--left {
        left: -3px;
    }
    .astronaut-hands .hand--right {
        transform: scaleX(-1);
        right: -3px;
    }
    .oh {
        transition: all 0.1s linear;
        -webkit-animation: floating 4s linear infinite;
        animation: floating 4s linear infinite;
        z-index: 2;
    }
    .planet {
        background-color: #ff4980;
        box-shadow: inset -6px -10px 0px 1px #cc3b6b, 0px 2px 10px rgba(0,0,0,0.4);
        width: 155px;
        height: 155px;
    }
    .craters .crater {
        position: absolute;
        border-radius: 50%;
        background-color: #c93667;
    }
    .craters .crater--1 {
        width: 35px;
        height: 35px;
        top: 30px;
        left: 25px;
    }
    .craters .crater--2 {
        width: 23px;
        height: 23px;
        top: 20px;
        left: 93px;
    }
    .craters .crater--3 {
        width: 17px;
        height: 17px;
        top: 77px;
        left: 17px;
    }
    .craters .crater--4 {
        width: 10px;
        height: 10px;
        top: 90px;
        left: 80px;
    }
    .craters .crater--5 {
        width: 25px;
        height: 25px;
        top: 115px;
        left: 50px;
    }
    .craters .crater--6 {
        width: 13px;
        height: 13px;
        top: 118px;
        left: 105px;
    }
    .button {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        padding: 8px 12px;
        border: 1px solid #fff;
        border-radius: 3px;
        cursor: pointer;
        z-index: 999;
    }
    .button:active {
        transform: translateX(-50%) scale(0.95);
    }
    .sorry {
        position: absolute;
        top: 210px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 15px;
    }
    @-webkit-keyframes blink {
        0%, 100% {
            transform: scale(1);
            opacity: 1;
        }
        50% {
            transform: scale(0.4);
            opacity: 0.5;
        }
    }
    @keyframes blink {
        0%, 100% {
            transform: scale(1);
            opacity: 1;
        }
        50% {
            transform: scale(0.4);
            opacity: 0.5;
        }
    }
    @-webkit-keyframes floating {
        0%, 100% {
            transform: translate(1px, -1px) rotate(2deg);
        }
        20% {
            transform: translate(1px, 3px) rotate(1deg);
        }
        40% {
            transform: translate(0px, 2px) rotate(0deg);
        }
        60% {
            transform: translate(0px, 1px) rotate(0deg);
        }
        80% {
            transform: translate(0px, 0px) rotate(2deg);
        }
    }
    @keyframes floating {
        0%, 100% {
            transform: translate(1px, -1px) rotate(2deg);
        }
        20% {
            transform: translate(1px, 3px) rotate(1deg);
        }
        40% {
            transform: translate(0px, 2px) rotate(0deg);
        }
        60% {
            transform: translate(0px, 1px) rotate(0deg);
        }
        80% {
            transform: translate(0px, 0px) rotate(2deg);
        }
    }

</style>
</head>
<body>


<div class="stars">
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
</div>
<div class="center ">
    <div class="circle circle--outer"></div>
    <div class="circle circle--inner">

        <div class="circle oh center">
           <h2 >تم الدفع الفاتورة فعلا</h2>
           <h2>نشكرك لتعامل مع شكرتنا</h2>
        </div>
        <div class="button"><a href="{{route('main.index')}}" style="color: white; text-decoration: none;">GO HOME</a> </div>
    </div>
    <div class="sorry">Oops! Sorry, page not found.</div>
    <div class="sorry">Oops! Sorry, page not found.</div>
</div>


<script>
    /*
  Inspired by: "Error, 404"
  By: Sujeet Mishra
  Link: https://dribbble.com/shots/4571035-Error-404
*/

    let oh = document.querySelector('.circle.oh');

    document.addEventListener('mousemove', event => {
        let domainX = [0, document.body.clientWidth],
            domainY = [0, document.body.clientHeight],
            range = [-10, 10];

        let translate = {
            x: range[0] + (event.clientX - domainX[0]) * (range[1] - range[0]) / (domainX[1] - domainX[0]),
            y: range[0] + (event.clientY - domainY[0]) * (range[1] - range[0]) / (domainY[1] - domainY[0]) };


        oh.style.animation = 'none';
        oh.style.transform = `translate(${translate.x}px, ${translate.y}px)`;
    });

    document.addEventListener('mouseleave', event => {
        oh.style.animation = 'floating 3s linear infinite';
    });
</script>
</body>
</html>
