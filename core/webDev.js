function changeInner(classID, content) {
        document.getElementById(classID).innerHTML = content;
}

var uclass = {
    exists: function(elem,className){var p = new RegExp('(^| )'+className+'( |$)');return (elem.className && elem.className.match(p));},
    add: function(elem,className){if(uclass.exists(elem,className)){return true;}elem.className += ' '+className;},
    remove: function(elem,className){var c = elem.className;var p = new RegExp('(^| )'+className+'( |$)');c = c.replace(p,' ').replace(/  /g,' ');elem.className = c;}
};

/*
 * Changes the selected attribute to only be shown on one image
 */
function JS_changeImage(classID){
    var element = document.getElementById('image_choice_'+classID);
    for(var i=1; i<=3; i++){
        removeClassFrom('image_choice_'+i, 'selected');
    }
    element.classList.add('selected');
    /*
     * Set featured image to correct source
     */
    //Get correct source
    var newSource = document.getElementById('example_img_'+classID).src;
    //Set source
    document.getElementById('featured_image').src = newSource;
}

function removeClassFrom(classID, classToRemove){
    var element = document.getElementById(classID);
    element.classList.remove(classToRemove);
}

function toggleFilter(classId) {
    selectItemFromList(classId);
    document.getElementById('filter_current_display_title').innerHTML = "currently Showing "+classId;
    filterObjects = document.getElementById('display_list').children;
    for(var i=0; i<filterObjects.length;i++){
        if(classId == "all"){
            filterObjects[i].classList.add("selected");
        } else {
            if(filterObjects[i].classList.contains(classId)){
                filterObjects[i].classList.add("selected");
            } else {
                filterObjects[i].classList.remove("selected");
            }
        }
    }
}

function selectItemFromList(classId){
    var element = document.getElementById(classId);
    var parentUL = element.parentElement;
    var childrenElements = parentUL.children;
    for(var i=0; i<childrenElements.length;i++){
        childrenElements[i].classList.remove("selected");
    }
    element.classList.add("selected");
    //Now go through and add selected only to element that have the specified class in them.
}