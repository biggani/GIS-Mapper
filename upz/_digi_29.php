<div id="mapdiv" style="cursor: crosshair; margin:0px auto; border:0;">
<? if(isset($_SESSION['indi']) && isset($_SESSION['indi_color']))
{ ?>
<div class="mapright" id="lgnd" ><? if(isset($indiname)){ echo $txt_lgnd; }?>
<p>
<?php
if(isset($div_datalist)){
echo $lgnd;
echo $div_datalist;
}
?>
</p>
</div>
<?	} ?>

<img class="map" src="./upz/blnk.jpg" height="700px" width="700px" usemap="#dist_Bogra" />
<map name="dist_Bogra">
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Adamdighi_divColor!=""){echo $Adamdighi_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Adamdighi_div_Opac)){echo $Adamdighi_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Adamdighi Upazila &nbsp; <?
if(isset($Adamdighi_div_NoOfFaci)){ echo $Adamdighi_div_NoOfFaci;}
?>" alt="Adamdighi Upazila" coords="119,279,124,285,127,292,133,294,132,298,128,300,126,302,125,306,123,309,125,314,128,317,131,321,136,322,139,326,145,326,150,327,157,328,161,330,169,331,171,331,176,333,182,337,188,341,193,346,192,351,194,358,196,364,193,366,190,366,186,366,184,367,183,371,183,375,182,378,177,378,176,379,172,384,168,384,166,384,165,384,159,388,158,390,153,394,150,394,147,394,144,396,141,398,137,399,130,399,124,397,119,395,115,389,115,382,114,373,113,367,111,362,107,352,102,346,98,342,94,340,87,340,80,343,75,346,71,349,67,352,63,355,60,357,56,357,53,357,51,358,47,360,42,366,41,369,40,370,35,375,29,375,25,376,20,376,18,371,19,362,19,357,20,352,20,343,20,338,20,331,20,328,23,324,22,317,21,316,19,315,16,313,15,308,15,304,22,304,24,303,27,303,31,297,31,293,33,287,33,283,37,281,43,281,50,286,53,290,59,292,62,292,67,290,71,287,74,286,78,286,80,286,82,285,86,281,93,279,98,279,103,279,106,279,113,279,120,279,120,279,122,279" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Dhupchachia_divColor!=""){echo $Dhupchachia_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Dhupchachia_div_Opac)){echo $Dhupchachia_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Dhupchachia Upazila &nbsp; <?
if(isset($Dhupchachia_div_NoOfFaci)){ echo $Dhupchachia_div_NoOfFaci;}
?>" alt="Dhupchachia Upazila" coords="122,277,128,275,131,269,139,264,144,256,140,250,137,247,135,241,133,233,134,227,138,221,138,209,138,202,141,194,143,190,147,189,151,190,155,194,162,198,162,206,162,210,165,215,169,216,177,214,180,214,184,214,190,216,195,217,207,221,211,221,214,221,217,227,221,232,225,238,229,241,234,245,239,252,238,258,234,264,226,268,221,270,213,277,212,284,212,289,212,293,210,300,210,306,210,311,210,317,209,321,201,323,193,326,190,330,188,336,188,341,180,336,174,329,171,329,165,329,156,329,150,328,145,323,138,318,132,319,129,314,126,309,127,306,133,304,135,300,135,292,130,290,125,283,124,280,124,279" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Shibganj_divColor!=""){echo $Shibganj_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Shibganj_div_Opac)){echo $Shibganj_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Shibganj Upazila &nbsp; <?
if(isset($Shibganj_div_NoOfFaci)){ echo $Shibganj_div_NoOfFaci;}
?>" alt="Shibganj Upazila" coords="214,221,217,217,218,212,215,209,212,205,212,199,213,192,215,188,219,185,222,179,226,175,230,169,233,163,236,155,241,149,244,146,246,145,251,145,258,145,261,143,261,135,268,129,268,120,270,116,276,112,280,106,285,99,289,93,290,87,291,81,292,75,300,69,307,67,312,63,318,63,326,62,334,62,338,63,338,65,342,70,350,74,360,74,363,77,365,81,366,86,366,91,368,96,368,99,373,103,378,105,388,107,392,105,396,102,400,100,405,98,407,95,411,95,418,98,428,103,435,102,439,102,442,107,445,113,447,119,450,125,453,133,452,141,450,142,447,145,442,149,438,153,436,156,432,160,424,161,418,161,413,161,408,165,405,167,403,168,400,169,397,169,396,172,394,174,392,177,388,179,388,182,387,186,384,193,385,197,384,199,382,205,379,208,376,213,370,216,364,219,359,218,358,216,356,213,352,207,351,207,346,207,342,207,339,210,333,212,323,211,318,211,313,209,307,209,303,212,301,215,298,217,294,221,291,224,286,227,283,231,276,235,272,240,270,243,267,247,264,247,260,254,252,254,246,255,240,254,234,248,230,244,227,239,226,235,222,229,220,227,216,224" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Sonatala_divColor!=""){echo $Sonatala_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Sonatala_div_Opac)){echo $Sonatala_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Sonatala Upazila &nbsp; <?
if(isset($Sonatala_div_NoOfFaci)){ echo $Sonatala_div_NoOfFaci;}
?>" alt="Sonatala Upazila" coords="442,102,447,101,453,105,460,109,466,111,472,111,480,111,488,114,495,117,501,118,508,121,516,125,522,127,527,131,531,131,534,131,538,127,544,123,548,121,554,120,559,122,562,123,565,123,569,123,572,121,576,117,580,115,583,113,584,113,591,113,595,117,604,117,607,117,612,117,616,117,626,117,625,122,625,127,625,132,624,135,626,141,628,145,628,149,632,157,633,161,635,169,632,175,629,177,626,177,622,181,617,178,613,177,610,179,610,181,610,186,607,187,604,187,600,187,591,182,587,183,584,187,578,186,575,186,572,187,568,192,562,191,557,187,553,189,550,190,546,193,544,195,541,197,537,200,534,204,534,207,534,212,532,217,531,219,527,221,524,220,520,218,517,215,514,212,513,209,509,205,504,203,500,203,495,206,494,211,494,213,492,215,484,212,478,209,473,211,466,210,462,207,459,209,456,211,452,210,450,203,450,196,450,195,443,193,440,190,438,180,435,176,432,173,428,170,428,165,428,161,431,160,435,157,438,156,442,153,445,150,449,144,452,141,453,139,454,134,454,129,454,128,452,126,451,122,448,116,447,113,445,109,443,104,443,103" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Gabtali_divColor!=""){echo $Gabtali_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Gabtali_div_Opac)){echo $Gabtali_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Gabtali Upazila &nbsp; <?
if(isset($Gabtali_div_NoOfFaci)){ echo $Gabtali_div_NoOfFaci;}
?>" alt="Gabtali Upazila" coords="388,185,389,179,394,176,395,172,399,169,403,169,406,167,411,165,418,161,426,162,428,168,432,173,437,177,439,183,439,187,442,192,446,193,451,196,452,204,453,209,458,211,464,209,470,211,477,210,482,213,486,214,489,215,493,215,497,211,498,209,500,205,505,205,508,206,515,213,522,215,525,219,533,221,533,227,532,233,532,239,530,245,530,249,530,251,530,254,529,255,527,255,523,256,522,258,522,263,523,265,523,267,520,270,518,273,517,278,518,283,520,287,523,287,526,286,532,285,534,290,535,293,533,297,529,301,526,304,524,305,521,309,518,312,517,315,516,320,516,325,516,330,518,335,520,339,520,342,518,347,514,348,514,348,509,349,504,351,500,353,495,353,492,353,490,353,486,351,480,350,476,349,473,353,476,357,476,359,474,362,470,363,465,363,460,363,455,364,453,365,450,366,446,361,442,350,442,342,439,334,438,329,436,323,436,316,432,309,432,304,432,297,430,293,426,293,420,289,418,287,416,285,412,280,410,277,408,273,408,269,408,265,412,261,415,259,418,257,420,255,419,252,418,249,418,247,418,241,413,238,413,233,412,230,410,224,411,219,411,217,410,213,408,208,403,205,399,200,396,197,395,194,394,191,391,187" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Sariakandi_divColor!=""){echo $Sariakandi_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Sariakandi_div_Opac)){echo $Sariakandi_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Sariakandi Upazila &nbsp; <?
if(isset($Sariakandi_div_NoOfFaci)){ echo $Sariakandi_div_NoOfFaci;}
?>" alt="Sariakandi Upazila" coords="534,215,534,208,536,205,540,202,542,199,548,195,551,193,556,191,559,191,561,191,563,191,566,193,572,193,573,190,577,188,586,187,592,186,598,186,604,187,608,187,611,185,613,178,618,178,622,180,626,180,630,178,633,181,634,187,631,191,634,196,634,203,634,209,634,214,632,219,634,223,637,228,640,233,642,239,642,244,639,249,637,253,636,258,635,263,634,269,634,276,635,281,636,286,641,293,646,300,647,302,652,307,658,310,666,313,670,317,678,321,682,329,678,337,672,341,666,341,660,341,655,341,649,341,639,343,634,348,632,349,629,355,626,359,626,367,625,371,622,378,619,383,617,388,614,390,610,390,604,390,598,385,596,381,592,377,588,372,582,372,579,375,577,376,574,377,572,379,570,379,564,374,560,373,556,373,553,368,553,363,559,355,558,350,554,347,552,345,547,345,544,349,540,349,536,349,532,348,526,344,522,341,519,335,518,331,518,326,518,323,519,317,519,313,525,309,528,307,531,301,534,297,536,294,536,290,537,286,536,283,535,283,531,283,525,285,522,285,521,285,518,281,518,276,526,271,523,267,523,263,523,257,528,257,533,255,534,249,534,245,534,241,534,236,535,229,536,223,536,220,536,216,535,213" href="#" />
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Kahaloo_divColor!=""){echo $Kahaloo_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Kahaloo_div_Opac)){echo $Kahaloo_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Kahaloo Upazila &nbsp; <?
if(isset($Kahaloo_div_NoOfFaci)){ echo $Kahaloo_div_NoOfFaci;}
?>" alt="Kahaloo Upazila" coords="240,255,244,255,252,256,256,254,260,252,266,249,270,245,275,241,278,239,282,236,286,233,290,228,294,224,302,219,307,220,314,224,320,224,324,229,324,235,324,239,322,244,322,246,320,251,320,254,320,259,322,263,324,265,327,270,327,273,328,275,328,279,326,284,325,289,322,293,322,295,318,300,316,303,313,308,312,311,312,314,312,319,315,321,318,325,321,330,322,335,322,337,322,345,321,350,321,359,321,362,320,368,317,369,312,371,309,371,304,375,302,375,297,380,294,381,288,383,284,392,284,395,284,401,283,408,276,400,273,398,270,393,269,390,264,386,261,383,256,381,253,379,246,373,242,369,240,366,236,363,233,362,229,361,226,357,221,355,217,352,214,348,210,347,206,346,202,344,199,342,196,341,192,340,189,335,192,329,197,325,210,321,212,317,212,311,212,304,212,296,212,289,212,283,216,273,220,269,230,262,232,261,236,257,245,255" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Nandigram_divColor!=""){echo $Nandigram_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Nandigram_div_Opac)){echo $Nandigram_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Nandigram Upazila &nbsp; <?
if(isset($Nandigram_div_NoOfFaci)){ echo $Nandigram_div_NoOfFaci;}
?>" alt="Nandigram Upazila" coords="173,389,173,385,176,381,180,379,183,376,184,370,184,366,187,366,193,368,195,367,196,365,197,360,197,355,196,352,196,349,195,345,192,339,194,336,198,345,203,347,206,348,214,352,222,357,226,360,230,365,235,369,241,372,244,372,249,380,254,382,256,384,260,385,263,387,270,395,273,399,278,402,282,405,288,409,290,415,293,421,294,428,298,431,302,431,305,430,307,429,310,427,313,424,316,424,320,427,324,429,326,429,330,424,333,423,338,430,340,438,338,440,337,443,338,449,337,456,337,461,337,465,337,471,338,475,338,482,338,487,339,492,339,496,338,500,335,505,332,509,330,509,322,504,317,503,311,500,307,495,304,488,297,485,292,477,286,477,279,477,275,478,270,479,262,483,258,485,256,489,254,491,252,495,251,497,250,503,248,507,245,510,241,514,239,510,236,505,232,501,231,498,228,494,224,491,219,489,216,487,216,483,220,479,222,475,224,472,224,467,221,465,219,461,216,461,213,464,211,465,207,468,203,469,198,467,193,465,190,468,186,471,185,476,182,481,179,487,174,485,172,482,167,477,164,473,163,469,162,465,163,460,167,457,170,452,175,449,179,447,180,444,180,437,174,431,170,430,165,425,165,419,165,412,169,406,173,403,174,399,174,394,174,391,172,389,172,386" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Sherpur_divColor!=""){echo $Sherpur_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Sherpur_div_Opac)){echo $Sherpur_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Sherpur Upazila &nbsp; <?
if(isset($Sherpur_div_NoOfFaci)){ echo $Sherpur_div_NoOfFaci;}
?>" alt="Sherpur Upazila" coords="508,531,504,537,500,541,499,545,496,545,490,541,484,538,480,536,476,536,470,535,464,535,458,539,454,541,448,544,442,541,437,541,432,540,427,539,424,539,418,536,412,536,403,534,399,532,394,532,386,531,380,532,379,537,374,535,371,533,368,532,366,531,357,529,352,529,346,529,343,527,341,525,338,519,337,517,334,512,332,510,332,507,338,503,342,499,342,495,342,491,341,485,340,483,340,477,340,470,340,467,340,462,340,459,340,452,340,442,340,437,342,435,345,434,350,430,355,425,358,425,363,423,367,421,369,421,381,425,384,417,391,413,396,413,411,410,412,403,423,403,429,403,438,403,444,405,452,402,457,400,462,399,462,401,464,405,466,410,472,411,477,415,479,419,479,425,478,430,477,433,476,437,476,441,473,443,475,449,480,451,476,457,474,461,474,465,476,467,480,468,484,470,487,473,489,481,490,489,490,495,489,503,489,511,490,513,494,521,499,522,506,526,508,529,509,531" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Dhunat_divColor!=""){echo $Dhunat_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Dhunat_div_Opac)){echo $Dhunat_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Dhunat Upazila &nbsp; <?
if(isset($Dhunat_div_NoOfFaci)){ echo $Dhunat_div_NoOfFaci;}
?>" alt="Dhunat Upazila" coords="462,397,467,394,473,390,470,385,468,381,465,378,460,375,456,370,453,368,452,365,459,364,462,364,466,364,468,365,472,363,476,359,476,355,478,348,482,349,486,353,493,354,501,353,506,351,512,351,516,349,519,347,522,345,527,344,532,350,540,351,549,349,551,345,555,349,558,351,558,354,558,357,555,361,554,369,554,370,556,371,562,375,569,377,574,378,576,377,580,374,586,373,590,373,592,377,596,382,598,384,602,386,606,388,612,391,610,396,609,402,606,406,604,408,602,410,598,414,597,417,592,421,592,425,587,425,580,423,576,421,574,417,573,415,562,413,557,413,552,413,548,413,544,413,539,412,534,414,532,417,532,419,532,423,530,428,529,430,528,435,528,440,528,443,526,448,525,453,526,457,528,463,530,465,528,470,528,477,532,479,536,483,542,485,552,488,556,489,558,491,560,493,561,497,562,500,564,505,564,508,564,513,566,515,568,519,572,524,572,530,571,535,568,537,564,539,556,539,548,540,541,541,536,542,532,543,526,543,521,541,519,535,517,533,512,532,509,532,506,526,502,521,498,520,491,518,488,512,490,501,491,493,492,490,492,484,492,480,492,477,488,473,485,470,483,468,478,465,477,463,476,461,477,457,480,455,480,453,480,451,478,448,474,437,478,431,478,424,479,421,479,417,476,415,474,410,470,410,468,409,465,406,463,401,462,397" href="#" />

<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($BograspaceSadar_divColor!=""){echo $BograspaceSadar_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($BograspaceSadar_div_Opac)){echo $BograspaceSadar_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Bogra Sadar Upazila &nbsp; <?
if(isset($BograspaceSadar_div_NoOfFaci)){ echo $BograspaceSadar_div_NoOfFaci;}
?>" alt="Bogra Sadar Upazila" coords="271,243,274,239,278,235,281,232,286,229,288,225,292,222,294,219,299,217,303,214,304,211,309,209,314,211,319,211,325,212,334,212,339,210,344,207,350,207,355,213,359,219,364,219,368,217,376,213,382,205,384,199,386,191,388,186,392,188,395,195,398,201,402,207,408,209,409,214,410,221,410,227,412,233,412,239,416,240,418,249,418,254,416,259,410,262,407,269,409,275,412,281,418,289,424,293,430,294,427,301,417,305,406,307,400,305,384,308,380,312,371,311,368,311,352,315,344,314,334,315,323,315,314,316,314,313,317,309,320,303,322,298,324,294,327,287,329,283,330,276,330,271,328,267,326,263,323,261,322,256,324,250,325,242,326,237,325,229,323,225,318,225,313,223,308,221,301,222,292,230,284,237,276,242,273,244" href="#" />

<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Shajahanpur_divColor!=""){echo $Shajahanpur_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Shajahanpur_div_Opac)){echo $Shajahanpur_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Shajahanpur Upazila &nbsp; <?
if(isset($Shajahanpur_div_NoOfFaci)){ echo $Shajahanpur_div_NoOfFaci;}
?>" alt="Shajahanpur Upazila" coords="314,317,317,316,322,317,326,317,332,316,338,316,344,317,349,316,356,315,359,315,364,314,367,313,372,312,375,313,379,313,382,312,384,310,387,310,393,309,397,307,400,307,404,307,409,309,414,307,419,305,425,303,428,300,431,297,431,305,432,309,434,313,436,318,435,322,436,328,439,334,440,338,440,345,443,351,444,357,446,361,448,366,453,370,459,373,464,379,468,382,471,388,470,390,465,395,454,401,448,403,442,403,435,403,428,403,423,402,413,402,410,405,410,410,400,412,394,412,388,415,383,417,380,422,379,424,374,422,367,421,364,422,359,424,355,425,351,426,348,429,344,432,340,436,340,431,337,426,333,423,332,424,329,426,327,429,324,427,320,425,317,423,314,424,313,425,310,427,306,429,303,431,299,431,297,428,295,423,293,417,291,413,289,408,286,406,286,402,286,396,286,392,290,387,294,384,298,381,304,377,311,374,315,371,320,369,322,364,323,358,324,353,324,350,325,344,324,341,324,336,324,332,324,329,323,326,320,325,318,324,316,323,315,319,315,318" href="#" />
</map>
</div>