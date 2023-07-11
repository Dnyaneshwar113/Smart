
@extends('frontend.layouts.main')
@section('main-container')

<?php $title = "Enfragy Solutions | sector | power sector | Oil And Gas"; ?>
<?php $description = "We help power supply organizations to plan, control and co-ordinate with business-critical areas such as outage management, geographical database planning, distribution management, supply line management and installation management."; ?>
<?php $keywords = "Urban Infrastructure And  Utility Mapping , Disaster Management , Aerial Mapping (3D) ,Satellite Mapping (2D & 3D), LiDAR Data Processing , DEM/DSM , GIS Solutions ,Orthophoto Generation ,Cadastral Maps Georeferencing and Digitization ,water mapping service, power sector , oil and gas sector , Agriculture sector , telecom sector , Road and transport sector "; ?>


<!---section about banner-->

<section role="sector enfragy">

    <div class="_sector_banner">

        <div class="_inner_banner">

            <h2>Sectors</h2>

        </div>

    </div>

</section>

<!---section about banner-->





<!--section sector-->

<div class="mainsector">

    <div class="_inner">

        <div class="grid width50" style="background:url('{{url('frontend/Power.png')}}') no-repeat;">

            <div class="_show_text">

                <div class="_card">

                    <img src="{{url('frontend/images/sector/Power.png')}}">

                </div>

                <Strong>Power</Strong>

            </div>

            <div class="_overlay">

                <h2>Power</h2>

                <p>We help power supply organizations to plan, control and co-ordinate with business-critical areas such as outage management, geographical database

                    planning, distribution management, supply line

                    management and installation management.</p>

            </div>

        </div>

        <div class="grid width50" style="background:url('{{url('frontend/Water.png')}}') no-repeat;">

            <div class="_show_text">

                <div class="_card">

                    <img src="{{url('frontend/images/sector/Water.png')}}">

                </div>

                <Strong>Water</Strong>

            </div>

            <div class="_overlay">

                <h2>Water</h2>

                <p>Enfragy’s GIS water mapping service helps water and sewage management organizations to efficiently design and implement water supply resources. It includes pipeline network planning and design using land base maps, contour maps, utility network mapping which can be used further for hydro modeling. <br><br>

                    Enfragy has also developed a customized user-friendly modeling tool (EnfraGIS) for water network analysis, design, management and operation of both simple and complex pipe networks thereby providing a complete and effective water distribution management

                </p>

            </div>

        </div>

        <div class="grid width25" style="background:url('{{url('frontend/Oil_and_Gas.png')}}') no-repeat;">

            <div class="_show_text">

                <div class="_card">

                    <img src="{{url('frontend/images/sector/OIL and Gas.png')}}">

                </div>

                <Strong>Oil and gas</Strong>

            </div>

            <div class="_overlay">

                <h2>Oil and gas</h2>

                <p>We undertake systematic cross country pipeline route survey, along with engineering and cadastral surveys.

                </p>

            </div>

        </div>

        
         <div class="grid width50" style="background:url('{{url('frontend/Agriculture.png')}}') no-repeat;">

            <div class="_show_text">

                <div class="_card">

                    <img src="{{url('frontend/images/sector/Agriculture.png')}}">

                </div>

                <Strong>Agriculture</Strong>

            </div>

            <div class="_overlay">

                <h2>Agriculture</h2>

                <p>Our GIS solution in agriculture helps in analysing land and visualising field data on a map. GIS aids precision farming, resulting in informed decision making through which farmers can get the most out of each acre without damaging the environment. Further, GIS can help in calculating agricultural area as well as approximate yield.

                </p>

            </div>

        </div>

        <div class="grid width25" style="background:url('{{url('frontend/Telecom.png')}}') no-repeat;">

            <div class="_show_text">

                <div class="_card">

                    <img src="{{url('frontend/images/sector/Telecom.png')}}">

                </div>

                <Strong>Telecom</Strong>

            </div>

            <div class="_overlay">

                <h2>Telecom</h2>

                <p>Our GIS services enable telecom companies to capture real time network performance, signal strength and customer base.

                </p>

            </div>

        </div>

        <div class="grid width25" style="background:url('{{url('frontend/Road and transport.png')}}') no-repeat;">

            <div class="_show_text">

                <div class="_card">

                    <img src="{{url('frontend/images/sector/Road and transport.png')}}">

                </div>

                <Strong>Road and transport</Strong>

            </div>

            <div class="_overlay">

                <h2>Road and transport</h2>

                <p>Through our GIS services, we provide and analyse essential economic, demographic and cost estimates for planning new routes. We can also analyse existing routes, shortest routes, traffic conditions etc.

                </p>

            </div>

        </div>

       <div class="grid width50" style="background:url('{{url('frontend/Municipal_Governance1.png')}}') no-repeat;">

            <div class="_show_text">

                <div class="_card">

                    <img src="{{url('frontend/images/sector/Municipal Governance.png')}}">

                </div>

                <Strong>Municipal Governance</Strong>

            </div>

            <div class="_overlay">

                <h2>Municipal Governance </h2>

                <p>

                    We help corporations and municipalities with land property tax related survey and municipality planning and development. We help with computerization of land records, preparation of maps, digitization of existing spatial entities such as base maps, updation of property records, property tax assessment, infrastructure database creation and many other such functions.

                </p>

            </div>

        </div>

        <div class="grid width25" style="background:url('{{url('frontend/Forestry.png')}}') no-repeat;">

            <div class="_show_text">

                <div class="_card">

                    <img src="{{url('frontend/images/sector/Forestry.png')}}">

                </div>

                <Strong>Forestry</Strong>

            </div>

            <div class="_overlay">

                <h2>Forestry</h2>

                <p>Through our GIS solutions, we can see the forest areas that are damaged by people, or the deforested land parcels. Our services can help in surveying forest fires. We can see how big the fire is, where it is spreading without going to that place, and accordingly precautions can be taken to curtail it. Further, post a natural calamity such as hurricane, the damage on forest can be studied in a very short time using our solutions and the places where regrowth must be made can be identified.

                </p>

            </div>

        </div>



    </div>

</div>

<!--section sector-->
@endsection