<?php include('header.php');?>

<div style="background-image: linear-gradient(#72D4EC, #2C5C9B, #061E65, #020641, #000); min-height: 100vh; padding-top: 100px;">
    <div class="container-fluid px-5 py-5">
        <div class="p-5 text-white" style="background-color: transparent;">
            <div class="row align-items-center g-4">
                <p class="fw-bold" style="font-size: 50px;">About SARs</p>
                <div class="col-md-7 d-flex flex-column justify-content-center">
                    <p class="fs-4" style="text-align: justify;">
                        Synthetic aperture radar (SAR) is a type of active data collection where an instrument sends out a pulse of energy and then records the amount of that energy reflected after it interacts with Earth. 
SAR has been used in a wide range of applications, including studying Antarctic icebergs, tracking the paths of oil spills into sensitive marshes, and mapping the wetlands of Alaska. 
The spatial resolution of radar data is directly related to the ratio of the sensor wavelength to the length of the sensor's antenna. For a given wavelength, the longer the antenna, the higher the spatial resolution. A sequence of acquisitions from a shorter antenna is combined to simulate a much larger antenna, thus providing higher resolution data.
Radar instruments utilise longer wavelengths at the centimetre-to-meter scale, which enables them to create imagery of landforms that might be covered with clouds or under a dense canopy of trees. The different wavelengths of SAR are often referred to as bands, with letter designations such as X, C, L, and P. 
                    </p>  
                </div>


<div class="col-md-5">
    <figure class="figure w-100 mb-0">
        <div class="overflow-hidden d-flex align-items-center justify-content-center">
            <img src="../images/sar.jpg" class="figure-img img-fluid w-100 mb-0" style="object-fit: cover;">
        </div>
        <figcaption class="figure-caption text-center text-light mt-2">
            The electromagnetic spectrum with SAR bands highlighted.
        </figcaption>
    </figure>

</div>
<p class="fs-4 mb-4" style="text-align: justify;">
Polarisation is the orientation of the plane in which a transmitted electromagnetic wave oscillates. Radar can collect signals in different polarisations by controlling the analysed polarisation in both the transmit and receive paths.  While the orientation can occur at any angle, SAR sensors typically transmit linearly polarised signals.
The spatial resolution of the radar defines the minimum separation between the measurements the instrument can discriminate and determines the amount of speckle introduced into the system. Speckle is a scattering phenomenon that arises because the spatial resolution of the instrument is not sufficient to resolve individual scatterers. The higher the spatial resolution of the radar, the more objects on the ground can be discriminated.
SAR data enable an analysis method called interferometry. When used with SAR, this analysis method is called interferometric SAR. It uses the phase information recorded by the instrument to measure the distance from the instrument to the target.
<br><br>
The following glacier images were generated using Sentinel-1 SAR data retrieved via NASA’s ASF Data Search and processed through the Burst-Based InSAR On-Demand workflow:
<ul type="none" class="fs-3">
<li>South America</li>
<img src="../images/sa1.jpg" class="figure-img img-fluid w-70 mb-1 my-1" style="object-fit: cover;">
<img src="../images/sa2.jpg" class="figure-img img-fluid w-70 mb-1 my-1" style="object-fit: cover;">
<li><br>Greenland</li>
<img src="../images/sa3.jpg" class="figure-img img-fluid w-70 mb-1 my-1" style="object-fit: cover;">
<img src="../images/sa4.jpg" class="figure-img img-fluid w-70 mb-1 my-1" style="object-fit: cover;">
<li><br>Asia</li>
<img src="../images/sa5.jpg" class="figure-img img-fluid w-70 mb-1 my-1" style="object-fit: cover;">
<img src="../images/sa6.jpg" class="figure-img img-fluid w-70 mb-1 my-1" style="object-fit: cover;">
</ul>
</p>

            </div>
        </div>
    </div>
</div>

<?php include('footer.php');?>