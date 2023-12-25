const parents = document.querySelectorAll('.questions__point')
const buttons = document.querySelectorAll('.questions__point-title')
const contents = document.querySelectorAll('.questions__point-description')

buttons.forEach(btn => {
	btn.addEventListener('click', e => {
        if (e.target && e.target.classList.contains('questions__point-title_active') && e.target.classList.contains('questions__point-title')) {
            const parent = btn.parentNode
            const content = parent.querySelector('.questions__point-description_active')

            parent.classList.remove('questions__point_active')
            btn.classList.remove('questions__point-title_active')
            content.classList.remove('questions__point-description_active')
        } else if(e.target && e.target.classList.contains('questions__point-title')) {
            if (e.target && e.target.classList.contains('questions__point-title')) {
                const parent = btn.parentNode
                const content = parent.querySelector('.questions__point-description')
    
                hide()
                parent.classList.add('questions__point_active')
                btn.classList.add('questions__point-title_active')
                content.classList.add('questions__point-description_active')
            }
        }
	})
})

function hide() {
	parents.forEach(item => {
		item.classList.remove('questions__point_active')
	})

	buttons.forEach(item => {
		item.classList.remove('questions__point-title_active')
	})

	contents.forEach(item => {
		item.classList.remove('questions__point-description_active')
	})
}
