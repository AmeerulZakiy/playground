@if (Session::has('message'))
<div class="alert alert-success" role="alert">
    {{Session::get('message')}}
</div>
@elseif (Session::has('error'))
<div class="alert alert-warning" role="alert">
    {{Session::get('error')}}
</div>
@endif
<section id="business-5" class="business bg-grey">
    <div class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="main_business">
                <div class="business_item mb-2" align="center"
                    style="padding-top: 80px;padding-bottom: 130px;padding-right: 10px;">
                    <h1 class="mb-4 text-4xl" style="color: #27225d; font-size: 26px;">Start your journey with ICDM
                        today</h1>
                    <br>
                    <br>
                    <div align="center" class="mt-5">
                        <div class="row join justify-content-between" style="width:100%;">
                            <div class="col-md-4 text-center justify-content-center">
                                <div style="display:inline-block" id="btn-align" align="center">
                                    <h6 style="margin-bottom:0px; color: #27225d; text-align: center">Attend a</h6>
                                    <div class="business_btn">
                                        <a href="/director-development/director-development-pathway"
                                            class="btn btn-default btn-footer m-top-20  p-2"
                                            style="font-size:12px; background-color: #27225d; color: #fff;padding: 10px;">DIRECTORS'
                                            PROGRAMME</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center justify-content-center">
                                <div class="" style="display:inline-block" id="btn-align" align="center">
                                    <h6 style="margin-bottom:0px; color: #27225d; text-align: center">Join ICDM</h6>
                                    <div class="business_btn">
                                        <a href="/membership/join-now" class="btn btn-default btn-footer m-top-20 p-2"
                                            style="font-size:12px; background-color: #27225d;color: #fff;padding: 10px;">MEMBERSHIP</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center justify-content-center">
                                <div style="display:inline-block" id="btn-align" align="center">
                                    <h6 style="margin-bottom:0px; color: #27225d; text-align: center">Engage ICDM</h6>
                                    <div class="business_btn">
                                        <a href="/board-services/board-and-director-effectiveness-evaluation"
                                            class="btn btn-default btn-footer m-top-20 p-2"
                                            style="font-size:12px; background-color: #27225d;color: #fff;padding: 10px;">BOARD
                                            SERVICES</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row join justify-content-between" style="width:100%;">
                            <div class="col-md-2"></div>
                            <div class="col-md-4 text-center justify-content-center">
                                <div style="display:inline-block" id="btn-align" align="center">
                                    <h6 style="margin-bottom:0px; color: #27225d; text-align: center">Find out
                                        available</h6>
                                    <div class="business_btn">
                                        <span
                                            onclick="window.location='https://pulse.icdm.com.my/programmes-overview/programme-calendar/'"
                                            class="btn btn-default btn-footer m-top-20 p-2"
                                            style="font-size:12px; background-color: #27225d;color: #fff; padding: 10px;">PROGRAMMES</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center justify-content-center">
                                <div style="display:inline-block" id="btn-align" align="center">
                                    <h6 style="margin-bottom:0px; color: #27225d; text-align: center">Interested in
                                        holding</h6>
                                    <div class="business_btn">
                                        <a href="https://icdm.com.my/membership/virtual-agm"
                                            class="btn btn-default btn-footer m-top-20 p-2"
                                            style="font-size:12px; background-color: #27225d;color: #fff; padding: 10px;">A
                                            VIRTUAL AGM</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="business-5" class="business bg-grey">
    <div class="container" style="margin-bottom: 50px;padding-top: 50px;">
        <div class="row">
            <div class="main_business">
                <div class="mb-4" align="center">
                    <div align="center">
                        <h3>Supported by</h3>
                        <br>
                        <div class="row">
                            <h4 style="padding:15px;">Securities Commission Malaysia ꓲ Bank Negara Malaysia ꓲ Bursa
                                Malaysia ꓲ Capital Market Development Fund</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style type="text/css">
        ::-webkit-input-placeholder {
            /* WebKit, Blink, Edge */
            color: white;
        }

        :-moz-placeholder {
            /* Mozilla Firefox 4 to 18 */
            color: white;
            opacity: 1;
        }

        ::-moz-placeholder {
            /* Mozilla Firefox 19+ */
            color: white;
            opacity: 1;
        }

        :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: white;
        }

        ::-ms-input-placeholder {
            /* Microsoft Edge */
            color: white;
        }

        ::placeholder {
            /* Most modern browsers support this now. */
            color: white;
        }

        .newsletter {
            height: 430px;
        }

        .newsletter .container img {
            display: -webkit-inline-box;
            padding-left: 5px;
            padding-right: 5px;
        }

        @media (max-width: 820px) {
            .newsletter {
                height: 540px;

            }

            .newsletter1 {
                margin: 0 0 0 0 !important;
                width: 22% !important;
                padding: 0 0 0 0 !important;
            }

            .newsletter1 input[type=text] {
                margin: 0 0 0 0 !important;
                font-size: 12px !important;
                height: 30px !important;
            }

            .socmedicons {
                float: left;
                width: 33.33%;
            }

        }

        .newsletter-input {
            font-size: 18px;
            padding: 10px 10px 10px 5px;
            display: block;
            color: white !important;
            width: 100%;
            border: none;
            border-bottom: 1px solid white;
            background: none;
        }

        .newsletter-input:focus {
            outline: none;
        }

        /*
        @media (max-width: 479px) {

            .newsletter {
                height: 540px;
            }
            .newsletter-input {
                margin-top: 10px;
            }
            .socmedicons{
                float:left;
                width:33.33%;
            }
        }*/
        @media (max-width: 820px) {
            .socmedicons {
                float: left;
                width: 33.33%;
            }

            .newsletter {
                height: 540px;
            }
        }
    </style>

    <div class="newsletter"
        style="background-image: url(https://icdm.com.my/assets/images/ICDM-newsletter2.jpg);color: white !important;background-repeat: no-repeat;background-position: center;background-size: cover;">
        <h4 style="text-align: center;color: #fff;padding-top: 50px;">Stay
            Connected </h4>
        <div class="container" style="padding-top: 30px;padding-bottom: 30px;text-align:center">

            <a href="https://www.linkedin.com/company/icdm-malaysia" target="_blank">
                <img src="https://icdm.com.my/assets/images/linkedinicon.png" style="width: 45px;margin-top:-5px;"></a>
            <a href="https://twitter.com/ICDMalaysia" target="_blank">
                <img src="https://icdm.com.my/assets/images/twittericon.png" style="width: 45px;margin-top:-5px;"></a>
            <a href="https://www.youtube.com/channel/UCchHYiRnOCLTQfAb5edI48w" target="_blank">
                <img src="https://icdm.com.my/assets/images/youtubeicon.png" style="width: 45px;margin-top:-5px;"></a>
        </div>



        <h4 style="text-align: center;color: #fff;padding-top: 10px;padding-bottom: 30px"><span
                style="font-weight: lighter; color: white !important;">Subscribe to Our Newsletter</span></h4>
        <!-- <form method="post" id="newsletter-form" action="https://icdm.com.my/newsletter">
            @csrf
            <input type="hidden" name="_token" value="4ZnRLqofcafalFr4egOVcrorPGtEsRpPDTD35D4u">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <input class="newsletter-input" type="text" name="fname" id="name"
                            style="font-size: 16px;text-align: left;" placeholder="Name*" required="required">
                    </div>
                    <div class="col-md-4">
                        <input class="newsletter-input" type="text" name="company" id="company"
                            style="font-size: 16px;text-align: left;" placeholder="Company">
                    </div>
                    <div class="col-md-4">
                        <input class="newsletter-input" type="text" name="email" id="email"
                            style="font-size: 16px;text-align: left;" placeholder="Email*" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="newsletter1" style="display: inline-block; width: 100% !important; margin: 15px;">
                    <button class="form-control newsletter-submit btn-primary" type="submit"
                        style="border-radius: 5px; font-size: 16px; width: 200px; margin: 20px auto; text-align: center; ">
                        Sign Up
                    </button>
                </div>
            </div>
        </form> -->
        <!-- Note :
   - You can modify the font style and form style to suit your website. 
   - Code lines with comments Do not remove this code are required for the form to work properly, make sure that you do not remove these lines of code. 
   - The Mandatory check script can modified as to suit your business needs. 
   - It is important that you test the modified form before going live.-->
