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

<img class="map" src="./upz/blnk.jpg" height="700px" width="700px" usemap="#dist_Narail" />
<map name="dist_Narail">
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Lohagara_divColor!=""){echo $Lohagara_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Lohagara_div_Opac)){echo $Lohagara_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Lohagara Upazila &nbsp; <?
if(isset($Lohagara_div_NoOfFaci)){ echo $Lohagara_div_NoOfFaci;}
?>" alt="Lohagara Upazila" coords="194,71,195,67,193,61,192,54,192,47,198,45,200,49,205,49,210,49,216,49,220,49,224,51,227,54,228,57,230,61,235,63,240,63,246,64,251,65,252,69,252,74,258,78,263,79,266,75,270,71,270,65,272,59,276,55,278,52,282,45,286,39,298,35,306,32,310,31,316,28,321,22,321,17,321,11,328,13,337,14,342,13,346,11,351,9,355,8,364,9,370,12,377,13,382,12,393,11,393,17,392,22,392,26,396,28,404,31,410,34,414,37,414,41,415,47,419,50,424,55,433,60,439,61,448,61,456,60,462,61,468,64,474,65,479,67,486,72,491,78,492,81,488,83,481,84,473,84,465,87,458,90,452,92,446,99,442,102,435,110,434,120,432,129,432,139,434,147,436,153,443,155,451,155,454,153,464,151,470,149,476,147,484,145,488,143,496,145,499,149,506,156,512,163,518,170,522,177,523,181,521,188,516,195,515,199,520,201,518,207,516,213,514,220,512,225,510,233,510,242,513,251,514,255,516,265,521,273,530,276,540,274,546,270,550,265,560,261,567,257,574,253,582,251,587,247,594,243,602,241,610,239,622,239,628,241,630,246,628,250,625,255,618,273,611,289,603,307,592,325,578,345,569,354,561,354,555,353,550,353,548,349,541,343,535,337,526,335,522,331,514,331,506,331,501,335,501,342,502,351,505,359,508,364,515,369,518,377,526,384,536,389,546,397,555,399,564,403,567,406,570,413,571,421,560,420,552,418,543,417,534,415,528,413,522,413,516,413,510,409,506,407,504,399,504,395,497,395,497,399,494,401,489,404,485,407,478,411,475,416,470,411,466,404,464,401,457,401,450,393,447,385,446,379,442,380,439,381,432,385,425,389,420,393,410,393,407,398,406,403,402,405,389,402,388,404,382,406,376,407,370,414,360,413,354,403,358,397,361,395,363,391,367,388,369,383,371,379,370,372,372,366,374,360,377,353,379,348,384,342,386,339,388,336,390,331,396,330,398,329,398,325,396,323,393,322,395,319,398,317,402,310,404,300,404,297,402,291,398,290,393,287,390,285,390,279,388,277,383,278,374,280,373,279,372,275,376,265,378,259,378,253,379,248,378,245,372,245,367,238,364,232,361,229,362,223,366,220,370,215,374,209,374,203,374,201,369,201,365,199,362,195,360,192,359,189,356,185,352,181,348,180,345,180,338,183,334,183,331,181,324,178,317,176,311,171,310,167,305,159,302,155,296,153,288,150,283,149,274,145,271,143,268,137,268,133,260,125,260,117,258,115,255,112,247,110,246,107,238,107,236,106,231,104,229,99,223,93,220,89,215,87,208,87,204,84,200,79,197,71" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($Kalia_divColor!=""){echo $Kalia_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($Kalia_div_Opac)){echo $Kalia_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Kalia Upazila &nbsp; <?
if(isset($Kalia_div_NoOfFaci)){ echo $Kalia_div_NoOfFaci;}
?>" alt="Kalia Upazila" coords="299,369,301,376,305,377,313,378,319,380,324,383,328,387,335,393,337,398,339,404,343,403,348,400,351,402,355,408,358,413,365,414,371,414,374,413,377,410,383,404,387,402,393,403,403,404,407,402,409,396,411,392,417,392,423,390,429,388,435,384,439,380,445,380,447,386,447,391,449,396,452,398,457,400,463,403,465,406,469,411,472,414,477,416,478,414,481,410,486,406,490,404,495,399,497,396,502,396,503,400,505,406,507,409,510,409,513,412,517,414,520,413,526,413,531,414,541,416,545,418,551,418,557,420,567,422,574,426,581,433,584,441,587,448,590,452,595,456,599,460,605,464,613,470,615,476,619,483,619,492,617,499,617,504,619,508,623,512,629,515,637,520,645,522,648,528,653,533,674,560,679,567,686,574,689,582,686,585,677,584,668,584,660,587,656,588,647,591,645,597,643,604,641,610,639,614,633,612,627,610,619,610,611,608,602,604,597,598,595,595,589,596,577,596,571,595,565,598,555,598,542,592,536,592,532,592,525,588,519,592,515,594,511,594,511,598,508,606,503,606,499,600,493,594,491,588,484,590,476,589,471,588,466,585,463,588,461,592,463,597,461,601,459,607,451,612,447,612,441,614,435,617,431,618,425,620,420,617,419,612,419,606,416,606,415,611,414,614,407,618,405,618,405,624,399,630,390,627,386,620,381,617,377,615,377,610,372,602,367,599,359,594,356,591,359,586,359,581,356,578,348,576,341,574,335,572,329,573,322,576,317,579,315,585,311,592,295,596,292,592,292,588,287,586,283,582,281,574,279,568,279,562,275,561,271,560,270,556,268,550,268,542,266,541,261,540,254,540,257,537,255,533,250,533,247,532,239,531,235,526,233,520,231,513,229,506,226,500,226,496,231,496,241,498,249,494,253,489,258,486,263,482,263,478,267,476,275,478,283,478,286,473,287,468,287,461,287,458,289,453,290,448,289,443,288,440,287,434,283,429,279,426,271,424,269,420,269,414,267,411,272,410,279,412,285,410,287,406,289,402,289,399,291,396,291,391,291,386,297,383,297,380,297,378,299,374,299,370" href="#" />
  
<area shape="poly" class="tooltip" data-maphilight='{"fillColor":"<? if($NarailspaceSadar_divColor!=""){echo $NarailspaceSadar_divColor;} else{ echo $divColor_dflt;} ?>","strokeColor":"<? echo $borderColor;?>","fillOpacity":"<? if(isset($NarailspaceSadar_div_Opac)){echo $NarailspaceSadar_div_Opac; } else{ echo $divO;} ?>","shadow":true,"shadowBackground":"<? echo $shadowColor;?>","alwaysOn":true}' title="Narail Sadar Upazila &nbsp; <?
if(isset($NarailspaceSadar_div_NoOfFaci)){ echo $NarailspaceSadar_div_NoOfFaci;}
?>" alt="Narail Sadar Upazila" coords="32,325,37,323,42,320,44,317,48,315,51,315,54,315,54,313,56,312,60,314,64,316,71,317,75,316,78,314,84,315,88,315,90,316,93,316,96,313,99,306,98,304,93,303,90,301,84,297,83,294,83,291,82,288,84,286,90,289,91,281,89,278,87,275,86,273,90,272,92,271,94,269,92,264,93,260,96,256,97,251,101,247,102,241,102,236,102,231,100,225,100,222,100,217,102,213,104,206,102,202,102,196,99,190,98,184,103,185,104,183,102,179,102,174,100,173,95,175,95,169,96,167,96,164,102,163,108,163,111,163,112,161,110,157,116,157,119,155,115,153,114,151,110,148,109,145,108,143,107,135,103,132,104,126,104,120,107,117,109,115,115,114,120,115,124,114,127,111,134,112,142,113,147,117,152,117,154,116,154,113,157,109,162,109,160,105,162,103,165,102,165,96,164,92,166,88,167,85,168,79,168,75,170,74,174,73,177,69,180,68,186,70,192,71,194,73,196,77,198,81,202,85,206,86,209,86,214,87,216,89,219,91,221,93,225,98,226,102,228,105,231,107,236,106,242,107,244,108,250,111,252,113,254,117,256,121,258,125,259,127,261,131,262,135,266,137,268,141,270,144,274,145,277,149,278,149,282,150,288,151,292,151,297,154,298,155,299,157,302,161,304,165,306,166,308,169,309,171,311,176,316,177,319,177,325,179,330,181,334,183,338,183,342,181,348,182,352,186,356,188,360,195,367,200,372,202,373,207,372,209,369,212,368,214,367,217,366,219,363,221,360,224,360,227,364,233,367,237,367,239,369,243,366,247,372,247,377,247,376,253,375,257,371,273,371,277,374,282,380,279,388,280,390,281,390,285,390,287,396,290,399,292,402,296,402,301,402,306,399,311,398,316,392,317,392,320,396,323,397,327,395,329,391,329,388,333,384,337,386,341,382,342,378,346,374,354,372,360,372,365,370,369,370,374,368,379,366,385,364,391,358,393,356,400,349,401,346,401,341,403,339,400,339,396,336,392,330,388,325,382,319,380,309,378,303,375,300,369,298,369,298,374,297,377,297,379,297,382,294,383,291,385,290,388,290,393,289,396,288,401,285,404,281,405,278,407,273,408,266,409,265,412,269,421,270,423,274,427,281,429,286,433,286,436,286,439,288,445,288,449,287,453,285,459,284,469,282,476,275,476,270,475,262,475,260,479,258,483,256,487,252,489,250,490,244,495,238,497,232,497,226,495,225,499,218,496,216,492,206,491,200,493,196,494,187,493,180,493,176,497,167,497,160,493,154,483,153,477,152,472,152,465,149,466,147,469,144,471,140,467,136,463,135,458,136,452,134,447,134,444,143,443,150,441,148,438,142,437,135,435,130,432,128,426,129,419,130,415,131,409,136,409,134,403,133,397,135,393,132,387,130,383,131,375,132,367,133,361,129,361,125,366,124,369,121,375,116,377,114,379,109,386,109,390,109,395,105,399,101,403,97,406,96,411,94,412,93,416,88,417,84,415,80,415,72,413,63,411,58,413,62,417,66,425,62,425,58,422,56,418,54,413,50,412,46,410,44,405,46,399,47,393,48,383,48,377,50,373,46,367,44,363,44,358,45,354,44,350,45,346,42,341,40,336,37,333,32,328,32,326" href="#" />
</map>
</div>