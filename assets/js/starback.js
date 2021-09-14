const canvas = document.querySelector('#canvas')
const starback = new Starback(canvas, {
  width: 1440,
  height: 500,
  speed: 5,
  spread: 0.2,
  backgroundColor: 'transparent',
  starColor: '#ffffff',
  randomOpacity: true,
})
starback.generateStar(20)