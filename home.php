<?php include('header.php');?>


<div style="position: relative; height: 1850px;">

  <div style="position: absolute; inset: 0; z-index: 1;">
    <div style="background-color: #9AD0E6; height: 350px; overflow: hidden; padding: 20px; box-sizing: border-box;">
    </div>
    <div style="background-image: linear-gradient(#72D4EC, #2C5C9B, #061E65, #020641, #000); height: 1550px;"></div>
  </div>

  <div style="position: relative; z-index: 2; height: 1000px;">
    <img id="myIceberg" src="../images/ice.png" alt="Iceberg" usemap="#icemap" style="width: 100%; height: 100%; object-fit: contain;">
    
    <map name="icemap">
      <area shape="poly" coords="775,21, 838,222, 584,332, 626,271, 666,150"
            onmouseenter="showTip('Glaciers begin to form when snow remains and accumulates long enough to transform into ice. Each year, new layers of snow bury and compress the previous layers. This compression forces the snow to re-crystallise, initially forming grains similar in size and shape to grains of sugar.')"
            onmousemove="moveTip(event)"
            onmouseleave="hideTip()"
            onclick="return false;">

      <area shape="poly" coords="775,21, 838,222, 1049,289, 1024,234, 958,209, 893,64" 
            onmouseenter="showTip('Glaciers form as new snow buries and compresses older layers, turning them into firn after about a year. Over time, the grains grow, air pockets shrink, and the snow becomes dense glacier ice—a process that usually takes more than 100 years.')"
            onmousemove="moveTip(event)"
            onmouseleave="hideTip()"
            onclick="return false;">

      <area shape="poly" coords="838,222, 560,364, 935,388, 1087,347" 
            onmouseenter="showTip('An ice sheet is a mass of glacial land ice extending more than 50,000 square kilometres (19,300 square miles). There are only two ice sheets on Earth today: the Greenland Ice Sheet and the Antarctic Ice Sheet. During the last ice age, ice sheets also covered much of North America and Scandinavia.')"
            onmousemove="moveTip(event)"
            onmouseleave="hideTip()"
            onclick="return false;">

      <area shape="poly" coords="560,364, 787,486, 1087,347" 
            onmouseenter="showTip('Together, the Antarctic and Greenland Ice Sheets contain more than 70 per cent of the freshwater ice on Earth. ')"
            onmousemove="moveTip(event)"
            onmouseleave="hideTip()"
            onclick="return false;">

      <area shape="poly" coords="591,570, 787,486, 1057,579" 
            onmouseenter="showTip('When an iceberg comes into warm waters, the warm air starts melting the part of it out of ice, while the part of it in water gets melted from the bottom up by the warm water.')"
            onmousemove="moveTip(event)"
            onmouseleave="hideTip()"
            onclick="return false;">

      <area shape="poly" coords="1057,579, 803,726, 591,570" 
            onmouseenter="showTip('Iceberg size has a formal lower limit. To qualify as an iceberg, a floating ice fragment must exceed 5 m (16 ft) across; smaller pieces are classified differently.')"
            onmousemove="moveTip(event)"
            onmouseleave="hideTip()"
            onclick="return false;">

      <area shape="poly" coords="803,726, 772,992, 697,884, 591,570" 
            onmouseenter="showTip('Icebergs alter ocean properties and ecosystems. Their melting releases cold freshwater into the ocean, while released nutrients can fertilise plankton growth and support higher marine food webs. ')"
            onmousemove="moveTip(event)"
            onmouseleave="hideTip()"
            onclick="return false;">

      <area shape="poly" coords="803,726, 772,992, 910,926, 946,831, 1051,519" 
            onmouseenter="showTip('Glaciers reshape land as they move. Their weight and gradual flow can carve valleys and sculpt mountains over hundreds to thousands of years. Glaciers transport rock and sediment. As they flow, they carry material beneath and within the ice, then deposit it as the glacier changes or retreats.')"
            onmousemove="moveTip(event)"
            onmouseleave="hideTip()"
            onclick="return false;">
    </map>

    <div id="hoverTip" style="display: none; position: fixed; background: #061E65; color: white; padding: 10px 14px; font-size: 14px; max-width: 220px; pointer-events: none; z-index: 10;">
      <strong id="tipTitle"></strong> <span id="tipBody"></span>
    </div>


<div class="container-fluid px-5 my-5">
    <div class="p-5 text-white rounded-3 d-flex flex-column justify-content-center" style="background-color: transparent; border: 1px solid #2C5C9B; min-height: 350px;">
        <h2 class="fw-bold mb-3">About SARs</h2>
        <p class="fs-5 mb-4 text-light">
            Synthetic aperture radar (SAR) is a type of active data collection where an instrument sends out a pulse of energy and then records the amount of that energy reflected after it interacts with Earth. 
        </p>
        <div>
            <a href="sar.php" target="_blank" class="btn btn-info btn-lg fw-semibold px-4">
                Visit Webpage
            </a>
        </div>
</div>

    <div class="my-5 p-5 text-white rounded-3 d-flex flex-column justify-content-center" style="background-color: transparent; border: 1px solid #2C5C9B; min-height: 350px;">
        <h2 class="fw-bold mb-3">About Glaciers</h2>
        <p class="fs-5 mb-4 text-light">
            Frozen Lifelines: The Lifecycle, Ecological Role, and Rapid Retreat of Earth’s Glaciers
        </p>
        <div>
            <a href="glacier.php" target="_blank" class="btn btn-info btn-lg fw-semibold px-4">
                Visit Webpage
            </a>
        </div>
</div>

</div>

</div>
</div>

<script>
  const tip = document.getElementById('hoverTip');
  const tipTitle = document.getElementById('tipTitle');
  const tipBody = document.getElementById('tipBody');

  function showTip(text) {
    tipBody.textContent = text;
    tip.style.display = 'block';
  }

  function moveTip(e) {
    tip.style.left = (e.clientX + 15) + 'px';
    tip.style.top = (e.clientY + 15) + 'px';
  }

  function hideTip() {
    tip.style.display = 'none';
  }
</script>

<?php include('footer.php');?>