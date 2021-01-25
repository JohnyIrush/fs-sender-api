const classRemover = () => {
    var elems = document.querySelectorAll("fade");

    [].forEach.call(elems, function(el) {
        el.classList.remove("fade");
    });
}

classRemover();

const collapseSideBar = () => {

}