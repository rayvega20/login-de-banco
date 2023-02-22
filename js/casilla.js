var checkbox = document.createElement('input');
checkbox.type = 'checkbox';
checkbox.id = 'checkbox';
document.body.appendChild(checkbox);
var input = document.createElement('input');
input.type = 'text';
input.id = 'input';
document.body.appendChild(input);
var label = document.createElement('label');
label.innerHTML = 'Checkbox';
label.setAttribute('for', 'checkbox');
document.body.appendChild(label);
var checkbox = document.getElementById('checkbox');
var input = document.getElementById('input');
checkbox.addEventListener('change', function() {
  if (checkbox.checked) {
    input.style.display = 'block';
  } else {
    input.style.display = 'none';
  }
});