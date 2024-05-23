function changeModel(model, name, description) {
    $.ajax({
        url: 'controller/changeModel.php',
        type: 'POST',
        data: { model: model, name: name, description: description },
        success: function(response) {
            var data = JSON.parse(response);
            document.querySelector('inline').setAttribute('url', 'assets/models/' + data.model);
            document.getElementById('model-name').innerText = data.name;
            document.getElementById('model-text').innerText = data.description;
        },
        error: function() {
            console.log('Error loading model');
        }
    });
}

function switchCamera(cameraId) {
    $.ajax({
        url: 'controller/switchCamera.php',
        type: 'POST',
        data: { cameraId: cameraId },
        success: function(response) {
            var data = JSON.parse(response);
            var viewpoint = document.getElementById('model__' + data.cameraId);
            if (viewpoint) {
                viewpoint.setAttribute('set_bind', 'true');
            } else {
                console.log('Error: Camera ID not found');
            }
        },
        error: function() {
            console.log('Error switching camera');
        }
    });
}

function toggleLight(lightId, cameraId) {
    $.ajax({
        url: 'controller/toggleLight.php',
        type: 'POST',
        data: { lightId: lightId },
        success: function(response) {
            var data = JSON.parse(response);
            var light = document.getElementById('model__' + data.lightId);
            var intensity = light.getAttribute('intensity') === '1' ? '0' : '1';
            light.setAttribute('intensity', intensity);
            switchCamera(cameraId); // 同时切换摄像头
        },
        error: function() {
            console.log('Error toggling light');
        }
    });
}



function switchView(viewId) {
    $.ajax({
        url: 'controller/switchView.php',
        type: 'POST',
        data: { viewId: viewId },
        success: function(response) {
            var data = JSON.parse(response);
            var viewpoint = document.getElementById('model__' + data.viewId);
            viewpoint.setAttribute('set_bind', 'true');
        },
        error: function() {
            console.log('Error switching view');
        }
    });
}


function animateModel() {
    // 在这里添加动画逻辑
}

$(document).ready(function() {
    // 可以在这里初始化其他代码
});
