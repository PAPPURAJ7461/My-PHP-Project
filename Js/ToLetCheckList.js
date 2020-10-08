//================================State=================================================

	 function state()
	 {
	
		var state=document.getElementById('box').value; 
		
        switch(state)
		{
	 
		 case "Hariyana":
		   var array=["select","Faridabad","Sonipath","Panipath","Karnal"];
		  
		   
         break;	
         case "New Delhi":
		 var array=["select","New Delhi"];
		 
	
         break;	
         case "Punjab":
		 var array=["select","Punjab1","Punjab2","Punjab3","Punjab4"];
		 
		 
         break;	
         case "Utar Pradesh":
		 var array=["select","U1","U2","U3","U4"];
		
		 
         break;	
         default:
           var array=[];		 
		}
		 var string="";
		
        for(i=0;i<array.length;i++)
		{
		  string=string+"<option>"+array[i]+"</option>";
           document.getElementById('box1').innerHTML=string;		 
		}
	 }
		
 //================================Dist()=================================================
         		
	 function Dist()
	 {
		var dist=document.getElementById('box1').value; 
		
        switch(dist)
		{
		 //==========Hariyana================== 
		 case "Faridabad":
		   var array=["select","Balabgarh","Badkal","NHPC","Mevla Maharajpur"];
		  
		   
         break;	
         case "Sonipath":
		 var array=["select","S1","S2","S3","S4"];
		 
	
         break;	
         case "Panipath":
		 var array=["select","P1","P2","P3","P4"];
		 
		 
         break;	
         case "Karnal":
		 var array=["select","K1","K2","K3","K4"]; 
         break;	
		 //=============New Delhi===============
		 case "New Delhi":
		 var array=["select","Badarpur","Nehru Place","Lajpatnagar","Rajendra Place","Karolbagh"];
		 break;
		 //=============Punjab===============
		 case "Punjab1":
		 var array=["select","PP1","PP2"];
		 break;
		 case "Punjab2":
		 var array=["select","PP21","PP22","PP23"];
		 break;
		 case "Punjab3":
		 var array=["select","PP31","PP32","PP33"];
		 break;
		 case "Punjab4":
		 var array=["select","PP41","PP42","PP43"];
		 break;
		  //=============Utar Pradesh===============
		  case "U1":
		 var array=["select","U11","U12"];
		 break;
		 case "U2":
		 var array=["select","U21","U22","U23"];
		 break;
		 case "U3":
		 var array=["select","U31","U32","U33"];
		 break;
		 case "U4":
		 var array=["select","U41","U42"];
		 break;
		 
         default:
           var array=[];		 
		}
		 var string="";
		
        for(i=0;i<array.length;i++)
		{
		  string=string+"<option>"+array[i]+"</option>";
           document.getElementById('box2').innerHTML=string;		 
		}
	 }
 //================================City()=================================================
  function City()
	 {
		var city=document.getElementById('box2').value; 
		
        switch(city)
		{
		 //==========Sonipath================== 
		 case "S1":
		   var array=["select","SS11","SS12","SS13","SS14"];
           var array1=["select","Only Room","Room with Kitchen","2 Room with Kitchen","3 Room with Kitchen"];		   
        
		break;	
         case "S2":
		   var array=["select","SS21","SS22","SS23","SS24"];
           var array1=["select","Only Room","Room with Kitchen","2 Room with Kitchen","3 Room with Kitchen"];		   
         
		break;	
         case "S3":
		   var array=["select","SS31","SS32","SS33","SS34"];
           var array1=["select","Only Room","Room with Kitchen","2 Room with Kitchen","3 Room with Kitchen"];		   
        
         break;	
		 case "S4":
		   var array=["select","SS41","SS42","SS43","SS44"];
           var array1=["select","Only Room","Room with Kitchen","2 Room with Kitchen","3 Room with Kitchen"];		   
        
         break;	
		 		 //==========Panipath================== 
		 case "P1":
		   var array=["select","PP11","PP12","PP13","PP14"];
           var array1=["select","Only Room","Room with Kitchen","2 Room with Kitchen","3 Room with Kitchen"];		   
        
		break;	
         case "P2":
		   var array=["select","PP21","PP22","PP23","PP24"];
           var array1=["select","Only Room","Room with Kitchen","2 Room with Kitchen","3 Room with Kitchen"];		   
         
		break;	
         case "P3":
		   var array=["select","PP31","PP32","PP33","PP34"];
           var array1=["select","Only Room","Room with Kitchen","2 Room with Kitchen","3 Room with Kitchen"];		   
        
         break;	
		 case "P4":
		   var array=["select","PP41","PP42","PP43","PP44"];
           var array1=["select","Only Room","Room with Kitchen","2 Room with Kitchen","3 Room with Kitchen"];		   
        
         break;	
          //==========Faridabad================== 
		 case "Balabgarh":
		   var array=["select","BB11","BB12","BB13","BB14"];
           var array1=["select","Only Room","Room with Kitchen","2 Room with Kitchen","3 Room with Kitchen"];		   
        
		break;	
         case "Badkal":
		   var array=["select","BB21","BB22","BB23","BB24"];
           var array1=["select","Only Room","Room with Kitchen","2 Room with Kitchen","3 Room with Kitchen"];		   
         
		break;	
         case "NHPC":
		   var array=["select","N31","N32","N33","N34"];
           var array1=["select","Only Room","Room with Kitchen","2 Room with Kitchen","3 Room with Kitchen"];		   
        
         break;	
		 case "Mevla Maharajpur":
		   var array=["select","M41","M42","M43","M44"];
           var array1=["select","Only Room","Room with Kitchen","2 Room with Kitchen","3 Room with Kitchen"];		   
        
         break;	
		  //==========Karnal================== 
		 case "K1":
		   var array=["select","K11","K12","K13","K14"];
           var array1=["select","Only Room","Room with Kitchen","2 Room with Kitchen","3 Room with Kitchen"];		   
        
		break;	
         case "K2":
		   var array=["select","K21","K22"];
           var array1=["select","Only Room","Room with Kitchen","2 Room with Kitchen","3 Room with Kitchen"];		   
         
		break;	
         case "K3":
		   var array=["select","K31","K32","K33"];
           var array1=["select","Only Room","Room with Kitchen","2 Room with Kitchen","3 Room with Kitchen"];		   
        
         break;	
		 case "K4":
		   var array=["select","K41"];
           var array1=["select","Only Room","Room with Kitchen","2 Room with Kitchen","3 Room with Kitchen"];		   
        
         break;	
		  //==========U1================== 
		 case "U11":
		   var array=["select","UU11","UU12","UU13","UU14"];
           var array1=["select","Only Room","Room with Kitchen","2 Room with Kitchen","3 Room with Kitchen"];		   
        
		break;	
         case "U12":
		   var array=["select","UU21","UU22"];
           var array1=["select","Only Room","Room with Kitchen","2 Room with Kitchen","3 Room with Kitchen"];		   
         
		break;	
         //==========U2================== 
		 case "U21":
		   var array=["select","UU21"];
           var array1=["select","Only Room","Room with Kitchen","2 Room with Kitchen","3 Room with Kitchen"];		   
        
		break;	
         case "U22":
		   var array=["select","UU22","UU23"];
           var array1=["select","Only Room","Room with Kitchen","2 Room with Kitchen","3 Room with Kitchen"];		   
         
		break;	
         case "K3":
		   var array=["select","K31","K32","K33"];
           var array1=["select","Only Room","Room with Kitchen","2 Room with Kitchen","3 Room with Kitchen"];		   
        
         break;	
		 case "K4":
		   var array=["select","K41"];
           var array1=["select","Only Room","Room with Kitchen","2 Room with Kitchen","3 Room with Kitchen"];		   
        
         break;		
		        default:
           var array=[];		 
		}
		 var string="";
		
        for(i=0;i<array.length;i++)
		{
		  string=string+"<option>"+array[i]+"</option>";
           document.getElementById('box3').innerHTML=string;		 
		}
		var string="";
		
        for(i=0;i<array1.length;i++)
		{
		  string=string+"<option>"+array1[i]+"</option>";
           document.getElementById('box4').innerHTML=string;		 
		}
	 }
	 //---------only for Number-------
	 function isIntergerInput(evt)
	 {
		
		 var ch=String.fromCharCode(evt.which);
		
		 if(!(/[0-9]/.test(ch)))
		 {
		
			evt.preventDefault();
		 }
	 }