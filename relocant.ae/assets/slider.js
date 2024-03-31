let nav = document.getElementById('nav-slider');
let nav_pagination = document.getElementById('nav-slider-pagination');

let button_left = document.getElementById('slider-button-left');
let button_right = document.getElementById('slider-button-right');

let width_to_change;
let item_active;

if (Number(window.innerWidth) < 1001) {
  width_to_change = 490;
  nav_pagination.children[0].children[0].classList.add('carousel__pagination-button--active');
  nav.children[0].classList.add('item-selected');
  item_active = 0;
} else  {
  width_to_change = 432;
  nav_pagination.children[1].children[0].classList.add('carousel__pagination-button--active');
  nav.children[1].classList.add('item-selected');
  item_active = 1;
}

let margin_left = 0;

const prev_slide = (x) => {
    margin_left += width_to_change * x;
    nav.style = "transform: translateX(-107.2px);  transition: 0.5s all; margin: 0px " + margin_left + "px; width: 100%;";
    for (let i = 0; i < nav_pagination.children.length; i++) {
      nav_pagination.children[i].children[0].classList.remove('carousel__pagination-button--active');
      nav.children[i].classList.remove('item-selected');
    }
    nav_pagination.children[item_active].children[0].classList.add('carousel__pagination-button--active');
  nav.children[item_active].classList.add('item-selected');
}
const next_slide = (x) => {

    margin_left -= width_to_change * x;
    nav.style = "transform: translateX(-107.2px);  transition: 0.5s all; margin: 0px " + margin_left + "px; width: 100%;";
    for (let i = 0; i < nav_pagination.children.length; i++) {
      nav_pagination.children[i].children[0].classList.remove('carousel__pagination-button--active');
      nav.children[i].classList.remove('item-selected');
    }
    nav_pagination.children[item_active].children[0].classList.add('carousel__pagination-button--active');
    nav.children[item_active].classList.add('item-selected');
}

button_left.addEventListener('click', () => {
  
  if (item_active < 1) {
    item_active = nav.children.length-1;
    next_slide(item_active);
  } else {
    item_active -= 1;
    prev_slide(1);
  }
});

button_right.addEventListener('click', () => {
  if (item_active >= nav.children.length-1) {
    item_active = 0;
    prev_slide(nav.children.length-1);
  } else {
    item_active += 1;
    next_slide(1);
  }
});


nav_pagination.addEventListener('click', (e) => {
  let num = findElement(nav_pagination.children, e.target);
  if (num > item_active) {
    let temp = item_active;
    item_active = num;
    next_slide(num - temp);
  } else {
    let temp = item_active;
    item_active = num;
    prev_slide(temp - num);
  }
});


function findElement(arr, sing) {
   for(var i = 0; i < arr.length; i++) {
      var element = arr[i];
      for(prop in element ) { if(element[prop] == sing) return i}
   }
   return -1; // если ничего не нашли
}
