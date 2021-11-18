window.addEventListener("load", () => {

    const canvas = document.querySelector("#canvas");
    const ctx = canvas.getContext("2d");

    
    // variable
    let painting = false;

    function startpostion(e) {
        painting = true;
        draw(e)
    }
    function finishposition() {
        painting = false;
        ctx.beginPath();
    }
    function draw(e) {
        if (!painting) return;
        ctx.lineWidth = 10;
        ctx.lineCap = "round";

        ctx.lineTo(e.clientX, e.clientY);
        ctx.stroke();
        ctx.beginPath();
        ctx.moveTo(e.clientX, e.clientY);


    }
    // Event listener
    canvas.addEventListener("mousedown", startpostion);
    canvas.addEventListener("mouseup", finishposition);
    canvas.addEventListener("mousemove", draw);
});