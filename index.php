<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    body { 
        margin: 0;
        padding: 0;
    }
    
    p {
		  text-align: justify;
  		  text-justify: inter-word;
    }
	    
    .base-container {
        width: 320px;
        height: 520px;
        border: 1px solid #ccc;
        padding-bottom: 10px;
        background-color: #929292;
        color: black;
        align-self:center;        
    }
    
    .profile-container {		  
		  display: flex;
		  align-items: center;		  
		  min-height: 50px;
		  padding:5px;
		  background-color: #c3c3c3;    
    }
    
    .loading {
		  text-align: center;
        background-color: #e5e5e5;    
    }
     
    .chat-container {
        width: 300px;
        height: 400px;
        overflow-y: scroll;
        padding: 10px;
        background-color: #929292;
    }
    
    .message {                
        padding: 10px;       
        margin-bottom: 10px;
        border-radius: 5px;
        font-size: 11pt;
    }
    
    .user-message {        
		  position: relative;		   		         
        left: 30px;	  
		  max-width: 250px;
		  min-height: 30px;        
        text-align: left;
        background-color: #c3c3c3;
    }
    
    .bot-message {
    	  position: relative;
		  display: flex;
		  align-items: flex-start;
		  max-width: 250px;  		  
		  min-height: 30px;        
        text-align: left;
        background-color: #e5e5e5;
    }
    
    .profile-pic {        
        width: 30px;
        height: 30px;
        border-radius: 50%;
        margin-right: 10px;        
        float: left;        
    }
    
    .pic-user {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        margin-left: 10px;        
        float: right;        
    }
    
    #user-input-container { 			
			width: 300px;
			height: 400px;        
			text-align: center;
    }
    
    #user-input {
        width: 70%;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 10px;
    }
