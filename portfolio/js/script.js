const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: true


})

/*home-section*/
sr.reveal('.home_title', {})
sr.reveal('.home_img', { origin: 'right', delay: 200 })

/*about-section*/
sr.reveal('.about_img', { delay: 500 })
sr.reveal('.about_subtitle', { delay: 300 })
sr.reveal('.about_profession', { delay: 400 })
sr.reveal('.about_text', { delay: 500 })
sr.reveal('.about_social-icon', { delay: 600, interval: 200 })

/**skills-section*/
sr.reveal('.skills_subtitle', {})
sr.reveal('.skills_name', { distance: '20px', delay: 50, interval: 100 })
sr.reveal('.skills_img', { delay: 400 })

/**project-section*/
sr.reveal('.project_img', { interval: 200 })

/**contact-section*/
sr.reveal('.text-muted', { interval: 200 })
sr.reveal('.table-details', { interval: 300 })
sr.reveal('.form', { origin: 'bottom', delay: 500 })