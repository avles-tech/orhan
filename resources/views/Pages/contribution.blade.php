@extends('layout.app')
@section('contitle')
<title>{{$pagetitle}}</title>
@endsection
@section('content')
<style>
    .centerpos{
        padding: 300px 0px 0px 50px;



    }
    .info{
		background: #2385dc;;
		padding: 5px 10px 5px 10px;
        margin: 50px;
        
		border: none;
		border-left: 3px solid #df872e;
    }
    .info2{
	    padding: 0px 65px 266px 10px;
    }
            
        table, th, td {
              border-collapse: collapse;
        }
        th, td {



              padding: 8px;
              text-align: left;
              color:black;
              font-weight: 900px;
              text-align:center;
        }
        table#t01 {
              width: 100%;    
        }
</style>
<!-- banner -->
<div class="banner1">
	
</div>
<div class="grid_3 grid_2 agileinfo" >
	<ol class="breadcrumb">
		<li><a href="/">Home</a></li>
		<li class="active">Contribution</li>
	</ol>			
</div>
<!-- //banner -->
<!-- services --> 
	<div class="services two">
		<div class="container">
	<div class="wthree-heading">
            <h2 class="w3l_header">Contribution</h2>
            <hr>
		</div>
			
			<div class="agile_inner_grids">	
				<div class="col-md-6 wthree_services_grid_left info2" style="background-color: #2385dc;">
                    <div class="centerpos">
                    <p class="info" style="color: #ffffff; line-height: 1.4;">The Summary of funds sent to the<br>Learning Center since the<br>inaugration of the Orhan - UK</p>
                    </div>
                </div>
				<div class="col-md-6 wthree_services_grid_right" style="background-color: #f3f2f3;">
                    <table id="t01"> 
                        <tr>
                            <th><span style="color:green;">Calender</span><br>Year<br>&nbsp;</th>
                            <th><span style="color:green;">Yearly</span><br>Amount<br>£</th>
                            <th><span style="color:green;">Total</span><br>to date<br>£</th>
                        </tr>
                        <tr>
                            <th>2003</th>
                            <th>3,040</th>
                            <th>3,040</th>
                        </tr>
                        <tr>
                            <th>2004</th>
                            <th>2,550</th>
                            <th>5,590</th>
                        </tr>
                        <tr>
                            <th>2005</th>
                            <th>5,150</th>
                            <th>10,740</th>
                        </tr>
                        <tr>
                            <th>2006</th>
                            <th>7,000</th>
                            <th>17,740</th>
                        </tr>
                        <tr>
                            <th>2007</th>
                            <th>7,800</th>
                            <th>25,540</th>
                        </tr>
                        <tr>
                            <th>2008</th>
                            <th>10,000</th>
                            <th>35,540</th>
                        </tr>
                        <tr>
                            <th>2009</th>
                            <th>13,500</th>
                            <th>49,040</th>
                        </tr>
                        <tr>
                            <th>2010</th>
                            <th>16,500</th>
                            <th>65,540</th>
                        </tr>
                        <tr>
                            <th>2011</th>
                            <th>15,000</th>
                            <th>80,540</th>
                        </tr>
                        <tr>
                            <th>2012</th>
                            <th>15,000</th>
                            <th>95,540</th>
                        </tr>
                        <tr>
                            <th>2013</th>
                            <th>15,400</th>
                            <th>110,940</th>
                        </tr>
                        <tr>
                            <th>2014</th>
                            <th>15,400</th>
                            <th>126,340</th>
                        </tr>
                        <tr>
                            <th>2015</th>
                            <th>22,355</th>
                            <th>148,695</th>
                        </tr>
                        <tr>
                            <th>2016</th>
                            <th>15,750</th>
                            <th>164,445</th>
                        </tr>
                        
                        <tr>
                            <th>2017</th>
                            <th>16,325</th>
                            <th>180,770</th>
                        </tr>
                        <tr>
                            <th>2018</th>
                            <th>16,230</th>
                            <th>197,000</th>
                        </tr>
                        <tr>
                            <th>2019</th>
                            <th>14,618</th>
                            <th>211,618</th>
                        </tr>
                        <tr>
                            <th>2020</th>
                            <th>17,723</th>
                            <th>229,341</th>
                        </tr>
                    </table>
				</div>
			</div>
		
		</div>
	</div>
<!-- //services -->
<div class="offer">
		<div class="container">
			<div class="w3ls_banner_bottom_grids">
				<div class="col-md-12 agile_offer_grid">
					<div class="wthree-heading">
						<h3 style="color:white" class="w3l_header">OUR REQUEST</h3>
						<p class="quia">please feel free to contact us</p>
					</div>
					<div class="wthree_offer_grid1">
						<p style="text-align:center" class="w3_agileits_service_para">In order to enable us to incrementally achieve our New Projects, in the care and welfare of the Disabled & Mentally retarded persons who, unlike other differently able persons are incapable of even begging for their daily activities, we shall be greatly honored if you could assist us to carry our projects (current and proposed) by a generous donation.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- stats-bottom -->
@endsection