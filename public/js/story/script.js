function loadFile(event) {
    const imagePreview = document.getElementById("storyImgCoverPreview");
    const input = event.target;
    const image = URL.createObjectURL(input.files[0]);
    imagePreview.src = image;
}
