// 1-2400までのランダムな数字3つをつかって、
// その数の並び替えでもっとも大きな数字になるパターンを
// 出力してください。(9, 31, 15 => 93115)
const randNum = (num) => Math.floor(Math.random() * num) + 1
const arr = [...Array(3)].map(() => randNum(2400))
const num = arr
                .slice()
                .sort(function(a, b) {
                    const fn = (x, y) => x == y ? 0 : x < y ? 1 : -1
                    const fn1 = (x, y, i) => {
                        if ( i < x.length && i < y.length ) {
                            if(x[i] === y[i]) {
                                return fn1(x, y, i + 1)
                            } else {
                                return fn(x[i], y[i])
                            }
                        } else {
                            if(x.length === y.length) {
                                return 0
                            } else {
                                return x.length < y.length ? fn(x[0], y[i]) : fn(x[i], y[0])
                            }
                        }
                    }
                    return fn1(`${a}`, `${b}`, 0)

                })
                .join("")

console.log(`(${arr.join(", ")}) => ${num}`);