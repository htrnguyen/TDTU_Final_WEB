let min = 50; 
let max = 2000; 

const minValue = $('#min')
const maxValue = $('#max')

console.log(minValue, maxValue)

minValue.text('50$')
maxValue.text('2000$')

const calcLeftPosition = value => 100 / (max - min) * (value - min);

$('#rangeMin').attr('min', min).attr('max', max).attr('value', min); // Cập nhật giá trị min và max cho input #rangeMin và đặt giá trị mặc định là min
$('#rangeMax').attr('min', min).attr('max', max).attr('value', max); // Cập nhật giá trị min và max cho input #rangeMax và đặt giá trị mặc định là max

$('#rangeMin').on('input', function(e) {
  const newValue = parseInt(e.target.value);
  if (newValue > max) return;
  min = newValue;
  $('#thumbMin').css('left', calcLeftPosition(newValue) + '%');
  $('#min').html(newValue);
  $('#line').css({
    'left': calcLeftPosition(newValue) + '%',
    'right': (100 - calcLeftPosition(max)) + '%'
  });
});

$('#rangeMax').on('input', function(e) {
  const newValue = parseInt(e.target.value);
  if (newValue < min) return;
  max = newValue;
  $('#thumbMax').css('left', calcLeftPosition(newValue) + '%');
  $('#max').html(newValue);
  $('#line').css({
    'left': calcLeftPosition(min) + '%',
    'right': (100 - calcLeftPosition(newValue)) + '%'
  });
});

// Lấy tham chiếu đến các phần tử
var originalInfo = document.getElementById('original-info');
var newInfo = document.getElementById('new-info');

// Sự kiện khi di chuột vào vị trí mới
originalInfo.addEventListener('mouseenter', function() {
  // Ẩn thông tin ban đầu
  originalInfo.style.display = 'none';
  // Hiện thông tin mới
  newInfo.style.display = 'block';
});

// Sự kiện khi di chuột ra khỏi vị trí mới
newInfo.addEventListener('mouseleave', function() {
  // Ẩn thông tin mới
  newInfo.style.display = 'none';
  // Hiển thị lại thông tin ban đầu
  originalInfo.style.display = 'block';
});
