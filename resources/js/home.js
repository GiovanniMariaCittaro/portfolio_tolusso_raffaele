// Make Game Descriptions appears

function display_description(index) {
    let projects_descriptions = document.querySelectorAll('.projects-descriptions');
    projects_descriptions[index].classList.add('d-block');
}