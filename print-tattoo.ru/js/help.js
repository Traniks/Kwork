const parents = document.querySelectorAll('.questions__point');
const buttons = document.querySelectorAll('.questions__point-title');
const contents = document.querySelectorAll('.questions__point-description');
const pluss = document.querySelectorAll('.plus')

buttons.forEach(btn => {
	btn.addEventListener('click', e => {
        if (e.target && e.target.classList.contains('questions__point-title') || e.target.classList.contains('plus')) {

            // console.log(e.target.classList.contains('plus'))
			// console.log(btn.parentNode)

            if (e.target.classList.contains('questions__point-title_active') || e.target.classList.contains('plus_active')) {
                hide()
            } else {
				const parent = btn.parentNode
				const content = parent.querySelector('.questions__point-description')
				const plus = parent.querySelector('.plus')

                hide()
				parent.classList.add('questions__point_active')
				btn.classList.add('questions__point-title_active')
                plus.classList.add('plus_active')
				content.classList.add('questions__point-description_active')
			}

        }
	})
})

function hide() {
	parents.forEach(item => {
		item.classList.remove('questions__point_active');
	})

	buttons.forEach(item => {
		item.classList.remove('questions__point-title_active');
	})

    pluss.forEach(item => {
		item.classList.remove('plus_active')
	})

	contents.forEach(item => {
		item.classList.remove('questions__point-description_active');
	})
}
