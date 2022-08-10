function outerFn() {
    function innerFn() {
        a = 5
        console.log(a)
    }
    innerFn()
}

outerFn()