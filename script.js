
const videoPlayer = document.querySelector('#player');
const canvasElement = document.querySelector('#canvas');
const captureButton = document.querySelector('#capture-btn');
const imagePicker = document.querySelector('#image-picker');
const imagePickerArea = document.querySelector('#pick-image');
const newImages = document.querySelector('#newImages');

// Image dimensions
const width = 320;
const height = 240;
let   zIndex = 1;

const startMedia = () => {
  if (!('mediaDevices' in navigator)) {
    navigator.mediaDevices = {};
  }

  if (!('getUserMedia' in navigator.mediaDevices)) {
    navigator.mediaDevices.getUserMedia = (constraints) => {
      const getUserMedia = navigator.webkitGetUserMedia || navigator.mozGetUserMedia;

       if (!getUserMedia) {
          return Promise.reject(new Error('getUserMedia is not supported'));
        } else {
          return new Promise((resolve, reject) => getUserMedia.call(navigator, constraints, resolve, reject));
        }
    };
  }

  navigator.mediaDevices.getUserMedia({video: true})
    .then((stream) => {
      videoPlayer.srcObject = stream;
      videoPlayer.style.display = 'block';
    })
  .catch((err) => {
    imagePickerArea.style.display = 'block';
  });
};