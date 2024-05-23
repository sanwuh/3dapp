<?php require_once dirname(__DIR__) . '/controller/appController.php'; ?>
<?php include 'header.php'; ?>

<div class="container">
    <h1>Our Products</h1>
    <div class="row">
        <div class="col-md-8">
            <!-- 3D models -->
            <div id="3d-model">
                <x3d width='500px' height='400px'>
                    <scene>
                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/models/coke.x3d"></inline>
                    </scene>
                </x3d>
            </div>
        </div>
        <div class="col-md-4">
            <!-- description -->
            <div id="model-description">
                <h3 id="model-name">Coca Cola</h3>
                <p id="model-text">Refreshing Coke</p>
            </div>
            <!-- interactive -->
            <div id="controls">
                <button class="btn btn-primary" onclick="changeModel('coke.x3d', 'Coca Cola', 'Refreshing Coke')">Coke</button>
                <button class="btn btn-primary" onclick="changeModel('fanta.x3d', 'Fanta', 'Fruity Fanta')">Fanta</button>
                <button class="btn btn-primary" onclick="changeModel('sprite.x3d', 'Sprite', 'Lemon-Lime Sprite')">Sprite</button>
                <br>
                <button class="btn btn-secondary" onclick="switchCamera('Camera001-18')">Camera 1</button>
                <button class="btn btn-secondary" onclick="switchCamera('Camera002-20')">Camera 2</button>
                <button class="btn btn-secondary" onclick="switchCamera('Camera003-21')">Camera 3</button>
                <br>
                <button class="btn btn-secondary" onclick="toggleLight('Omni001-6', 'Camera001-18')">Red Light</button>
                <button class="btn btn-secondary" onclick="toggleLight('Omni002-7', 'Camera001-18')">Green Light</button>
                <button class="btn btn-secondary" onclick="toggleLight('Omni003-8', 'Camera001-18')">Blue Light</button>
                <button class="btn btn-secondary" onclick="toggleLight('Omni004-11', 'Camera001-18')">Yellow Light</button>
                <button class="btn btn-secondary" onclick="toggleLight('Omni005-12', 'Camera001-18')">Cyan Light</button>
                <button class="btn btn-secondary" onclick="toggleLight('Omni006-13', 'Camera001-18')">Purple Light</button>

                <br>
                <!-- <button class="btn btn-secondary" onclick="switchView('front')">Front</button>
                <button class="btn btn-secondary" onclick="switchView('back')">Back</button>
                <button class="btn btn-secondary" onclick="switchView('left')">Left</button>
                <button class="btn btn-secondary" onclick="switchView('right')">Right</button>
                <button class="btn btn-secondary" onclick="switchView('top')">Top</button>
                <button class="btn btn-secondary" onclick="switchView('bottom')">Bottom</button> -->
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
