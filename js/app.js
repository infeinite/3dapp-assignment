function loadModel(modelName) {
    $('inline').attr('url', `models/${modelName}.x3d`);
    $.getJSON(`php/getModelDescription.php?model=${modelName}`, function(data) {
        $('#description').html(data.description);
    });
}

// Example function for wireframe mode
function toggleWireframe() {
    let models = document.querySelectorAll('shape');
    models.forEach(model => {
        model.runtime.togglePoints(true);
    });
}