<div id='crmWebToEntityForm' class='zcwf_lblLeft crmWebToEntityForm' style='background-color: #FFFFFF;color: black;max-width: 600px;'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
   <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
   <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads4590365000008613001 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory4590365000008613001()' accept-charset='UTF-8'>
 <input type='text' style='display:none;' name='xnQsjsdp' value='7d8d0312d902a0b0dbd1875a140dc37919731723f052fe811477c8b0cd50100a'></input> 
 <input type='hidden' name='zc_gad' id='zc_gad' value=''></input> 
 <input type='text' style='display:none;' name='xmIwtLD' value='f009ec83ddec91b5783e949e75ca45b7bacb34bcc3f525bdad3186f620b08e9c'></input> 
 <input type='text'  style='display:none;' name='actionType' value='TGVhZHM='></input>
 <input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;lip.icdm.com.my' > </input>
	 <!-- Do not remove this code. -->
<style>
html,body{
	margin: 0px;
}
#crmWebToEntityForm.zcwf_lblLeft {
	width:100%;
	padding: 25px;
	margin: 0 auto;
	box-sizing: border-box;
}
#crmWebToEntityForm.zcwf_lblLeft * {
	box-sizing: border-box;
}
#crmWebToEntityForm{text-align: left;}
#crmWebToEntityForm * {
	direction: ltr;
}
.zcwf_lblLeft .zcwf_title {
	word-wrap: break-word;
	padding: 0px 6px 10px;
	font-weight: bold;
}
.zcwf_lblLeft .zcwf_col_fld input[type=text], .zcwf_lblLeft .zcwf_col_fld textarea {
	width: 60%;
	border: 1px solid #ccc !important;
	resize: vertical;
	border-radius: 2px;
	float: left;
}
.zcwf_lblLeft .zcwf_col_lab {
	width: 30%;
	word-break: break-word;
	padding: 0px 6px 0px;
	margin-right: 10px;
	margin-top: 5px;
	float: left;
	min-height: 1px;
}
.zcwf_lblLeft .zcwf_col_fld {
	float: left;
	width: 68%;
	padding: 0px 6px 0px;
	position: relative;
	margin-top: 5px;
}
.zcwf_lblLeft .zcwf_privacy{padding: 6px;}
.zcwf_lblLeft .wfrm_fld_dpNn{display: none;}
.dIB{display: inline-block;}
.zcwf_lblLeft .zcwf_col_fld_slt {
	width: 60%;
	border: 1px solid #ccc;
	background: #fff;
	border-radius: 4px;
	font-size: 12px;
	float: left;
	resize: vertical;
	padding: 2px 5px;
}
.zcwf_lblLeft .zcwf_row:after, .zcwf_lblLeft .zcwf_col_fld:after {
	content: '';
	display: table;
	clear: both;
}
.zcwf_lblLeft .zcwf_col_help {
	float: left;
	margin-left: 7px;
	font-size: 12px;
	max-width: 35%;
	word-break: break-word;
}
.zcwf_lblLeft .zcwf_help_icon {
	cursor: pointer;
	width: 16px;
	height: 16px;
	display: inline-block;
	background: #fff;
	border: 1px solid #ccc;
	color: #ccc;
	text-align: center;
	font-size: 11px;
	line-height: 16px;
	font-weight: bold;
	border-radius: 50%;
}
.zcwf_lblLeft .zcwf_row {margin: 15px 0px;}
.zcwf_lblLeft .formsubmit {
	margin-right: 5px;
	cursor: pointer;
	color: #333;
	font-size: 12px;
}
.zcwf_lblLeft .zcwf_privacy_txt {
	width: 90%;
	color: rgb(0, 0, 0);
	font-size: 12px;
	font-family: Verdana;
	display: inline-block;
	vertical-align: top;
	color: #333;
	padding-top: 2px;
	margin-left: 6px;
}
.zcwf_lblLeft .zcwf_button {
	font-size: 12px;
	color: #333;
	border: 1px solid #ccc;
	padding: 3px 9px;
	border-radius: 4px;
	cursor: pointer;
	max-width: 120px;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
}
.zcwf_lblLeft .zcwf_tooltip_over{
	position: relative;
}
.zcwf_lblLeft .zcwf_tooltip_ctn{
	position: absolute;
	background: #dedede;
	padding: 3px 6px;
	top: 3px;
	border-radius: 4px;word-break: break-word;
	min-width: 100px;
	max-width: 150px;
	color: #333;
	z-index: 100;
}
.zcwf_lblLeft .zcwf_ckbox{
	float: left;
}
.zcwf_lblLeft .zcwf_file{
	width: 55%;
	box-sizing: border-box;
	float: left;
}
.clearB:after{
	content:'';
	display: block;
	clear: both;
}
@media all and (max-width: 600px) {
	.zcwf_lblLeft .zcwf_col_lab, .zcwf_lblLeft .zcwf_col_fld {
		width: auto;
		float: none !important;
	}
	.zcwf_lblLeft .zcwf_col_help {width: 40%;}
}
</style>
<div class='zcwf_title' style='max-width: 600px;color: black;'>ICDM Leading for Impact Programme</div>
<div class='zcwf_row'><div class='zcwf_col_lab' style='font-size:12px; font-family: Verdana;'><label for='Last_Name'>Name<span style='color:red;'>*</span></label></div><div class='zcwf_col_fld'><input type='text' id='Last_Name' name='Last Name' maxlength='80'></input><div class='zcwf_col_help'></div></div></div>
<div class='zcwf_row'><div class='zcwf_col_lab' style='font-size:12px; font-family: Verdana;'><label for='Email'>Email<span style='color:red;'>*</span></label></div><div class='zcwf_col_fld'><input type='text' ftype='email' id='Email' name='Email' maxlength='100'></input><div class='zcwf_col_help'></div></div></div>
<div class='zcwf_row'><div class='zcwf_col_lab' style='font-size:12px; font-family: Verdana;'><label for='Company'>Company<span style='color:red;'>*</span></label></div><div class='zcwf_col_fld'><input type='text' id='Company' name='Company' maxlength='200'></input><div class='zcwf_col_help'></div></div></div><div class='zcwf_row'><div class='zcwf_col_lab'></div><div class='zcwf_col_fld'><input type='submit' id='formsubmit' class='formsubmit zcwf_button' value='Submit' title='Submit'><input type='reset' class='zcwf_button' name='reset' value='Reset' title='Reset'></div></div>
	<script>
	function validateEmail4590365000008613001()
	{
		var form = document.forms['WebToLeads4590365000008613001'];
		var emailFld = form.querySelectorAll('[ftype=email]');
		var i;
		for (i = 0; i < emailFld.length; i++)
		{
			var emailVal = emailFld[i].value;
			if((emailVal.replace(/^\s+|\s+$/g, '')).length!=0 )
			{
				var atpos=emailVal.indexOf('@');
				var dotpos=emailVal.lastIndexOf('.');
				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=emailVal.length)
				{
					alert('Please enter a valid email address. ');
					emailFld[i].focus();
					return false;
				}
			}
		}
		return true;
	}

 	  function checkMandatory4590365000008613001() {
		var mndFileds = new Array('Company','Last Name','Email');
		var fldLangVal = new Array('Company','Name','Email');
		for(i=0;i<mndFileds.length;i++) {
		  var fieldObj=document.forms['WebToLeads4590365000008613001'][mndFileds[i]];
		  if(fieldObj) {
			if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
			 if(fieldObj.type =='file')
				{ 
				 alert('Please select a file to upload.'); 
				 fieldObj.focus(); 
				 return false;
				} 
			alert(fldLangVal[i] +' cannot be empty.'); 
   	   	  	  fieldObj.focus();
   	   	  	  return false;
			}  else if(fieldObj.nodeName=='SELECT') {
  	   	   	 if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
				alert(fldLangVal[i] +' cannot be none.'); 
				fieldObj.focus();
				return false;
			   }
			} else if(fieldObj.type =='checkbox'){
 	 	 	 if(fieldObj.checked == false){
				alert('Please accept  '+fldLangVal[i]);
				fieldObj.focus();
				return false;
			   } 
			 } 
			 try {
			     if(fieldObj.name == 'Last Name') {
				name = fieldObj.value;
 	 	 	    }
			} catch (e) {}
		    }
		}
		if(!validateEmail4590365000008613001()){return false;}
		document.querySelector('.crmWebToEntityForm .formsubmit').setAttribute('disabled', true);
	}