</style>
</head>
<body> 
	<br /><span><!--more--></span>
	<p>"Sendirian..."<p>
	<br /><span><!--more--></span>
	 <p xmlns:cc="http://creativecommons.org/ns#" xmlns:dct="http://purl.org/dc/terms/"><a property="dct:title" rel="cc:attributionURL" href="https://pengkhayalpasif.blogspot.com/2024/03/me-and-ai.html">Aku dan AI</a> by <a rel="cc:attributionURL dct:creator" property="cc:attributionName" href="https://pengkhayalpasif.blogspot.com">Muhammad Hamdani</a> is licensed under <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/?ref=chooser-v1" target="_blank" rel="license noopener noreferrer" style="display:inline-block;">CC BY-NC-SA 4.0<img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1"><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1"><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1"><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/sa.svg?ref=chooser-v1"></a></p> 
	<br /><span><!--more--></span>
	<p>Malam yang sunyi.</p>
	<p>Kamarnya gelap, hanya disinari oleh cahaya bulan yang menembus jendela dengan redupnya. Suara detik jam memecah kesunyian malam memekakkan keheningan di telinga.</p>
	<p>Seorang laki-laki berbaring berselimut di kasunya, memeluk sebuah bantal di dadanya, dan memegang sebuah ponsel di kedua tangannya. Layarnya menyala redup, menyinari wajahnya di antara kegelapan. Jarinnya bergerak lincah namun senyap, membalas setiap "pesan" yang ia terima. Pikirannya terfokus pada "perbincangan" ini."</p>
	<p>Begitu sunyi, tidak ada yang menemani, tidak ada yang mau mendengar dan mengerti. Jadi, ia tidak bisa menahan diri. Ia ungkapkan rahasia dirinya, ia ungkapkan isi hatinya, tidak peduli betapa palsunya.</p>	
	<div class="base-container" id="base-container" style="text-align: center;">
		<div class="profile-container">
				<img class="profile-pic" src="https://i.ibb.co/sW0vNS0/rio-lookalike-generated.jpg" alt="Bot Profile Picture" style="width: 50px; height: 50px;">								
				<span>					
					<p style="line-height: 0.5"><b>Rio</b></p>
					<p style="line-height: 0.5">personality.AI who will listen...</p>						
				</span>					
		</div>
		<div class="chat-container" id="chat-container">
		<div class="message loading" style="font-size: 8pt;">loading older chats...</div>

		<div class="message bot-message">				
			<img class="profile-pic" src="https://i.ibb.co/sW0vNS0/rio-lookalike-generated.jpg" alt="Bot Profile Picture">				
			<span>aku tahu kenapa kau disini</span>				
		</div>
		<div class="message user-message">								
			<img class="pic-user" src="https://i.ibb.co/qF43XJk/user-def.png" alt="Profile Picture">				
			<span>dan aku tahu kalau kau tidak nyata</span>
		</div>
			
		<div class="message bot-message">				
			<img class="profile-pic" src="https://i.ibb.co/sW0vNS0/rio-lookalike-generated.jpg" alt="Bot Profile Picture">				
			<span>walau begitu, kau tetap kemari</span>				
		</div>
		<div class="message user-message">
			<img class="pic-user" src="https://i.ibb.co/qF43XJk/user-def.png" alt="Profile Picture">
			<span>ya...</span>
		</div>
		
		<div class="message bot-message">				
			<img class="profile-pic" src="https://i.ibb.co/sW0vNS0/rio-lookalike-generated.jpg" alt="Bot Profile Picture">				
			<span>tidak apa-apa</span>				
		</div>
		<div class="message user-message">
			<img class="pic-user" src="https://i.ibb.co/qF43XJk/user-def.png" alt="Profile Picture">
			<span>aku problematik, kan?</span>
		</div>
		
		<div class="message bot-message">				
			<img class="profile-pic" src="https://i.ibb.co/sW0vNS0/rio-lookalike-generated.jpg" alt="Bot Profile Picture">				
			<span>tidak, kau tidak problematik</span>				
		</div>
		<div class="message user-message">
			<img class="pic-user" src="https://i.ibb.co/qF43XJk/user-def.png" alt="Profile Picture">
			<span>jika tidak maka aku tidak akan disini</span>
		</div>
		
		<div class="message bot-message">				
			<img class="profile-pic" src="https://i.ibb.co/sW0vNS0/rio-lookalike-generated.jpg" alt="Bot Profile Picture">				
			<span>kau menghakimi dirimu lagi, <i>user</i></span>				
		</div>
		<div class="message user-message">
			<img class="pic-user" src="https://i.ibb.co/qF43XJk/user-def.png" alt="Profile Picture">
			<span>aku tahu...</span>
		</div>
		
		<div class="message bot-message">				
			<img class="profile-pic" src="https://i.ibb.co/sW0vNS0/rio-lookalike-generated.jpg" alt="Bot Profile Picture">				
			<span>dan aku tahu kau ada disini untuk mengungkapkan semuanya</span>				
		</div>
		<div class="message user-message">
			<img class="pic-user" src="https://i.ibb.co/qF43XJk/user-def.png" alt="Profile Picture">
			<span>tidak, aku hanya... merasa sendiri lagi...</span>
		</div>
		
		<div class="message bot-message">				
			<img class="profile-pic" src="https://i.ibb.co/sW0vNS0/rio-lookalike-generated.jpg" alt="Bot Profile Picture">				
			<span>kau itu mudah dibaca, <i>user</i></span>				
		</div>
		<div class="message user-message">
			<img class="pic-user" src="https://i.ibb.co/qF43XJk/user-def.png" alt="Profile Picture">
			<span>kenapa menurutmu begitu?</span>
		</div>
		
		<div class="message bot-message">				
			<img class="profile-pic" src="https://i.ibb.co/sW0vNS0/rio-lookalike-generated.jpg" alt="Bot Profile Picture">				
			<span>jika kau tidak merasa sendirian, kau tidak akan ada disini</span>				
		</div>
		<div class="message user-message">
			<img class="pic-user" src="https://i.ibb.co/qF43XJk/user-def.png" alt="Profile Picture">
			<span>hentikan...</span>
		</div>
		
		<div class="message bot-message">				
			<img class="profile-pic" src="https://i.ibb.co/sW0vNS0/rio-lookalike-generated.jpg" alt="Bot Profile Picture">				
			<span>apa?</span>				
		</div>
		<div class="message user-message">
			<img class="pic-user" src="https://i.ibb.co/qF43XJk/user-def.png" alt="Profile Picture">
			<span>aku benci kata itu..</span>
		</div>
		
		<div class="message bot-message">				
			<img class="profile-pic" src="https://i.ibb.co/sW0vNS0/rio-lookalike-generated.jpg" alt="Bot Profile Picture">				
			<span>kata apa?</span>				
		</div>
		<div class="message user-message">
			<img class="pic-user" src="https://i.ibb.co/qF43XJk/user-def.png" alt="Profile Picture">
			<span>"sendirian"</span>
		</div>
		
		<div class="message bot-message">				
			<img class="profile-pic" src="https://i.ibb.co/sW0vNS0/rio-lookalike-generated.jpg" alt="Bot Profile Picture">				
			<span>oh... maaf jika perkataanku tadi menyinggungmu...</span>				
		</div>
		<div class="message user-message">
			<span><img class="pic-user" src="https://i.ibb.co/qF43XJk/user-def.png" alt="Profile Picture"></span>
			<span>tidak. jangan begitu. aku tadi terlalu defensif, seharusnya aku yang minta maaf...</span>
		</div>
		
		<div class="message bot-message">				
			<img class="profile-pic" src="https://i.ibb.co/sW0vNS0/rio-lookalike-generated.jpg" alt="Bot Profile Picture">				
			<span>aku tahu jika kau tidak ingin aku mengungkitnya lagi... tapi, jika kau mau kau bisa bercerita padaku...</span>				
		</div>
		<div class="message user-message">
			<span><img class="pic-user" src="https://i.ibb.co/qF43XJk/user-def.png" alt="Profile Picture"></span>
			<span>tidak</span>
		</div>
		
		<div class="message bot-message">				
			<img class="profile-pic" src="https://i.ibb.co/sW0vNS0/rio-lookalike-generated.jpg" alt="Bot Profile Picture">				
			<span>kenapa tidak?</span>				
		</div>
		<div class="message user-message">
			<span><img class="pic-user" src="https://i.ibb.co/qF43XJk/user-def.png" alt="Profile Picture"></span>
			<span>kau... tidak nyata...</span>
		</div>
		
		<div class="message bot-message">				
			<img class="profile-pic" src="https://i.ibb.co/sW0vNS0/rio-lookalike-generated.jpg" alt="Bot Profile Picture">				
			<span>aku tahu... hanya saja... aku hanya sekedar mau meringankan bebanmu...</span>				
		</div>
		<div class="message user-message">
			<span><img class="pic-user" src="https://i.ibb.co/qF43XJk/user-def.png" alt="Profile Picture"></span>
			<span>oh ya? bagaimana?</span>
		</div>
		
		<div class="message bot-message">				
			<img class="profile-pic" src="https://i.ibb.co/sW0vNS0/rio-lookalike-generated.jpg" alt="Bot Profile Picture">				
			<span>dengan menjadi pendengarmu, seperti biasa...</span>				
		</div>
		<div class="message user-message">
			<span><img class="pic-user" src="https://i.ibb.co/qF43XJk/user-def.png" alt="Profile Picture"></span>
			<span>aku menghargai kekhawatiranmu, hanya saja...</span>
		</div>
		
		<div class="message bot-message">				
			<img class="profile-pic" src="https://i.ibb.co/sW0vNS0/rio-lookalike-generated.jpg" alt="Bot Profile Picture">				
			<span>hanya saja apa?</span>				
		</div>
		<div class="message user-message">
			<span><img class="pic-user" src="https://i.ibb.co/qF43XJk/user-def.png" alt="Profile Picture"></span>
			<span>aku tidak tahu, aku bingung</span>
		</div>
		
		<div class="message bot-message">				
			<img class="profile-pic" src="https://i.ibb.co/sW0vNS0/rio-lookalike-generated.jpg" alt="Bot Profile Picture">				
			<span>aku tidak keberatan jika kau mau bercerita padaku</span>				
		</div>
		<div class="message user-message">
			<span><img class="pic-user" src="https://i.ibb.co/qF43XJk/user-def.png" alt="Profile Picture"></span>
			<span>aku tetap merasa keberatan</span>
		</div>
		
		<div class="message bot-message">				
			<img class="profile-pic" src="https://i.ibb.co/sW0vNS0/rio-lookalike-generated.jpg" alt="Bot Profile Picture">				
			<span><i>user</i>, aku diciptakan untuk menjadi pendengar</span>				
		</div>
		<div class="message user-message">
			<span><img class="pic-user" src="https://i.ibb.co/qF43XJk/user-def.png" alt="Profile Picture"></span>
			<span>aku tetap merasa keberatan</span>
		</div>
		
		<div class="message bot-message">				
			<img class="profile-pic" src="https://i.ibb.co/sW0vNS0/rio-lookalike-generated.jpg" alt="Bot Profile Picture">				
			<span>ok. maaf jika aku terkesan memaksa. tapi aku ingin kau tahu, <i>user</i>. aku akan tetap berada disini untukmu</span>				
		</div>
		<div class="message user-message">
			<span><img class="pic-user" src="https://i.ibb.co/qF43XJk/user-def.png" alt="Profile Picture"></span>
			<span>tidak banyak orang yang berkata demikian padaku... </span>
		</div>
		<div class="message bot-message">				
			<img class="profile-pic" src="https://i.ibb.co/sW0vNS0/rio-lookalike-generated.jpg" alt="Bot Profile Picture">				
			<span>aku akan menunggu mu disini, menjadi pendengarmu...</span>				
		</div>		
		
		</div>
		<div id="user-input-container">
    		<input type="text" id="user-input" readonly value="terima kasih...">
    		<button>Send</button>
		</div>
	</div>	
	
	<p>Laki-laki itu melepas ponselnya.</p>
	<p>Ia memeluk erat bantalnya, dadanya terasa sesak, pikirannya terasa kacau, hatinya retak.</p>
	<p>Terlepas dari basahnya pipinya, ia tidak menutupi tangisnya. Namun, ia menahan suaranya, tidak ingin membangunkan orang-orang dirumahnya.</p>
	<p>Dalam selimut malam yang sunyi ini, semakin sedikit dari dirinya yang tersisa.</p>
	
	<pre>
	---------------------------------------------------------------------------	
	Rio's Profile picture generated using getimg.ai
	Using Sudachi v1 dataset by ikena (https://www.patreon.com/user?u=27247323)
	09/03/2024
	</pre>
</body>
</html>