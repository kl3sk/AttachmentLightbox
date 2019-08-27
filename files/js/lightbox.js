// Creation
let selector = '.bug-attachment-preview-image'
let wrapper = document.querySelector(selector)
lightGallery(wrapper)

// Activities
let bugNotes = document.querySelectorAll('.bugnote-note')
for (let bugNote in bugNotes) {
    if (bugNotes.hasOwnProperty(bugNote)) {
        let links = bugNotes[ bugNote ].querySelectorAll('a[href^="file_download.php"]')
        for (let link in links) {
            if (links.hasOwnProperty(link)) {
                lightGallery(links[ link ], {
                    selector: 'this'
                })
            }
        }
    }
}