function tooltipShow4590365000008613001(el){
	var tooltip = el.nextElementSibling;
	var tooltipDisplay = tooltip.style.display;
	if(tooltipDisplay == 'none'){
		var allTooltip = document.getElementsByClassName('zcwf_tooltip_over');
		for(i=0; i<allTooltip.length; i++){
			allTooltip[i].style.display='none';
		}
		tooltip.style.display = 'block';
	}else{
		tooltip.style.display='none';
	}
}
</script>
	<!-- Do not remove this --- Analytics Tracking code starts --><script id='wf_anal' src='https://crm.zohopublic.com/crm/WebFormAnalyticsServeServlet?rid=f009ec83ddec91b5783e949e75ca45b7bacb34bcc3f525bdad3186f620b08e9cgid7d8d0312d902a0b0dbd1875a140dc37919731723f052fe811477c8b0cd50100agid885e3c1045bd9bdcc91bdf30f82b5696gid14f4ec16431e0686150daa43f3210513&tw=61690b96c1d0471b638f31426f38e68aa67fb7ed6da86f32dc10ad817fe55a0a'></script><!-- Do not remove this --- Analytics Tracking code ends. --></form>
</div>
    </div>
</section>

<footer id="contact" class="footer p-top-80" style="background-color:#e3e2e2; height: 40%;">
    <!--<div class="action-lage"></div>-->
    <div class="container">
        <div class="row">
            <div class="widget_area">
                <div class="col-2-3 links" style="padding-right:40px;">
                    <h3 style="border-bottom:1px solid #27225d;" class="p-4">Quick Links</h3>
                    <div class="col-1-2">
                        <ul style="list-style-type:disc;text-align: left;" class="pl-4 ml-4">
                            <li>
                                <a href="{{url('/director-development/programme-handbook')}}">Programme Handbook</a>
                            </li>
                            <li>
                                <a href="{{url('/board-services/bespoke-programme')}}">Organise a Bespoke Programme</a>
                            </li>
                            <li>
                                <a href="{{url('/membership/members-directory')}}"> Members Directory</a>
                            </li>
                            <li>
                                <a href="{{url('/membership/individual-membership-categories-and-benefits')}}"> Become
                                    an Individual Member </a>
                            </li>
                            <li>
                                <a href="https://pulse.icdm.com.my/careers/">Careers with ICDM</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-1-2">
                        <ul style="list-style-type:disc;text-align: left;" class="pl-4 ml-4">
                            <li>
                                <a href="{{url('/board-services/board-positions')}}">Directorship Opportunities</a>
                            </li>
                            <li>
                                <a href="{{url('/board-services/board-and-director-effectiveness-evaluation')}}"> Board
                                    and Director Effectiveness Evaluation</a>
                            </li>
                            <li>
                                <a href="{{url('/board-services/director-sourcing')}}">Source a New Director</a>
                            </li>
                            <li>
                                <a href="{{url('/membership/corporate-membership')}}">Become a Corporate Member</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-1-3 partners ">
                    <h3 style="border-bottom: 1px solid #27225d;" class="p-4 ml-4 "> Strategic Partners</h3>
                    <div>
                        <h5 style="color:#27225d !important;margin-left:12px;">Diversity Partners</h5>
                        <div class="col-1-2 partner mt-3" align="center">
                            <img class="delzoom" src="{{asset('assets/images/Logo_30Club.png')}}" id="l1">
                        </div>
                        <div class="col-1-2 partner mt-3" align="center">
                            <img class="delzoom" src="{{asset('assets/images/LWLogo200.png')}}" id="l2">
                        </div>
                        {{--<div class="col-1-3 partner mt-3" align="center">--}}
                            {{--<img class="delzoom" src="{{asset('assets/images/Logo_FIDE Forum_400x400.jpeg')}}"
                                style="width: 55%;">--}}
                            {{--</div>--}}
                    </div>
                    <br /><br />
                    <div style="display: inline-block;margin-top: 25px;">
                        <h5 style="color:#27225d !important;margin-left:12px;">Integrated Reporting Partner</h5>
                        <div class="col-1-1 partner mt-3 mx-auto" align="center">
                            <img class="delzoom"
                                src="https://icdm.com.my/storage/Partners/4xUN57EJJPiS2BcgGVIwIWAOxw6j8km4C8tGSE2y.png"
                                style="width: 20% !important;margin-top: 10px !important;">
                        </div>
                    </div>
                    <br /><br />
                    <div style="display: inline-block;margin-top:15px;">
                        <h5 style="color:#27225d !important;margin-left:12px;">Privileges Partners</h5>
                        <div class="col-1-2 partner" align="center">
                            <img class="delzoom" src="{{asset('assets/images/ICDM-Web-Logo_Pantai-Hosp.png')}}" id="l3">
                        </div>
                        <div class="col-1-2 partner" align="center">
                            <img class="delzoom" src="{{asset('assets/images/Logo_gleneagles.png')}}" id="l4">
                        </div>
                        <div class="col-1-2 partner" align="center">
                            <img class="delzoom" src="{{asset('assets/images/1.png')}}" id="l5">
                        </div>
                        <div class="col-1-2 partner" align="center">
                            <img class="delzoom" src="{{asset('assets/images/ICDM-Web-Logo_Willis.png')}}" id="l6">
                        </div>
                        <div class="col-1-2 partner mt-4" align="center">
                            <img class="delzoom"
                                src="https://icdm.com.my/storage/Partners/bXQgFzQJ1W9IgaSK041jDauR7pXHR7mAuQneGbDO.png"
                                id="l4">
                        </div>
                        <div class="col-1-2 partner mt-4" align="center">
                            <img class="delzoom"
                                src="https://icdm.com.my/storage/Partners/ETWSp1fOrKclyeHTGNJldgxsa79zzJ62kq531jkf.png"
                                id="l2">
                        </div>
                        <div class="col-1-1 partner mt-4 mx-auto" align="center">
                            <img class="delzoom"
                                src="https://icdm.com.my/storage/Partners/YZkQcOZLgqCKLTT4Ai4ZdCzNMQ5HSUPhgY7vAx3n.png"
                                style="width: 50% !important;margin-top: 10px !important;">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div align="center" class="pt-4 mt-4" style="clear: both;">
        <p class="text-uppercase" style="font-size: 11px;">
            <a href="{{ url('/terms')}}" style="color: #23527c;"> Terms of use | </a>
            <a href="{{ url('/privacy')}}" style="color: #23527c;"> Privacy Policy | </a>
            <a href="https://www.icdm.com.my/site-map" style="color: #23527c;"> Site Map</a>
            <!--<span class="hidden-xs">
                <a href="https://www.linkedin.com/company/icdm-malaysia" target="_blank">
                    <img class="delzoom" src="{{asset('assets/images/linkedin.png')}}"
                         style="width:2%;height:2%;margin-top:-5px;">
                </a>
            </span>
            <span class="visible-xs hidden-sm hidden-md hidden-lg">
                <a href="https://www.linkedin.com/company/icdm-malaysia" target="_blank">
                    <img class="delzoom" src="{{asset('assets/images/linkedin.png')}}" style="width:6% !important;">
                </a>
            </span>-->
            {{--
            <img src="{{asset('assets/images/facebook.png')}}" style="width:2%;height:2%;margin-top:-5px;"> --}}
        </p>
    </div>
    <div class="main_footer fix bg-mega text-center p-4 mt-6">
        <div class="col-md-12">
            <p class="wow fadeInRight" data-wow-duration="1s" style="color: #fff; font-size:10px; margin-bottom:0px;">
                &copy; Copyright {{ date('Y') }}
                <b>Institute of Corporate Directors Malaysia (ICDM)</b>. All Rights Reserved. Branding & Design by Paul
                & Marigold
            </p>
            <!--<p style="color: #fff; font-size:9px;">Branding & Design by Paul & Marigold</p>-->
        </div>
    </div>
</footer>



@section('scripts')
<script>
    $(function () {
        $("#newsletter-form").on('submit', function () {
            let name = $('#name').val();
            let span = document.createElement("span");

            span.innerHTML = "Dear " + name + ", thank you for subscribing to our newsletter!<br><br>Please check your email to confirm your newsletter subscription" +
                "<br>" +
                "<p>&nbsp;</p>" +
                "Regards," +
                "<br>" +
                "ICDM";

            swal("Newsletter subscription", span, "success");
        });
    });
</script>

@endsection