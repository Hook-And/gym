const bugatti = {
    mark: 'veyron',
    speed: 300
}

const speedChanger = 75

function changeSpeed() {
    console.log(bugatti)
}

function fnWithCallback(callbackFunction) {
    callbackFunction()
}

console.log('Start')

setTimeout(changeSpeed, 2000)