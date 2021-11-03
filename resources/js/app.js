require('./bootstrap');


// $('.copypaste')
Toastify = require('toastify-js');

function copyTextToClipboard(text) {
    var sampleTextarea = document.createElement("textarea");
    document.body.appendChild(sampleTextarea);
    sampleTextarea.value = text; //save main text in it
    sampleTextarea.select(); //select textarea contenrs
    // document.execCommand("copy");
    document.body.removeChild(sampleTextarea);

    const blob = new Blob([text], { type: 'text/plain' });
    const data = [new ClipboardItem({ [blob.type]: blob })];
    navigator.clipboard.write(data);

    Toastify({
        text: "Copié",
        duration: 1500,
        newWindow: true,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        onClick: function(){} // Callback after click
      }).showToast();
}

copyPaste = document.querySelectorAll('.copypaste');

copyPaste.forEach(function(item) {
    item.addEventListener('click', e => {
        copyTextToClipboard(e.target.value);
    });
});
