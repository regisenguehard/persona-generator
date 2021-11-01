
require('./bootstrap');


// $('.copypaste')


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
}

copyPaste = document.querySelectorAll('.copypaste');
copyPaste = addEventListener('click', e => {
    copyTextToClipboard(e.target.value || e.target.src);
    e.target.classList.add('outline');
});
