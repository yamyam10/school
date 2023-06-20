document.getElementById("input").addEventListener("input", (event) => {
    document.getElementById("output").innerText = event.target.innerText;
    hljs.highlightElement(document.getElementById("output"));
});

// document
//     .getElementById("input")
//     .addEventListener("keyup", (event) => {
//         document
//             .getElementById("output")
//             .innerText = event.target.value

//         hljs.highlightAll();
//     })
// document
//     .querySelector("body")
//     .addEventListener("click", () => {
//         document.getElementById("input").focus()
//     })
