// Creation
let selector = 'bug-attachment-preview-image'
let previews = document.querySelectorAll('.' + selector)
for (let preview in previews) {
    if (previews.hasOwnProperty(preview)) {
        lightGallery(previews[ preview ], {
            counter: false
        })
    }
}

// Activities
let bugNotes = document.querySelectorAll('.bugnote-note')
for (let bugNote in bugNotes) {
    if (bugNotes.hasOwnProperty(bugNote)) {
        let links = bugNotes[ bugNote ].querySelectorAll('a[href^="file_download.php"]')
        for (let link in links) {
            if (links.hasOwnProperty(link) && !links[ link ].parentElement.classList.contains(selector)) {
                lightGallery(links[ link ], {
                    selector: 'this',
                    counter: false
                })
            }
        }
    }
}
