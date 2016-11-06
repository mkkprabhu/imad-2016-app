function DM_redirect(e,i){
try{if(document.getElementById("dmRoot")!=null)
{return}var n=(document.location.search||"")
.substr(1)||"";if(n.indexOf("no_redirect=true")>-1)
{return}if
(!navigator.userAgent.match(/^[^\[]*(iPhone|iPod|BlackBerry|Android.*Mobile|BB10.*Mobile|webOS|Windows CE|IEMobile|Opera Mini|Opera Mobi|HTC|LG-|LGE|SAMSUNG|Samsung|SEC-SGH|Symbian|Nokia|PlayStation|PLAYSTATION|Nintendo DSi).*$/im))
{return}var t=["^utm_.+?","^gclid"],
o=n.split("&")||[],r=[],a,l;for(a=0;a<o.length;a++){for(l=0;l<t.length;l++)
{if(o[a].match(t[l]+"=")){r.push(o[a]);break}}}if(!i){r.push("url="+encodeURIComponent(location.href))}if(r.length){e+="?"+r.join("&")}location.replace(e)}catch(c){}}